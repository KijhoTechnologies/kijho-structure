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
    
}
