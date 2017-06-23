<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of RegaloEntradaRepository
 *
 * @author hector
 */
class RegaloEntradaRepository extends EntityRepository {
    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT reen.reenCodigo AS codigoRegistro, "
                . "reen.reenCantidad AS cantidad, "
                . "reen.reenCostoUnit AS precio_compra, "
                . "CONCAT(reen.reenFecha, ' ', reen.reenHora) AS fecha, "
                . "reen.reenHora AS hora, "
                . "reen.prreCodigo AS codigoFactura, "
                . "9 AS tipo, "
                . "reen.reenHora AS horario "
                . "FROM KijhoStructureBundle:RegaloEntrada reen "
                . "WHERE reen.reenFecha <= :fechaFin "
                . "AND  reen.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'RegaloEntrada', 'response' => "error " . $ex->getMessage()];
        }
    }
}
