<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * SEITEM SERVICIO TECNICO
 *
 * @ORM\Table(name="linea_telefonica")
 * @ORM\Entity
 */
class LineaTelefonica {

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_linea", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codLinea;

    /**
     * @var integer
     *
     * @ORM\Column(name="linea_nombre", type="integer",length=50, nullable=false)
     */
    private $lineaNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="linea_precio_compra_minuto", type="integer", length=30, nullable=false)
     */
    private $lineaPrecioCompraMinuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="linea_precio_venta_minuto", type="integer",length=30, nullable=false)
     */
    private $lineaPrecioVentaMinuto;

    /**
     * @var integer
     *
     * @ORM\Column(name="linea_total_minutos", type="integer", nullable=false)
     */
    private $lineaTotalMinutos;

    /**
     * @var integer
     *
     * @ORM\Column(name="linea_minutos_disponibles", type="integer", nullable=false)
     */
    private $lineaMinutosDisponibles;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_cliente", type="integer", nullable=false)
     */
    private $codCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_entrega", type="date", nullable=false)
     */
    private $fechaEntrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_devolucion", type="date", nullable=false)
     */
    private $fechaDevolucion;

    function getCodLinea() {
        return $this->codLinea;
    }

    function getLineaNombre() {
        return $this->lineaNombre;
    }

    function getLineaPrecioCompraMinuto() {
        return $this->lineaPrecioCompraMinuto;
    }

    function getLineaPrecioVentaMinuto() {
        return $this->lineaPrecioVentaMinuto;
    }

    function getLineaTotalMinutos() {
        return $this->lineaTotalMinutos;
    }

    function getLineaMinutosDisponibles() {
        return $this->lineaMinutosDisponibles;
    }

    function getCodCliente() {
        return $this->codCliente;
    }

    function getFechaEntrega() {
        return $this->fechaEntrega;
    }

    function getFechaDevolucion() {
        return $this->fechaDevolucion;
    }

    function setCodLinea($codLinea) {
        $this->codLinea = $codLinea;
    }

    function setLineaNombre($lineaNombre) {
        $this->lineaNombre = $lineaNombre;
    }

    function setLineaPrecioCompraMinuto($lineaPrecioCompraMinuto) {
        $this->lineaPrecioCompraMinuto = $lineaPrecioCompraMinuto;
    }

    function setLineaPrecioVentaMinuto($lineaPrecioVentaMinuto) {
        $this->lineaPrecioVentaMinuto = $lineaPrecioVentaMinuto;
    }

    function setLineaTotalMinutos($lineaTotalMinutos) {
        $this->lineaTotalMinutos = $lineaTotalMinutos;
    }

    function setLineaMinutosDisponibles($lineaMinutosDisponibles) {
        $this->lineaMinutosDisponibles = $lineaMinutosDisponibles;
    }

    function setCodCliente($codCliente) {
        $this->codCliente = $codCliente;
    }

    function setFechaEntrega($fechaEntrega) {
        $this->fechaEntrega = $fechaEntrega;
    }

    function setFechaDevolucion($fechaDevolucion) {
        $this->fechaDevolucion = $fechaDevolucion;
    }

}
