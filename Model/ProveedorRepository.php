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

    /**
     *  Funcion que me permite obtener el listado de los proveedores a los cuales por la cantidad de compras que se le ha realizado
     *  en un rango de fechas cumplen con el monto para efectuar retencion
     *  @param $fechaInicio
     *  @param $fechaFin
     *  @return listadoproveedores
     *  @author KIJHO TECHONOLOGIES S.A.S - Steven Salcedo 
     *  @date 29 Ene 2014
     *  @modificaciones 
     */
    function listSuppliersRetention($fechaInicio, $fechaFin, $proveedor) {
        $where = '';
        if ($proveedor > 0) {
            $where = " AND fp.prov_codigo = " . $proveedor . "";
        }
        $sql = "SELECT SUM(fp.facp_valor) AS valor, 
                      SUM(fp.facp_iva16) AS iva16, 
                      SUM(fp.facp_iva10) AS iva10,
                      SUM(fp.facp_iva5) AS iva5,
                      SUM(fp.facp_reteFuente) AS retefuente,
                      SUM(fp.facp_reteIca) AS reteIca, 
                      fp.prov_codigo, 
                      p.prov_nombre, 
                      p.prov_nit 
               FROM factura_proveedores fp, proveedor p 
               WHERE fp.prov_codigo = p.prov_codigo 
                     AND  fp.facp_fecha >= '" . $fechaInicio . "' 
                     AND fp.facp_fecha <= '" . $fechaFin . "'
                     " . $where . " 
                     GROUP BY fp.prov_codigo";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }
    
      /**
     *  Funcion que me lista las facturas realizadas a un proveedor especifico, el cual se le efectuara retencion bajo un intervalo 
     *  fechas establecidad por el usuario
     *  @param $codProveedor
     *  @param $fechaInicio
     *  @param $fechaFin
     *  @return listado Facturas
     *  @author KIJHO TECHONOLOGIES S.A.S - Steven Salcedo 
     *  @date 29 Ene 2014
     *  @modificaciones 
     */
    function billsRetention($codProveedor, $fechaInicio, $fechaFin) {
        $sql = "SELECT * FROM `factura_proveedores` 
                WHERE prov_codigo = '" . $codProveedor . "' 
                AND facp_fecha >= '" . $fechaInicio . "' 
                AND facp_fecha <= '" . $fechaFin . "'";

//           die($sql);
             $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $client = $stmt->fetchAll();
        return $client;
    }

}
