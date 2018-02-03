<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use DateTime;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @author jocampo
 */
class SalidaRepository extends EntityRepository {
    /*
     * Este método retorna un array que contiene información sobre los productos
     * de una categoría y su volúmen de ventas por día en un intervalo de tiempo
     * dado. Esta consulta puede ser filtrada por producto y/o categoría.
     */

    public function getEntitiesForSaleDensityReport($category_id, $product_id, $date_ini, $date_end) {
        $where_date = '';

        $where_date .= ' WHERE s.salFecha >= :date';

        $where_date .= ' AND s.salFecha <= :dateEnd';

        $where_product = '';
        if ($product_id != '') {
            $where_product .= ' AND p.id = :productId';
        }

        $joinCategory = '';
        if ($category_id != '' && $product_id == '') {
            $where_product .= ' AND p.id IN (SELECT p1.id FROM KijhoStructureBundle:Producto p1 WHERE p1.category = :categoryId)';
        }

        $dql = "SELECT s.salFecha, SUM(s.salCantidad) cantidad, SUM(s.salTotal) valor, p.id prod_id, p.name product, c.id cat_id, c.name category FROM KijhoStructureBundle:Salida s "
                . "JOIN s.prodCodigo p JOIN p.category c"
                . $where_date . $where_product . " GROUP BY s.salFecha, p.id ORDER BY p.name ASC";

        $query = $this->getEntityManager()->createQuery($dql);


        $query->setParameter('date', new DateTime($date_ini));
        $query->setParameter('dateEnd', new DateTime($date_end));

        if ($product_id != '') {
            $query->setParameter('productId', $product_id);
        }

        if ($category_id != '' && $product_id == '') {
            $query->setParameter('categoryId', $category_id);
        }

        return $query->getResult();
    }

    /*
     * Este método obtiene la cantidad y valor total de ventas de un producto en
     * un intervalo de tiempo dado.
     * EL código del producto es obligatorio
     */

    public function getTotalSalesByProduct($product_id, $date_ini = '', $date_end = '') {
        $where_date = '';
        if ($date_ini != '') {
            $where_date .= ' AND s.salFecha >= :date';
        }
        if ($date_end != '') {
            $where_date .= ' AND s.salFecha <= :dateEnd';
        }

        $where_product = ' p.id = :productId';

        $dql = "SELECT SUM(s.salCantidad) cantidad, SUM(s.salTotal) valor "
                . "FROM KijhoStructureBundle:Salida s JOIN s.prodCodigo p "
                . "WHERE " . $where_product . $where_date;

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

    public function buscarProductosDevueltos($fechaInicio, $fechaFin, $vendedor) {

        $where = '';

        if ($vendedor > 0) {
            $where .= ' AND fv.usuCodigo = :vendedor ';
        }

        $dql = 'SELECT fv.facvCodigo,usu.usuNombre,v.vendNombre,prod.id,prod.name,prod.prodCostoUnit,prod.prodVentaUnit,s.salFecha,s.salHora,s.salCantidad,cli.nombreEmpresa,cli.direccion '
                . 'FROM KijhoStructureBundle:Salida s '
                . 'INNER JOIN s.prodCodigo prod '
                . 'INNER JOIN s.facvCodigo fv '
                . 'INNER JOIN fv.cliCodigo cli '
                . 'INNER JOIN fv.usuCodigo usu '
                . 'LEFT JOIN fv.facvVendedor v '
                . 'WHERE (s.devolucionEstado = 1 AND s.devolucion = 0) AND s.salFecha BETWEEN :fechaInicio AND :fechaFin '
                . $where
                . 'ORDER BY s.salFecha DESC ';

        $query = $this->getEntityManager()->createQuery($dql);

        $query->setParameter('fechaInicio', new DateTime($fechaInicio));
        $query->setParameter('fechaFin', new DateTime($fechaFin));

        if ($vendedor > 0) {
            $query->setParameter('vendedor', $vendedor);
        }

        return $query->getResult();
    }

    public function buscarProductosDevueltos2($fechaInicio, $fechaFin, $vendedor) {

        $where = '';

        if ($vendedor > 0) {
            $where .= ' AND fv.usuCodigo = :vendedor ';
        }

        $dql = 'SELECT fv.facvCodigo,usu.usuNombre,v.vendNombre,prod.id,prod.name,prod.prodCostoUnit,prod.prodVentaUnit,s.salFecha,s.salHora,s.salCantidad,cli.nombreEmpresa,cli.direccion '
                . 'FROM KijhoStructureBundle:Salida s '
                . 'INNER JOIN s.prodCodigo prod '
                . 'INNER JOIN s.facvCodigo fv '
                . 'INNER JOIN fv.cliCodigo cli '
                . 'INNER JOIN fv.usuCodigo usu '
                . 'LEFT JOIN fv.facvVendedor v '
                . 'WHERE s.devolucionEstado = 1 AND s.devolucion = 1 AND s.salFecha BETWEEN :fechaInicio AND :fechaFin '
                . $where
                . 'ORDER BY s.salFecha DESC ';

        $query = $this->getEntityManager()->createQuery($dql);

        $query->setParameter('fechaInicio', new DateTime($fechaInicio));
        $query->setParameter('fechaFin', new DateTime($fechaFin));

        if ($vendedor > 0) {
            $query->setParameter('vendedor', $vendedor);
        }

        return $query->getResult();
    }

    public function getGroupProducts($fechaInicio, $fechaFin, $vendedor) {

        $where = '';

        if ($vendedor > 0) {
            $where .= ' AND fv.usuCodigo = :vendedor ';
        }

        $dql = 'SELECT prod.id , prod.name, prod.prodCostoUnit, prod.prodVentaUnit, s.salFecha, SUM(s.salCantidad) as Cantidad '
                . 'FROM KijhoStructureBundle:Salida s '
                . 'INNER JOIN s.prodCodigo prod '
                . 'INNER JOIN s.facvCodigo fv '
                . 'INNER JOIN fv.usuCodigo usu '
                . 'WHERE s.devolucionEstado = 1 AND s.devolucion = 0 AND s.salFecha BETWEEN :fechaInicio AND :fechaFin '
                . $where
                . 'GROUP BY s.prodCodigo '
                . 'ORDER BY s.salFecha DESC ';

        $query = $this->getEntityManager()->createQuery($dql);

        $query->setParameter('fechaInicio', new DateTime($fechaInicio));
        $query->setParameter('fechaFin', new DateTime($fechaFin));

        if ($vendedor > 0) {
            $query->setParameter('vendedor', $vendedor);
        }

//        \Doctrine\Common\Util\Debug::dump($query->getResult(), 3); die();
        return $query->getResult();
    }

    public function getGroupProducts2($fechaInicio, $fechaFin, $vendedor) {

        $where = '';

        if ($vendedor > 0) {
            $where .= ' AND fv.usuCodigo = :vendedor ';
        }

        $dql = 'SELECT prod.id , prod.name, prod.prodCostoUnit, prod.prodVentaUnit, s.salFecha, SUM(s.salCantidad) as Cantidad '
                . 'FROM KijhoStructureBundle:Salida s '
                . 'INNER JOIN s.prodCodigo prod '
                . 'INNER JOIN s.facvCodigo fv '
                . 'INNER JOIN fv.usuCodigo usu '
                . 'WHERE s.devolucionEstado = 1 AND s.devolucion = 1 AND s.salFecha BETWEEN :fechaInicio AND :fechaFin '
                . $where
                . 'GROUP BY s.prodCodigo '
                . 'ORDER BY s.salFecha DESC ';

        $query = $this->getEntityManager()->createQuery($dql);

        $query->setParameter('fechaInicio', new DateTime($fechaInicio));
        $query->setParameter('fechaFin', new DateTime($fechaFin));

        if ($vendedor > 0) {
            $query->setParameter('vendedor', $vendedor);
        }

//        \Doctrine\Common\Util\Debug::dump($query->getResult(), 3); die();
        return $query->getResult();
    }

    public function getSalidaDev($factura, $producto) {

        $dql = "SELECT * FROM KijhoStructureBundle:Salida AS sal WHERE sal.facvCodigo = :factura AND sal.prodCodigo = :producto ";

        try {
            $query = $this->getEntityManager()->createQuery($dql);

            $query->setParameter('factura', $factura);
            $query->setParameter('producto', $producto);

            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'ORM\Entity' => 'Salida', 'response' => "error " . $ex->getMessage()];
        }
    }

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {

        $dql = "SELECT sal.id AS codigoRegistro, "
                . "sal.salCantidad AS cantidad, "
                . "sal.salValorVendido AS precio_compra, "
                . "CONCAT(sal.salFecha,' ', sal.salHora) AS fecha, "
                . "sal.salHora AS hora, "
                . "IDENTITY(sal.facvCodigo) AS codigoFactura, "
                . "13 AS tipo , "
                . "sal.salHora AS horario, "
                . "cli.id AS codigo_actor, "
                . "cli.nombreEmpresa AS nombre_actor "
                . "FROM KijhoStructureBundle:Salida AS sal "
                . "JOIN KijhoStructureBundle:FacturaVentas AS fv WITH sal.facvCodigo = fv.facvCodigo "
                . "JOIN KijhoStructureBundle:Cliente AS cli WITH cli.id = fv.cliCodigo "
                . "WHERE sal.salFecha <= :fechaFin "
                . "AND sal.prodCodigo = :prodCodigo "
                . "AND sal.devolucion = :devolution ";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo, 'devolution' => Salida::SALIDA_DEVOLUCION_NO]);

            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'Salida', 'response' => "error " . $ex->getMessage()];
        }
    }

    /**
     * consulta de los totales vendidos y comprados y cada
     * porcentage de iva que genera cada venta
     */
    function salesUtility($fecha_inicio, $fecha_fin) {

        $sql = "SELECT sum( s.sal_precio_compra * s.sal_cantidad ) AS cant1, " .
                "sum( s.sal_valor_vendido * s.sal_cantidad ) AS cant2, " .
                "sum( s.sal_iva_5 ) AS iva5, sum( s.sal_iva_16 ) AS iva16, " .
                "sum( s.sal_iva_10 ) AS iva10, sum( s.sal_exento ) AS ivaExento, " .
                "sum( s.sal_total ) AS total " .
                "FROM salida s, factura_ventas f " .
                "WHERE s.facv_codigo = f.facv_codigo 
                AND f.facv_anulada = 'no'
                AND f.facv_fecha >= '" . $fecha_inicio . "' " .
                "AND f.facv_fecha <= '" . $fecha_fin . "'";

//        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    function salesUtilityF($fecha_inicio, $fecha_fin) {

        $sql = "SELECT sum(facfvd_precio_compra*facfvd_cantidad) AS cant1, sum(facfvd_precio_venta*facfvd_cantidad) AS cant2 FROM factura_fisica_venta_detalle WHERE facfvd_fecha>='" . $fecha_inicio . "' AND facfvd_fecha<='" . $fecha_fin . "'";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    function salesUtilityF2($fecha_inicio, $fecha_fin) {

        $sql2 = "SELECT sum(facfv_iva5) AS iva5, sum(facfv_iva16) AS iva16, sum(facfv_iva10) AS iva10, sum(facfv_iva_exento) AS ivaExento, sum(facfv_total) AS total FROM factura_fisica_venta WHERE facfv_fecha>='" . $fecha_inicio . "' AND facfv_fecha<='" . $fecha_fin . "'";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql2);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
//        DIE();
//        $consulta2 = executeQuery($sql2);
//        while ($row2 = mysqli_fetch_array($consulta2)) {
//            $dato->iva16 = $row2['iva16'] - ($row2['iva16'] * 0.16);
//            $dato->iva10 = $row2['iva10'] - ($row2['iva10'] * 0.10);
//            $dato->iva5 = $row2['iva5'] - ($row2['iva5'] * 0.05);
//            $dato->exento = $row2['ivaExento'];
//            $dato->total = $row2['total'];
//        }
//
//        return $dato;
    }

    /**
     * consulta de los totales de cada
     * porcentage de iva que genera cada venta
     */
    function salesUtilityIva($fecha_inicio, $fecha_fin) {


        $sql = " SELECT sum( fv.facv_iva ) AS iva5, sum( fv.facv_iva16 ) AS iva16, 
                        sum( fv.facv_iva10 ) AS iva10, sum( fv.facv_iva_exento ) AS ivaExento, 
                        sum( fv.facv_total ) AS total,
                        sum( fv.facv_descuento ) AS descuento
                        FROM factura_ventas fv
                        WHERE fv.facv_fecha >= '" . $fecha_inicio . "'
                        AND fv.facv_fecha <= '" . $fecha_fin . "' 
                        AND fv.facv_anulada = 'no'";

//        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    /**
     * consulta de los totales vendidos y comprados y cada
     * porcentage de iva que genera cada remision 
     */
    function UtilityRemissions($fecha_inicio, $fecha_fin) {

        $sql = "SELECT sum(rmd.remd_precio_compra * rmd.remd_cantidad) AS cant1, " .
                "sum(rmd.remd_precio_venta * rmd.remd_cantidad) AS cant2, " .
                "sum(rmd.remd_total) AS total " .
                "FROM remisiones_detalle rmd, remisiones r " .
                "WHERE rmd.rem_codigo = r.rem_codigo " .
                "AND rmd.remd_fecha >= '$fecha_inicio' " .
                "AND rmd.remd_fecha <= '$fecha_fin' " .
                "AND r.rem_anulada = 'No'";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    /**
     * listaFacturasVentaContado() -
     *
     * @param int $inicio
     * @param int $cantidad
     * @return $listaFactura
     */
    public function listInvoicesSaleCountedTwoDates($fecha1, $fecha2) {

        $sql = "SELECT fv.facv_codigo, " .
                "fv.cli_codigo, " .
                "fv.facv_vendedor, " . // Nuevo!!!
                "fv.usu_codigo,  " .
                "fv.facv_fecha,  " .
                "fv.facv_hora, " .
                "fv.facv_total,  " .
                "fv.facv_descuento, " .
                "fv.facv_iva,  " .
                "fv.facv_iva16,  " .
                "fv.facv_iva10 ,  " .
                "fv.facv_iva5,  " .
                "fv.facv_iva_exento,  " .
                "fv.facv_iva_excluido,  " .
                "c.cli_nombre_empresa, " .
                "c.cli_nombre_comercial, " .
                "c.cli_identificacion, " .
                "u.usu_nombre,  " .
                "u.usu_apellido, " .
                "SUM(s.sal_cantidad) AS cantidad, " .
                "sum(sal_precio_compra*sal_cantidad) AS cant1, " .
                "sum(sal_precio_venta*sal_cantidad) AS cant2 " .
                "FROM factura_ventas fv, cliente c, usuario u, salida s
                WHERE fv.cli_codigo = c.cli_codigo 
                AND fv.usu_codigo = u.usu_codigo
                AND fv.facv_codigo = s.facv_codigo
                AND fv.facv_anulada ='no' 
                AND fv.only_change = 0
                AND s.devolucion_estado = 0
                AND fv.facv_estado=1 
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

    /*
     * Valida si existe un vendedor asociado a la venta, de ser así, se obtiene el nombre y apellido
     * de este en tabla vendedor. En caso contrario, se obtiene el nombre de usuario asociado a la venta
     * de la tabla usuario.
     * 
     * @attr: listaFactura->responsableVenta es el vendedor en caso de que en la configuración de Seitem
     *  se encuentre habilitada la opción "Vendedor". En caso contrario es el valor de listaFactura->nomUsuario 
     */

    public function listInvoicesSaleCountedTwoDates1($facvVendedor) {
//        $sql = "SELECT CONCAT(vend_nombre,' ',vend_apellido)AS v FROM vendedor"
//                . " WHERE id_vendedor = " . $facvVendedor;
       $sql = "SELECT sum(sal_precio_compra*sal_cantidad) AS cant1, sum(sal_precio_venta*sal_cantidad) AS cant2 FROM salida WHERE facv_codigo = "
        .$facvVendedor . " GROUP BY facv_codigo";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

//        } else {
//
//            $listaFactura[$i]->responsableVenta = $listaFactura[$i]->nomUsuario;
//        }
    }

    public function listaRemisionesDosFechas($fecha1, $fecha2, $estado) {

        $sql = "SELECT re.rem_codigo, " .
                "re.cli_codigo, " .
                "re.usu_codigo,  " .
                "re.rem_fecha,  " .
                "re.rem_hora, " .
                "re.rem_total,  " .
                "re.rem_descuento, " .
                "c.cli_nombre_empresa, " .
                "c.cli_nombre_comercial, " .
                "c.cli_identificacion, " .
                "u.usu_nombre,  " .
                "u.usu_apellido, " .
                "SUM(rd.remd_cantidad) AS cantidad, " .
                "sum(remd_precio_compra * remd_cantidad) AS cant1, " .
                "sum(remd_precio_venta * remd_cantidad) AS cant2 " .
                "FROM remisiones re, cliente c, usuario u, remisiones_detalle rd
                WHERE re.cli_codigo = c.cli_codigo 
                AND re.usu_codigo = u.usu_codigo
                AND re.rem_codigo = rd.rem_codigo
                AND re.rem_anulada ='No' 
                AND re.rem_estado = '$estado' 
                AND re.rem_fecha >= '$fecha1' 
                AND re.rem_fecha <= '$fecha2'
                AND re.rem_anulada = 'No'
                GROUP BY re.rem_codigo 
                ORDER BY re.rem_codigo DESC ";

        die($sql);
        $listaRemision = array();
        $consulta = executeQuery($sql);
        $i = 0;
        while ($row = mysqli_fetch_array($consulta)) {
            $listaRemision[$i]->codigo = $row['rem_codigo'];
            $listaRemision[$i]->codigoGenerado = formatoNumeroFactura($row['rem_codigo']);
            $listaRemision[$i]->codigoCli = $row['cli_codigo'];
            $listaRemision[$i]->codigoUsu = $row['usu_codigo'];
            $listaRemision[$i]->fecha = $row['rem_fecha'];
            $listaRemision[$i]->hora = $row['rem_hora'];
            $listaRemision[$i]->total = $row['rem_total'];
            $listaRemision[$i]->descuento = $row['rem_descuento'];
            $listaRemision[$i]->total_precio_compra = $row['cant1'];
            $listaRemision[$i]->total_precio_venta = $row['cant2'];
            $listaRemision[$i]->nomCliente = $row['cli_nombre_empresa'];
            $listaRemision[$i]->nomComercial = $row['cli_nombre_comercial'];
            $listaRemision[$i]->nomUsuario = $row['usu_nombre'] . " " . $row['usu_apellido'];
            $listaRemision[$i]->cantProductos = $row['cantidad'];
            $listaRemision[$i]->identificacion = $row['cli_identificacion'];
            $i++;
        }
        return $listaRemision;
    }

}
