<?php

namespace Kijho\StructureBundle\Model;

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

    public function calculateProductExistence($prod_id) {
        $sql = 'SELECT inventario FROM inventario_kardex WHERE cod_prod = ' . $prod_id;
        $arrayInventory = $this->getEntityManager()->getConnection()->prepare($sql);
        $arrayInventory->execute();
        $result = $arrayInventory->fetchAll();

        $prodInventory = (float) $result[0]["inventario"];

        return $prodInventory;
    }

    public function getProdSync($product_id) {

        $dql = 'SELECT p, c, b, rp FROM KijhoStructureBundle:Producto p JOIN p.category c JOIN p.baseProducts b JOIN b.rawProduct rp '
                . 'WHERE p.id > :product_id';

        $query = $this->getEntityManager()->createQuery($dql);

        $query->setParameter('product_id', $product_id);

        return $query->getArrayResult();
    }

    /**
     * @author Juan Ocampo - Jan 2016
     * Método que retorna el ORM\Id del último producto registrado en Producto
     */
    public function getLastProductId() {
        $dql = 'SELECT MAX(p.id) AS maxId FROM KijhoStructureBundle:Producto p';
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
        $dql = "SELECT p.id, p.name "
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
                . "OR p.id = :codeProd";
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

    function SeeOutputs($fechaInicio, $fechaFin, $categoria, $usuario, $tipo = "") {

        $AND = '';
        if ($fechaInicio != '' && $fechaFin != '') {
            $AND .= "AND s.sal_fecha >= '$fechaInicio' AND s.sal_fecha <= '$fechaFin' ";
        }
        if ($categoria > 0 || $categoria != '') {
            $AND .= " AND c.cat_codigo = $categoria ";
        }

        if ($usuario != 0) {
            $AND .= " AND fac.usu_codigo = $usuario ";
        }

        if ($tipo != "") {
            $AND .= " AND p.materia_prima = $tipo ";
        }
        $sql = "SELECT cat_nombre, 
                    c.cat_codigo, 
                    p.prod_nombre, 
                    p.peso, 
                    p.prod_iva as tipoIvaProd, 
                    p.prod_codigo as codProd, 
                    p.prod_iva, 
                    p.prod_venta_unit, 
                    p.materia_prima,
                    p.prod_categoria,
                    fac.usu_codigo, 
                    sum(sal_cantidad) AS sCantidad, 
                    sum(sal_total) as sTotal,
                    sum(sal_iva_16 + sal_iva_10 + sal_iva_5) as ivaTotal,
                    func_existencias_producto(p.prod_codigo, '$fechaInicio') AS inventario_fecha_ini,
                    func_existencias_producto(p.prod_codigo, '$fechaFin') AS inventario_fecha_fin,
                    func_existencias_producto(p.prod_codigo, NULL) AS inventario
                FROM categoria c, salida s, producto p, factura_ventas fac, usuario u
                WHERE s.prod_codigo = p.prod_codigo AND s.facv_codigo = fac.facv_codigo AND fac.usu_codigo = u.usu_codigo AND s.devolucion = 0 AND fac.facv_anulada ='no' AND fac.only_change = 0 AND u.usu_delete = 0
                AND c.cat_codigo = p.prod_categoria
                $AND
                GROUP BY p.prod_codigo
                ORDER BY cat_codigo";
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    
    function utilityProductsAll($fecha_inicio, $fecha_fin, $usuario = '', $vendedor = '') {
        //        $usuario = 1;
        $where_usuario = '';
        if ($usuario != '' && $usuario != 0) {
            $where_usuario = ' AND fv.usu_codigo =' . $usuario;
        }

//        $vendedor = 9;
        $where_vendedor = '';
        if ($vendedor != '' && $vendedor != 0) {
            $where_vendedor = ' AND fv.facv_vendedor =' . $vendedor;
        }

        $sql = "(SELECT sum(sal_precio_compra*sal_cantidad) AS cant1, 
                        sum(sal_precio_venta*sal_cantidad) AS cant2, 
                        sum(sal_cantidad) AS cant3, 
                        cli_nombre_empresa, 
                        prod_nombre, prod_inventario 
                 FROM   salida AS s, factura_ventas AS fv, cliente AS c, producto AS p
                 WHERE sal_fecha>='$fecha_inicio' AND sal_fecha<='$fecha_fin' 
                       AND s.devolucion = 0
                       AND s.facv_codigo = fv.facv_codigo AND fv.cli_codigo = c.cli_codigo 
                       AND s.prod_codigo = p.prod_codigo" . $where_usuario . $where_vendedor
                . " GROUP BY p.prod_codigo)";

        $sql .= ' UNION ';

        $sql .= "(SELECT sum(facfvd_precio_compra*facfvd_cantidad) AS cant1, 
                         sum(facfvd_precio_venta*facfvd_cantidad) AS cant2, 
                         sum(facfvd_cantidad) AS cant3, 
                         cli_nombre_empresa, prod_nombre, prod_inventario 
                  FROM   factura_fisica_venta_detalle AS s, factura_fisica_venta AS fv, cliente AS c, producto AS p 
                         WHERE facfvd_fecha>='$fecha_inicio' AND facfvd_fecha<='$fecha_fin' 
                         AND s.facfv_codigo = fv.facfv_codigo AND fv.cli_codigo = c.cli_codigo 
                         AND s.prod_codigo = p.prod_codigo" . $where_usuario . " GROUP BY p.prod_codigo)";
//        die($sql);
       $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function utilityProducts($fecha_inicio, $fecha_fin, $prod_codigo, $usuario = '', $vendedor = '') {
        $usuario = 1;
        $where_usuario = '';
        if ($usuario != '' && $usuario != 0) {
            $where_usuario = ' AND fv.usu_codigo =' . $usuario;
        }

        $vendedor = 9;
        $where_vendedor = '';
        if ($vendedor != '' && $vendedor != 0) {
            $where_vendedor = ' AND fv.facv_vendedor =' . $vendedor;
        }

        $sql = "(SELECT sum(sal_precio_compra*sal_cantidad) AS cant1, sum(sal_precio_venta*sal_cantidad) AS cant2, sum(sal_cantidad) AS cant3, cli_nombre_empresa, prod_nombre FROM salida AS s, factura_ventas AS fv, cliente AS c, producto AS p WHERE sal_fecha>='" .
                $fecha_inicio . "' AND sal_fecha<='" . $fecha_fin .
                "' AND s.devolucion = 0 AND s.facv_codigo = fv.facv_codigo AND fv.cli_codigo = c.cli_codigo AND s.prod_codigo = p.prod_codigo AND s.prod_codigo = " .
                $prod_codigo . $where_usuario . $where_vendedor . " GROUP BY c.cli_codigo)";
        $sql .= ' UNION ';
        $sql .= "(SELECT sum(facfvd_precio_compra*facfvd_cantidad) AS cant1, sum(facfvd_precio_venta*facfvd_cantidad) AS cant2, sum(facfvd_cantidad) AS cant3, cli_nombre_empresa, prod_nombre FROM factura_fisica_venta_detalle AS s, factura_fisica_venta AS fv, cliente AS c, producto AS p WHERE facfvd_fecha>='" .
                $fecha_inicio . "' AND facfvd_fecha<='" . $fecha_fin .
                "' AND s.facfv_codigo = fv.facfv_codigo AND fv.cli_codigo = c.cli_codigo AND s.prod_codigo = p.prod_codigo AND s.prod_codigo = " .
                $prod_codigo . $where_usuario . " GROUP BY c.cli_codigo)";
        
        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }

}
