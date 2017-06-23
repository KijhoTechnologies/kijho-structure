<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\ORM\EntityRepository;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteRepository
 *
 * @author jocampo
 */
class ClienteRepository extends EntityRepository {

    public function clientList($term = '', $id = null) {

        $where = '';
        if ($term != '') {
            $where .= " WHERE c.cli_nombre_empresa LIKE '" . $term . "' AND c.cli_borrado = 0";
        } elseif ($id == 1) {
            $where .= " WHERE c.cli_codigo = 1 ";
        } else {
            $where .= " WHERE c.cli_codigo = $id";
        }
        $sql = "SELECT  
            c.cli_nombre_empresa as text,
            c.cli_codigo AS id,
            c.cli_nombre_empresa as value,
            c.cli_codigo AS codigo,
            c.cli_nombre_empresa AS nombreEmpresa,
            c.cli_nombre_comercial AS nombreComercial,
            c.cli_identificacion AS identificacion,
            c.cli_nombre_apellido AS nombreApellido,
            c.cli_direccion AS direccion,
            c.cli_depto AS depto,
            c.cli_ciudad AS ciudad,
            c.cli_movil AS movil,
            c.cli_email AS email,
            c.cli_telefono AS telefono,
            c.cli_borrado AS deleted,
            b.nombre_barrio AS barrioCliente,
            t1.cant_fpc AS cant_fpc,
            z.nombre AS zona,
            z.id AS zona_id,
            r.name AS ruta
            FROM cliente c
            LEFT JOIN (SELECT COUNT(*) AS cant_fpc, fv.cli_codigo FROM factura_ventas fv JOIN (SELECT fpc.facv_codigo FROM facturas_por_cobrar fpc 
                    WHERE fpc.fpc_estado=2 AND fpc.fpc_resta > 0) t
            ON fv.facv_codigo=t.facv_codigo GROUP BY fv.cli_codigo) t1
            ON c.cli_codigo=t1.cli_codigo 
                LEFT JOIN barrios AS b ON b.cod_barrio = c.cli_barrio_id 
                LEFT JOIN zona z ON c.cli_zona_id = z.id LEFT JOIN ruta r ON z.ruta = r.id  " . $where;

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $clientList = $stmt->fetchAll();
        return $clientList;
    }

    public function getClientesByBarrio($barrio_id) {
        $dql = "SELECT c FROM KijhoStructureBundle:Cliente c "
                . "JOIN KijhoStructureBundle:Barrios b WITH bid=c.barrio "
                . "WHERE c.barrio = " . $barrio_id . " ORDER BY c.nombreEmpresa ASC";

        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }

    public function getClientesZona($zona_id) {
        $dql = "SELECT c, z "
                . "FROM KijhoStructureBundle:Cliente c "
                . "JOIN c.zona z WHERE zid = " . $zona_id
                . " ORDER BY c.nombreEmpresa ASC";
//        return $dql;
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
    
//    public function getClientesBarrio()

}
