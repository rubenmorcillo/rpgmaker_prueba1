<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:05
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="arma")
 */
class Arma
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
     * @ORM\Column(type="text")
     * @var string
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeEquip")
     * @ORM\JoinColumn(nullable=false,name="etypeId")
     * @var TypeEquip
     */
    private $etypeId;

    /**
     * @ORM\Column(type="integer",name="iconIndex", nullable=true)
     * @var int
     */
    private $iconIndex;

    /**
     * @ORM\Column(type="integer", name="animationId", nullable=true)
     * @var int
     */
    private $animationId;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $note;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeWeapon")
     * @ORM\JoinColumn(nullable=false,name="wtypeId")
     * @var TypeWeapon
     */
    private $wtypeId;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $atq;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $def;

    /**
     * @ORM\Column(type="integer",name="atq_m")
     * @var int
     */
    private $atqM;

    /**
     * @ORM\Column(type="integer", name="def_m")
     * @var int
     */
    private $defM;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $hp;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $mp;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $agilidad;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $suerte;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Arma
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
     * @return Arma
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Arma
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return TypeEquip
     */
    public function getEtypeId()
    {
        return $this->etypeId;
    }

    /**
     * @param TypeEquip $etypeId
     * @return Arma
     */
    public function setEtypeId($etypeId)
    {
        $this->etypeId = $etypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIconIndex()
    {
        return $this->iconIndex;
    }

    /**
     * @param int $iconIndex
     * @return Arma
     */
    public function setIconIndex($iconIndex)
    {
        $this->iconIndex = $iconIndex;
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
     * @return Arma
     */
    public function setAnimationId($animationId)
    {
        $this->animationId = $animationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return Arma
     */
    public function setNote($note)
    {
        $this->note = $note;
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
     * @return Arma
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return TypeWeapon
     */
    public function getWtypeId()
    {
        return $this->wtypeId;
    }

    /**
     * @param TypeWeapon $wtypeId
     * @return Arma
     */
    public function setWtypeId($wtypeId)
    {
        $this->wtypeId = $wtypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAtq()
    {
        return $this->atq;
    }

    /**
     * @param int $atq
     * @return Arma
     */
    public function setAtq($atq)
    {
        $this->atq = $atq;
        return $this;
    }

    /**
     * @return int
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * @param int $def
     * @return Arma
     */
    public function setDef($def)
    {
        $this->def = $def;
        return $this;
    }

    /**
     * @return int
     */
    public function getAtqM()
    {
        return $this->atqM;
    }

    /**
     * @param int $atqM
     * @return Arma
     */
    public function setAtqM($atqM)
    {
        $this->atqM = $atqM;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefM()
    {
        return $this->defM;
    }

    /**
     * @param int $defM
     * @return Arma
     */
    public function setDefM($defM)
    {
        $this->defM = $defM;
        return $this;
    }

    /**
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     * @return Arma
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
        return $this;
    }

    /**
     * @return int
     */
    public function getMp()
    {
        return $this->mp;
    }

    /**
     * @param int $mp
     * @return Arma
     */
    public function setMp($mp)
    {
        $this->mp = $mp;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgilidad()
    {
        return $this->agilidad;
    }

    /**
     * @param int $agilidad
     * @return Arma
     */
    public function setAgilidad($agilidad)
    {
        $this->agilidad = $agilidad;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuerte()
    {
        return $this->suerte;
    }

    /**
     * @param int $suerte
     * @return Arma
     */
    public function setSuerte($suerte)
    {
        $this->suerte = $suerte;
        return $this;
    }

}