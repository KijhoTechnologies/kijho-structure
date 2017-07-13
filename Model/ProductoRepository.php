<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

/**
 * Description of ProductoRepository
 *
 * @author jocampo
 */
class ProductoRepository extends EntityRepository {

    /**
     * Feb 2016
     * @author Juan Ocampo <jocampo@kijho.com>
     * Método estático para consulta de existencias de un producto en inventario.
     * @param Producto $product
     */
//    public static function getProductExistence(Producto $product, $em) {
    public function getProductExistence($arrayProductId, $rawProducts) {
        $prodInventory = 0;

        if (!$rawProducts) {//Valida si contiene materia prima
            $prodInventory = $this->calculateProductExistence($arrayProductId[0]["prod_id"]);
        } else {
            //Obtener productos materia prima
            $arraySupplies = array();
            foreach ($arrayProductId as $prodId) {
                /*
                 * Se debe obtener la cantidad utilizada y con base en esta y el
                 * inventario existente de la misma, calcular la cantidad máxima
                 * de productos "compuestos" que es posible fabricar a partir de
                 * dicho inventario. Una vez se realice este proceso con todos
                 * los productos base, se debe seleccionar el menor numero de 
                 * productos derivados que se pueden fabricar con la materia pri-
                 * ma disponible.
                 */
                $prodInventory = $this->calculateProductExistence($prodId["prod_id"]);

                $prodDerAvailable = $prodInventory / (float) $prodId["quantity"];
                $arraySupplies[] = ($prodDerAvailable < 0) ? 0 : $prodDerAvailable;
            }
            //Se toma el menor valor contenido en arraySupplies
            $prodInventory = (int) min($arraySupplies);
        }

        return $prodInventory;
    }

    private function calculateProductExistence($prod_id) {
        $sql = 'SELECT inventario FROM KijhoStructureBundle:inventario_kardex WHERE cod_prod = ' . $prod_id;
        $arrayInventory = $this->getEntityManager()->getConnection()->prepare($sql);
        $arrayInventory->execute();
        $result = $arrayInventory->fetchAll();

        $prodInventory = (float) $result[0]["inventario"];

        return $prodInventory;
    }

    public function getProdSync($product_id) {

        $dql = 'SELECT p, c, b, rp FROM KijhoStructureBundle:Producto p JOIN p.category c JOIN p.baseProducts b JOIN b.rawProduct rp '
                . 'WHERE pid > :product_id';

        $query = $this->getEntityManager()->createQuery($dql);

        $query->setParameter('product_id', $product_id);

        return $query->getArrayResult();
    }

    /**
     * @author Juan Ocampo - Jan 2016
     * Método que retorna el ORM\Id del último producto registrado en Producto
     */
    public function getLastProductId() {
        $dql = 'SELECT MAX(pid) AS maxId FROM KijhoStructureBundle:Producto p';
//        return ('llega');
        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getResult();
    }

    public function updateProductsBycategory($categoria_id, $new_status) {

        $dql = "UPDATE Producto p SET p.deleted = :state WHERE p.category = :id";
        $query = $this->getEntityManager()->createQuery($dql);

        $query->setParameter('id', $categoria_id);
        $query->setParameter('state', $new_status);

        return $query->getResult();
    }

    public function getProdByCodeBarr($codeBarr, $codeProd) {
        $dql = "SELECT pid, p.name "
                . "FROM KijhoStructureBundle:Producto AS p WHERE "
                . "p.prodCodBarras = :codeBarr "
                . "OR p.prodCodBarras2 = :codeBarr "
                . "OR p.prodCodBarras3 = :codeBarr "
                . "OR p.prodCodBarras4 = :codeBarr "
                . "OR p.prodCodBarras5 = :codeBarr "
                . "OR p.prodCodBarras6 = :codeBarr "
                . "OR p.prodCodBarras7 = :codeBarr "
                . "OR p.prodCodBarras8 = :codeBarr "
                . "OR p.prodCodBarras9 = :codeBarr "
                . "OR p.prodCodBarras10 = :codeBarr "
                . "OR pid = :codeProd";
        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameters(['codeBarr' => $codeBarr, 'codeProd' => $codeProd]);

            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'response' => "error " . $ex->getMessage()];
        }
    }

    //Funcion encargada de retornar los Productos de una Categoria
    public function searchByCategory($catId) {
        $dql = "SELECT p.name, p.id "
                . "FROM KijhoStructureBundle:Producto as p "
                . "WHERE p.category = :catId AND p.deleted = '0' "
                . "order by p.name ASC";
        try {
            $query = $this->getEntityManager()->createQuery($dql);
            $query->setParameter('catId', $catId);

            return $query->getResult();
        } catch (Exception $ex) {
            return ['status' => 500, 'response' => "error " . $ex->getMessage()];
        }
    }

}
