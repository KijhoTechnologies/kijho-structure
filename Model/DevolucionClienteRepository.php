<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of DevolucionClienteRepository
 *
 * @author Angel Andres Diaz Calle
 */
class DevolucionClienteRepository extends EntityRepository {

    function GetDevolutionsCustomers($fecha, $usuario) {
        $sql = "SELECT sum(decl_total) AS cant1,dc.cli_codigo, dc.cli_codigo,dc.cod_caja, cli_nombre_empresa FROM devolucion_cliente AS dc, cliente AS c WHERE DATE(decl_fecha)='" . $fecha . "' AND usu_codigo = " . $usuario . " AND dc.cli_codigo = c.cli_codigo GROUP BY cli_codigo, cod_caja";

//        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

}
