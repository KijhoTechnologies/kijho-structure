<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * SEITEM SERVICIO TECNICO
 *
 * @ORM\Table(name="service")
 * @ORM\Entity()
 */
class Service {

    /**
     * @var integer
     *
     * @ORM\Column(name="serv_code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="serv_cli_code", type="integer", nullable=true)
     */
    private $servCliCode;

    /**
     * @var string
     *
     * @ORM\Column(name="serv_type", type="string", length=200, nullable=true)
     */
    private $servType;

    /**
     * @var string
     *
     * @ORM\Column(name="serv_comment", type="string", length=200, nullable=true)
     */
    private $servComment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="serv_date_entry", type="date", nullable=true)
     */
    private $servDateEntry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="serv_date_out", type="date", nullable=true)
     */
    private $servDateOut;

    /**
     * @var integer
     *
     * @ORM\Column(name="serv_price", type="integer", nullable=true)
     */
    private $servPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="serv_pay", type="integer", nullable=true)
     */
    private $servPay;

    /**
     * @var integer
     *
     * @ORM\Column(name="serv_deuda", type="integer", nullable=true)
     */
    private $servDeuda;

    /**
     * @var integer
     *
     * @ORM\Column(name="serv_phone_mark", type="integer", nullable=true)
     */
    private $servPhoneMark;

    /**
     * @var integer
     *
     * @ORM\Column(name="serv_phone_ref", type="integer", nullable=true)
     */
    private $servPhoneRef;

    /**
     * @var string
     *
     * @ORM\Column(name="serv_security_code", type="string", length=100, nullable=true)
     */
    private $servSecurityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="serv_imei_code", type="string", length=30, nullable=true)
     */
    private $servImeiCode;

    /**
     * @var string
     *
     * @ORM\Column(name="serv_status", type="string", length=30, nullable=true)
     */
    private $servstatus;

    function getId() {
        return $this->id;
    }

    function getServCliCode() {
        return $this->servCliCode;
    }

    function getServType() {
        return $this->servType;
    }

    function getServComment() {
        return $this->servComment;
    }

    function getServDateEntry() {
        return $this->servDateEntry;
    }

    function getServDateOut() {
        return $this->servDateOut;
    }

    function getServPrice() {
        return $this->servPrice;
    }

    function getServPay() {
        return $this->servPay;
    }

    function getServDeuda() {
        return $this->servDeuda;
    }

    function getServPhoneMark() {
        return $this->servPhoneMark;
    }

    function getServPhoneRef() {
        return $this->servPhoneRef;
    }

    function getServSecurityCode() {
        return $this->servSecurityCode;
    }

    function getServImeiCode() {
        return $this->servImeiCode;
    }

    function getServstatus() {
        return $this->servstatus;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setServCliCode($servCliCode) {
        $this->servCliCode = $servCliCode;
    }

    function setServType($servType) {
        $this->servType = $servType;
    }

    function setServComment($servComment) {
        $this->servComment = $servComment;
    }

    function setServDateEntry(\DateTime $servDateEntry) {
        $this->servDateEntry = $servDateEntry;
    }

    function setServDateOut(\DateTime $servDateOut) {
        $this->servDateOut = $servDateOut;
    }

    function setServPrice($servPrice) {
        $this->servPrice = $servPrice;
    }

    function setServPay($servPay) {
        $this->servPay = $servPay;
    }

    function setServDeuda($servDeuda) {
        $this->servDeuda = $servDeuda;
    }

    function setServPhoneMark($servPhoneMark) {
        $this->servPhoneMark = $servPhoneMark;
    }

    function setServPhoneRef($servPhoneRef) {
        $this->servPhoneRef = $servPhoneRef;
    }

    function setServSecurityCode($servSecurityCode) {
        $this->servSecurityCode = $servSecurityCode;
    }

    function setServImeiCode($servImeiCode) {
        $this->servImeiCode = $servImeiCode;
    }

    function setServstatus($servstatus) {
        $this->servstatus = $servstatus;
    }

}
