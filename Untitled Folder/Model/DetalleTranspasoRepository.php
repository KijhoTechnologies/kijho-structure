<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of DetalleTranspasoRepository
 *
 * @author hector
 */
class DetalleTranspasoRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT trsal.detrsalCodigo AS codigoRegistro, "
                . "trsal.tranProcodsalcant AS cantidad, "
                . "trsal.tranProdCosto AS precio_compra, "
                . "CONCAT(t.tranFecha, ' ', t.tranHora) AS fecha, "
                . "t.tranHora AS hora, "
                . "trsal.idFk AS codigoFactura, "
                . "4 AS tipo , "
                . "t.tranHora AS horario "
                . "FROM KijhoStructureBundle:DetalleTranspaso trsal "
                . "JOIN KijhoStructureBundle:Transpaso t "
                . "WITH trsal.idFk = t.tranCodigo "
                . "WHERE t.tranFecha <= :fechaFin "
                . "AND trsal.tranProcodsal = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'DetalleTranspaso', 'response' => "error " . $ex->getMessage()];
        }
    }

}
