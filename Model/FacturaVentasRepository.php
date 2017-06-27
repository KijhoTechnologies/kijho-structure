<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of ProductoRepository
 *
 * @author jocampo
 */
class FacturaVentasRepository extends EntityRepository {

    /**
     * Feb 2016
     * @author Juan Ocampo <jocampo@kijho.com>
     * Método estático para consulta de existencias de un producto en inventario.
     * @param Producto $product
     */
    public function findFacturasSaldadas($fac) {

        $text = '';
        $i = 0;
        foreach ($fac as $data) {
            if ($i = 0) {
                $text = ' fac.facvCodigo = ' . $data;
                $i++;
            } else {
                $text = $text . ' OR fac.facvCodigo = ' . $data;
            }
        }

        $dql = "SELECT facvCodigo, facvTotal, c.nombreEmpresa"
                . "FROM KijhoStructureBundle:FacturaVentas fac "
                . "JOIN  KijhoStructureBundle:fac.cliCodigo c "
                . "WHERE " . $text
                . " ORDER BY fac.facvCodigo DESC";

        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }

    /**
     * Description of getSalesByDay
     *
     * @author yeison osorio
     * @param fechaInicio fechaFin ruta
     */
    public function getSalesByDay($fechaIni = '', $fechaFin = '', $ruta = 0, $anuladas = "") {

        $em = $this->getEntityManager();

        $where_ruta = "";

        if ($ruta != 0) {
            $where_ruta = 'AND (factura_ventas.ruta = ' . $ruta . ' OR rutaid = ' . $ruta . ')';
//            $where_ruta = " AND idRuta = $ruta  ";
        }
        if ($anuladas != "") {
            $where_ruta .= " AND factura_ventas.facv_anulada = 'si' ";
        }

        $sql = "SELECT tf.idRuta, COUNT(tf.facv_codigo) as cantidad, SUM(tf.facv_total) AS valor, SUM(tf.total_peso) AS peso, tf.facv_fecha FROM "
                . "(SELECT factura_ventas.facv_codigo, IFNULL( factura_ventas.ruta, rutaid) AS idRuta, factura_ventas.facv_total, SUM(salida.sal_cantidad*producto.peso) AS total_peso, "
                . "factura_ventas.facv_fecha  "
                . "FROM KijhoStructureBundle:factura_ventas  "
                . "JOIN  KijhoStructureBundle:salida ON factura_ventas.facv_codigo = salida.facv_codigo "
                . "JOIN  KijhoStructureBundle:producto ON salida.prod_codigo = producto.prod_codigo "
                . "JOIN  KijhoStructureBundle:cliente ON factura_ventas.cli_codigo = cliente.cli_codigo "
                . "JOIN  KijhoStructureBundle:zona ON zonaid = cliente.cli_zona_id "
                . "JOIN  KijhoStructureBundle:ruta ON rutaid = zona.ruta "
                . "WHERE factura_ventas.facv_fecha BETWEEN '$fechaIni' AND '$fechaFin' "
                . "$where_ruta "
                . "GROUP BY factura_ventas.facv_codigo) AS tf "
                . "GROUP BY tf.idRuta, tf.facv_fecha "
                . "ORDER BY tf.facv_fecha ";
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * Description of findFacturasAnuladas
     *
     * 
     */
    public function findFacturasAnuladas($fechaInicio = '', $fechaFin = '', $usuario, $nVendedor, $ruta = '', $array_zonas) {

        $where_fecha = '';
        $where_nVendedor = '';
        $where_ruta = '';

        $usuario = ($usuario == 2) ? "usuCodigo" : "facvVendedor";
        $where_vendedor = ($usuario == "facvVendedor") ? ' AND fac.facvVendedor > 0' : ' AND fac.usuCodigo > 0';
        $Nombre = ($usuario == "facvVendedor") ? 'vendNombre' : 'usuNombre';
        $Apellido = ($usuario == "facvVendedor") ? 'vendApellido' : 'usuApellido';

        if ($ruta != '') {

            $where_ruta = ' AND ((c.zona IN (:zonaRuta) AND fac.ruta IS NULL) OR fac.ruta = :ruta_id)';
        }

        if ($fechaInicio != '') {
            $where_fecha .= ' AND fac.facvFecha >= :date';
        }
        if ($fechaFin != '') {
            $where_fecha .= ' AND fac.facvFecha <= :datefin';
        }
        if ($nVendedor != 0) {
            $where_nVendedor = ' AND fac.' . $usuario . ' = ' . $nVendedor . ' ';
        }

        $dql = "SELECT fac.facvHora, fac.facvCodigo, (fac.facvFecha) as facvFecha, fac.facvTotal, u.$Apellido, u.$Nombre, c.nombreEmpresa, c.direccion, "
                . " (fac.ruta) as rutaFac, (rid) as rutaR "
                . "FROM KijhoStructureBundle:FacturaVentas fac "
                . "JOIN fac." . $usuario . " u "
                . "JOIN fac.cliCodigo c "
                . "JOIN c.zona z "
                . "JOIN z.ruta r "
                . "WHERE fac.facvAnulada = 'si' " . $where_nVendedor . $where_fecha . $where_vendedor . $where_ruta . " ORDER BY fac.facvCodigo DESC ";
        //  \Doctrine\Common\Util\Debug::dump($dql, 3); die();



        $query = $this->getEntityManager()->createQuery($dql);

        if ($fechaInicio != '') {
            $query->setParameter('date', new DateTime($fechaInicio));
        }

        if ($fechaFin != '') {
            $query->setParameter('datefin', new DateTime($fechaFin));
        }

        if ($ruta != '') {
            $query->setParameter('ruta_id', $ruta);
            $query->setParameter('zonaRuta', $array_zonas);
        }

        return $query->getResult();
    }

    public function getTotalVentasByUsuario($usuario, $product_id, $date_ini = '', $date_end = '') {
        /**
         * Description of getTotalVentasByUsuario
         *
         * @author yeison osorio
         */
        $where_date = '';
        if ($date_ini != '') {
            $where_date .= ' AND fac.facvFecha >= :date';
        }
        if ($date_end != '') {
            $where_date .= ' AND fac.facvFecha <= :dateEnd';
        }
        $usuario = ($usuario == 'Usuario') ? "usuCodigo" : "facvVendedor";
        $where_product = ' fac.' . $usuario . ' = :productId';

        $dql = "SELECT COUNT(fac.$usuario) cantidad, SUM(fac.facvTotal) valor "
                . "FROM KijhoStructureBundle:FacturaVentas fac JOIN fac." . $usuario . " p "
                . "WHERE " . $where_product . $where_date;

//        \Doctrine\Common\Util\Debug::dump($dql, 3); die();
        $query = $this->getEntityManager()->createQuery($dql);

        if ($date_ini != '') {
            $query->setParameter('date', new DateTime($date_ini));
        }
        if ($date_end != '') {
            $query->setParameter('dateEnd', new DateTime($date_end));
        }

        $query->setParameter('productId', $product_id);

        return $query->getResult();
//        return $query->getArrayResult();  
    }

    public function findVentasDiarias($cant_val, $fechaInicio = '', $fechaFin = '', $usuario, $nVendedor) {
        /**
         * Description of findVentasDiarias
         *
         * @author yeison osorio
         */
        $where_fecha = '';
        $where_nVendedor = '';
        $SUMvalor = "";
        $COUNTcantidad = "";

        $usuario = ($usuario == 2) ? "usuCodigo" : "facvVendedor";
        $where_vendedor = ($usuario == "facvVendedor") ? ' AND fac.facvVendedor > 0' : ' AND fac.usuCodigo > 0';
        $Nombre = ($usuario == "facvVendedor") ? 'vendNombre' : 'usuNombre';
        $Apellido = ($usuario == "facvVendedor") ? 'vendApellido' : 'usuApellido';
        $codigo = ($usuario == "facvVendedor") ? 'idVendedor' : 'usuCodigo';

        if ($fechaInicio != '') {
            $where_fecha .= ' fac.facvFecha >= :date';
        }
        if ($fechaFin != '') {
            $where_fecha .= ' AND fac.facvFecha <= :datefin';
        }
        if ($nVendedor != 0) {
            $where_nVendedor = ' AND fac.' . $usuario . ' = ' . $nVendedor . ' ';
        }
        if ($cant_val == "val") {
            $SUMvalor = "SUM(fac.facvTotal) valor,";
        }
        if ($cant_val == "cant") {
            $COUNTcantidad = "count(fac.facvCodigo) as cantidad,";
        }
        if ($cant_val == "cant_val") {
            $COUNTcantidad = "count(fac.facvCodigo) as cantidad,";
            $SUMvalor = "SUM(fac.facvTotal) valor,";
        }

//        print $COUNTcantidad; die();
        $dql = "SELECT u.$Apellido, u.$Nombre, u.$codigo, $SUMvalor $COUNTcantidad (fac.facvFecha) as facvFecha "
                . "FROM KijhoStructureBundle:FacturaVentas fac "
                . "JOIN fac." . $usuario . " u "
                . " WHERE" . $where_fecha . $where_nVendedor . $where_vendedor
                . " GROUP BY fac." . $usuario . " , fac.facvFecha ORDER BY fac.facvCodigo DESC";


//        \Doctrine\Common\Util\Debug::dump($dql, 3); die();

        $query = $this->getEntityManager()->createQuery($dql);

        if ($fechaInicio != '') {
            $query->setParameter('date', new DateTime($fechaInicio));
        }

        if ($fechaFin != '') {
            $query->setParameter('datefin', new DateTime($fechaFin));
        }

        return $query->getResult();
    }

    public function getProductsChange($cliente, $barrio_id, $zona_id, $mun_nombre, $dep_nombre, $ruta_id, $array_zonas, $fecha_inicio = '', $fecha_fin = '', $tipo_vendedor, $vendedor_id) {

        $find_vendedor = false;

        $where_fecha = '';

        if ($fecha_inicio != '') {
            $array_fecha = explode('/', $fecha_inicio);
            $fecha_inicio = $array_fecha[2] . '-' . $array_fecha[1] . '-' . $array_fecha[0];
            $where_fecha .= ' AND s.salFecha >= :date ';
        }
        if ($fecha_fin != '') {
            $array_fecha = explode('/', $fecha_fin);
            $fecha_fin = $array_fecha[2] . '-' . $array_fecha[1] . '-' . $array_fecha[0];
            $where_fecha .= ' AND s.salFecha <= :datefin ';
        }

        $findCliente = '';
        if ($cliente != '') {
            $findCliente = ' AND fv.cliCodigo = :cliente';
        }

        $where_barrio = '';
        if ($barrio_id != '') {
            $where_barrio = ' AND c.barrio = :barrio';
        }

        $where_zona = '';
        if ($zona_id != '') {
            $where_zona = ' AND c.zona = :zona';
        }

        $where_municipio = '';
        if ($mun_nombre != '') {
            $where_municipio = ' AND c.ciudad = :ciudad';
        }

        $where_departamento = '';
        if ($dep_nombre != '') {
            $where_departamento = ' AND c.departamento = :depto';
        }

        $where_ruta = '';
        if ($ruta_id != '') {

            $where_ruta = ' AND ((c.zona IN (:zonaRuta) AND fv.ruta IS NULL) OR fv.ruta = :Ruta)';
        }

        $where_vendedor = '';
        if ($tipo_vendedor != '') {

            if ($tipo_vendedor == 1) {//Busqueda por vendedor del sistema: entidad Vendedor
                if ($vendedor_id == 0) {// Busqueda de todas las facturas realizadas con vendedores del sistema
                    $where_vendedor = ' AND fv.facvVendedor > 0';
                } elseif ($vendedor_id > 0) {
                    $where_vendedor = ' AND fv.facvVendedor = :vendedor';
                    $find_vendedor = true;
                } else {//No hay vendedores de sistema
                }
            } elseif ($tipo_vendedor == 2) {

                if ($vendedor_id == 0) {// Busqueda de todas las facturas realizadas con usuarios vendedores y administrativos
                    $where_vendedor = ' AND (fv.facvVendedor = 0 OR fv.facvVendedor IS NULL)';
                } elseif ($vendedor_id > 0) {//Facturas vendidas por usuarios con roll de vendedor
//                    return "llgea";
                    $where_vendedor = ' AND (fv.usuCodigo = :vendedor AND (fv.facvVendedor = 0 OR fv.facvVendedor IS NULL))';
                    $find_vendedor = true;
                } else {//No hay vendedores de sistema
                }
            }
        }

        $dql = 'SELECT fv.facvCodigo,usu.usuNombre,v.vendNombre,prodid,prod.name,s.salFecha,s.salHora,s.salCantidad,c.nombreEmpresa,c.direccion '
                . 'FROM KijhoStructureBundle:Salida s '
                . 'INNER JOIN s.prodCodigo prod '
                . 'INNER JOIN s.facvCodigo fv '
                . 'INNER JOIN fv.cliCodigo c '
                . 'INNER JOIN fv.usuCodigo usu '
                . 'LEFT JOIN fv.facvVendedor v '
                . 'WHERE s.devolucion = 0 AND s.devolucionEstado = 1' . $where_fecha . $findCliente . $where_barrio . $where_zona . $where_municipio . $where_departamento . $where_ruta . $where_vendedor
                . 'ORDER BY s.salFecha DESC ';

        $query = $this->getEntityManager()->createQuery($dql);

        if ($fecha_inicio != '') {
            $query->setParameter('date', new DateTime($fecha_inicio));
        }
        if ($fecha_fin != '') {
            $query->setParameter('datefin', new DateTime($fecha_fin));
        }
        if ($cliente != '') {
            $query->setParameter('cliente', $cliente);
        }
        if ($barrio_id != '') {
            $query->setParameter('barrio', $barrio_id);
        }
        if ($zona_id != '') {
            $query->setParameter('zona', $zona_id);
        }
        if ($mun_nombre != '') {
            $query->setParameter('ciudad', $mun_nombre);
        }
        if ($dep_nombre != '') {
            $query->setParameter('depto', $dep_nombre);
        }
        if ($ruta_id != '') {
            $query->setParameter('zonaRuta', $array_zonas);
            $query->setParameter('Ruta', $ruta_id);
        }
        if ($find_vendedor) {
            $query->setParameter('vendedor', $vendedor_id);
        }

//        $query->setParameter('fechaInicio', new DateTime($fechaInicio));
//        $query->setParameter('fechaFin', new DateTime($fechaFin));

        return $query->getResult();
    }

    public function getFacturasVentaCredito($cliente, $barrio_id, $zona_id, $mun_nombre, $dep_nombre, $ruta_id, $array_zonas, $fecha_inicio = '', $fecha_fin = '', $tipo_vendedor, $vendedor_id, $state = 0, $fpcRestaFiltro = 0) {
        $find_vendedor = false;

        $where_credito = '';
        if ($state) {
            $where_credito = "WHERE fpc.paidInvoice = FALSE AND fv.facvEstado = $state ";
        }

        $where_fpcRestaFiltro = '';
        if ($fpcRestaFiltro) {
            $where_fpcRestaFiltro = " AND (fpc.fpcResta > 0 OR ((SELECT count(it) FROM KijhoStructureBundle:FacturaVentas fv3 JOIN fv3.items it WHERE fv3.facvCodigo = fv.facvCodigo GROUP BY fv3.facvCodigo ) = (SELECT count(it2) FROM KijhoStructureBundle:Salida it2 WHERE it2.facvCodigo = fv.facvCodigo AND it2.devolucion = 1 )))";
        }

        $where_fecha = '';

        if ($fecha_inicio != '') {
            $array_fecha = explode('/', $fecha_inicio);
            $fecha_inicio = $array_fecha[2] . '-' . $array_fecha[1] . '-' . $array_fecha[0];
            if ($state == 0) {
                $where_fecha .= ' WHERE fv.facvFecha >= :date';
            } else {
                $where_fecha .= ' AND fv.facvFecha >= :date';
            }
        }
        if ($fecha_fin != '') {
            $array_fecha = explode('/', $fecha_fin);
            $fecha_fin = $array_fecha[2] . '-' . $array_fecha[1] . '-' . $array_fecha[0];
            $where_fecha .= ' AND fv.facvFecha <= :datefin';
        }

        $findCliente = '';
        if ($cliente != '') {
            $findCliente = ' AND fv.cliCodigo = :cliente';
        }

        $where_barrio = '';
        if ($barrio_id != '') {
            $where_barrio = ' AND c.barrio = :barrio';
        }

        $where_zona = '';
        if ($zona_id != '') {
            $where_zona = ' AND c.zona = :zona';
        }

        $where_municipio = '';
        if ($mun_nombre != '') {
            $where_municipio = ' AND c.ciudad = :ciudad';
        }

        $where_departamento = '';
        if ($dep_nombre != '') {
            $where_departamento = ' AND c.departamento = :depto';
        }

        $where_ruta = '';
        if ($ruta_id != '') {
            $where_ruta = ' AND ((c.zona IN (:zonaRuta) AND fv.ruta IS NULL) OR fv.ruta = :Ruta)';
        }

        $where_vendedor = '';
        if ($tipo_vendedor != '') {

            if ($tipo_vendedor == 1) {//Busqueda por vendedor del sistema: entidad Vendedor
                if ($vendedor_id == 0) {// Busqueda de todas las facturas realizadas con vendedores del sistema
                    $where_vendedor = ' AND fv.facvVendedor > 0';
                } elseif ($vendedor_id > 0) {
                    $where_vendedor = ' AND fv.facvVendedor = :vendedor';
                    $find_vendedor = true;
                } else {//No hay vendedores de sistema
                }
            } elseif ($tipo_vendedor == 2) {

                if ($vendedor_id == 0) {// Busqueda de todas las facturas realizadas con usuarios vendedores y administrativos
                    $where_vendedor = ' AND (fv.facvVendedor = 0 OR fv.facvVendedor IS NULL)';
                } elseif ($vendedor_id > 0) {//Facturas vendidas por usuarios con roll de vendedor
//                    return "llgea";
                    $where_vendedor = ' AND (fv.usuCodigo = :vendedor AND (fv.facvVendedor = 0 OR fv.facvVendedor IS NULL))';
                    $find_vendedor = true;
                } else {//No hay vendedores de sistema
                }
            }
        }

        $dql = "SELECT fv, c, fpc FROM KijhoStructureBundle:FacturaVentas fv "
                . "JOIN fv.cliCodigo c "
                . "JOIN fv.facPorCobrar fpc "
                . "LEFT JOIN fv.comentarios cf "
                . $where_credito 
                . $where_fpcRestaFiltro 
                . $where_fecha 
                . $findCliente 
                . $where_barrio
                . $where_zona
                . $where_municipio
                . $where_departamento
                . $where_ruta
                . $where_vendedor
                . ' ORDER BY fv.facvCodigo DESC';

//        print $dql;die;
        $query = $this->getEntityManager()->createQuery($dql);
        if ($fecha_inicio != '') {
            $query->setParameter('date', new DateTime($fecha_inicio));
        }
        if ($fecha_fin != '') {
            $query->setParameter('datefin', new DateTime($fecha_fin));
        }
        if ($cliente != '') {
            $query->setParameter('cliente', $cliente);
        }
        if ($barrio_id != '') {
            $query->setParameterPENDIENTE
                    ('barrio', $barrio_id);
        }
        if ($zona_id != '') {
            $query->setParameter('zona', $zona_id);
        }
        if ($mun_nombre != '') {
            $query->setParameter('ciudad', $mun_nombre);
        }
        if ($dep_nombre != '') {
            $query->setParameter('depto', $dep_nombre);
        }
        if ($ruta_id != '') {
            $query->setParameter('zonaRuta', $array_zonas);
            $query->setParameter('Ruta', $ruta_id);
        }
        if ($find_vendedor) {
            $query->setParameter('vendedor', $vendedor_id);
        }
//        \Symfony\Component\VarDumper\VarDumper::dump($cliente);
//        die;
//        \Symfony\Component\VarDumper\VarDumper::dump($query->getResult());die;
        return $query->getResult();
    }

    /**
     * Consulta para obtener el ORM\Id de los clientes que compraron en un rango de fechas determinado
     * @param DateTime $fechaInicio, la fecha minima de las compras
     * @param DateTime $fechaFin, la fecha maxima en la que se compro
     */
    public function getVentasInDate($fechaInicio, $fechaFin) {

        $dql = 'SELECT DISTINCT c.nombreEmpresa ,cid, c.identificacion, c.deleted, c.ciudad, '
                . 'c.direccion, b.nombre as barrio, z.nombre as zona, ru.name as ruta, c.movil, v.vendNombre, usu.usuNombre, zid as zonaId  '
                . 'FROM KijhoStructureBundle:FacturaVentas fv '
                . 'LEFT JOIN fv.facvVendedor v '
                . 'JOIN fv.usuCodigo usu '
                . 'JOIN fv.cliCodigo c '
                . 'JOIN c.barrio b '
                . 'JOIN b.zona z '
                . 'JOIN z.diasSemana di '
                . 'JOIN z.ruta ru  '
                . 'WHERE fv.facvFecha >= :fechaInicio AND fv.facvFecha <= :fechaFin '
                . 'ORDER BY fv.facvCodigo DESC ';

        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('fechaInicio', $fechaInicio->format('Y-m-d'));
        $query->setParameter('fechaFin', $fechaFin->format('Y-m-d'));
        return $query->getResult();
    }

    public function getLastDate($idClient) {
        $dql = 'SELECT fv.facvFecha FROM KijhoStructureBundle:FacturaVentas fv WHERE fv.cliCodigo = :id ORDER BY fv.facvFecha DESC';

        $query = $this->getEntityManager()->createQuery($dql);
        $query->setMaxResults(1);
        $query->setParameter('id', $idClient);
        //$query->setMaxResults('id', $idClient);
        return $query->getResult();
    }

}