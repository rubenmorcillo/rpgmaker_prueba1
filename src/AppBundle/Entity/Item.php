<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:40
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item")
 */
class Item
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Damage")
     * @ORM\JoinColumn(nullable=false, name="damage")
     * @var Damage
     */
    private $damage;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $consumable;

    /**
     * @ORM\Column(type="integer",name="animationId")
     * @var int
     */
    private $animationId;

    /**
     * @ORM\Column(type="integer",name="itypeId")
     * @var int
     */
    private $itypeId;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeHit")
     * @ORM\JoinColumn(nullable=false, name="hitType")
     * @var TypeHit
     */
    private $hitType;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $occasion;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $scope;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $speed;

    /**
     * @ORM\Column(type="integer",name="succesRate")
     * @var int
     */
    private $succesRate;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Damage
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param Damage $damage
     * @return Item
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConsumable()
    {
        return $this->consumable;
    }

    /**
     * @param bool $consumable
     * @return Item
     */
    public function setConsumable($consumable)
    {
        $this->consumable = $consumable;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnimationId()
    {
        return $this->animationId;
    }

    /**
     * @param int $animationId
     * @return Item
     */
    public function setAnimationId($animationId)
    {
        $this->animationId = $animationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItypeId()
    {
        return $this->itypeId;
    }

    /**
     * @param int $itypeId
     * @return Item
     */
    public function setItypeId($itypeId)
    {
        $this->itypeId = $itypeId;
        return $this;
    }

    /**
     * @return TypeHit
     */
    public function getHitType()
    {
        return $this->hitType;
    }

    /**
     * @param TypeHit $hitType
     * @return Item
     */
    public function setHitType($hitType)
    {
        $this->hitType = $hitType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOccasion()
    {
        return $this->occasion;
    }

    /**
     * @param int $occasion
     * @return Item
     */
    public function setOccasion($occasion)
    {
        $this->occasion = $occasion;
        return $this;
    }

    /**
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param int $scope
     * @return Item
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     * @return Item
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuccesRate()
    {
        return $this->succesRate;
    }

    /**
     * @param int $succesRate
     * @return Item
     */
    public function setSuccesRate($succesRate)
    {
        $this->succesRate = $succesRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }



}