<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of GastoRepository
 *
 * @author Angel Andres Diaz Calle
 */
class GastoRepository extends EntityRepository {

    function getExpenses($fecha, $usuario) {
        $sql = "SELECT g.gas_valor AS cant1,
               g.tiga_codigo,
               g.cod_caja,
               g.gas_codigo,
               g.gas_persona,
               g.gas_afectaCaja, 
               tg.tiga_nombre 
               FROM gasto AS g, tipo_gasto AS tg 
               WHERE g.gas_fecha='" . $fecha . "' 
               AND usu_codigo = " . $usuario . "
               AND gas_afectaCaja = 'Si' 
               AND g.tiga_codigo = tg.tiga_codigo";
//        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    function GetExpensesNoAffectBox($fecha, $usuario) {
        $sql = "SELECT g.gas_valor AS cant1,
               g.tiga_codigo,
               g.cod_caja,
               g.gas_codigo,
               g.gas_persona,
               g.gas_afectaCaja, 
               tg.tiga_nombre 
               FROM gasto AS g, tipo_gasto AS tg 
               WHERE g.gas_fecha='" . $fecha . "' 
               AND usu_codigo = " . $usuario . "
               AND gas_afectaCaja = 'No' 
               AND g.tiga_codigo = tg.tiga_codigo";
//	        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    /**
     * Esta fncion se encarga de seleccionar los datos de 
     * retencion en la fuente con respecto a su ID,  necesarios para 
     * calcularlos con los subtotaels de la compra
     */
    function SelectReteFontDataCode($codigo) {
        $sql = "SELECT tm_codigo, tm_codigo_contable, tm_descripcion, tm_rete_uvt, tm_rete_tarifa, 
        tm_rete_base_pesos, tm_rete_iva, tm_base_rete_ica, tm_tarifa_rete_ica FROM tipo_movimiento 
        WHERE tm_codigo = '" . $codigo . "'";
//die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

}
