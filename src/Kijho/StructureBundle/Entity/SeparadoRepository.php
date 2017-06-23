<?php
namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of SeparadoRepository
 *
 * @author hector
 */
class SeparadoRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo){

        $dql = "SELECT sep.salSepCodigo AS codigoRegistro, "
                . "sep.salSepCantidad AS cantidad, "
                . "sep.salSepPrecioVenta AS precio_compra, "
                . "CONCAT(sep.salSepFecha, ' ', sep.salSepHora) AS fecha, "
                . "sep.salSepHora AS hora, "
                . "sep.sepCodigo AS codigoFactura, "
                . "14 AS tipo , "
                . "sep.salSepHora AS horario, "
                . "cli.id AS codigo_actor, "
                . "cli.name AS nombre_actor "
                . "FROM Kijho\Seitem\BackendBundle\Entity\SalidaSeparado sep "
                . "JOIN Kijho\Seitem\BackendBundle\Entity\Separado sp  "
                . "WITH sep.sepCodigo = sp.sepCodigo "
                . "JOIN Kijho\Seitem\BackendBundle\Entity\Cliente AS cli WITH cli.id = sp.cliCodigo "
                . "WHERE sep.salSepFecha <= :fechaFin "
                . "AND sep.prodCodigo = :prodCodigo "
                . "AND sp.sepFacturado = :billed "
                . "AND sp.sepAnulada = :voied";
        
        try{
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin, 
                'prodCodigo' => $prodCodigo, 
                'voied' => Separado::SEPARADO_ANULADO_NO, 
                'billed' => Separado::SEPARADO_FACTURADO_NO]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'Separado', 'response' =>  "error ".$ex->getMessage()];
        }
    }
}
