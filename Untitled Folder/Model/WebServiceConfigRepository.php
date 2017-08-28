<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
/**
 *
 * @author dloaiza
 */
class WebServiceConfigRepository extends EntityRepository {
    
    // Metodo que se encarga de cambiar el estado del producto para permitir sus ventas con o sin inventario negativo
    public function actualizarConfiguracionVentas($configuracion_ventas){
        $dql = "UPDATE Producto p SET p.negativos = ".$configuracion_ventas;      
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
}
