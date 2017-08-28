<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of VendedorRepository
 * @author Angel Andres Diaz Calle
 */
class VendedorRepository extends EntityRepository {

    function getSellerName($codigo) {
        $sql = "SELECT CONCAT(vend_nombre,' ',vend_apellido) as nom_vendedor FROM vendedor "
                . "WHERE id_vendedor =" . (int) $codigo;
            $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $vendedor = $stmt->fetchAll();
        return $vendedor;
    }

}
