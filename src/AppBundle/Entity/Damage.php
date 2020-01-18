<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:02
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="damage")
 */
class Damage
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="integer",name="elementId")
     * @var int
     */
    private $elementId;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $critical;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $formula;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeDamage")
     * @ORM\JoinColumn(nullable=false, name="type")
     * @var TypeDamage
     */
    private $type;

    /**
     * @ORM\Column(type="smallint")
     * @var int
     */
    private $variance;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Damage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getElementId()
    {
        return $this->elementId;
    }

    /**
     * @param int $elementId
     * @return Damage
     */
    public function setElementId($elementId)
    {
        $this->elementId = $elementId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCritical()
    {
        return $this->critical;
    }

    /**
     * @param bool $critical
     * @return Damage
     */
    public function setCritical($critical)
    {
        $this->critical = $critical;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * @param string $formula
     * @return Damage
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;
        return $this;
    }

    /**
     * @return TypeDamage
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param TypeDamage $type
     * @return Damage
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getVariance()
    {
        return $this->variance;
    }

    /**
     * @param int $variance
     * @return Damage
     */
    public function setVariance($variance)
    {
        $this->variance = $variance;
        return $this;
    }


}