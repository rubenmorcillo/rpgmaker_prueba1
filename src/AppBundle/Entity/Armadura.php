<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:13
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="armadura")
 */
class Armadura
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeArmor")
     * @ORM\JoinColumn(nullable=false, name="atypeId")
     * @var TypeArmor
     */
    private $atypeId;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeEquip")
     * @ORM\JoinColumn(nullable=false, name="etypeId")
     * @var TypeEquip
     */
    private $etypeId;

    /**
     * @ORM\Column(type="integer",name="iconIndex")
     * @var int
     */
    private $iconIndex;

    /**
     * @ORM\Column(type="integer",name="animationId")
     * @var int
     */
    private $animationId;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $note;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $price;


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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return TypeArmor
     */
    public function getAtypeId()
    {
        return $this->atypeId;
    }

    /**
     * @param TypeArmor $atypeId
     * @return Armadura
     */
    public function setAtypeId($atypeId)
    {
        $this->atypeId = $atypeId;
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
     */
    public function setPrice($price)
    {
        $this->price = $price;
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
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
     * @return Armadura
     */
    public function setSuerte($suerte)
    {
        $this->suerte = $suerte;
        return $this;
    }

}