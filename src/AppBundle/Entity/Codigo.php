<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:17
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="code")
 */
class Codigo
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeCode")
     * @ORM\JoinColumn(nullable=false, name="typeCode")
     * @var TypeCode
     */
    private $typeCode;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $orden;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $literal;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Codigo
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return TypeCode
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * @param TypeCode $typeCode
     * @return Codigo
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * @param int $orden
     * @return Codigo
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
        return $this;
    }

    /**
     * @return string
     */
    public function getLiteral()
    {
        return $this->literal;
    }

    /**
     * @param string $literal
     * @return Codigo
     */
    public function setLiteral($literal)
    {
        $this->literal = $literal;
        return $this;
    }

    public function __toString()
    {
        return $this->getLiteral();
    }


}