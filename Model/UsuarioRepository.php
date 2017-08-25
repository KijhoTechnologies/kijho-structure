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

    //////////////////////////////////////////////////////////////////////////////////
    // getUserAcces    : Esta funcion es la encargada de dar las propiedades de acceso que tiene un usuario a los mudulos.
    // parameter       : $code -> es el codigo del usuario qu vamos a obtener las propiedades.
    // return          : las propiedades de acceso al usuario.
    //////////////////////////////////////////////////////////////////////////////////
    public function getUserAcces($code) {
        $sql = "SELECT m.mod_code, m.mod_name, m.mod_url, m.mod_son, up.uspr_property FROM module m JOIN user_property up ON m.mod_code=up.mod_code WHERE up.use_code=" . $code . "
		ORDER BY mod_order, mod_son";
//        $data = [];

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
//        dump($data);
//        if ($result = $stmt->fetchAll()) {
//            $i = 0;
//
//            foreach ($result as $row) {
//                $data[$i]->uspr_property = $row['uspr_property'];
//                $data[$i]->mod_code = $row['mod_code'];
//                $data[$i]->mod_name = $row['mod_name'];
//                $data[$i]->mod_url = $row['mod_url'];
//                $data[$i]->mod_son = $row['mod_son'];
//
//                $i++;
//            }
        return $data;
//    } else {
//            return false;
//        }
    }

}
