<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * Description of BarriosRepository
 *
 * @author jocampo
 */
class BarriosRepository extends EntityRepository{
    public function getBarriosByMunicipio($mun_codigo){
        $dql = "SELECT b FROM KijhoStructureBundle:Barrios b JOIN b.munCodigo m LEFT JOIN b.zona z "
                ."WHERE b.munCodigo = ".$mun_codigo;
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
    
    public function getBarriosByZona($zona_id){
        $dql = "SELECT b FROM KijhoStructureBundle:Barrios b JOIN  KijhoStructureBundle:Municipios m WITH mid = b.munCodigo LEFT JOIN  KijhoStructureBundle:Zona z WITH zid = b.zona "
                ."WHERE b.zona = ".$zona_id;
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }
    
    /**
     * @author Juan Ocampo
     * @date Jun 2015
     * Esta función permite obtener las entidades barrios que pertenezcan a una
     * zona data por la variable zona_id, como también los barrios que no estan
     * asignados a ninguna zona en un municipio con ORM\Id mun_id. Se utiliza para
     * modificar los barrios que pertenecen y/o pueden pertenecer a dicha zona.
     * 
     * @param int $zona_id
     * @param int $mun_id
     * @return array $barrios
     */
    public function getBarriosEditarZona ($zona_id, $mun_id){
        $dql = 'SELECT b, m FROM KijhoStructureBundle:Barrios b JOIN b.munCodigo m';
//        $dql = 'SELECT b, z FROM KijhoStructureBundle:Barrios b JOIN b.zona z ';
//                . 'WHERE b.zona IS NULL';
//                . "b.zona is NULL";
//                . "b.zona IS EMPTY";
//        $dql = "SELECT b, m, z FROM KijhoStructureBundle:Barrios b JOIN b.munCodigo m LEFT JOIN b.zona z "
//                . "WHERE b.munCodigo = " . $mun_id ;
//        return $dql;
        
//        $rsm = new ResultSetMapping();
//        
//        $sql = 'SELECT b0_.cod_barrio AS cod_barrio_0, b0_.nombre_barrio AS nombre_barrio_1'
//                . ', b0_.mun_codigo AS mun_codigo_4'
//                . ', b0_.dep_codigo AS dep_codigo_5'
//                . ', b0_.zona_id AS zona_id_6'
//                . ' FROM KijhoStructureBundle:barrios b0_ '
//                . 'WHERE b0_.zona_id IS NULL';
//        
//        $native_query = $this->getEntityManager()->createNativeQuery($sql, $rsm);
        
        
        $query = $this->getEntityManager()->createQuery($dql);
//        return $query->getSQL();
        return $query->getResult();
    }
}
