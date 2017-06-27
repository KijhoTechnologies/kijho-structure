<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of RegaloSalidaRepository
 *
 * @author hector
 */
class RegaloSalidaRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT resa.id AS codigoRegistro, "
                . "resa.resaCantidad AS cantidad, "
                . "resa.resaCostoUnit AS precio_compra, "
                . "CONCAT(resa.resaFecha, ' ', resa.resaHora) AS fecha, "
                . "resa.resaHora AS hora, "
                . "IDENTITY(resa.clienteRegalo) AS codigoFactura, "
                . "10 AS tipo, "
                . "resa.resaHora AS horario "
                . "FROM KijhoStructureBundle:RegaloSalida resa "
                . "WHERE resa.resaFecha <= :fechaFin "
                . "AND  resa.product = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'RegaloSalida', 'response' => "error " . $ex->getMessage()];
        }
    }

}
