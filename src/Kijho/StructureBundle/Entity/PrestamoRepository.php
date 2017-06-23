<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of PrestamoRepository
 *
 * @author hector
 */
class PrestamoRepository extends EntityRepository {
    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {

        $dql = "SELECT pres.presCodigo AS codigoRegistro, "
                . "pe.preeCantidad AS cantidad, "
                . "pe.preeValorunidad AS precio_compra, "
                . "CONCAT(pres.presFecha, ' ', pres.presHora) AS fecha, "
                . "pres.presHora AS hora, "
                . "pres.presCodigo AS codigoFactura, "
                . "(CASE "
                . "WHEN pres.presTipo = 1 THEN 7.1 "
                . "WHEN pres.presTipo = 2 THEN 7.2 "
                . "ELSE 0 "
                . "END) AS tipo, "
                . "pres.presHora AS horario "
                . "FROM Kijho\Seitem\BackendBundle\Entity\Prestamo pres, Kijho\Seitem\BackendBundle\Entity\PrestamosEntrada pe "
                . "WHERE "
                . "(pres.presTipo = 1 "
                . "OR pres.presTipo = 2) "
                . "AND pres.presEstado = 1 "
                . "AND pres.presFecha <= :fechaFin "
                . "AND pres.presTipo = 1 "
                . "AND pres.presCodigo = pe.presCodigo "
                . "AND pe.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'Prestamo', 'response' => "error " . $ex->getMessage()];
        }
    }
    
    public function getKardex2($fechaFin, $prodCodigo) {

        $dql = "SELECT pres.presCodigo AS codigoRegistro, "
                . "ps.presCantidad AS cantidad, "
                . "ps.presValorunidad AS precio_compra, "
                . "CONCAT(pres.presFecha, ' ', pres.presHora) AS fecha, "
                . "pres.presHora AS hora, "
                . "pres.presCodigo AS codigoFactura, "
                . "(CASE "
                . "WHEN pres.presTipo = 1 THEN 7.1 "
                . "WHEN pres.presTipo = 2 THEN 7.2 "
                . "ELSE 0 "
                . "END) AS tipo, "
                . "pres.presHora AS horario "
                . "FROM Kijho\Seitem\BackendBundle\Entity\Prestamo pres, Kijho\Seitem\BackendBundle\Entity\PrestamosSalida ps "
                . "WHERE "
                . "(pres.presTipo = 1 "
                . "OR pres.presTipo = 2) "
                . "AND pres.presEstado = 1 "
                . "AND pres.presFecha <= :fechaFin "
                . "AND pres.presTipo = 2 "
                . "AND pres.presCodigo = ps.prestaCodigo "
                . "AND ps.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'Prestamo', 'response' => "error " . $ex->getMessage()];
        }
    }
}
