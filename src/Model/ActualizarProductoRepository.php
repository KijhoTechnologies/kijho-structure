<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of ActualizarProductoRepository
 *
 * @author sgonzalez
 */
class ActualizarProductoRepository extends EntityRepository{
    
    
    public function getLastProductId(){
        $dql = 'SELECT MAX(p.idUpdate) AS maxId FROM KijhoStructureBundle:ActualizarProducto p';
//        return ('llega');
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
    
}
    
   
    
    
   
   
    
   
    
