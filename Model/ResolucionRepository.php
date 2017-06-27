<?php

namespace Kijho\StructureBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of ResolucionRepository
 *
 * @author jocampo
 */
class ResolucionRepository extends EntityRepository{
    /**
     * Sep 2015
     * Este método retorna el id max encontrado en la Entidad Resolución.
     */
    public function getResolutionIdMax(){
        $em = $this->getEntityManager();
        
        $last_resolution = $em->createQueryBuilder()
                ->select('MAX(r.id)')
                ->from('KijhoStructureBundle:Resolucion','r')
                ->getQuery()
                ->getSingleScalarResult();
        
        if(!$last_resolution){
            $last_resolution = "0";
        }
        
        return $last_resolution;
    }
}
