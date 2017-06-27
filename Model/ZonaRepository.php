<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
/**
 * Description of ZonaRepository
 *
 * @author jocampo
 */
class ZonaRepository extends EntityRepository {
    public function getZonasByMunicipio($municipio_id){
        $dql = "SELECT z FROM KijhoStructureBundle:Zona z JOIN  KijhoStructureBundle:Municipios m WITH mid = z.municipio "
                ."WHERE z.municipio = ".$municipio_id;
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
    
    public function getZonasByRuta($ruta_id){
        $dql = "SELECT z FROM KijhoStructureBundle:Zona z JOIN  KijhoStructureBundle:Ruta r WITH rid = z.ruta "
                ."WHERE z.ruta = ".$ruta_id;
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
}
