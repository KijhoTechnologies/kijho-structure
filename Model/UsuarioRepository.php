<?php

namespace Kijho\StructureBundle\Model;

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

    function idUsersSeller() {
        $sql = "SELECT usu_codigo FROM usuario WHERE usu_delete = 0";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $usuario_vendedor = $stmt->fetchAll();
        return $usuario_vendedor;
    }

    function getUserName($codigo) {
        $sql = "SELECT CONCAT(usu_nombre,' ',usu_apellido) as usuario FROM usuario "
                . "WHERE usu_codigo =" . (int) $codigo . " AND usu_delete = 0";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $usuario = $stmt->fetchAll();
        return $usuario;
    }

    function getCategories() {
        $sql = "SELECT cat_codigo, cat_nombre FROM categoria";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $usuario_vendedor = $stmt->fetchAll();
        return $usuario_vendedor;
    }

}
