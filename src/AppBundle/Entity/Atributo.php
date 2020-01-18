<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:16
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="atributo")
 */
class Atributo
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Codigo")
     * @ORM\JoinColumn(nullable=false)
     * @var Codigo
     */
    private $code;

    /**
     * @ORM\Column(type="integer", name="dataId")
     * @var int
     */
    private $dataId;

    /**
     * @ORM\Column(type="boolean")
     * @var bool
     */
    private $value;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Atributo
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Codigo
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param Codigo $code
     * @return Atributo
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @return Atributo
     */
    public function setDataId($dataId)
    {
        $this->dataId = $dataId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValue()
    {
        return $this->value;
    }

    /**
     * @param bool $value
     * @return Atributo
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }



}