<?php

namespace Kijho\StructureBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Brand
 * Entidad de tutorial
 */

/**
 * @ORM\Table(name="brand")
 * @ORM\Entity()
 */
class Brand {

    /**
     * @var integer
     *
     * @ORM\Column(name="bra_code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bra_name", type="string", length=100, nullable=true)
     */
    private $name;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }


    function setName($name) {
        $this->name = $name;
    }

}
