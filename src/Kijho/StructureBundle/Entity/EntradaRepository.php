<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of EntradaRepository
 *
 * @author hector
 */
class EntradaRepository extends EntityRepository {

    /**
     * consulta el movimiento del producto
     * @param string $fechaFin
     * @param integer $prodCodigo
     * @return array
     */
    public function getKardex($fechaFin, $prodCodigo) {

        $dql = "SELECT "
                . "ent.entCodigo AS codigoRegistro, "
                . "ent.entCantidad AS cantidad, "
                . "ent.entPrecioCompra AS precio_compra, "
                . "CONCAT(ent.entFecha, ' ', ent.entHora) AS fecha, "
                . "ent.entHora AS hora, "
                . "ent.facpCodigo AS codigoFactura , "
                . "5 AS tipo, "
                . "ent.entHora AS horario, "
                . "pro.provCodigo AS codigo_actor, "
                . "pro.provNombre AS nombre_actor "
                . "FROM Kijho\Seitem\BackendBundle\Entity\Entrada as ent "
                . "JOIN Kijho\Seitem\BackendBundle\Entity\FacturaProveedores AS fp WITH fp.facpCodigo = ent.facpCodigo "
                . "JOIN Kijho\Seitem\BackendBundle\Entity\Proveedor as pro WITH pro.provCodigo = fp.provCodigo "
                . "WHERE "
                . "ent.entFecha <= :fechaFin "
                . "AND ent.prodCodigo = :prodCodigo";

        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['fechaFin' => $fechaFin, 'prodCodigo' => $prodCodigo]);
            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'entity' => 'Entrada', 'response' => "error " . $ex->getMessage()];
        }
    }

}
