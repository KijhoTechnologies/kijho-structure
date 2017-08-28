<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ModuleRepository
 *
 * 
 */
class ModuleRepository extends EntityRepository {

    /**
     * 	Funcion responsable de actualizar el acceso a los modulos faltantes de un usuario.
     * @author Luis Fernando Granados 
     * @return array
     */
    public function userModules($useCode) {

        $em = $this->getEntityManager();
        $consult = $em->createQuery("
        SELECT m.modCode
        FROM KijhoStructureBundle:Module m
        WHERE m.modCode NOT IN 
        (SELECT up.modCode FROM KijhoStructureBundle:UserProperty up 
        WHERE up.useCode = :useCode)");

        $consult->setParameter('useCode', $useCode);
        return $consult->getResult();
    }

    /**
     * 	Funcion responsable de obtener el acceso de un usuario a un script: Write, Read, None	
     * 	@author: JSL
     * 	@date: 30/04/2012
     */
    function getAccessScript($useCode = 0, $filename = '') {
        $em = $this->getEntityManager();
        $consult = $em->createQuery("
        SELECT up.usprProperty
        FROM KijhoStructureBundle:Module m 
        JOIN KijhoStructureBundle:UserProperty up  
        WITH m.modCode = up.modCode
        WHERE up.useCode = :useCode AND m.modUrl  = :filename"
        );


        $consult->setParameter('useCode', $useCode);
        $consult->setParameter('filename', $filename);

        return $consult->getOneOrNullResult();
    }

}
