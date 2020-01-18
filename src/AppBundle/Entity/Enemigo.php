<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:24
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="enemigo")
 */
class Enemigo
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
     * @ORM\Column(type="string",name="battlerName")
     * @var string
     */
    private $battlerName;

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
    private $atq;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $def;

    /**
     * @ORM\Column(type="integer", name="atq_magic")
     * @var int
     */
    private $atqM;

    /**
     * @ORM\Column(type="integer", name="def_magic")
     * @var int
     */
    private $defM;

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
     * @ORM\Column(type="integer")
     * @var int
     */
    private $exp;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $gold;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Enemigo
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
     * @return Enemigo
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBattlerName()
    {
        return $this->battlerName;
    }

    /**
     * @param string $battlerName
     * @return Enemigo
     */
    public function setBattlerName($battlerName)
    {
        $this->battlerName = $battlerName;
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
     * @return Enemigo
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
     * @return Enemigo
     */
    public function setMp($mp)
    {
        $this->mp = $mp;
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
     * @return Enemigo
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
     * @return Enemigo
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
     * @return Enemigo
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
     * @return Enemigo
     */
    public function setDefM($defM)
    {
        $this->defM = $defM;
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
     * @return Enemigo
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
     * @return Enemigo
     */
    public function setSuerte($suerte)
    {
        $this->suerte = $suerte;
        return $this;
    }

    /**
     * @return int
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * @param int $exp
     * @return Enemigo
     */
    public function setExp($exp)
    {
        $this->exp = $exp;
        return $this;
    }

    /**
     * @return int
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * @param int $gold
     * @return Enemigo
     */
    public function setGold($gold)
    {
        $this->gold = $gold;
        return $this;
    }


}