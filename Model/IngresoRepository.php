<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of IngresoRepository
 *
 * @author Angel Andres Diaz Calle
 */
class IngresoRepository extends EntityRepository {

    function getIncome($fecha, $usuario) {

        $sql = "SELECT ing_valor AS cant1,i.ting_codigo, i.cod_caja,i.ing_codigo, ting_nombre FROM ingreso AS i, tipo_ingreso AS ti WHERE ing_fecha='" . $fecha . "' AND usu_codigo = " . $usuario . " AND i.ting_codigo = ti.ting_codigo";
//        die($sql);     
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

}
