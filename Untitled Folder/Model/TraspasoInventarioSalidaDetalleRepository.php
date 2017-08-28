<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of TraspasoInventarioSalidaDetalleRepository
 *
 * @author hector
 */
class TraspasoInventarioSalidaDetalleRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT tras.traspasoDetalleCodigo AS codigoRegistro, "
                . "tras.prodCantidad AS cantidad, "
                . "tras.prodCostoUnit AS precio_compra, "
                . "CONCAT(tras.traspasoDetalleFecha, ' ', tras.traspasoDetalleHora) AS fecha, "
                . "tras.traspasoDetalleHora AS hora, "
                . "tras.traspasoCodigo AS codigoFactura, "
                . "16 AS tipo, "
                . "tras.traspasoDetalleHora AS horario "
                . "FROM KijhoStructureBundle:TraspasoInventarioSalidaDetalle tras "
                . "JOIN KijhoStructureBundle:TraspasoInventarioSalida t "
                . "WITH tras.traspasoCodigo = t.trasSalidaCodigo "
                . "WHERE t.trasAnulado = 'No' "
                . "AND tras.traspasoDetalleFecha <= :fechaFin "
                . "AND  tras.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'TraspasoInventarioSalidaDetalle', 'response' => "error " . $ex->getMessage()];
        }
    }

}
