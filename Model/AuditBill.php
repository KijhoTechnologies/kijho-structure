<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuditBill
 *
 * @ORM\Table(name="audit_bill")
 * @ORM\Entity
 */
class AuditBill
{
    /**
     * @var integer
     *
     * @ORM\Column(name="audb_code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $audbCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="audb_date", type="date", nullable=false)
     */
    private $audbDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="audb_hour", type="time", nullable=false)
     */
    private $audbHour;

    /**
     * @var string
     *
     * @ORM\Column(name="audb_table", type="string", length=30, nullable=false)
     */
    private $audbTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="audb_fk", type="integer", nullable=false)
     */
    private $audbFk;

    /**
     * @var string
     *
     * @ORM\Column(name="audb_action", type="string", nullable=false)
     */
    private $audbAction;

    /**
     * @var float
     *
     * @ORM\Column(name="audb_iva16", type="float", precision=10, scale=0, nullable=true)
     */
    private $audbIva16;

    /**
     * @var float
     *
     * @ORM\Column(name="audb_iva10", type="float", precision=10, scale=0, nullable=true)
     */
    private $audbIva10;

    /**
     * @var float
     *
     * @ORM\Column(name="audb_iva_exento", type="float", precision=10, scale=0, nullable=true)
     */
    private $audbIvaExento;

    /**
     * @var integer
     *
     * @ORM\Column(name="audb_estado", type="integer", nullable=true)
     */
    private $audbEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="audb_cli_codigo", type="integer", nullable=true)
     */
    private $audbCliCodigo;

    /**
     * @var float
     *
     * @ORM\Column(name="audb_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $audbTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="audb_descuento", type="float", precision=10, scale=0, nullable=true)
     */
    private $audbDescuento;

    /**
     * @var integer
     *
     * @ORM\Column(name="audb_proveedor", type="integer", nullable=true)
     */
    private $audbProveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="audb_user", type="integer", nullable=false)
     */
    private $audbUser;

    /**
     * @var string
     *
     * @ORM\Column(name="audb_comment", type="text", length=65535, nullable=true)
     */
    private $audbComment;


    /**
     * Get audbCode
     *
     * @return integer 
     */
    public function getAudbCode()
    {
        return $this->audbCode;
    }

    /**
     * Set audbDate
     *
     * @param \DateTime $audbDate
     * @return AuditBill
     */
    public function setAudbDate($audbDate)
    {
        $this->audbDate = $audbDate;

        return $this;
    }

    /**
     * Get audbDate
     *
     * @return \DateTime 
     */
    public function getAudbDate()
    {
        return $this->audbDate;
    }

    /**
     * Set audbHour
     *
     * @param \DateTime $audbHour
     * @return AuditBill
     */
    public function setAudbHour($audbHour)
    {
        $this->audbHour = $audbHour;

        return $this;
    }

    /**
     * Get audbHour
     *
     * @return \DateTime 
     */
    public function getAudbHour()
    {
        return $this->audbHour;
    }

    /**
     * Set audbTable
     *
     * @param string $audbTable
     * @return AuditBill
     */
    public function setAudbTable($audbTable)
    {
        $this->audbTable = $audbTable;

        return $this;
    }

    /**
     * Get audbTable
     *
     * @return string 
     */
    public function getAudbTable()
    {
        return $this->audbTable;
    }

    /**
     * Set audbFk
     *
     * @param integer $audbFk
     * @return AuditBill
     */
    public function setAudbFk($audbFk)
    {
        $this->audbFk = $audbFk;

        return $this;
    }

    /**
     * Get audbFk
     *
     * @return integer 
     */
    public function getAudbFk()
    {
        return $this->audbFk;
    }

    /**
     * Set audbAction
     *
     * @param string $audbAction
     * @return AuditBill
     */
    public function setAudbAction($audbAction)
    {
        $this->audbAction = $audbAction;

        return $this;
    }

    /**
     * Get audbAction
     *
     * @return string 
     */
    public function getAudbAction()
    {
        return $this->audbAction;
    }

    /**
     * Set audbIva16
     *
     * @param float $audbIva16
     * @return AuditBill
     */
    public function setAudbIva16($audbIva16)
    {
        $this->audbIva16 = $audbIva16;

        return $this;
    }

    /**
     * Get audbIva16
     *
     * @return float 
     */
    public function getAudbIva16()
    {
        return $this->audbIva16;
    }

    /**
     * Set audbIva10
     *
     * @param float $audbIva10
     * @return AuditBill
     */
    public function setAudbIva10($audbIva10)
    {
        $this->audbIva10 = $audbIva10;

        return $this;
    }

    /**
     * Get audbIva10
     *
     * @return float 
     */
    public function getAudbIva10()
    {
        return $this->audbIva10;
    }

    /**
     * Set audbIvaExento
     *
     * @param float $audbIvaExento
     * @return AuditBill
     */
    public function setAudbIvaExento($audbIvaExento)
    {
        $this->audbIvaExento = $audbIvaExento;

        return $this;
    }

    /**
     * Get audbIvaExento
     *
     * @return float 
     */
    public function getAudbIvaExento()
    {
        return $this->audbIvaExento;
    }

    /**
     * Set audbEstado
     *
     * @param integer $audbEstado
     * @return AuditBill
     */
    public function setAudbEstado($audbEstado)
    {
        $this->audbEstado = $audbEstado;

        return $this;
    }

    /**
     * Get audbEstado
     *
     * @return integer 
     */
    public function getAudbEstado()
    {
        return $this->audbEstado;
    }

    /**
     * Set audbCliCodigo
     *
     * @param integer $audbCliCodigo
     * @return AuditBill
     */
    public function setAudbCliCodigo($audbCliCodigo)
    {
        $this->audbCliCodigo = $audbCliCodigo;

        return $this;
    }

    /**
     * Get audbCliCodigo
     *
     * @return integer 
     */
    public function getAudbCliCodigo()
    {
        return $this->audbCliCodigo;
    }

    /**
     * Set audbTotal
     *
     * @param float $audbTotal
     * @return AuditBill
     */
    public function setAudbTotal($audbTotal)
    {
        $this->audbTotal = $audbTotal;

        return $this;
    }

    /**
     * Get audbTotal
     *
     * @return float 
     */
    public function getAudbTotal()
    {
        return $this->audbTotal;
    }

    /**
     * Set audbDescuento
     *
     * @param float $audbDescuento
     * @return AuditBill
     */
    public function setAudbDescuento($audbDescuento)
    {
        $this->audbDescuento = $audbDescuento;

        return $this;
    }

    /**
     * Get audbDescuento
     *
     * @return float 
     */
    public function getAudbDescuento()
    {
        return $this->audbDescuento;
    }

    /**
     * Set audbProveedor
     *
     * @param integer $audbProveedor
     * @return AuditBill
     */
    public function setAudbProveedor($audbProveedor)
    {
        $this->audbProveedor = $audbProveedor;

        return $this;
    }

    /**
     * Get audbProveedor
     *
     * @return integer 
     */
    public function getAudbProveedor()
    {
        return $this->audbProveedor;
    }

    /**
     * Set audbUser
     *
     * @param integer $audbUser
     * @return AuditBill
     */
    public function setAudbUser($audbUser)
    {
        $this->audbUser = $audbUser;

        return $this;
    }

    /**
     * Get audbUser
     *
     * @return integer 
     */
    public function getAudbUser()
    {
        return $this->audbUser;
    }

    /**
     * Set audbComment
     *
     * @param string $audbComment
     * @return AuditBill
     */
    public function setAudbComment($audbComment)
    {
        $this->audbComment = $audbComment;

        return $this;
    }

    /**
     * Get audbComment
     *
     * @return string 
     */
    public function getAudbComment()
    {
        return $this->audbComment;
    }
}
