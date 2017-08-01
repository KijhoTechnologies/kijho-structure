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

        $dql = 'SELECT fv.facvCodigo,usu.usuNombre,v.vendNombre,prodid,prod.name,prod.prodCostoUnit,prod.prodVentaUnit,s.salFecha,s.salHora,s.salCantidad,cli.nombreEmpresa,cli.direccion '
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

        $dql = 'SELECT fv.facvCodigo,usu.usuNombre,v.vendNombre,prodid,prod.name,prod.prodCostoUnit,prod.prodVentaUnit,s.salFecha,s.salHora,s.salCantidad,cli.nombreEmpresa,cli.direccion '
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

        $dql = 'SELECT prodid , prod.name, prod.prodCostoUnit, prod.prodVentaUnit, s.salFecha, SUM(s.salCantidad) as Cantidad '
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

        $dql = 'SELECT prodid , prod.name, prod.prodCostoUnit, prod.prodVentaUnit, s.salFecha, SUM(s.salCantidad) as Cantidad '
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

}
