<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComentariosFactura
 *
 * @ORM\Table(name="comentarios_factura", indexes={@ORM\Index(name="fk_modulo_comentario", columns={"mod_comentario"})})
 * @ORM\Entity
 */
class ComentariosFactura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

     /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="FacturaVentas",inversedBy="comentarios")
      * @ORM\JoinColumns({
     *    @ORM\JoinColumn(name="facv_codigo",referencedColumnName="facv_codigo")
     * })
     *
     */
    private $facvCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="string", length=300, nullable=false)
     */
    private $mensaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="usu_codigo", type="integer", nullable=true)
     */
    private $usuCodigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime", nullable=false)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_edicion", type="datetime", nullable=true)
     */
    private $fechaEdicion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="borrado", type="boolean", nullable=false)
     */
    private $borrado;

    /**
     * @var \ModuloComentarios
     *
     * @ORM\ManyToOne(targetEntity="ModuloComentarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mod_comentario", referencedColumnName="id")
     * })
     */
    private $modComentario;


    /**
     * Get ORM\Id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     * @return ComentariosFactura
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set usuCodigo
     *
     * @param integer $usuCodigo
     * @return ComentariosFactura
     */
    public function setUsuCodigo($usuCodigo)
    {
        $this->usuCodigo = $usuCodigo;

        return $this;
    }

    /**
     * Get usuCodigo
     *
     * @return integer 
     */
    public function getUsuCodigo()
    {
        return $this->usuCodigo;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return ComentariosFactura
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaEdicion
     *
     * @param \DateTime $fechaEdicion
     * @return ComentariosFactura
     */
    public function setFechaEdicion($fechaEdicion)
    {
        $this->fechaEdicion = $fechaEdicion;

        return $this;
    }

    /**
     * Get fechaEdicion
     *
     * @return \DateTime 
     */
    public function getFechaEdicion()
    {
        return $this->fechaEdicion;
    }

    /**
     * Set borrado
     *
     * @param boolean $borrado
     * @return ComentariosFactura
     */
    public function setBorrado($borrado)
    {
        $this->borrado = $borrado;

        return $this;
    }

    /**
     * Get borrado
     *
     * @return boolean 
     */
    public function getBorrado()
    {
        return $this->borrado;
    }

    /**
     * Set modComentario
     *
     * @param \ModuloComentarios $modComentario
     * @return ComentariosFactura
     */
    public function setModComentario(\ModuloComentarios $modComentario = null)
    {
        $this->modComentario = $modComentario;

        return $this;
    }

    /**
     * Get modComentario
     *
     * @return \ModuloComentarios 
     */
    public function getModComentario()
    {
        return $this->modComentario;
    }
    
    
    function getFacvCodigo() {
        return $this->facvCodigo;
    }

    function setFacvCodigo($facvCodigo) {
        $this->facvCodigo = $facvCodigo;
    }





    
}
