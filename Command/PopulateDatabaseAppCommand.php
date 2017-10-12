<?php

namespace Kijho\StructureBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use LEVELLicensor\LEVELLicensorBundle\Util\Util;
use Kijho\StructureBundle\Model\MotivosFacDevolucion;
use Kijho\StructureBundle\Model\Pisos;
use Kijho\StructureBundle\Model\Module;

/**
 * Comando encargado de verificar si hay informacion para agregar o actualizar
 * sobre los metodos existentes
 * 
 * Con este comando si se utiliza para el esquema online se puede pasar el id de 
 * la licencia para la que se quieran realizar los cambios 
 * Ejemplo php bin/console app:populate:database 1 148
 * @author LUIS FERNANDO GRANADOS 
 */
class PopulateDatabaseAppCommand extends ContainerAwareCommand {

    const LOAD_DATA_ONLINE = 1;
    const LOAD_DATA_LOCAL = 2;

    /**
     * Constantes que nos dicen que tipo de app es
     */
    const TYPE_GENERAL = 1;
    const TYPE_TECNICAL_SERVICE = 2;
    const TYPE_RESTAURANT = 3;

    protected function configure() {

        $this->setName('app:populate:database')->setDescription('Comando encargado de '
                        . 'verificar si hay nuevos datos o si hay cambios sobre los datos '
                        . 'existentes')
                ->setDefinition([
                    new InputArgument('type', InputArgument::REQUIRED, 'The type app online or local'),
                    new InputArgument('license', InputArgument::OPTIONAL),
                    new InputArgument('app', InputArgument::OPTIONAL),
                ])
                ->addOption('em', null, InputOption::VALUE_OPTIONAL, 'The entity manager to use for this command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        set_time_limit(1200);

        $container = $this->getContainer();

        /**
         * si la llamada al commando se hace desde licensor
         */
        if ($input->getArgument('type') == static::LOAD_DATA_ONLINE) {

            $type = static::LOAD_DATA_ONLINE;
            $app = $input->getArgument('app');

            $databaseListOptions = $container->get('globals')->databaseListOptions($input);

            foreach ($databaseListOptions['databaseList'] as $databaseListName) {
                /**
                 * Formato que se genera al pasar el atribute dbname al array $databaseListOptionsAndAlias['dataOptions']
                 * En la funcion array_merge
                 * 
                 * array:5 [
                 * "user" => "user"
                 * "password" => "password"
                 * "host" => "host"
                 * "driver" => "pdo_mysql"
                 * "dbname" => "dbname"
                 * ]
                 */
                $dataOptionsRoot = array_merge($databaseListOptions['dataOptions'], array('dbname' => $databaseListName));

                $em = Util::emCreateConfiguration($container, $dataOptionsRoot);
                $this->callFunctions($output, $em, $app, $databaseListName);
            }
        } else if ($input->getArgument('type') == static::LOAD_DATA_LOCAL) {
            $type = static::LOAD_DATA_LOCAL;
            $app = $input->getArgument('app');

            $em = $container->get('app_functions')->emCreateConfiguration($container);
            $this->callFunctions($output, $em, $app);
        }
    }

    /**
     * Funcion encargada de callar los metodos que crearan informacion en la base de datos
     * o que actualizaran los mismos
     * @param type $output para imprimir mensaje en terminal
     * @param type $em entity manager
     * @param type $app identifica que tipo de software es: sg, sst, sr
     * @param type $databaseName para pintar el nombre de la base de datos en la salida del comando usable en caso 1 es decir cuando el comando es para la version online
     */
    public function callFunctions($output, $em, $app, $databaseName = null) {

        switch ($app) {
            case $app == static::TYPE_GENERAL:
                $this->loadOrUpdateMotivoFacDev($output, $em, $databaseName);
                $this->modules($output, $em, $databaseName);
                break;

            case $app == static::TYPE_TECNICAL_SERVICE:
                $this->modulesTechnicalService($output, $em, $databaseName);
                break;
            case $app == static::TYPE_RESTAURANT:
                $this->modulesRestaurant($output, $em, $databaseName);
                $this->loadFloor($output, $em, $databaseName);
                break;

            default:
                $output->writeln("The modules weren't load, if you want load this, please use the command so:"
                        . " app:import:data online->1/local->2 licenceIdIfYouWant->id typeApp:sg->1,sst->2,sr->3");

                break;
        }
    }

    /**
     * Funcion que pobla la base de datos en la tabla motivo fac dev
     * @param type $output para imprimir mensaje en terminal
     * @param type $em entity manager
     * @param type $databaseName para pintar el nombre de la base de datos en la salida del comando usable en caso 1 es decir cuando el comando es para la version online
     */
    public function loadOrUpdateMotivoFacDev($output, $em, $databaseName = null) {
        $motivosFacDevolucion = array(
            array('id' => '1',
                'motivo' => 'Falta de Dinero',
                'modulo' => '2',
            ),
            array('id' => '2',
                'motivo' => 'Producto Agotado',
                'modulo' => '2',
            ),
            array('id' => '3',
                'motivo' => 'Establecimiento Cerrado',
                'modulo' => '2',
            ),
            array('id' => '4',
                'motivo' => 'Pedido No Realizado',
                'modulo' => '2',
            ),
            array('id' => '5',
                'motivo' => 'Pedido Incompleto',
                'modulo' => '2',
            ),
            array('id' => '6',
                'motivo' => 'Pedido Repetido',
                'modulo' => '2',
            ),
            array('id' => '7',
                'motivo' => 'Otros',
                'modulo' => '2',
            ),
            array('id' => '8',
                'motivo' => 'Producto Averiado',
                'modulo' => '1',
            ),
            array('id' => '9',
                'motivo' => 'Error en Precio',
                'modulo' => '1',
            ),
            array('id' => '10',
                'motivo' => 'Error en Facturacion',
                'modulo' => '1',
            ),
            array('id' => '11',
                'motivo' => 'Otros',
                'modulo' => '1',
            ),
        );
        foreach ($motivosFacDevolucion as $motivosFacDev) {
            $motivosFacD = $em->getRepository('KijhoStructureBundle:MotivosFacDevolucion')
                    ->findOneBy(array('id' => $motivosFacDev['id']));

            if (!$motivosFacD) {
                $modAdmin = new MotivosFacDevolucion();
                $modAdmin->setMotivo($motivosFacDev['motivo']);
                $modAdmin->setModulo($motivosFacDev['modulo']);

                $em->persist($modAdmin);
                $em->flush();

                $nameDatabase = (null != $databaseName) ? $databaseName : null;
                $output->writeln($nameDatabase . "Creating new MotivosFacDevolucion name " . $modAdmin->getMotivo());
            } else if (isset($motivosFacD) && $motivosFacD->getId() == $motivosFacDev['id'] &&
                    $motivosFacD->getModulo() != $motivosFacDev['modulo']) {

                $motivosFacD->setModulo($motivosFacDev['modulo']);
                $em->persist($motivosFacD);

                $nameDatabase = (null != $databaseName) ? $databaseName : null;

                $output->writeln($nameDatabase . ' ' . $motivosFacD->getMotivo() . " was updated");
                $em->flush();
            }
        }
    }

    /**
     * Funcion que pobla la base de datos en la tabla pisos
     * @param type $output para imprimir mensaje en terminal
     * @param type $em entity manager
     * @param type $databaseName para pintar el nombre de la base de datos en la salida del comando usable en caso 1 es decir cuando el comando es para la version online
     */
    public function loadFloor($output, $em, $databaseName = null) {
        $floors = array(
            array('id' => '1', 'numero' => '1', 'nombre' => 'Piso 1'),
            array('id' => '2', 'numero' => '2', 'nombre' => 'Piso 2')
        );


        foreach ($floors as $floor) {
            $queryFloor = $em->getRepository('KijhoStructureBundle:Pisos')
                    ->findOneBy(array('piCodigo' => $floor['id']));

            if (!$queryFloor) {
                $entity = new Pisos();
                $entity->setPiNumero($floor['numero']);
                $entity->setPiNombre($floor['nombre']);

                $em->persist($entity);
                $em->flush();

                $nameDatabase = (null != $databaseName) ? $databaseName : null;
                $output->writeln($nameDatabase . "Creating new floor name " . $entity->getPiNombre());
            } else if (isset($queryFloor) && $queryFloor->getPiCodigo() == $floor['id'] &&
                    $queryFloor->getPiNombre() != $floor['nombre']) {

                $queryFloor->setPiNumero($floor['numero']);
                $queryFloor->setPiNombre($floor['nombre']);
                $em->persist($queryFloor);

                $nameDatabase = (null != $databaseName) ? $databaseName : null;

                $output->writeln($nameDatabase . ' ' . $queryFloor->getPiNombre() . " was updated");
                $em->flush();
            }
        }
    }

    /**
     * Funcion que pobla la base de datos en la tabla modules
     * @param type $output para imprimir mensaje en terminal
     * @param type $em entity manager
     * @param type $databaseName para pintar el nombre de la base de datos en la salida del comando usable en caso 1 es decir cuando el comando es para la version online
     */
    public function modules($output, $em, $databaseName = null) {
        $arrayModule = array(
            array('mod_name' => 'Ventas', 'mod_name_en' => 'Sales', 'mod_url' => 'ventas.php', 'mod_order' => '0', 'mod_son' => '0'),
            array('mod_name' => 'Abonos', 'mod_name_en' => 'Payment', 'mod_url' => 'abonosVentas.php', 'mod_order' => '1', 'mod_son' => '1'),
            array('mod_name' => 'Compras', 'mod_name_en' => 'Shopping', 'mod_url' => 'listaFacturas.php', 'mod_order' => '2', 'mod_son' => '0'),
            array('mod_name' => 'Abonos Compras', 'mod_name_en' => 'Payment', 'mod_url' => 'abonosCompras.php', 'mod_order' => '3', 'mod_son' => '3'),
            array('mod_name' => 'Usuarios', 'mod_name_en' => 'Users', 'mod_url' => 'listaUsuario.php', 'mod_order' => '4', 'mod_son' => '0'),
            array('mod_name' => 'Proveedores', 'mod_name_en' => 'suppliers', 'mod_url' => 'listaProveedor.php', 'mod_order' => '5', 'mod_son' => '0'),
            array('mod_name' => 'Clientes', 'mod_name_en' => 'Customers', 'mod_url' => 'listaClientes.php', 'mod_order' => '6', 'mod_son' => '0'),
            array('mod_name' => 'Productos', 'mod_name_en' => 'Products', 'mod_url' => 'listaProductos.php', 'mod_order' => '7', 'mod_son' => '0'),
            array('mod_name' => 'Inventario', 'mod_name_en' => 'Inventory', 'mod_url' => 'inventario.php', 'mod_order' => '8', 'mod_son' => '0'),
            array('mod_name' => 'Egresos', 'mod_name_en' => 'Expenses', 'mod_url' => 'listaGastos.php', 'mod_order' => '9', 'mod_son' => '0'),
            array('mod_name' => 'Balances', 'mod_name_en' => 'Saldos', 'mod_url' => 'balances.php', 'mod_order' => '10', 'mod_son' => '0'),
            array('mod_name' => 'Prestamos', 'mod_name_en' => 'Loans', 'mod_url' => 'listaPrestamo.php', 'mod_order' => '11', 'mod_son' => '0'),
            array('mod_name' => 'Zetas', 'mod_name_en' => 'Zetas', 'mod_url' => 'z.php', 'mod_order' => '12', 'mod_son' => '0'),
            array('mod_name' => 'Cuadres', 'mod_name_en' => 'Daily Presale Adjust', 'mod_url' => 'listaCuadreDiario.php', 'mod_order' => '13', 'mod_son' => '0'),
            array('mod_name' => 'Reportes', 'mod_name_en' => 'Reports', 'mod_url' => 'reportes.php', 'mod_order' => '18', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Utilidades', 'mod_name_en' => 'Utilities Report', 'mod_url' => 'reporte_utilidad.php', 'mod_order' => '19', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Utilidades por Cliente', 'mod_name_en' => 'Utilities Report by Customer', 'mod_url' => 'reporte_utilidad_cliente.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Ventas por Productos', 'mod_name_en' => 'Sales Report by Product', 'mod_url' => 'reporte_utilidad_producto.php', 'mod_order' => '21', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Ventas por Categorias', 'mod_name_en' => 'Sales Report by Categories', 'mod_url' => 'reporte_utilidad_categoria.php', 'mod_order' => '22', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Deudas por Cliente', 'mod_name_en' => 'Dept Report by Customer', 'mod_url' => 'reporte_utilidad_cliente_deuda.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Deudas a Proveedores', 'mod_name_en' => 'Dept Report by Suppliers', 'mod_url' => 'reporte_proveedor_deuda.php', 'mod_order' => '24', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Facturas de Venta', 'mod_name_en' => 'Sales Bill Report', 'mod_url' => 'reporte_factura_numero.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Liquidacion', 'mod_name_en' => 'Liquidation', 'mod_url' => 'liquidacion.php', 'mod_order' => '17', 'mod_son' => '0'),
            array('mod_name' => 'Traspasos', 'mod_name_en' => 'Transfers', 'mod_url' => 'listaTranspaso.php', 'mod_order' => '16', 'mod_son' => '0'),
            array('mod_name' => 'Cierre Diario', 'mod_name_en' => 'Close Journal', 'mod_url' => 'listaContabilidad.php', 'mod_order' => '15', 'mod_son' => '0'),
            array('mod_name' => 'Devoluciones Proveedores', 'mod_name_en' => 'Returns Providers', 'mod_url' => 'listaDevolucion.php', 'mod_order' => '14', 'mod_son' => '44'),
            array('mod_name' => 'Ajustes de Inventario', 'mod_name_en' => 'Inventory adjustments', 'mod_url' => 'promociones.php', 'mod_order' => '14.5', 'mod_son' => '0'),
            array('mod_name' => 'Pedidos', 'mod_name_en' => 'Orders', 'mod_url' => 'listaPedidos.php', 'mod_order' => '13', 'mod_son' => '0'),
            array('mod_name' => 'Entradas al Inventario', 'mod_name_en' => 'Entry the Inventory', 'mod_url' => 'listaPromocionProveedores.php', 'mod_order' => '14.6', 'mod_son' => '34'),
            array('mod_name' => 'Salidas de Inventario', 'mod_name_en' => 'Inventory Exit', 'mod_url' => 'listaPromocionClientes.php', 'mod_order' => '14.7', 'mod_son' => '34'),
            array('mod_name' => 'Buscador', 'mod_name_en' => 'Seeker', 'mod_url' => 'buscador.php', 'mod_order' => '30', 'mod_son' => '0'),
            array('mod_name' => 'Devoluciones Clientes', 'mod_name_en' => 'Customer Returns', 'mod_url' => 'listaDevolucionCliente.php', 'mod_order' => '14', 'mod_son' => '44'),
            array('mod_name' => 'Modificar Ventas', 'mod_name_en' => 'Change Sales', 'mod_url' => 'modificarVenta.php', 'mod_order' => '0', 'mod_son' => '1'),
            array('mod_name' => 'Eliminar Ventas', 'mod_name_en' => 'Remove Sales', 'mod_url' => 'eliminarVenta.php', 'mod_order' => '1', 'mod_son' => '1'),
            array('mod_name' => 'Eliminar Compras', 'mod_name_en' => 'Remove Purchases', 'mod_url' => 'eliminarFactura.php', 'mod_order' => '2.2', 'mod_son' => '3'),
            array('mod_name' => 'Modificar Compras', 'mod_name_en' => 'Modify Shopping', 'mod_url' => 'modificarFactura.php', 'mod_order' => '2.1', 'mod_son' => '3'),
            array('mod_name' => 'Devoluciones', 'mod_name_en' => 'Returns', 'mod_url' => 'devoluciones.php', 'mod_order' => '14', 'mod_son' => '0'),
            array('mod_name' => 'Editar Informacion Tiquete', 'mod_name_en' => 'Edit Ticket', 'mod_url' => 'editarConfiguracionFactura.php', 'mod_order' => '50', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Gastos', 'mod_name_en' => 'Expenditure Report', 'mod_url' => 'reporte_gastos.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Compras Proveedores', 'mod_name_en' => 'Shopping Providers Report', 'mod_url' => 'reporte_compras_proveedores.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Ventas Clientes', 'mod_name_en' => 'Customer Sales Report', 'mod_url' => 'reporte_ventas_clientes.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Facturas de Compra', 'mod_name_en' => 'Purchase Invoices Report', 'mod_url' => 'reporte_facturaCompra_numero.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Iva Descontable', 'mod_name_en' => 'Report Vat Discountable', 'mod_url' => 'reporte_iva_descontable.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Iva Generado', 'mod_name_en' => 'Report Vat Generated ', 'mod_url' => 'reporte_iva_generado.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Kardex', 'mod_name_en' => 'Kardex', 'mod_url' => 'kardex.php', 'mod_order' => '17', 'mod_son' => '0'),
            array('mod_name' => 'Historial de Acciones', 'mod_name_en' => 'Action History', 'mod_url' => 'auditoria.php', 'mod_order' => '49', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Arqueo Caja', 'mod_name_en' => 'Box Tonnage Report', 'mod_url' => 'reporteArqueoDiarioCaja.php', 'mod_order' => '19', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Movimientos Contables', 'mod_name_en' => 'Movements Accounting Report', 'mod_url' => 'reporte_gastos_contables.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Ingresos', 'mod_name_en' => 'income', 'mod_url' => 'listaIngresos.php', 'mod_order' => '9', 'mod_son' => '0'),
            array('mod_name' => 'Rifas', 'mod_name_en' => 'raffles', 'mod_url' => 'rifas.php', 'mod_order' => '17.7', 'mod_son' => '0'),
            array('mod_name' => 'Abrir Caja', 'mod_name_en' => 'open Box', 'mod_url' => 'abrirCaja.php', 'mod_order' => '1.1', 'mod_son' => '1'),
            array('mod_name' => 'Imprimir Factura Anterior', 'mod_name_en' => 'Print Invoice Previous', 'mod_url' => 'imprimirFacturaAnterior.php', 'mod_order' => '1.2', 'mod_son' => '1'),
            array('mod_name' => 'Activos Fijos', 'mod_name_en' => 'Fixed Assets', 'mod_url' => 'listaActivosFijos.php', 'mod_order' => '17.5', 'mod_son' => '0'),
            array('mod_name' => 'Configuracion del Sistema', 'mod_name_en' => 'System Setup', 'mod_url' => 'configuraciones.php', 'mod_order' => '52', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Ingresos', 'mod_name_en' => 'Revenue Report', 'mod_url' => 'reporte_ingresos.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Traslados de Caja', 'mod_name_en' => 'Cash Transfers', 'mod_url' => 'listaTrasladosCaja.php', 'mod_order' => '9.5', 'mod_son' => '0'),
            array('mod_name' => 'Eliminar Cotizacion', 'mod_name_en' => 'Remove Quotes', 'mod_url' => 'eliminarCotizacion.php', 'mod_order' => '3.6', 'mod_son' => '65'),
            array('mod_name' => 'Cotizaciones', 'mod_name_en' => 'Quotes', 'mod_url' => 'listaCotizaciones.php', 'mod_order' => '3.5', 'mod_son' => '0'),
            array('mod_name' => 'Servicios Especiales', 'mod_name_en' => 'Special Services', 'mod_url' => 'listaProductosServicios.php', 'mod_order' => '3.1', 'mod_son' => '0'),
            array('mod_name' => 'Eliminar Ventas de Servicios Especiales', 'mod_name_en' => 'Remove Special Services Sales', 'mod_url' => 'eliminarVentaServicio.php', 'mod_order' => '3.4', 'mod_son' => '67'),
            array('mod_name' => 'Modificar Ventas de Servicios Especiales', 'mod_name_en' => 'Change Sales of Special Services', 'mod_url' => 'modificarVentaServicio.php', 'mod_order' => '3.3', 'mod_son' => '67'),
            array('mod_name' => 'Reporte de Servicios Especiales', 'mod_name_en' => 'Special Services Report', 'mod_url' => 'reporte_servicios_especiales.php', 'mod_order' => '22.1', 'mod_son' => '15'),
            array('mod_name' => 'Imprimir Ventas Servicios', 'mod_name_en' => 'Print Sales Services', 'mod_url' => 'imprimirServiciosEspeciales.php', 'mod_order' => '3.2', 'mod_son' => '67'),
            array('mod_name' => 'Reporte Salidas de Inventario', 'mod_name_en' => 'Outputs Inventory Report', 'mod_url' => 'reporteSalidasInventario.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Entradas al Inventario', 'mod_name_en' => 'Inputs Inventory Report', 'mod_url' => 'reporteEntradasInventario.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Productos Mayor Rotacion', 'mod_name_en' => 'Report output products more', 'mod_url' => 'reporte_producto_mas_rotacion.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Productos Proveedor', 'mod_name_en' => 'Provider Product Report', 'mod_url' => 'reporte_productos_proveedor.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Eliminar Factura Fisica', 'mod_name_en' => 'Delete Physic Bill', 'mod_url' => 'eliminarVentaFisica.php', 'mod_order' => '28', 'mod_son' => '76'),
            array('mod_name' => 'Modificar Factura Fisica', 'mod_name_en' => 'Change Physic Bill', 'mod_url' => 'modificarVentaFisica.php', 'mod_order' => '27', 'mod_son' => '76'),
            array('mod_name' => 'Facturas Fisicas', 'mod_name_en' => 'Physic Bills', 'mod_url' => 'ventas_fisicas.php', 'mod_order' => '26', 'mod_son' => '0'),
            array('mod_name' => 'Recibo de Mercancia', 'mod_name_en' => 'Merchandise Recived', 'mod_url' => 'listaReciboMercancia.php', 'mod_order' => '7.5', 'mod_son' => '0'),
            array('mod_name' => 'Reporte por Retencion', 'mod_name_en' => 'Report by Withholding', 'mod_url' => 'reporte_retencion.php', 'mod_order' => '21.1', 'mod_son' => '15'),
            array('mod_name' => 'Remision Cliente', 'mod_name_en' => 'Customer Remission', 'mod_url' => 'remisionesClientes.php', 'mod_order' => '53', 'mod_son' => '0'),
            array('mod_name' => 'Abonos a remisiones', 'mod_name_en' => 'Remissions Pay', 'mod_url' => 'abonosRemisiones.php', 'mod_order' => '54', 'mod_son' => '0'),
            array('mod_name' => 'Reporte por Remision', 'mod_name_en' => 'Report by Referred', 'mod_url' => 'reporte_remision.php', 'mod_order' => '21.1', 'mod_son' => '15'),
            array('mod_name' => 'Remisiones atrasadas', 'mod_name_en' => 'Referrals backward', 'mod_url' => 'listaRemisionesClientesAtrasados.php', 'mod_order' => '59', 'mod_son' => '0'),
            array('mod_name' => 'Reporte De Inventario ', 'mod_name_en' => 'Inventory Report', 'mod_url' => 'reporte_inventario.php', 'mod_order' => '27', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Pagos Con Tarjetas', 'mod_name_en' => 'Credit Cards Payment Report', 'mod_url' => 'reporte_pagos_tarjetas.php', 'mod_order' => '26', 'mod_son' => '15'),
            array('mod_name' => 'Separados', 'mod_name_en' => 'Separate', 'mod_url' => 'separados.php', 'mod_order' => '4', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Separados', 'mod_name_en' => 'Report Separate', 'mod_url' => 'reporte_separados_clientes.php', 'mod_order' => '21.1', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Prestamo de Mercancia', 'mod_name_en' => 'Merchandise Loans Report ', 'mod_url' => 'reporte_prestamos.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Vendedores', 'mod_name_en' => 'Vendors Report', 'mod_url' => 'reporte_vendedores.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Movimientos Contables ', 'mod_name_en' => 'accounting transactions', 'mod_url' => 'listaMovimientosContables.php', 'mod_order' => '18', 'mod_son' => '0'),
            array('mod_name' => 'Codigos de Barras', 'mod_name_en' => 'Barcode', 'mod_url' => 'configuracionCodigosDeBarras.php', 'mod_order' => '19', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Compras Productos', 'mod_name_en' => '', 'mod_url' => 'reporte_compras_productos.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Cambiar cantidad en ventas', 'mod_name_en' => 'Change quantity in sales', 'mod_url' => 'cambiarCantidad.php', 'mod_order' => '1', 'mod_son' => '1'),
            array('mod_name' => 'Sucursales', 'mod_name_en' => 'Transfers inventory', 'mod_url' => 'sucursales.php', 'mod_order' => '60', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Devoluciones', 'mod_name_en' => 'Report Returns', 'mod_url' => 'reporte_devoluciones.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Devoluciones Clientes', 'mod_name_en' => 'Report Returns Customers', 'mod_url' => 'reporte_devoluciones_clientes.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Consolidado de ventas por vendedor', 'mod_name_en' => 'Consolidated sales by salesperson', 'mod_url' => 'consolidado_pedidos_vendedor.php', 'mod_order' => '28', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de frecuencia de compras por cliente', 'mod_name_en' => '', 'mod_url' => 'reporte_frecuencias_cliente.php', 'mod_order' => '29', 'mod_son' => '15'),
            array('mod_name' => 'Gestion Barrios', 'mod_name_en' => '', 'mod_url' => 'barrios.php', 'mod_order' => '72', 'mod_son' => '70'),
            array('mod_name' => 'Gestion Zonas', 'mod_name_en' => '', 'mod_url' => 'zonas.php', 'mod_order' => '71', 'mod_son' => '70'),
            array('mod_name' => 'Logistica y Reparto', 'mod_name_en' => '', 'mod_url' => 'control_logistica.php', 'mod_order' => '70', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Densidad de Ventas de Producto por Dia', 'mod_name_en' => 'Density of Product Sales Per Day', 'mod_url' => 'reporte_cantidad_productos_categoria_fechas.php', 'mod_order' => '30', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Facturas Anuladas', 'mod_name_en' => 'Report Bill cancelled', 'mod_url' => 'reporteFacturasAnuladas.php', 'mod_order' => '32', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Volumen Ventas Diarias', 'mod_name_en' => 'Report Daily sales volume', 'mod_url' => 'ListaReporteVolumenVentas.php', 'mod_order' => '33', 'mod_son' => '15'),
            array('mod_name' => 'Configuracion Movil ', 'mod_name_en' => 'Mobile Configuration ', 'mod_url' => 'configuracion_api.php', 'mod_order' => '73', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Productos Para Cambio ', 'mod_name_en' => 'Refunds Report ', 'mod_url' => 'reporteDevolucionProductos.php', 'mod_order' => '34', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Clientes Compra Cero ', 'mod_name_en' => 'Zero Buy Clients ', 'mod_url' => 'reporteCompraCero.php', 'mod_order' => '35', 'mod_son' => '15'),
            array('mod_name' => 'Reporte cargue logistica', 'mod_name_en' => 'logistics load', 'mod_url' => 'reporteCargueLogistica.php', 'mod_order' => '36', 'mod_son' => '15'),
            array('mod_name' => 'Ventas Tactil', 'mod_name_en' => 'sales tactil', 'mod_url' => 'ventasTactil.php', 'mod_order' => '77', 'mod_son' => '0'),
            array('mod_name' => 'Orden de trabajo', 'mod_name_en' => 'Work order', 'mod_url' => 'ordenTrabajo.php', 'mod_order' => '61', 'mod_son' => '0'),
            array('mod_name' => 'Anular orden trabajo', 'mod_name_en' => 'Remove work order', 'mod_url' => 'anularOrdenTrabajo.php', 'mod_order' => '101', 'mod_son' => '100'),
            array('mod_name' => 'Modificar Orden de  trabajo', 'mod_name_en' => 'Modify work order', 'mod_url' => 'modificarOrdenTrabajo.php', 'mod_order' => '102', 'mod_son' => '100'),
            array('mod_name' => 'Reporte orden de trabajo', 'mod_name_en' => 'Work order report', 'mod_url' => 'reporte_ordenTrabajo.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Tercerizacion de Reportes', 'mod_name_en' => 'Outsourcing of reports', 'mod_url' => 'reportes_tercerizacion.php', 'mod_order' => '37', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Traslados de caja', 'mod_name_en' => 'Box Transfers Report', 'mod_url' => 'reporte_traslado_caja.php', 'mod_order' => '38', 'mod_son' => '15')
        );

        foreach ($arrayModule as $module) {
            $moduleResult = $em->getRepository('KijhoStructureBundle:Module')
                    ->findOneBy(array('modName' => $module['mod_name']));

            if (!$moduleResult) {
                $modAdmin = $modAdmin = new Module();

                $modAdmin->setModName($module['mod_name']);
                $modAdmin->setModNameEn($module['mod_name_en']);
                $modAdmin->setModUrl($module['mod_url']);
                $modAdmin->setModOrder($module['mod_order']);
                $modAdmin->setModSon($module['mod_son']);

                $em->persist($modAdmin);
                $em->flush();

                $nameDatabase = (null != $databaseName) ? $databaseName : null;
                $output->writeln($nameDatabase . " Creating new modules name " . $module['mod_name']);
            }
        }
    }

    /**
     * Funcion que pobla la base de datos en la tabla modules technical service
     * @param type $output para imprimir mensaje en terminal
     * @param type $em entity manager
     * @param type $databaseName para pintar el nombre de la base de datos en la salida del comando usable en caso 1 es decir cuando el comando es para la version online
     */
    public function modulesTechnicalService($output, $em, $databaseName = null) {
        $arrayModule = array(
            array('mod_name' => 'Ventas', 'mod_name_en' => NULL, 'mod_url' => 'ventas.php', 'mod_order' => '0', 'mod_son' => '0'),
            array('mod_name' => 'Abonos', 'mod_name_en' => NULL, 'mod_url' => 'abonosVentas.php', 'mod_order' => '1', 'mod_son' => '1'),
            array('mod_name' => 'Compras', 'mod_name_en' => NULL, 'mod_url' => 'listaFacturas.php', 'mod_order' => '2', 'mod_son' => '0'),
            array('mod_name' => 'Abonos', 'mod_name_en' => NULL, 'mod_url' => 'abonosCompras.php', 'mod_order' => '3', 'mod_son' => '3'),
            array('mod_name' => 'Usuarios', 'mod_name_en' => NULL, 'mod_url' => 'listaUsuario.php', 'mod_order' => '4', 'mod_son' => '0'),
            array('mod_name' => 'Proveedores', 'mod_name_en' => NULL, 'mod_url' => 'listaProveedor.php', 'mod_order' => '5', 'mod_son' => '0'),
            array('mod_name' => 'Clientes', 'mod_name_en' => NULL, 'mod_url' => 'listaClientes.php', 'mod_order' => '6', 'mod_son' => '0'),
            array('mod_name' => 'Productos', 'mod_name_en' => NULL, 'mod_url' => 'listaProductos.php', 'mod_order' => '7', 'mod_son' => '0'),
            array('mod_name' => 'Inventario', 'mod_name_en' => NULL, 'mod_url' => 'inventario.php', 'mod_order' => '8', 'mod_son' => '0'),
            array('mod_name' => 'Gastos', 'mod_name_en' => NULL, 'mod_url' => 'listaGastos.php', 'mod_order' => '9', 'mod_son' => '0'),
            array('mod_name' => 'Balances', 'mod_name_en' => NULL, 'mod_url' => 'balances.php', 'mod_order' => '10', 'mod_son' => '0'),
            array('mod_name' => 'Prestamos', 'mod_name_en' => NULL, 'mod_url' => 'listaPrestamo.php', 'mod_order' => '11', 'mod_son' => '0'),
            array('mod_name' => 'Zetas', 'mod_name_en' => NULL, 'mod_url' => 'z.php', 'mod_order' => '12', 'mod_son' => '0'),
            array('mod_name' => 'Cuadres', 'mod_name_en' => NULL, 'mod_url' => 'listaCuadreDiario.php', 'mod_order' => '13', 'mod_son' => '0'),
            array('mod_name' => 'Reportes', 'mod_name_en' => NULL, 'mod_url' => 'reportes.php', 'mod_order' => '18', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Utilidades', 'mod_name_en' => NULL, 'mod_url' => 'reporte_utilidad.php', 'mod_order' => '19', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Utilidades por Cliente', 'mod_name_en' => NULL, 'mod_url' => 'reporte_utilidad_cliente.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Ventas por Productos', 'mod_name_en' => NULL, 'mod_url' => 'reporte_utilidad_producto.php', 'mod_order' => '21', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Ventas por Categorias', 'mod_name_en' => NULL, 'mod_url' => 'reporte_utilidad_categoria.php', 'mod_order' => '22', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Deudas por Cliente', 'mod_name_en' => NULL, 'mod_url' => 'reporte_utilidad_cliente_deuda.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Deudas a Proveedores', 'mod_name_en' => NULL, 'mod_url' => 'reporte_proveedor_deuda.php', 'mod_order' => '24', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Facturas de Venta', 'mod_name_en' => NULL, 'mod_url' => 'reporte_factura_numero.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Liquidacion', 'mod_name_en' => NULL, 'mod_url' => 'liquidacion.php', 'mod_order' => '17', 'mod_son' => '0'),
            array('mod_name' => 'Traspasos', 'mod_name_en' => NULL, 'mod_url' => 'listaTranspaso.php', 'mod_order' => '16', 'mod_son' => '0'),
            array('mod_name' => 'Contabilidad', 'mod_name_en' => NULL, 'mod_url' => 'listaContabilidad.php', 'mod_order' => '15', 'mod_son' => '0'),
            array('mod_name' => 'Devoluciones Proveedores', 'mod_name_en' => NULL, 'mod_url' => 'listaDevolucion.php', 'mod_order' => '14', 'mod_son' => '44'),
            array('mod_name' => 'Ajustes de Inventario', 'mod_name_en' => NULL, 'mod_url' => 'promociones.php', 'mod_order' => '26', 'mod_son' => '0'),
            array('mod_name' => 'Pedidos', 'mod_name_en' => NULL, 'mod_url' => 'listaPedidos.php', 'mod_order' => '13', 'mod_son' => '0'),
            array('mod_name' => 'Entradas al Inventario', 'mod_name_en' => NULL, 'mod_url' => 'listaPromocionProveedores.php', 'mod_order' => '27', 'mod_son' => '34'),
            array('mod_name' => 'Salidas de Inventario', 'mod_name_en' => NULL, 'mod_url' => 'listaPromocionClientes.php', 'mod_order' => '28', 'mod_son' => '34'),
            array('mod_name' => 'Buscador', 'mod_name_en' => NULL, 'mod_url' => 'buscador.php', 'mod_order' => '30', 'mod_son' => '0'),
            array('mod_name' => 'Devoluciones Clientes', 'mod_name_en' => NULL, 'mod_url' => 'listaDevolucionCliente.php', 'mod_order' => '14', 'mod_son' => '44'),
            array('mod_name' => 'Modificar Ventas', 'mod_name_en' => NULL, 'mod_url' => 'modificarVenta.php', 'mod_order' => '0', 'mod_son' => '1'),
            array('mod_name' => 'Eliminar Ventas', 'mod_name_en' => NULL, 'mod_url' => 'eliminarVenta.php', 'mod_order' => '1', 'mod_son' => '1'),
            array('mod_name' => 'Eliminar Compras', 'mod_name_en' => NULL, 'mod_url' => 'eliminarFactura.php', 'mod_order' => '2.2', 'mod_son' => '3'),
            array('mod_name' => 'Modificar Compras', 'mod_name_en' => NULL, 'mod_url' => 'modificarFactura.php', 'mod_order' => '2.1', 'mod_son' => '3'),
            array('mod_name' => 'Devoluciones', 'mod_name_en' => NULL, 'mod_url' => 'devoluciones.php', 'mod_order' => '14', 'mod_son' => '0'),
            array('mod_name' => 'Configuracion Factura', 'mod_name_en' => NULL, 'mod_url' => 'editarConfiguracionFactura.php', 'mod_order' => '50', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Gastos', 'mod_name_en' => NULL, 'mod_url' => 'reporte_gastos.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Compras Proveedores', 'mod_name_en' => NULL, 'mod_url' => 'reporte_compras_proveedores.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Ventas Clientes', 'mod_name_en' => NULL, 'mod_url' => 'reporte_ventas_clientes.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Facturas de Compra', 'mod_name_en' => NULL, 'mod_url' => 'reporte_facturaCompra_numero.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Iva Descontable', 'mod_name_en' => NULL, 'mod_url' => 'reporte_iva_descontable.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Iva Generado', 'mod_name_en' => NULL, 'mod_url' => 'reporte_iva_generado.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Kardex', 'mod_name_en' => NULL, 'mod_url' => 'kardex.php', 'mod_order' => '17', 'mod_son' => '0'),
            array('mod_name' => 'Historial de Acciones', 'mod_name_en' => NULL, 'mod_url' => 'auditoria.php', 'mod_order' => '49', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Arqueo Caja', 'mod_name_en' => NULL, 'mod_url' => 'reporteArqueoDiarioCaja.php', 'mod_order' => '19', 'mod_son' => '15'),
            array('mod_name' => 'Ingresos', 'mod_name_en' => NULL, 'mod_url' => 'listaIngresos.php', 'mod_order' => '9', 'mod_son' => '0'),
            array('mod_name' => 'Rifas', 'mod_name_en' => NULL, 'mod_url' => 'rifas.php', 'mod_order' => '51', 'mod_son' => '0'),
            array('mod_name' => 'Abrir Caja', 'mod_name_en' => NULL, 'mod_url' => 'abrirCaja.php', 'mod_order' => '1.1', 'mod_son' => '1'),
            array('mod_name' => 'Imprimir Factura Anterior', 'mod_name_en' => NULL, 'mod_url' => 'imprimirFacturaAnterior.php', 'mod_order' => '1.2', 'mod_son' => '1'),
            array('mod_name' => 'Activos Fijos', 'mod_name_en' => NULL, 'mod_url' => 'listaActivosFijos.php', 'mod_order' => '29', 'mod_son' => '0'),
            array('mod_name' => 'Configuracion', 'mod_name_en' => NULL, 'mod_url' => 'configuraciones.php', 'mod_order' => '52', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Ingresos', 'mod_name_en' => NULL, 'mod_url' => 'reporte_ingresos.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Servicios', 'mod_name_en' => NULL, 'mod_url' => 'listaServicios.php', 'mod_order' => '-1', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Servicios', 'mod_name_en' => NULL, 'mod_url' => 'reporte_servicios.php', 'mod_order' => '19', 'mod_son' => '15'),
            array('mod_name' => 'Servicios Especiales', 'mod_name_en' => NULL, 'mod_url' => 'listaProductosServicios.php', 'mod_order' => '-2', 'mod_son' => '0'),
            array('mod_name' => 'Eliminar Ventas de Servicios', 'mod_name_en' => NULL, 'mod_url' => 'eliminarVentaServicio.php', 'mod_order' => '-1.5', 'mod_son' => '66'),
            array('mod_name' => 'Modificar Ventas de Servicios', 'mod_name_en' => NULL, 'mod_url' => 'modificarVentaServicio.php', 'mod_order' => '-1.6', 'mod_son' => '66'),
            array('mod_name' => 'Traslados de Caja', 'mod_name_en' => NULL, 'mod_url' => 'listaTrasladosCaja.php', 'mod_order' => '9.5', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Utilidad Servicios Especiales', 'mod_name_en' => NULL, 'mod_url' => 'reporte_utilidad_servicios_especiales.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Ingresos por Servicios Tecnicos', 'mod_name_en' => NULL, 'mod_url' => 'reporte_ingreso_servicios.php', 'mod_order' => '21', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Descuentos en Facturas', 'mod_name_en' => NULL, 'mod_url' => 'reporteDescuentosFacturas.php', 'mod_order' => '21', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Pagos Con Tarjetas', 'mod_name_en' => NULL, 'mod_url' => 'reporte_pagos_tarjetas.php', 'mod_order' => '26', 'mod_son' => '15'),
            array('mod_name' => 'Reporte IMEIS Vendidos', 'mod_name_en' => NULL, 'mod_url' => 'reporteImeiVendido.php', 'mod_order' => '26.5', 'mod_son' => '15'),
            array('mod_name' => 'Reporte IMEIS Comprados', 'mod_name_en' => NULL, 'mod_url' => 'reporteImeiComprado.php', 'mod_order' => '27', 'mod_son' => '15')
        );


        foreach ($arrayModule as $module) {
            $moduleResult = $em->getRepository('KijhoStructureBundle:Module')
                    ->findOneBy(array('modName' => $module['mod_name']));

            if (!$moduleResult) {
                $modAdmin = $modAdmin = new Module();

                $modAdmin->setModName($module['mod_name']);
                $modAdmin->setModNameEn($module['mod_name_en']);
                $modAdmin->setModUrl($module['mod_url']);
                $modAdmin->setModOrder($module['mod_order']);
                $modAdmin->setModSon($module['mod_son']);

                $em->persist($modAdmin);
                $em->flush();

                $nameDatabase = (null != $databaseName) ? $databaseName : null;
                $output->writeln($nameDatabase . " Creating new modules name " . $module['mod_name']);
            }
        }
    }

    /**
     * Funcion que pobla la base de datos en la tabla modules technical service
     * @param type $output para imprimir mensaje en terminal
     * @param type $em entity manager
     * @param type $databaseName para pintar el nombre de la base de datos en la salida del comando usable en caso 1 es decir cuando el comando es para la version online
     */
    public function modulesRestaurant($output, $em, $databaseName = null) {

        $arrayModule = array(
            array('mod_name' => 'Ventas', 'mod_name_en' => 'Sales', 'mod_url' => 'ventas.php', 'mod_order' => '0', 'mod_son' => '0'),
            array('mod_name' => 'Abonos', 'mod_name_en' => 'Payment', 'mod_url' => 'abonosVentas.php', 'mod_order' => '1', 'mod_son' => '1'),
            array('mod_name' => 'Compras', 'mod_name_en' => 'Shopping', 'mod_url' => 'listaFacturas.php', 'mod_order' => '2', 'mod_son' => '0'),
            array('mod_name' => 'Abonos', 'mod_name_en' => 'Payment', 'mod_url' => 'abonosCompras.php', 'mod_order' => '3', 'mod_son' => '3'),
            array('mod_name' => 'Usuarios', 'mod_name_en' => 'Users', 'mod_url' => 'listaUsuario.php', 'mod_order' => '4', 'mod_son' => '0'),
            array('mod_name' => 'Proveedores', 'mod_name_en' => 'suppliers', 'mod_url' => 'listaProveedor.php', 'mod_order' => '5', 'mod_son' => '0'),
            array('mod_name' => 'Clientes', 'mod_name_en' => 'Customers', 'mod_url' => 'listaClientes.php', 'mod_order' => '6', 'mod_son' => '0'),
            array('mod_name' => 'Productos', 'mod_name_en' => 'Products', 'mod_url' => 'listaProductos.php', 'mod_order' => '7', 'mod_son' => '0'),
            array('mod_name' => 'Inventario', 'mod_name_en' => 'Inventory', 'mod_url' => 'inventario.php', 'mod_order' => '8', 'mod_son' => '0'),
            array('mod_name' => 'Egresos', 'mod_name_en' => 'Expenses', 'mod_url' => 'listaGastos.php', 'mod_order' => '9', 'mod_son' => '0'),
            array('mod_name' => 'Balances', 'mod_name_en' => 'Saldos', 'mod_url' => 'balances.php', 'mod_order' => '10', 'mod_son' => '0'),
            array('mod_name' => 'Prestamos', 'mod_name_en' => 'Loans', 'mod_url' => 'listaPrestamo.php', 'mod_order' => '11', 'mod_son' => '0'),
            array('mod_name' => 'Zetas', 'mod_name_en' => 'Zetas', 'mod_url' => 'z.php', 'mod_order' => '12', 'mod_son' => '0'),
            array('mod_name' => 'Cuadres', 'mod_name_en' => 'Daily Presale Adjust', 'mod_url' => 'listaCuadreDiario.php', 'mod_order' => '13', 'mod_son' => '0'),
            array('mod_name' => 'Reportes', 'mod_name_en' => 'Reports', 'mod_url' => 'reportes.php', 'mod_order' => '18', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Utilidades', 'mod_name_en' => 'Utilities Report', 'mod_url' => 'reporte_utilidad.php', 'mod_order' => '19', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Utilidades por Cliente', 'mod_name_en' => 'Utilities Report by Customer', 'mod_url' => 'reporte_utilidad_cliente.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Ventas por Productos', 'mod_name_en' => 'Sales Report by Product', 'mod_url' => 'reporte_utilidad_producto.php', 'mod_order' => '21', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Ventas por Categorias', 'mod_name_en' => 'Sales Report by Categories', 'mod_url' => 'reporte_utilidad_categoria.php', 'mod_order' => '22', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Deudas por Cliente', 'mod_name_en' => 'Dept Report by Customer', 'mod_url' => 'reporte_utilidad_cliente_deuda.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Deudas a Proveedores', 'mod_name_en' => 'Dept Report by Suppliers', 'mod_url' => 'reporte_proveedor_deuda.php', 'mod_order' => '24', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Facturas de Venta', 'mod_name_en' => 'Sales Bill Report', 'mod_url' => 'reporte_factura_numero.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Liquidacion', 'mod_name_en' => 'Liquidation', 'mod_url' => 'liquidacion.php', 'mod_order' => '17', 'mod_son' => '0'),
            array('mod_name' => 'Traspasos', 'mod_name_en' => 'Transfers', 'mod_url' => 'listaTranspaso.php', 'mod_order' => '16', 'mod_son' => '0'),
            array('mod_name' => 'Pedidos', 'mod_name_en' => 'Orders', 'mod_url' => 'listaPedidos.php', 'mod_order' => '13', 'mod_son' => '0'),
            array('mod_name' => 'Cierre Diario', 'mod_name_en' => 'Close Journal', 'mod_url' => 'listaContabilidad.php', 'mod_order' => '15', 'mod_son' => '0'),
            array('mod_name' => 'Devoluciones Proveedores', 'mod_name_en' => 'Returns Providers', 'mod_url' => 'listaDevolucion.php', 'mod_order' => '14', 'mod_son' => '44'),
            array('mod_name' => 'Ajustes de Inventario', 'mod_name_en' => 'Inventory adjustments', 'mod_url' => 'promociones.php', 'mod_order' => '14.5', 'mod_son' => '0'),
            array('mod_name' => 'Entradas al Inventario', 'mod_name_en' => 'Entry the Inventory', 'mod_url' => 'listaPromocionProveedores.php', 'mod_order' => '14.6', 'mod_son' => '34'),
            array('mod_name' => 'Salidas de Inventario', 'mod_name_en' => 'Inventory Exit', 'mod_url' => 'listaPromocionClientes.php', 'mod_order' => '14.7', 'mod_son' => '34'),
            array('mod_name' => 'Buscador', 'mod_name_en' => 'Seeker', 'mod_url' => 'buscador.php', 'mod_order' => '30', 'mod_son' => '0'),
            array('mod_name' => 'Devoluciones Clientes', 'mod_name_en' => 'Customer Returns', 'mod_url' => 'listaDevolucionCliente.php', 'mod_order' => '14', 'mod_son' => '44'),
            array('mod_name' => 'Modificar Ventas', 'mod_name_en' => 'Change Sales', 'mod_url' => 'modificarVenta.php', 'mod_order' => '0', 'mod_son' => '1'),
            array('mod_name' => 'Eliminar Ventas', 'mod_name_en' => 'Remove Sales', 'mod_url' => 'eliminarVenta.php', 'mod_order' => '1', 'mod_son' => '1'),
            array('mod_name' => 'Eliminar Compras', 'mod_name_en' => 'Remove Purchases', 'mod_url' => 'eliminarFactura.php', 'mod_order' => '2.2', 'mod_son' => '3'),
            array('mod_name' => 'Modificar Compras', 'mod_name_en' => 'Modify Shopping', 'mod_url' => 'modificarFactura.php', 'mod_order' => '2.1', 'mod_son' => '3'),
            array('mod_name' => 'Devoluciones', 'mod_name_en' => 'Returns', 'mod_url' => 'devoluciones.php', 'mod_order' => '14', 'mod_son' => '0'),
            array('mod_name' => 'Editar Informacion Tiquete', 'mod_name_en' => 'Edit Ticket', 'mod_url' => 'editarConfiguracionFactura.php', 'mod_order' => '50', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Gastos', 'mod_name_en' => 'Expenditure Report', 'mod_url' => 'reporte_gastos.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Compras Proveedores', 'mod_name_en' => 'Shopping Providers Report', 'mod_url' => 'reporte_compras_proveedores.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Ventas Clientes', 'mod_name_en' => 'Customer Sales Report', 'mod_url' => 'reporte_ventas_clientes.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Facturas de Compra', 'mod_name_en' => 'Purchase Invoices Report', 'mod_url' => 'reporte_facturaCompra_numero.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Iva Descontable', 'mod_name_en' => 'Report Vat Discountable', 'mod_url' => 'reporte_iva_descontable.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Iva Generado', 'mod_name_en' => 'Report Vat Generated ', 'mod_url' => 'reporte_iva_generado.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Kardex', 'mod_name_en' => 'Kardex', 'mod_url' => 'kardex.php', 'mod_order' => '17', 'mod_son' => '0'),
            array('mod_name' => 'Historial de Acciones', 'mod_name_en' => 'Action History', 'mod_url' => 'auditoria.php', 'mod_order' => '49', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Arqueo Caja', 'mod_name_en' => 'Box Tonnage Report', 'mod_url' => 'reporteArqueoDiarioCaja.php', 'mod_order' => '19', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Movimientos Contables', 'mod_name_en' => 'Movements Accounting Report', 'mod_url' => 'reporte_gastos_contables.php', 'mod_order' => '25', 'mod_son' => '15'),
            array('mod_name' => 'Ingresos', 'mod_name_en' => 'income', 'mod_url' => 'listaIngresos.php', 'mod_order' => '9', 'mod_son' => '0'),
            array('mod_name' => 'Rifas', 'mod_name_en' => 'raffles', 'mod_url' => 'rifas.php', 'mod_order' => '17.7', 'mod_son' => '0'),
            array('mod_name' => 'Abrir Caja', 'mod_name_en' => 'open Box', 'mod_url' => 'abrirCaja.php', 'mod_order' => '1.1', 'mod_son' => '1'),
            array('mod_name' => 'Imprimir Factura Anterior', 'mod_name_en' => 'Print Invoice Previous', 'mod_url' => 'imprimirFacturaAnterior.php', 'mod_order' => '1.2', 'mod_son' => '1'),
            array('mod_name' => 'Activos Fijos', 'mod_name_en' => 'Fixed Assets', 'mod_url' => 'listaActivosFijos.php', 'mod_order' => '17.5', 'mod_son' => '0'),
            array('mod_name' => 'Configuracion del Sistema', 'mod_name_en' => 'System Setup', 'mod_url' => 'configuraciones.php', 'mod_order' => '52', 'mod_son' => '0'),
            array('mod_name' => 'Reporte de Ingresos', 'mod_name_en' => 'Revenue Report', 'mod_url' => 'reporte_ingresos.php', 'mod_order' => '20', 'mod_son' => '15'),
            array('mod_name' => 'Traslados de Caja', 'mod_name_en' => 'Cash Transfers', 'mod_url' => 'listaTrasladosCaja.php', 'mod_order' => '9.5', 'mod_son' => '0'),
            array('mod_name' => 'Cotizaciones', 'mod_name_en' => 'Quotes', 'mod_url' => 'listaCotizaciones.php', 'mod_order' => '3.5', 'mod_son' => '0'),
            array('mod_name' => 'Eliminar Cotizacion', 'mod_name_en' => 'Remove Quotes', 'mod_url' => 'eliminarCotizacion.php', 'mod_order' => '3.6', 'mod_son' => '65'),
            array('mod_name' => 'Servicios Especiales', 'mod_name_en' => 'Special Services', 'mod_url' => 'listaProductosServicios.php', 'mod_order' => '3.1', 'mod_son' => '0'),
            array('mod_name' => 'Eliminar Ventas de Servicios Especiales', 'mod_name_en' => 'Remove Special Services Sales', 'mod_url' => 'eliminarVentaServicio.php', 'mod_order' => '3.4', 'mod_son' => '67'),
            array('mod_name' => 'Modificar Ventas de Servicios Especiales', 'mod_name_en' => 'Change Sales of Special Services', 'mod_url' => 'modificarVentaServicio.php', 'mod_order' => '3.3', 'mod_son' => '67'),
            array('mod_name' => 'Imprimir Ventas Servicios', 'mod_name_en' => 'Print Sales Services', 'mod_url' => 'imprimirServiciosEspeciales.php', 'mod_order' => '3.2', 'mod_son' => '67'),
            array('mod_name' => 'Reporte de Servicios Especiales', 'mod_name_en' => 'Special Services Report', 'mod_url' => 'reporte_servicios_especiales.php', 'mod_order' => '22.1', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Salidas de Inventario', 'mod_name_en' => 'Outputs Inventory Report', 'mod_url' => 'reporteSalidasInventario.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de Entradas al Inventario', 'mod_name_en' => 'Inputs Inventory Report', 'mod_url' => 'reporteEntradasInventario.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Productos Mayor Rotacion', 'mod_name_en' => 'Report output products more', 'mod_url' => 'reporte_producto_mas_rotacion.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Productos Proveedor', 'mod_name_en' => 'Provider Product Report', 'mod_url' => 'reporte_productos_proveedor.php', 'mod_order' => '23', 'mod_son' => '15'),
            array('mod_name' => 'Eliminar Factura Fisica', 'mod_name_en' => 'Delete Physic Bill', 'mod_url' => 'eliminarVentaFisica.php', 'mod_order' => '28', 'mod_son' => '76'),
            array('mod_name' => 'Modificar Factura Fisica', 'mod_name_en' => 'Change Physic Bill', 'mod_url' => 'modificarVentaFisica.php', 'mod_order' => '27', 'mod_son' => '76'),
            array('mod_name' => 'Facturas Fisicas', 'mod_name_en' => 'Physic Bills', 'mod_url' => 'ventas_fisicas.php', 'mod_order' => '26', 'mod_son' => '0'),
            array('mod_name' => 'Recibo de Mercancia', 'mod_name_en' => 'Merchandise Recived', 'mod_url' => 'listaReciboMercancia.php', 'mod_order' => '7.5', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Ventas por producto', 'mod_name_en' => ' Product Sales Report', 'mod_url' => 'reporte_ventas_producto.php', 'mod_order' => '21.1', 'mod_son' => '15'),
            array('mod_name' => 'Reporte por Retencion', 'mod_name_en' => 'Report by Withholding', 'mod_url' => 'reporte_retencion.php', 'mod_order' => '21.1', 'mod_son' => '15'),
            array('mod_name' => 'Remision Cliente', 'mod_name_en' => 'Customer Remission', 'mod_url' => 'remisionesClientes.php', 'mod_order' => '53', 'mod_son' => '0'),
            array('mod_name' => 'Reporte por Remision', 'mod_name_en' => 'Report by Referred', 'mod_url' => 'reporte_remision.php', 'mod_order' => '21.1', 'mod_son' => '15'),
            array('mod_name' => 'Abonos a remisiones', 'mod_name_en' => 'Remissions Pay', 'mod_url' => 'abonosRemisiones.php', 'mod_order' => '54', 'mod_son' => '0'),
            array('mod_name' => 'Remisiones atrasadas', 'mod_name_en' => 'Referrals backward', 'mod_url' => 'listaRemisionesClientesAtrasados.php', 'mod_order' => '55', 'mod_son' => '0'),
            array('mod_name' => 'Configuracion Mesas', 'mod_name_en' => 'Table Configuration', 'mod_url' => 'configuracionMesas.php', 'mod_order' => '52.1', 'mod_son' => '0'),
            array('mod_name' => 'Ventas Restaurante', 'mod_name_en' => 'Restaurant Sales', 'mod_url' => 'ventasRestaurante.php', 'mod_order' => '0.1', 'mod_son' => '0'),
            array('mod_name' => 'Reporte Ventas Productos', 'mod_name_en' => 'Product Sales Report', 'mod_url' => 'reporte_ventas_producto.php', 'mod_order' => '21.1', 'mod_son' => '15'),
            array('mod_name' => 'Reporte de ventas por mesa', 'mod_name_en' => 'Table sales report', 'mod_url' => 'reporte_mesa_venta.php', 'mod_order' => '21', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Atencion Por Mesas', 'mod_name_en' => 'Service Report By Tables', 'mod_url' => 'reporte_atencion_mesas.php', 'mod_order' => '22', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Ventas de Productos Agrupados en Categorias', 'mod_name_en' => 'Product Sales Report Grouped in Categories', 'mod_url' => 'reporte_ventasCategoria.php', 'mod_order' => '21.2', 'mod_son' => '16'),
            array('mod_name' => 'Reporte Devoluciones', 'mod_name_en' => '', 'mod_url' => 'reporte_devoluciones.php', 'mod_order' => '22.1', 'mod_son' => '15'),
            array('mod_name' => 'Reporte Devoluciones Clientes', 'mod_name_en' => '', 'mod_url' => 'reporte_devoluciones_clientes.php', 'mod_order' => '22.1', 'mod_son' => '15'),
            array('mod_name' => 'reporte productos eliminados', 'mod_name_en' => 'reporte deleted products', 'mod_url' => 'reporteEliminacionProductosVenta.php', 'mod_order' => '55', 'mod_son' => '0')
        );

        foreach ($arrayModule as $module) {
            $moduleResult = $em->getRepository('KijhoStructureBundle:Module')
                    ->findOneBy(array('modName' => $module['mod_name']));

            if (!$moduleResult) {
                $modAdmin = $modAdmin = new Module();

                $modAdmin->setModName($module['mod_name']);
                $modAdmin->setModNameEn($module['mod_name_en']);
                $modAdmin->setModUrl($module['mod_url']);
                $modAdmin->setModOrder($module['mod_order']);
                $modAdmin->setModSon($module['mod_son']);

                $em->persist($modAdmin);
                $em->flush();

                $nameDatabase = (null != $databaseName) ? $databaseName : null;
                $output->writeln($nameDatabase . " Creating new modules name " . $module['mod_name']);
            }
        }
    }

}
