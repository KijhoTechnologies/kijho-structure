<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of RemisionesRepository
 *
 * @author Angel Andres Diaz Calle
 */
class RemisionesRepository extends EntityRepository {

    /**
     * funcion encargada de retornar los datos necesario de las remisiones
     * para generar el arqueo de caja
     */
    function getRemissions($fecha, $usuario) {

        $sql = "SELECT
            sum(re.rem_total) AS cant1,
            re.cli_codigo, 
            re.cod_caja, 
            c.cli_nombre_empresa 
            FROM remisiones AS re, cliente AS c 
            WHERE re.rem_fecha='$fecha'
            AND re.cli_codigo = c.cli_codigo
            AND re.rem_estado = '1'
            AND re.rem_anulada LIKE 'No'
            AND re.usu_codigo = '$usuario' 
            GROUP BY cli_codigo, cod_caja";

//        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    function payRemissions($fecha, $usuario) {
        $sql = "SELECT SUM(rema_abono) AS sumAbonos, " .
                "cli_nombre_empresa AS cliNombre, " .
                "r.cod_caja " .
                "FROM `abono_remisiones_ventas` AS arv, " .
                "`remisiones` AS r, `cliente` AS c " .
                "WHERE rema_fecha like '$fecha' " .
                "AND arv.rem_codigo = r.rem_codigo " .
                "AND c.cli_codigo = r.cli_codigo " .
                "AND r.usu_codigo = '$usuario' " .
                "GROUP BY r.cli_codigo, r.cod_caja;";
//        die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

    /**
     * 	Funcion encargada de listar la remisiones en un rango de fechas
     * 	@param:  FechaInicio, FechaFin
     * 	@Autor:  Steven SAlcedo Ocampo - KijhoTechnologies -
     * 	@Date:	 10-05-2013
     */
    function ReportAllReferrals($fechaInicion, $FechaFin) {

        $sql = 'SELECT rem.*, c.*, u.*,SUM(rd.remd_cantidad) AS cantidad 
                FROM remisiones rem, cliente c, usuario u, remisiones_detalle rd 
                WHERE 
                rem.rem_fecha >="' . $fechaInicion . '" 
				AND rem.rem_fecha <="' . $FechaFin . '" 
                AND rem.cli_codigo = c.cli_codigo 
                AND rem.usu_codigo = u.usu_codigo
				AND rem.rem_estado = 1
                AND rem.rem_anulada = "No"
                AND rem.rem_codigo = rd.rem_codigo
				GROUP BY rem.rem_codigo ORDER BY rem.rem_codigo DESC';
//        echo $sql;die();
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    /**
     * 	Funcion encargada de listar la remisiones a credito en un rango de fechas
     * 	@param:  FechaInicio, FechaFin
     * 	@Autor:  Steven SAlcedo Ocampo - KijhoTechnologies -
     * 	@Date:	 10-05-2013
     */
    function reportRemissionsCreditAll($fechaInicion, $FechaFin) {

        $sql = 'SELECT rem.*, c.*, u.*,SUM(rd.remd_cantidad) AS cantidad 
                FROM remisiones rem,
                cliente c, 
                usuario u,
                remisiones_detalle rd 
                WHERE 
                rem.rem_fecha >="' . $fechaInicion . '" 
				AND rem.rem_fecha <="' . $FechaFin . '" 
                AND rem.cli_codigo = c.cli_codigo 
                AND rem.usu_codigo = u.usu_codigo
				AND rem.rem_estado = 2
                AND rem.rem_anulada = "No"
                AND rem.rem_codigo = rd.rem_codigo
				GROUP BY rem.rem_codigo ORDER BY rem.rem_codigo DESC';

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    function reportRemissionsAbon($cod) {


        $sql2 = 'SELECT sum( rema_abono ) AS abono
                     FROM abono_remisiones_ventas
                     WHERE rem_codigo = ' . $cod;
        
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql2);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
        
    }

    /** Funcion encargada de listar la remisiones en un rango de fechas bajo unos criterios de busqueda
     * 	@param:  FechaInicio, FechaFin
     * 	@Autor:  Steven SAlcedo Ocampo - KijhoTechnologies -
     * 	@Date:	 10-05-2013
     */
    function ReportRemissions($fechaInicion, $FechaFin, $buscar) {
        $where = '';
        if ($buscar != '')
            $where .= " AND (rem.rem_codigo = '" . $buscar . "' OR c.cli_nombre_empresa like '%" . $buscar . "%' OR rem.rem_total = '" . $buscar . "')";

        $sql = 'SELECT rem.*,rd.remd_cantidad AS cantidad
                FROM remisiones rem,
                cliente c, 
                usuario u,
                remisiones_detalle rd 
                WHERE 
                rem.rem_fecha >="' . $fechaInicion . '" 
				AND rem.rem_fecha <="' . $FechaFin . '" 
                AND rem.cli_codigo = c.cli_codigo 
                AND rem.usu_codigo = u.usu_codigo
				AND rem.rem_estado = 1
                AND rem.rem_anulada = "No"
				' . $where . '
				GROUP BY rem.rem_codigo ORDER BY rem.rem_codigo DESC';
//        echo $sql;die();

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

    /** Funcion encargada de listar la remisiones a credito en un rango de fechas bajo unos criterios de busqueda
     * 	@param:  FechaInicio, FechaFin
     * 	@Autor:  Steven SAlcedo Ocampo - KijhoTechnologies -
     * 	@Date:	 10-05-2013
     */
    function ReportRemissionsCredit($fechaInicion, $FechaFin, $buscar) {
        $where = '';
        if ($buscar != '')
            $where .= " AND (rem.rem_codigo = '" . $buscar . "' OR c.cli_nombre_empresa like '%" . $buscar . "%' OR rem.rem_total = '" . $buscar . "')";

        $sql = 'SELECT * FROM remisiones rem,
                cliente c, 
                usuario u 
                WHERE 
                rem.rem_fecha >="' . $fechaInicion . '" 
				AND rem.rem_fecha <="' . $FechaFin . '" 
                AND rem.cli_codigo = c.cli_codigo 
                AND rem.usu_codigo = u.usu_codigo
				AND rem.rem_estado = 2
                AND rem.rem_anulada = "No"
				' . $where . '
				GROUP BY rem.rem_codigo ORDER BY rem.rem_codigo DESC';
//        echo $sql;die();

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

}
