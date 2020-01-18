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
 * @ORM\Table(name="dropeo")
 */
class Dropeo
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="integer",name="dataId")
     * @var int
     */
    private $dataId;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $denominator;

    /**
     * @ORM\Column(type="boolean")
     * @var int
     */
    private $kind;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Enemigo")
     * @ORM\JoinColumn(nullable=false)
     * @var Enemigo
     */
    private $enemigo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Dropeo
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getDataId()
    {
        return $this->dataId;
    }

    /**
     * @param int $dataId
     * @return Dropeo
     */
    public function setDataId($dataId)
    {
        $this->dataId = $dataId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDenominator()
    {
        return $this->denominator;
    }

    /**
     * @param int $denominator
     * @return Dropeo
     */
    public function setDenominator($denominator)
    {
        $this->denominator = $denominator;
        return $this;
    }

    /**
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param int $kind
     * @return Dropeo
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * @return Enemigo
     */
    public function getEnemigo()
    {
        return $this->enemigo;
    }

    /**
     * @param Enemigo $enemigo
     * @return Dropeo
     */
    public function setEnemigo($enemigo)
    {
        $this->enemigo = $enemigo;
        return $this;
    }

}