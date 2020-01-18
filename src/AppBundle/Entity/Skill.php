<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:09
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="skill")
 */
class Skill
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="animationId", nullable=true)
     * @var int
     */
    private $animationId;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeHit")
     * @ORM\JoinColumn(name="hitType")
     * @var TypeHit
     */
    private $hitType;

    /**
     * @ORM\Column(type="integer",name="iconIndex", nullable=true)
     * @var int
     */
    private $iconIndex;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $message1;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $message2;

    /**
     * @ORM\Column(type="integer", name="mpCost",nullable=true)
     * @var int
     */
    private $mpCost;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $note;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $occasion;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $repeats;

    /**
     * @ORM\Column(type="integer", name="requiredWtypeId1", nullable=true)
     * @var int
     */
    private $requiredWtypeId1;

    /**
     * @ORM\Column(type="integer", name="requiredWtypeId2", nullable=true)
     * @var int
     */
    private $requiredWtypeId2;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Scope")
     * @ORM\JoinColumn(name="scope")
     * @var Scope
     */
    private $scope;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var int
     */
    private $speed;

    /**
     * @ORM\Column(type="integer",name="stypeId", nullable=true)
     * @var int
     */
    private $stypeId;

    /**
     * @ORM\Column(type="integer",name="successRate", nullable=true)
     * @var int
     */
    private $successRate;

    /**
     * @ORM\Column(type="integer",name="tpCost", nullable=true)
     * @var int
     */
    private $tpCost;

    /**
     * @ORM\Column(type="integer", name="tpGain", nullable=true)
     * @var int
     */
    private $tpGain;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Damage")
     * @ORM\JoinColumn(nullable=false, name="damage")
     * @var Damage
     */
    private $damage;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Skill
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Skill
     */
    public function setAnimationId($animationId)
    {
        $this->animationId = $animationId;
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
     * @return Skill
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return Skill
     */
    public function setHitType($hitType)
    {
        $this->hitType = $hitType;
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
     * @return Skill
     */
    public function setIconIndex($iconIndex)
    {
        $this->iconIndex = $iconIndex;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage1()
    {
        return $this->message1;
    }

    /**
     * @param string $message1
     * @return Skill
     */
    public function setMessage1($message1)
    {
        $this->message1 = $message1;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage2()
    {
        return $this->message2;
    }

    /**
     * @param string $message2
     * @return Skill
     */
    public function setMessage2($message2)
    {
        $this->message2 = $message2;
        return $this;
    }

    /**
     * @return int
     */
    public function getMpCost()
    {
        return $this->mpCost;
    }

    /**
     * @param int $mpCost
     * @return Skill
     */
    public function setMpCost($mpCost)
    {
        $this->mpCost = $mpCost;
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
     * @return Skill
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return Skill
     */
    public function setNote($note)
    {
        $this->note = $note;
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
     * @return Skill
     */
    public function setOccasion($occasion)
    {
        $this->occasion = $occasion;
        return $this;
    }

    /**
     * @return int
     */
    public function getRepeats()
    {
        return $this->repeats;
    }

    /**
     * @param int $repeats
     * @return Skill
     */
    public function setRepeats($repeats)
    {
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequiredWtypeId1()
    {
        return $this->requiredWtypeId1;
    }

    /**
     * @param int $requiredWtypeId1
     * @return Skill
     */
    public function setRequiredWtypeId1($requiredWtypeId1)
    {
        $this->requiredWtypeId1 = $requiredWtypeId1;
        return $this;
    }

    /**
     * @return int
     */
    public function getRequiredWtypeId2()
    {
        return $this->requiredWtypeId2;
    }

    /**
     * @param int $requiredWtypeId2
     * @return Skill
     */
    public function setRequiredWtypeId2($requiredWtypeId2)
    {
        $this->requiredWtypeId2 = $requiredWtypeId2;
        return $this;
    }

    /**
     * @return Scope
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param Scope $scope
     * @return Skill
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
     * @return Skill
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getStypeId()
    {
        return $this->stypeId;
    }

    /**
     * @param int $stypeId
     * @return Skill
     */
    public function setStypeId($stypeId)
    {
        $this->stypeId = $stypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSuccessRate()
    {
        return $this->successRate;
    }

    /**
     * @param int $successRate
     * @return Skill
     */
    public function setSuccessRate($successRate)
    {
        $this->successRate = $successRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getTpCost()
    {
        return $this->tpCost;
    }

    /**
     * @param int $tpCost
     * @return Skill
     */
    public function setTpCost($tpCost)
    {
        $this->tpCost = $tpCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getTpGain()
    {
        return $this->tpGain;
    }

    /**
     * @param int $tpGain
     * @return Skill
     */
    public function setTpGain($tpGain)
    {
        $this->tpGain = $tpGain;
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
     * @return Skill
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
        return $this;
    }


}