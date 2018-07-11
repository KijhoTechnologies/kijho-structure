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
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="serv_imei_code2", type="string", length=30, nullable=true)
     */
    private $servImeiCode2;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="serv_imagen", type="string", length=600, nullable=true)
     */
    private $servImagen;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="serv_imagen2", type="string", length=600, nullable=true)
     */
    private $servImagen2;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="serv_imagen3", type="string", length=600, nullable=true)
     */
    private $servImagen3;

    /**
     * CAMPO PARA SEITEM SERVICIO TECNICO
     * 
     * @var string
     *
     * @ORM\Column(name="serv_imagen4", type="string", length=600, nullable=true)
     */
    private $servImagen4;

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

    function getServImeiCode2() {
        return $this->servImeiCode2;
    }

    function getServImagen() {
        return $this->servImagen;
    }

    function getServImagen2() {
        return $this->servImagen2;
    }

    function getServImagen3() {
        return $this->servImagen3;
    }

    function getServImagen4() {
        return $this->servImagen4;
    }

    function setServImeiCode2($servImeiCode2) {
        $this->servImeiCode2 = $servImeiCode2;
    }

    function setServImagen($servImagen) {
        $this->servImagen = $servImagen;
    }

    function setServImagen2($servImagen2) {
        $this->servImagen2 = $servImagen2;
    }

    function setServImagen3($servImagen3) {
        $this->servImagen3 = $servImagen3;
    }

    function setServImagen4($servImagen4) {
        $this->servImagen4 = $servImagen4;
    }

}
