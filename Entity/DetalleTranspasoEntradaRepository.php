<?php
namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of DetalleTranspasoEntradaRepository
 *
 * @author hector
 */
class DetalleTranspasoEntradaRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT trent.detrentCodigo AS codigoRegistro, "
                . "trent.tranProcodentcant AS cantidad, "
                . "trent.tranProdCosto AS precio_compra, "
                . "CONCAT(t.tranFecha, ' ', t.tranHora) AS fecha, "
                . "t.tranHora AS hora, "
                . "trent.idFk AS codigoFactura, "
                . "3 AS tipo, "
                . "t.tranHora AS horario "
                . "FROM KijhoStructureBundle:DetalleTranspasoEntrada trent "
                . "JOIN KijhoStructureBundle:Transpaso t  "
                . "WITH trent.idFk = t.tranCodigo "
                . "WHERE t.tranFecha <= :fechaFin "
                . "AND trent.tranProcodent = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'DetalleTranspasoEntrada', 'response' => "error " . $ex->getMessage()];
        }
    }
}
