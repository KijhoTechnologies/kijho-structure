<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of LicenseFiltersRepository
 * @author hHernandez o
 */
class UsuarioRepository extends EntityRepository {

    /**
     * usuarios.
     * @author Aealan Z <lrobledo@kijho.com> 29/07/2016
     * @return array[AccountsActivas]
     */
    public function findValidateUser($parameters) {

        $em = $this->getEntityManager();
        $dql = "SELECT u.usuNombre, u.usuEstado " .
                "FROM KijhoStructureBundle:Usuario u " .
                "WHERE u.usuLogin = :usuLogin AND u.usuPass = :usuPass  " .
                "AND u.usuEstado = " . Usuario::STATUS_IS_ACTIVE;

        $query = $em->createQuery($dql);

        $query->setParameter("usuPass", $parameters['password']);
        $query->setParameter("usuLogin", $parameters['username']);

        return $query->getResult();
    }

}
