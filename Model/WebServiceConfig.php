<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracion api
 *
 * @ORM\Table(name="ws_config")
 * @ORM\Entity (repositoryClass="WebServiceConfigRepository")
 */
class WebServiceConfig {
    //put your code here
    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="en_mobile_sales", type="boolean", nullable=false, options={"default"=true})
     */
    private $enableSale;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="negative_product_sale", type="boolean", nullable=false, options={"default"=true})
     */
    private $noStockProductSale;
    
    /**
     * @var string
     * @ORM\Column(name="api_url", type ="string", nullable= false)
     */
    private $apiUrl;
    
    public function getId(){
        return $this->id;
    }
    
    public function setEnableSale($enable){
        $this->enableSale = $enable;
        return $this;
    }
    
    public function getEnableSale(){
        return $this->enableSale;
    }
    
    public function setNoStockProductSale($enable){
        $this->noStockProductSale = $enable;
        return $this;
    }
    
    public function getNoStockProductSale(){
        return $this->noStockProductSale;
    }
    
    public function getApiUrl() {
        return $this->apiUrl;
    }

    public function setApiUrl($apiUrl) {
        $this->apiUrl = $apiUrl;
    }


}
