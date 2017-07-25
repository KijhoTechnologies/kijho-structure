<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of RemisionesRepository
 *
 * @author hector
 */
class RemisionesDetalleRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT rd.remdCodigo AS codigoRegistro, "
                . "rd.remdCantidad AS cantidad, "
                . "rd.remdPrecioVenta AS precio_compra, "
                . "CONCAT(rd.remdFecha, ' ', rd.remdHora) AS fecha, "
                . "rd.remdHora AS hora, "
                . "rd.remCodigo AS codigoFactura, "
                . "11 AS tipo, "
                . "rd.remdHora AS horario, "
                . "cli.id AS codigo_actor, "
                . "cli.nombreEmpresa AS nombre_actor "
                . "FROM  KijhoStructureBundle:RemisionesDetalle rd "
                . "JOIN  KijhoStructureBundle:Remisiones r WITH rd.remCodigo =  r.remCodigo "
                . "JOIN  KijhoStructureBundle:Cliente as cli WITH cli.id = r.cliCodigo "
                . "WHERE r.remAnulada = :anulada "
                . "AND rd.remdFecha <= :fechaFin "
                . "AND rd.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo, 
                'anulada' => Remisiones::REMISIONES_ANULADA_NO]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'ORM\Entity' => 'RemisionesDetalle', 'response' => "error " . $ex->getMessage()];
        }
    }
}
