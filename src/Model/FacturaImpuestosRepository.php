<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of FacturaImpuestosRepository
 *
 * @author Angel Andres Diaz Calle
 */
class FacturaImpuestosRepository extends EntityRepository {

    function getValueOneTaxe($tipo, $impId, $fechaInicio, $fechaFin) {


        $sql = "SELECT SUM(fi.fac_imp_valor) AS totalIva, fi.fac_imp_iva, fv.facv_fecha, fv.facv_codigo FROM factura_impuestos fi JOIN factura_ventas fv ON fi.fac_codigo = fv.facv_codigo"
                . " WHERE fv.facv_fecha >= '" . $fechaInicio . "' AND fv.facv_fecha <= '" . $fechaFin . "' AND fv.facv_anulada = 'no' AND fi.fac_tipo = " . $tipo . " AND fi.fac_imp_iva = " . $impId . "";
           $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

}
