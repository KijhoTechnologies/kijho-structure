<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of SalidaDevolucionRepository
 *
 * @author hector
 */
class SalidaDevolucionRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT devp.sadeCodigo AS codigoRegistro, "
                . "devp.sadeCantidad AS cantidad, "
                . "devp.sadeCostoUnit AS precio_compra, "
                . "CONCAT(devp.sadeFecha, ' ', devp.sadeHora) AS fecha, "
                . "devp.sadeHora AS hora, "
                . "devp.devCodigo AS codigoFactura, "
                . "12 AS tipo, "
                . "devp.sadeHora AS horario "
                . "FROM KijhoStructureBundle:SalidaDevolucion devp "
                . "WHERE devp.sadeFecha <= :fechaFin "
                . "AND devp.prodCodigo = :prodCodigo ";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'SalidaDevolucion', 'response' => "error " . $ex->getMessage()];
        }
    }

}
