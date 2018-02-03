<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of CuadreDetalleRepository
 *
 * @author hector
 */
class ConfiguracionRepository extends EntityRepository {

    /**
     * 	Función responsable de obtener los datos de configuracion actual
     * 	@author: Cesar Giraldo
     * 	@date: Septiembre 29 de 2012
     */
    function obtenerConfiguracion() {
        $sql = "SELECT conf_regimen, conf_resol_simplificado, conf_compras, conf_balanza, 
        conf_fechas, conf_saldoAnterior, conf_multiple_pago, conf_impresion_ventas, conf_impresion_iva, 
        conf_ruta_local, conf_nit_client, conf_numero_licencia, conf_licencia_online, conf_iva_1, conf_iva_2, 
        conf_iva_3, conf_correo_backup_1, conf_correo_backup_2, conf_correo_backup_3, conf_language, conf_tipoUtilidad, 
        conf_inventario_negativo, conf_preguntar_licencia_local, conf_preguntar_numero_caja, conf_lista_facturas, 
        conf_tipo_impresora_pos, conf_obtener_peso_directo, conf_enviar_reporte_email, conf_correo_destinatario_1, 
        conf_correo_destinatario_2, conf_correo_destinatario_3, conf_mensaje_cliAtrasados, conf_ajustePeso, conf_decimales, 
        conf_zetaDescuento, conf_fechaNivelarInv, conf_nivelarInventario, conf_vendedor, conf_bdCentralizada, 
        conf_urlBd, conf_agregar_producto, conf_cambiar_precio_remision, conf_Uvt, conf_salario_minimo, conf_tarifa_reteiva, 
        conf_tarifa_retecree, conf_afecta_caja, conf_imagen_cotizaciones, conf_dtoIva16,conf_dtoGeneral, conf_depto, conf_ciudad, 
        conf_excel_contable, conf_tipoSeitem, conf_precio_producto_venta, conf_condiconar_categoria, conf_impr_vr_unit, 
        conf_concat_prod_categ, conf_unidades_abonos, conf_registrarEliminacionProductos, conf_imprimir_fac_abonos, 
        conf_usuario_venta, conf_comentarios_venta, conf_procentajeDescVentas,
        conf_zetaDescuento16, conf_zetaDescuento10, conf_zetaDescuento5, conf_zetaDescuentoExento,conf_zetaDescuentoExcluido,
        conf_zetaDescuentoSimplificado, conf_inventario_actual, conf_logo_original, conf_estado_logo_pdf, 
        conf_posicion_logo_pdf, conf_posicion_cabecera, conf_estado_forPago, conf_estado_cliente, conf_estado_vendedor, 
        conf_estado_nit_cedula, conf_estado_telefono, conf_estado_celular, conf_estado_direccion, conf_estado_ciudad, 
        conf_estado_departamento, conf_gestion_rutas_zonas, conf_fecha_vencimiento, conf_estado_produ_cambio,
        conf_mensaje_invent_negati,conf_historial_abono
        FROM configuracion 
        WHERE conf_codigo = 1";
        $data = new \stdClass();

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();
//        $client = $stmt->fetchAll();

        if ($result = $stmt->fetchAll()) {

            foreach ($result as $row) {
//                dump($row);
//            die;

                $data->regimen = $row["conf_regimen"];
                $data->resolucionSimplificado = $row["conf_resol_simplificado"];
                $data->compras = $row["conf_compras"];
                $data->balanza = $row["conf_balanza"];
                $data->fechas = $row["conf_fechas"];
                $data->saldo_anterior = $row["conf_saldoAnterior"];
                $data->multiple_pago = $row["conf_multiple_pago"];
                $data->impresion_ventas = $row["conf_impresion_ventas"];
                $data->impresion_iva = $row["conf_impresion_iva"];
                $data->ruta_local = $row["conf_ruta_local"];
                $data->nit_cliente = $row["conf_nit_client"];
                $data->numero_licencia = $row["conf_numero_licencia"];
                $data->licencia_online = $row["conf_licencia_online"];
                $data->iva_1 = $row["conf_iva_1"];
                $data->iva_2 = $row["conf_iva_2"];
                $data->iva_3 = $row["conf_iva_3"];
                $data->correo_backup_1 = $row["conf_correo_backup_1"];
                $data->correo_backup_2 = $row["conf_correo_backup_2"];
                $data->correo_backup_3 = $row["conf_correo_backup_3"];
                $data->language = $row["conf_language"];
                $data->tipoUtilidad = $row["conf_tipoUtilidad"];
                $data->inventario_negativo = $row["conf_inventario_negativo"];
                $data->preguntar_licencia_local = $row["conf_preguntar_licencia_local"];
                $data->preguntar_numero_caja = $row["conf_preguntar_numero_caja"];
                $data->conf_lista_facturas = $row["conf_lista_facturas"];
                $data->tipo_impresora_pos = $row["conf_tipo_impresora_pos"];
                $data->obtener_peso_directo = $row["conf_obtener_peso_directo"];
                $data->conf_enviar_reporte_email = $row["conf_enviar_reporte_email"];
                $data->conf_correo_destinatario_1 = $row["conf_correo_destinatario_1"];
                $data->conf_correo_destinatario_2 = $row["conf_correo_destinatario_2"];
                $data->conf_correo_destinatario_3 = $row["conf_correo_destinatario_3"];
                $data->conf_mensaje_cliAtrasados = $row["conf_mensaje_cliAtrasados"];
                $data->conf_ajustePeso = $row["conf_ajustePeso"];
                $data->conf_decimales = $row["conf_decimales"];
                $data->conf_zetaDescuento = $row["conf_zetaDescuento"];
                $data->conf_fechaNivelarInv = $row["conf_fechaNivelarInv"];
                $data->conf_nivelarInv = $row["conf_nivelarInventario"];
                $data->conf_vendedor = $row["conf_vendedor"];
                $data->conf_bdCentral = $row["conf_bdCentralizada"];
                $data->conf_bdCentralUrl = $row["conf_urlBd"];
                $data->agregar_producto = $row["conf_agregar_producto"];
                $data->conf_cambiar_precio_remision = $row["conf_cambiar_precio_remision"];
                $data->base_uvt = $row["conf_Uvt"];
                $data->salario_minimo = $row["conf_salario_minimo"];
                $data->tarifa_reteIva = $row['conf_tarifa_reteiva'];
                $data->tarifa_retecree = $row['conf_tarifa_retecree'];
                $data->conf_afecta_caja = $row["conf_afecta_caja"];
                $data->conf_imagen_cotizaciones = $row['conf_imagen_cotizaciones'];
                $data->descuento_iva_16 = $row['conf_dtoIva16'];
                $data->descuento_general = $row['conf_dtoGeneral'];
                $data->depto = $row['conf_depto'];
                $data->ciudad = $row['conf_ciudad'];
                $data->excelContable = $row['conf_excel_contable'];
                $data->tipoSeitem = $row['conf_tipoSeitem'];
                $data->conf_precio_producto_venta = $row['conf_precio_producto_venta'];
                $data->conf_condiconar_categoria = $row['conf_condiconar_categoria'];
                $data->conf_impr_vr_unit = $row['conf_impr_vr_unit'];
                $data->concatenar_prod_categ = $row['conf_concat_prod_categ'];
                $data->registrarEliminacionProductoVenta = $row['conf_registrarEliminacionProductos'];
                $data->conf_unidades_abonos = $row['conf_unidades_abonos'];
                $data->imprimirFacAbonos = $row['conf_imprimir_fac_abonos'];
                $data->usuario_venta = $row['conf_usuario_venta'];
                $data->comentarios_venta = $row['conf_comentarios_venta'];
                $data->conf_procentajeDescVentas = $row['conf_procentajeDescVentas'];
                $data->conf_inventario_actual = $row['conf_inventario_actual'];
                $data->conf_zetaDescuento16 = $row["conf_zetaDescuento16"];
                $data->conf_zetaDescuento10 = $row["conf_zetaDescuento10"];
                $data->conf_zetaDescuento5 = $row["conf_zetaDescuento5"];
                $data->conf_zetaDescuentoExento = $row["conf_zetaDescuentoExento"];
                $data->conf_zetaDescuentoExcluido = $row["conf_zetaDescuentoExcluido"];
                $data->conf_zetaDescuentoSimplificado = $row["conf_zetaDescuentoSimplificado"];
                $data->conf_logo_original = $row["conf_logo_original"];
                $data->conf_estado_logo_pdf = $row["conf_estado_logo_pdf"];
                $data->conf_posicion_logo_pdf = $row["conf_posicion_logo_pdf"];
                $data->conf_posicion_cabecera = $row["conf_posicion_cabecera"];
                $data->conf_estado_forPago = $row["conf_estado_forPago"];
                $data->conf_estado_cliente = $row["conf_estado_cliente"];
                $data->conf_estado_vendedor = $row["conf_estado_vendedor"];
                $data->conf_estado_nit_cedula = $row["conf_estado_nit_cedula"];
                $data->conf_estado_telefono = $row["conf_estado_telefono"];
                $data->conf_estado_celular = $row["conf_estado_celular"];
                $data->conf_estado_direccion = $row["conf_estado_direccion"];
                $data->conf_estado_ciudad = $row["conf_estado_ciudad"];
                $data->conf_estado_departamento = $row["conf_estado_departamento"];
                $data->conf_gestion_rutas_zonas = $row["conf_gestion_rutas_zonas"];
                $data->conf_estado_produ_cambio = $row["conf_estado_produ_cambio"];
                $data->conf_fecha_vencimiento = $row["conf_fecha_vencimiento"];
                $data->conf_estado_produ_cambio = $row["conf_estado_produ_cambio"];
                /**
                 * Tecnical service
                 */
                $data->mensaje_inventario_negativo = $row['conf_mensaje_invent_negati'];
                $data->historial_abono = $row['conf_historial_abono'];
            }
            return $data;
        } else
            return false;
    }

    /**
     * obtenerDatosLicencia
     * Esta funcion permite obterner los datos relacionados con la licencia del usuario
     * @author Kijho Technologies S.A.S
     */
    function getLicenceData() {
        $dql = "SELECT c.confNitClient,
                       c.confNumeroLicencia,
                       c.confLicenciaOnline
                FROM KijhoStructureBundle:Configuracion c WHERE c.confCodigo = 1 ";

        $query = $this->getEntityManager()->createQuery($dql);
        return $query->getOneOrNullResult();
    }

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
                . "cli.nombreEmpresa AS nombre_actor "
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
