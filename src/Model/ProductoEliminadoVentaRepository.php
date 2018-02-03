<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of ProductoEliminadoVentaRepository
 *
 * @author Angel andres Diaz Calle
 */
class ProductoEliminadoVentaRepository extends EntityRepository {

      /**
     * obtenerProductosEliminadosPorUsuario
     * Esta funcion permite obtener la informacion de los productos eliminados por un usuario en uan fecha determianda
     * @param $usu_codigo -> Codigo del usuario 
     * @param $fecha
     * @return $dato -> arreglo que contiene la informacion de los productos
     * @author Kijho Technologies S.A.S - sso
     * @since 17 Dic 2015
     */
    function getProductsEliminatedForUser($usu_codigo, $fecha) {
        $sql = "SELECT p.prod_codigo, p.prod_nombre, pe.pev_prod_venta_unit, pe.pev_hora, pe.pev_fecha, pe.facv_codigo, pe.pev_prod_cantidad
                FROM producto_eliminado_venta pe, producto p 
                WHERE pe.prod_codigo = p.prod_codigo AND pe.usu_codigo = '" . $usu_codigo . "' AND pe.pev_fecha = '" . $fecha . "'";
//              die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

}
