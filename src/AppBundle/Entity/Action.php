<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 10:59
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="action")
 */
class Action
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Skill")
     * @ORM\JoinColumn(nullable=false)
     * @var Skill
     */
    private $skill;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $rating;

    /**
     * @ORM\Column(type="integer", name="conditionType")
     * @var int
     */
    private $conditionType;

    /**
     * @ORM\Column(type="integer",name="conditionParam1")
     * @var int
     */
    private $conditionParam1;

    /**
     * @ORM\Column(type="integer",name="conditionParam2")
     * @var int
     */
    private $conditionParam2;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Action
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * @param Skill $skill
     * @return Action
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return Action
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return int
     */
    public function getConditionType()
    {
        return $this->conditionType;
    }

    /**
     * @param int $conditionType
     * @return Action
     */
    public function setConditionType($conditionType)
    {
        $this->conditionType = $conditionType;
        return $this;
    }

    /**
     * @return int
     */
    public function getConditionParam1()
    {
        return $this->conditionParam1;
    }

    /**
     * @param int $conditionParam1
     * @return Action
     */
    public function setConditionParam1($conditionParam1)
    {
        $this->conditionParam1 = $conditionParam1;
        return $this;
    }

    /**
     * @return int
     */
    public function getConditionParam2()
    {
        return $this->conditionParam2;
    }

    /**
     * @param int $conditionParam2
     * @return Action
     */
    public function setConditionParam2($conditionParam2)
    {
        $this->conditionParam2 = $conditionParam2;
        return $this;
    }

}