<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of FacturaFisicaVentaDetalleRepository
 *
 * @author hector
 */
class FacturaFisicaVentaDetalleRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {

        $dql = "SELECT fd.facfvdCodigo AS codigoRegistro, "
                . "fd.facfvdCantidad AS cantidad, "
                . "fd.facfvdPrecioVenta AS precio_compra, "
                . "CONCAT(fd.facfvdFecha, ' ', fd.facfvdHora) AS fecha, "
                . "fd.facfvdHora AS hora, "
                . "fd.facfvCodigo AS codigoFactura, "
                . "6 AS tipo, "
                . "fd.facfvdHora AS horario, "
                . "cli.id AS codigo_actor, "
                . "cli.nombreEmpresa AS nombre_actor "
                . "FROM KijhoStructureBundle:FacturaFisicaVentaDetalle fd "
                . "JOIN KijhoStructureBundle:FacturaFisicaVenta AS ff WITH ff.facfvCodigo = fd.facfvCodigo "
                . "JOIN KijhoStructureBundle:Cliente AS cli WITH cli.id = ff.cliCodigo "
                . "WHERE fd.facfvdFecha <= :fechaFin "
                . "AND fd.prodCodigo = :prodCodigo ";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'FacturaFisicaVentaDetalle', 'response' => "error " . $ex->getMessage()];
        }
    }

}
