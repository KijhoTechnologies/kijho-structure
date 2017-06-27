<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of CuadreDetalleRepository
 *
 * @author hector
 */
class CuadreDetalleRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {
        $dql = "SELECT dc.cuadetCodigo AS codigoRegistro, "
                . "dc.cuadetCantEntrega AS cantidadEntrega, "
                . "dc.cuadetCantDevuelve AS cantidadDevuelve, "
                . "dc.prodCosto AS precio_compra, "
                . "CONCAT(cua.cuaFecha, ' ', cua.cuaHora) AS fecha, "
                . "cua.cuaHora AS hora, "
                . "cua.cuaCodigo AS codigoFactura, "
                . "1 AS tipo, "
                . "cua.cuaHora AS horario, "
                . "cli.id AS codigo_actor, "
                . "cli.name AS nombre_actor "
                . "FROM KijhoStructureBundle:CuadreDetalle dc "
                . "JOIN KijhoStructureBundle:Cuadre cua WITH dc.cuaCodigo = cua.cuaCodigo "
                . "JOIN KijhoStructureBundle:Cliente AS cli WITH cli.id = cua.cliCodigo "
                . "WHERE cua.facvCodigo = 0 "
                . "AND cua.cuaFecha <= :fechaFin "
                . "AND dc.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin,
                'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'CuadreDetalle', 'response' => "error " . $ex->getMessage()];
        }
    }
}
