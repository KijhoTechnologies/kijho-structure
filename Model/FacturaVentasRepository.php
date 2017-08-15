<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use DateTime;

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
            $where_ruta = 'AND (factura_ventas.ruta = ' . $ruta . ' OR ruta.id = ' . $ruta . ')';
//            $where_ruta = " AND idRuta = $ruta  ";
        }
        if ($anuladas != "") {
            $where_ruta .= " AND factura_ventas.facv_anulada = 'si' ";
        }

        $sql = "SELECT tf.idRuta, COUNT(tf.facv_codigo) as cantidad, SUM(tf.facv_total) AS valor, SUM(tf.total_peso) AS peso, tf.facv_fecha FROM "
                . "(SELECT factura_ventas.facv_codigo, IFNULL( factura_ventas.ruta, ruta.id) AS idRuta, factura_ventas.facv_total, SUM(salida.sal_cantidad*producto.peso) AS total_peso, "
                . "factura_ventas.facv_fecha  "
                . "FROM factura_ventas  "
                . "JOIN  salida ON factura_ventas.facv_codigo = salida.facv_codigo "
                . "JOIN  producto ON salida.prod_codigo = producto.prod_codigo "
                . "JOIN  cliente ON factura_ventas.cli_codigo = cliente.cli_codigo "
                . "JOIN  zona ON zona.id = cliente.cli_zona_id "
                . "JOIN  ruta ON ruta.id = zona.ruta "
                . "WHERE factura_ventas.facv_fecha BETWEEN '$fechaIni' AND '$fechaFin' "
                . "$where_ruta "
                . "GROUP BY factura_ventas.facv_codigo) AS tf "
                . "GROUP BY tf.idRuta, tf.facv_fecha "
                . "ORDER BY tf.facv_fecha ";
//        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
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
                . " (fac.ruta) as rutaFac, (r.id) as rutaR "
                . "FROM KijhoStructureBundle:FacturaVentas fac "
                . "JOIN fac." . $usuario . " u "
                . "JOIN fac.cliCodigo c "
                . "JOIN c.zona z "
                . "JOIN z.ruta r "
                . "WHERE fac.facvAnulada = 'si' " . $where_nVendedor . $where_fecha . $where_vendedor . $where_ruta . " ORDER BY fac.facvCodigo DESC ";
        //  \Doctrine\Common\Util\Debug::dump($dql, 3); die();



        $query = $this->getEntityManager()->createQuery($dql);

        if ($fechaInicio != '') {
            $query->setParameter('date', new \DateTime($fechaInicio));
        }

        if ($fechaFin != '') {
            $query->setParameter('datefin', new \DateTime($fechaFin));
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
            $query->setParameter('date', new \DateTime($date_ini));
        }
        if ($date_end != '') {
            $query->setParameter('dateEnd', new \DateTime($date_end));
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
        } else
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
            $query->setParameter('date', new \DateTime($fechaInicio));
        }

        if ($fechaFin != '') {
            $query->setParameter('datefin', new \DateTime($fechaFin));
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
                    $where_vendedor = ' AND (fv.facvVendedor = 0 OR fv.facvVendedor IS NULL OR fv.facvVendedor > 0)';
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
                . 'c.direccion, b.nombre as barrio, z.nombre as zona, ru.name as ruta, c.movil, v.vendNombre, usu.usuNombre, z.id as zonaId  '
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

    function getSales($fecha, $usuario) {

        $sql = "SELECT
            sum(fvtp.fvtp_valor) AS cant1,
            fv.cli_codigo, 
            fv.cod_caja, 
            cli_nombre_empresa 
            FROM factura_ventas AS fv, cliente AS c, facv_tipopago fvtp 
            WHERE facv_fecha='" . $fecha . "'
            AND fv.cli_codigo = c.cli_codigo
            AND fvtp_fvcodigo = facv_codigo
            AND fvtp.fvtp_tpcodigo = '1'
            AND fv.facv_anulada = 'no'
            AND fv.facv_estado = 1
            AND usu_codigo = " . $usuario . " 
            GROUP BY cli_codigo, cod_caja";
//die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    /**
     * esta funcion permite listar los pagos  realizados con tarjeta debito o credito
     * fecha: 20/10/2013
     * @since: modificado: 14 Julio 2015
     *                                
     */
    function GetToPayWithCards($fecha) {

        $sql = "SELECT c.cli_nombre_empresa AS cliente,
                	   faca_abono AS abono,
                       afc.faca_codigoVoucher AS voucher,
                       afc.facv_codigo	AS factura,
                       'factura venta' AS tipo
                FROM abono_facturacredito_ventas afc, factura_ventas fv, cliente c
                WHERE afc.faca_fecha = '" . $fecha . "'
                AND afc.facv_codigo=fv.facv_codigo
                AND c.cli_codigo=fv.cli_codigo
                AND afc.faca_abono > 0
                AND afc.faca_tipoPago = 2
                
                UNION
                
                SELECT c.cli_nombre_empresa AS cliente,
                	   sepa_abono AS abono,
                       abs.sepa_codigoVoucher AS voucher,
                       abs.sep_codigo AS factura,
                       'separado' AS tipo
                FROM abono_separado abs, separado sep, cliente c
                WHERE abs.sepa_fecha = '" . $fecha . "'
                AND abs.sep_codigo=sep.sep_codigo
                AND c.cli_codigo=sep.cli_codigo
                AND abs.sepa_abono > 0
                AND abs.sepa_tipoPago = 2
                
                UNION
                
                SELECT c.cli_nombre_empresa AS cliente,
                       otp.otp_valor AS abono,
                       otp.otp_codVoucher AS voucher,
                       otp.ot_codigo AS factura,
                       'orden trabajo' AS tipo
                FROM orden_trabajo ot, orden_trabajo_pago otp, cliente c
                WHERE ot.ot_codigo = otp.ot_codigo AND ot.cli_codigo = c.cli_codigo 
                      AND Date(otp.otp_fecha) = '" . $fecha . "' AND
                      ot.ot_estado <> 3 AND  otp.otp_tipo = 2 AND otp.otp_valor > 0";

//	die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    function accountingSalesReport($fecha1, $fecha2) {
        $sql = "SELECT fv.facv_codigo, 
                           fv.facv_fecha,
                           p.prod_nombre,  
                           fv.facv_descuento, 
                           fv.facv_estado,
                           fv.facv_total,
                           fv.facv_iva16,
                           fv.facv_iva10,
                           fv.facv_iva5,
                           fpc.fpc_resta,
                           fv.facv_retencion,
                           c.cli_identificacion,
                           s.sal_iva_16,
                           s.sal_iva_10,
                           s.sal_iva_5,
                           s.sal_exento,
                           s.sal_excluido,
                           s.sal_total, 
                           s.sal_subtotal,
                           s.sal_cantidad
                    FROM factura_ventas fv left join facturas_por_cobrar fpc on fv.facv_codigo = fpc.facv_codigo,
                    salida s , producto p , cliente c 
                    WHERE fv.facv_codigo = s.facv_codigo
                    AND s.prod_codigo = p.prod_codigo
                    AND fv.cli_codigo = c.cli_codigo
                    AND fv.facv_fecha >= '" . $fecha1 . "' 
                    AND fv.facv_fecha <= '" . $fecha2 . "'";

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    /*
     * @author: Juan Ocampo
     * @date: 2015/01/10
     * @params: fecha, fecha_fin, cliente_id
     * @desc: Esta función obtiene los datos básicos de facturas que se encuentren en
     * un rango de fechas determinado.
     * 
     * @date: 2015-03-08
     * Se actualiza y se adiciona parámetro que asocia el id del cliente. Esto
     * es funcional para el reporte de frecuencias de ventas por cliente.
     */

    function getDataInvoicesXDate($fecha, $fecha_fin, $barrio_id = "", $zona_id = "", $mun_nombre = "", $depto_nombre = "", $ruta_id = "", $arrayZonas = array(), $tipo_vendedor = "", $vendedor_id = "", $cliente_id = '', $order_by = '') {

        if (($cliente_id != '') && ($cliente_id != null)) {
            $where_cli_codigo = ' AND fv.cli_codigo= ' . $cliente_id;
        } else {
            $where_cli_codigo = '';
        }
        if ($order_by != '') {
            $order_by = ' ORDER BY ' . $order_by;
        }

        $where_barrio = '';
        if ($barrio_id != '') {
            $where_barrio = ' AND c.cli_barrio_id = ' . $barrio_id;
        }

        $where_zona = '';
        if ($zona_id != '') {
            $where_zona = ' AND c.cli_zona_id = ' . $zona_id;
        }

        $where_municipio = '';
        if ($mun_nombre != '') {
            $where_municipio = " AND c.cli_ciudad = '$mun_nombre'";
        }

        $where_departamento = '';
        if ($depto_nombre != '') {
            $where_departamento = " AND c.cli_depto = '$depto_nombre' ";
        }

        $where_ruta = '';

        if ($ruta_id != '') {

            $array_zonas = "";

            foreach ($arrayZonas as $zonas) {
                $array_zonas .= $zonas . ",";
            }
            $zonas = substr($array_zonas, 0, -1);
            $where_ruta = ' AND ((c.cli_zona_id IN (' . $zonas . ') AND fv.ruta IS NULL) OR fv.ruta = ' . $ruta_id . ')';
        }

        $where_vendedor = '';
        if ($tipo_vendedor != '') {

            if ($tipo_vendedor == 1) {//Busqueda por vendedor del sistema: entidad Vendedor
                if ($vendedor_id == 0) {// Busqueda de todas las facturas realizadas con vendedores del sistema
                    $where_vendedor = ' AND fv.facv_vendedor > 0';
                } elseif ($vendedor_id > 0) {
                    $where_vendedor = ' AND fv.fac_vendedor = ' . $vendedor_id;
                } else {//No hay vendedores de sistema
                }
            } elseif ($tipo_vendedor == 2) {

                if ($vendedor_id == 0) {// Busqueda de todas las facturas realizadas con usuarios vendedores y administrativos
                    $where_vendedor = ' AND (fv.facv_vendedor = 0 OR fv.facv_vendedor IS NULL)';
                } elseif ($vendedor_id > 0) {//Facturas vendidas por usuarios con roll de vendedor
//                  
                    $where_vendedor = ' AND (fv.usu_codigo = ' . $vendedor_id . ' AND (fv.facv_vendedor = 0 OR fv.facv_vendedor IS NULL))';
                } else {//No hay vendedores de sistema
                }
            }
        }

        $sql = "SELECT fv.facv_codigo
            , fv.cli_codigo
            , fv.facv_vendedor
            , fv.usu_codigo
            , fv.facv_total
            , fv.facv_fecha
              FROM factura_ventas fv LEFT JOIN cliente c ON fv.cli_codigo = c.cli_codigo LEFT JOIN usuario u ON fv.usu_codigo = u.usu_codigo WHERE facv_anulada ='no' AND only_change = 0 AND u.usu_delete = 0 AND facv_fecha BETWEEN '" . $fecha . "'"
                . " AND '" . $fecha_fin . "'" . $where_cli_codigo . $where_barrio . $where_zona . $where_municipio . $where_departamento . $where_ruta . $where_vendedor . $order_by;
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    function customerSalesUtility($fecha_inicio, $fecha_fin, $cli_codigo = 0) {

        $where = "";
        if ($cli_codigo > 0) {
            $where = " AND fv.cli_codigo = " . $cli_codigo . " AND c.cli_codigo =" . $cli_codigo . " GROUP BY sal_fecha ";
        } else {
            $where = " AND fv.cli_codigo = c.cli_codigo GROUP BY c.cli_codigo ORDER BY cli_nombre_empresa";
        }

        $sql = "SELECT sum(sal_precio_compra*sal_cantidad) AS cant1, 
                       sum(sal_precio_venta*sal_cantidad) AS cant2,
                       cli_nombre_empresa 
                FROM   salida AS s, factura_ventas AS fv, cliente AS c 
                WHERE  sal_fecha>='" . $fecha_inicio . "' 
                       AND sal_fecha<='" . $fecha_fin . "' 
                       AND s.facv_codigo = fv.facv_codigo " . $where . " ;";

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    /**
     * listaFacturasVentaTarjetaCredito() -
     *
     * @param int $inicio
     * @param int $cantidad
     * @return $listaFactura
     */
    public function listInvoicesSaleTargetCreditTwoDates($fecha1, $fecha2) {

        $sql = "SELECT fv.facv_codigo, 
                           fv.cli_codigo,
                           fv.facv_vendedor,
                           fv.usu_codigo, 
                           fv.facv_fecha, 
                           fv.facv_hora, 
                           fv.facv_total, 
                           fv.facv_descuento, 
                           fv.facv_iva, 
                           fv.facv_iva16, 
                           fv.facv_iva10, 
                           fv.facv_iva5, 
                           fv.facv_iva_exento, 
                           fv.facv_monto_tarjeta, 
                           fv.nombre_tarjeta, 
                           fvtp.fvtp_valor, 
                           fvtp.fvtp_tipoTarjeta, 
                           c.cli_nombre_empresa,
                           c.cli_nombre_comercial,
                           c.cli_identificacion,
                           u.usu_nombre, 
                           u.usu_apellido,
                           SUM(s.sal_cantidad) AS cantidad
                    FROM factura_ventas fv, facv_tipopago fvtp, cliente c, usuario u, salida s 
                    WHERE fv.cli_codigo = c.cli_codigo 
                    AND fv.usu_codigo = u.usu_codigo
                    AND fv.facv_codigo = s.facv_codigo
                    AND fv.facv_codigo = fvtp.fvtp_fvcodigo    
                    AND fvtp.fvtp_tpcodigo=2
                    AND fv.facv_fecha >= '" . $fecha1 . "' 
                    AND fv.facv_fecha <= '" . $fecha2 . "'
                    GROUP BY fv.facv_codigo  
                    ORDER BY fv.facv_codigo DESC ";

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    public function listInvoicesSaleTargetCreditTwoDates1($facv_codigo) {


        $sql = "SELECT sum(sal_precio_compra*sal_cantidad) AS cant1,
                                                     sum(sal_valor_vendido*sal_cantidad) AS cant2,
                                                     ROUND(SUM(sal_precio_compra * sal_cantidad / CASE WHEN sal_iva_16 > 0 THEN 1.16 WHEN sal_iva_10 > 0 THEN 1.10 WHEN sal_iva_5 > 0 THEN 1.05 ELSE 0 END),2) cant3,
                                                     SUM(sal_subTotal * sal_cantidad) AS cant4 
                                                     FROM salida WHERE facv_codigo = " . $facv_codigo . " GROUP BY facv_codigo";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

        /*
         * Valida si existe un vendedor asociado a la venta, de ser así, se obtiene el nombre y apellido
         * de este en tabla vendedor. En caso contrario, se obtiene el nombre de usuario asociado a la venta
         * de la tabla usuario
         */
//            if ($row['facv_vendedor'] != "") {
//                $sql_vendedor = "SELECT CONCAT(vend_nombre,' ',vend_apellido)AS v FROM vendedor"
//                        . " WHERE id_vendedor = " . $row['facv_vendedor'];
//                if ($result = executeQuery($sql_vendedor)) {
//                    if ($row_vendedor = mysqli_fetch_array($result)) {
//                        $listaFactura[$i]->responsableVenta = $row_vendedor['v'];
//                    }
//                }
//            } else {
//
//                $listaFactura[$i]->responsableVenta = $listaFactura[$i]->nomUsuario;
//            }
    }

    function resumenVentasContado($fecha_inicio, $fecha_fin) {
        $sql = "SELECT sum(facv_total) AS total FROM factura_ventas WHERE facv_estado = 1 AND facv_fecha>='" . $fecha_inicio . "' AND facv_fecha<='" . $fecha_fin . "'";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    
      function resumenVentasCredito($fecha_inicio, $fecha_fin) {
        $sql = "SELECT sum(facv_total) AS total FROM factura_ventas WHERE facv_estado = 2 AND facv_fecha>='" . $fecha_inicio . "' AND facv_fecha<='" . $fecha_fin . "'";
          $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

}
