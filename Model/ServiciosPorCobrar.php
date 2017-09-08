<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * SEITEM SERVICIO TECNICO
 *
 * @ORM\Table(name="servicios_por_cobrar")
 * @ORM\Entity()
 */
class ServiciosPorCobrar {

    /**
     * @var integer
     *
     * @ORM\Column(name="spc_codigo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="spc_serv_codigo", type="integer", nullable=true)
     */
    private $spcServCodigo;

    /**
     * @var integer
     *
     * @ORM\Column(name="spc_abono", type="integer", nullable=true)
     */
    private $spcAbono;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="spc_fecha", type="date", nullable=true)
     */
    private $spcFecha;

    /**
     *
     * @ORM\Column(name="spc_hora", type="string", nullable=true)
     */
    private $spcHora;

    function getId() {
        return $this->id;
    }

    function getSpcServCodigo() {
        return $this->spcServCodigo;
    }

    function getSpcAbono() {
        return $this->spcAbono;
    }

    function getSpcFecha() {
        return $this->spcFecha;
    }

    function getSpcHora() {
        return $this->spcHora;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSpcServCodigo($spcServCodigo) {
        $this->spcServCodigo = $spcServCodigo;
    }

    function setSpcAbono($spcAbono) {
        $this->spcAbono = $spcAbono;
    }

    function setSpcFecha(\DateTime $spcFecha) {
        $this->spcFecha = $spcFecha;
    }

    function setSpcHora($spcHora) {
        $this->spcHora = $spcHora;
    }

}
