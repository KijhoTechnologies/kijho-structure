<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of DevolucionRepositoryRepository
 *
 * @author Angel Andres Diaz Calle
 */
class DevolucionRepository extends EntityRepository {

function GetNotesToDay($fecha, $usuario)
	{
		$sql = "SELECT dev_codigo, dev_fecha_utilizacion, dev_valor, cod_caja "
                        . "FROM devolucion "
                        . "WHERE dev_fecha_utilizacion='".$fecha."' AND dev_estado='Inactivo' AND usu_codigo = ".$usuario."";
//		die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;		
	}

}
