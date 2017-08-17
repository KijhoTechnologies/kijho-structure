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
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    function reporteIngresosContable($fechaInicio, $fechaFin) {
        $sql = "SELECT i.ing_codigo as codigo, 
                i.ing_fecha as fecha, 
                tm.tm_codigo_contable as codigoContable,
                tm.tm_descripcion movimientoContable,
                i.ing_nit as identificacion,
                i.ing_valor as valor,
                c.cli_nombre_empresa
                FROM ingreso i
                LEFT JOIN cliente c ON i.ing_nit = c.cli_identificacion,
                tipo_movimiento tm
                WHERE  i.ing_movimiento_contable = tm.tm_codigo
                AND i.ing_fecha >= '" . $fechaInicio . "'  AND i.ing_fecha <= '" . $fechaFin . "'";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    public function listaIngresosDosFechas2($fecha1, $fecha2, $tipoIngreso) {
        $where = 'AND i.ting_codigo = ' . $tipoIngreso;
        if ($tipoIngreso == -1) {
            $where = '';
        }

        $sql = 'SELECT *
		FROM ingreso i, tipo_ingreso ti WHERE i.ting_codigo = ti.ting_codigo 
		AND i.ing_fecha >= "' . $fecha1 . '" AND i.ing_fecha <= "' . $fecha2 . '" ' . $where;
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    public function rangoComprobantes($fecha1, $fecha2) {
        $sql = "SELECT MIN(i.ing_codigo)as minimo, MAX(i.ing_codigo)as maximo FROM ingreso i  WHERE  i.ing_fecha >= '" . $fecha1 . "' AND i.ing_fecha <= '" . $fecha2 . "'";

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }
    
    

}
