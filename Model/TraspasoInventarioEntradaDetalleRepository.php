<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of TraspasoInventarioEntradaDetalleRepository
 *
 * @author hector
 */
class TraspasoInventarioEntradaDetalleRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT te.traspasoDetalleCodigo AS codigoRegistro, "
                . "te.prodCantidad AS cantidad, "
                . "te.prodCostoUnit AS precio_compra, "
                . "CONCAT(te.traspasoDetalleFecha, ' ', te.traspasoDetalleHora) AS fecha, "
                . "te.traspasoDetalleHora AS hora, "
                . "te.traspasoCodigo AS codigoFactura, "
                . "15 AS tipo, "
                . "te.traspasoDetalleHora AS horario "
                . "FROM KijhoStructureBundle:TraspasoInventarioEntradaDetalle te "
                . "JOIN  KijhoStructureBundle:TraspasoInventarioEntrada tie "
                . "WITH te.traspasoCodigo = tie.trasEntradaCodigo "
                . "WHERE tie.trasAnulado = :voied "
                . "AND te.traspasoDetalleFecha <= :fechaFin "
                . "AND te.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo,
                'voied' => TraspasoInventarioEntradaDetalle::TRASPASO_INVENTARIO_ENTRADA_ANULADO_NO]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'TraspasoInventarioentradaDetalle', 'response' => "error " . $ex->getMessage()];
        }
    }

}
