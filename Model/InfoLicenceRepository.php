<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ClienteRepository
 *
 * @author Luis Fernando Granados
 */
class InfoLicenceRepository extends EntityRepository {

    /**
     * Permite saber si la aplicacion esta marcada para realizar un update
     * @author Luis Fernando Granados 
     * @return array
     */
    public function isUpdateApp($isUpdate) {

        $em = $this->getEntityManager();
        $consult = $em->createQuery("
        SELECT i.id as id, i.enablePage, i.isUpdate
        FROM KijhoSeitemBackendBundle:InfoLicence i
        WHERE i.isUpdate = :isUpdate 
        ");
        $consult->setParameter('isUpdate', $isUpdate);
        return $consult->getResult();
    }

}
