<?php

namespace Kijho\StructureBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoLicence
 *
 * @ORM\Table(name="InfoLicence")
 * @ORM\Entity(repositoryClass="InfoLicenceRepository")
 */
class InfoLicence {

    const CODE_PROCESS_START = 0;

    /**
     * @var integer
     *
     * @ORM\Column(name="info_lic_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * License Information
     * @ORM\Column(name="info_lic_info", type="text", nullable=true)
     */
    protected $licenseInfo;

    /**
     * Estado de la pagina
     * @ORM\Column(name="info_lic_is_update", type="boolean", nullable=true)
     */
    protected $isUpdate;

    /**
     * Estado de la pagina
     * @ORM\Column(name="info_lic_page_anable", type="boolean", nullable=true)
     */
    protected $enablePage;

    /**
     * set processs update  
     * @ORM\Column(name="info_lic_process_update", type="string", length=10, nullable=true)
     */
    protected $processUpdate;

    /**
     * version app
     * @ORM\Column(name="info_lic_version", type="string", length=20, nullable=true)
     */
    protected $versionInstall;

    function getId() {
        return $this->id;
    }

    function getLicenseInfo() {
        return $this->licenseInfo;
    }

    function getIsUpdate() {
        return $this->isUpdate;
    }

    function getEnablePage() {
        return $this->enablePage;
    }

    function getProcessUpdate() {
        return $this->processUpdate;
    }

    function getVersionInstall() {
        return $this->versionInstall;
    }

    function setLicenseInfo($licenseInfo) {
        $this->licenseInfo = $licenseInfo;
    }

    function setIsUpdate($isUpdate) {
        $this->isUpdate = $isUpdate;
    }

    function setEnablePage($enablePage) {
        $this->enablePage = $enablePage;
    }

    function setProcessUpdate($processUpdate) {
        $this->processUpdate = $processUpdate;
    }

    function setVersionInstall($versionInstall) {
        $this->versionInstall = $versionInstall;
    }

}
