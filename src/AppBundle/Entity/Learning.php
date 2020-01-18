<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:57
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="learning")
 */
class Learning
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $level;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Skill")
     * @ORM\JoinColumn(name="skill")
     * @var Skill
     */
    private $skill;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ActorClass")
     * @ORM\JoinColumn(name="class")
     * @var ActorClass
     */
    private $class;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Learning
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return Learning
     */
    public function setLevel($level)
    {
        $this->level = $level;
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
     * @return Learning
     */
    public function setNote($note)
    {
        $this->note = $note;
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
     * @return Learning
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;
        return $this;
    }

    /**
     * @return ActorClass
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param ActorClass $class
     * @return Learning
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }



}