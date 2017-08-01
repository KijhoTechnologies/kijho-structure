<?php
namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ProductsReceivedDetailsRepository
 *
 * @author hector
 */
class ProductsReceivedDetailsRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {

        $dql = "SELECT pred.preDetCode AS codigoRegistro, "
                . "pred.preDetAmount AS cantidad, "
                . "pred.preDetCost AS precio_compra, "
                . "pre.prorecDate AS fecha, "
                . "CONCAT(pre.prorecDate, '') AS hora, "
                . "pre.prorecCode AS codigoFactura, "
                . "8 AS tipo, "
                . "pre.prorecDate AS horario, "
                . "pro.provCodigo AS codigo_actor, "
                . "pro.provNombre AS nombre_actor "
                . "FROM KijhoStructureBundle:ProductsReceivedDetails pred "
                . "JOIN KijhoStructureBundle:ProductsReceived pre WITH pre.prorecCode = pred.preDetPrecId "
                . "JOIN KijhoStructureBundle:Proveedor as pro WITH pro.provCodigo = pre.prorecSupplier "
                . "WHERE pre.prorecDate <= :fechaFin "
                . "AND pred.preDetProduct = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => "$fechaFin 23:59:59",
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'ProductsReceivedDetails', 'response' => "error " . $ex->getMessage()];
        }
    }

}
