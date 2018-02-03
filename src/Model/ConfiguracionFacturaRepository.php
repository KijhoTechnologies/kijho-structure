<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\EntityRepository;

/**
 * Description of CuadreDetalleRepository
 *
 * @author hector
 */
class ConfiguracionFacturaRepository extends EntityRepository {

    /**
     * 	Función responsable de obtener los datos de configuración de una factura.
     * 	@author: JSL
     * 	@date: 22/MAY/2012
     */
    function obtenerConfiguracionFactura() {
        $sql = "SELECT cf.confac_nombre_empresa, cf.confac_nit, cf.confac_direccion, cf.confac_cuidad_telefono, cf.confac_prefijo_factura,"
                . " cf.confac_texto_a, cf.confac_texto_b, cf.confac_texto_c, cf.confac_texto_d, cf.confac_texto_e, "
                . "cf.confac_nombre_empresa_x, cf.confac_nit_x, cf.confac_direccion_x, cf.confac_cuidad_telefono_x, "
                . "cf.confac_texto_a_x, cf.confac_texto_b_x, cf.confac_texto_c_x, cf.confac_texto_d_x, cf.confac_texto_e_x, "
                . "cf.confac_logo_x, cf.confac_estado_logo_pos, confac_estado_cabecera_pos, confac_estado_numero_pos, confac_estado_fecha_pos,"
                . "confac_estado_nit_pos, confac_estado_cliente_pos, confac_estado_direccion_pos, confac_estado_ciudad_pos, confac_estado_telefono_pos,"
                . "confac_estado_celular_pos, confac_estado_vendedor_pos, confac_estado_zona_pos, confac_estado_ruta_pos , conf_estado_firma_seitem "
                . "FROM configuracion_factura cf "
                . "WHERE cf.confac_codigo=1";
//        die($sql);
        $data = new \stdClass();

        $stmt = $this->getEntityManager()
                ->getConnection()
                ->prepare($sql);
        $stmt->execute();

        if ($result = $stmt->fetchAll()) {

            foreach ($result as $row) {
//                dump($row);
//            die;
                $data->confac_nombre_empresa = $row["confac_nombre_empresa"];
                $data->confac_nit = $row["confac_nit"];
                $data->confac_direccion = $row["confac_direccion"];
                $data->confac_cuidad_telefono = $row["confac_cuidad_telefono"];
                $data->confac_prefijo_factura = $row["confac_prefijo_factura"];
                $data->confac_texto_a = $row["confac_texto_a"];
                $data->confac_texto_b = $row["confac_texto_b"];
                $data->confac_texto_c = $row["confac_texto_c"];
                $data->confac_texto_d = $row["confac_texto_d"];
                $data->confac_texto_e = $row["confac_texto_e"];
                $data->confac_nombre_empresa_x = $row["confac_nombre_empresa_x"];
                $data->confac_nit_x = $row["confac_nit_x"];
                $data->confac_direccion_x = $row["confac_direccion_x"];
                $data->confac_cuidad_telefono_x = $row["confac_cuidad_telefono_x"];
                $data->confac_texto_a_x = $row["confac_texto_a_x"];
                $data->confac_texto_b_x = $row["confac_texto_b_x"];
                $data->confac_texto_c_x = $row["confac_texto_c_x"];
                $data->confac_texto_d_x = $row["confac_texto_d_x"];
                $data->confac_texto_e_x = $row["confac_texto_e_x"];
                $data->confac_logo_x = $row["confac_logo_x"];
                $data->confac_estado_logo_pos = $row["confac_estado_logo_pos"];
                $data->confac_estado_cabecera_pos = $row["confac_estado_cabecera_pos"];
                $data->confac_estado_numero_pos = $row["confac_estado_numero_pos"];
                $data->confac_estado_fecha_pos = $row["confac_estado_fecha_pos"];
                $data->confac_estado_nit_pos = $row["confac_estado_nit_pos"];
                $data->confac_estado_cliente_pos = $row["confac_estado_cliente_pos"];
                $data->confac_estado_direccion_pos = $row["confac_estado_direccion_pos"];
                $data->confac_estado_ciudad_pos = $row["confac_estado_ciudad_pos"];
                $data->confac_estado_telefono_pos = $row["confac_estado_telefono_pos"];
                $data->confac_estado_celular_pos = $row["confac_estado_celular_pos"];
                $data->confac_estado_vendedor_pos = $row["confac_estado_vendedor_pos"];
                $data->confac_estado_zona_pos = $row["confac_estado_zona_pos"];
                $data->confac_estado_ruta_pos = $row["confac_estado_ruta_pos"];
                $data->conf_estado_firma_seitem = $row["conf_estado_firma_seitem"];
            }
            return $data;
        } else
            return false;
    }

}
