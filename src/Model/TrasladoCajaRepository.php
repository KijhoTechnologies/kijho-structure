<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\ORM\EntityRepository;

/**
 * Description of TrasladoCajaRepository
 *
 * @author Angel Andres Diaz Calle
 */
class TrasladoCajaRepository extends EntityRepository {    
    
   	function getTransfers($fecha, $usuario){
$sql = "SELECT tc.tc_valor AS cant1, tc.tc_codigo, tc.cod_caja, tc.tc_persona "
        . "FROM traslado_caja AS tc "
        . "WHERE tc.tc_fecha='".$fecha."' AND usu_codigo = ".$usuario.";";				
//	die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;		
	}
    
}
