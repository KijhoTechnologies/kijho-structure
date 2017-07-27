<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ProveedorRepository
 *
 * @author Angel Andres Diaz calle
 */
class ProveedorRepository extends EntityRepository {

    /**
     * (HHH) Esta funcion se encarga de buscar los datos de todos los Proveedores
     * Retornando un array completo de dichos datos
     */
    public function searchAllProveedor() {
        $sql = "
            SELECT prov_nit as identificacion, 
                   prov_nombre as nombreEmpresa,
                   prov_direccion as direccion,
                   prov_ciudad as ciudad,
                   prov_departamento as depto,
                   prov_telefono as telefono,
                   prov_celular as movil,
                   'Proveedor' as tercero,
                   '' as nombreComercial
                   FROM proveedor";
//               die($sql);
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

}
