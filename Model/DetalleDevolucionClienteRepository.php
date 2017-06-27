<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of DetalleDevolucionClienteRepository
 *
 * @author hector
 */
class DetalleDevolucionClienteRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT devc.ddeclCodigo AS codigoRegistro, "
                . "devc.ddeclCantidad AS cantidad, "
                . "devc.ddeclCostoUnit AS precio_compra, "
                . "CONCAT(dc.declFecha, ' ', dc.declHora) AS fecha, "
                . "dc.declHora AS hora, "
                . "devc.declCodigo AS codigoFactura, "
                . "2 AS tipo, "
                . "dc.declHora AS horario "
                . "FROM KijhoStructureBundle:DetalleDevolucionCliente devc "
                . "JOIN KijhoStructureBundle:DevolucionCliente dc "
                . "WITH devc.declCodigo = dc.declCodigo "
                . "WHERE dc.declFecha <= :fechaFin "
                . "AND devc.prodCodigo = :prodCodigo ";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'DetalleDevolucionCliente', 'response' => "error " . $ex->getMessage()];
        }
    }

}
