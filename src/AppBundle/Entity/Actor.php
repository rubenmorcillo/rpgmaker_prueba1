<?php
/**
 * Created by PhpStorm.
 * User: Rubén
 * Date: 18/01/2020
 * Time: 11:23
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="actor")
 */
class Actor
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
     * @ORM\Column(type="string", nullable=true)
     * @var string
     */
    private $nickname;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ActorClass")
     * @ORM\JoinColumn(nullable=false,name="class")
     * @var ActorClass
     */
    private $actorClass;

    /**
     * @ORM\Column(type="string",name="faceName")
     * @var string
     */
    private $faceName;

    /**
     * @ORM\Column(type="integer",name="faceIndex")
     * @var int
     */
    private $faceIndex;

    /**
     * @ORM\Column(type="string",name="characterName")
     * @var string
     */
    private $characterName;

    /**
     * @ORM\Column(type="integer",name="characterIndex")
     * @var int
     */
    private $characterIndex;

    /**
     * @ORM\Column(type="string",name="battlerName")
     * @var string
     */
    private $battlerName;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    private $profile;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Actor
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
     * @return Actor
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     * @return Actor
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * @return ActorClass
     */
    public function getActorClass()
    {
        return $this->actorClass;
    }

    /**
     * @param ActorClass $actorClass
     * @return Actor
     */
    public function setActorClass($actorClass)
    {
        $this->actorClass = $actorClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaceName()
    {
        return $this->faceName;
    }

    /**
     * @param string $faceName
     * @return Actor
     */
    public function setFaceName($faceName)
    {
        $this->faceName = $faceName;
        return $this;
    }

    /**
     * @return int
     */
    public function getFaceIndex()
    {
        return $this->faceIndex;
    }

    /**
     * @param int $faceIndex
     * @return Actor
     */
    public function setFaceIndex($faceIndex)
    {
        $this->faceIndex = $faceIndex;
        return $this;
    }

    /**
     * @return string
     */
    public function getCharacterName()
    {
        return $this->characterName;
    }

    /**
     * @param string $characterName
     * @return Actor
     */
    public function setCharacterName($characterName)
    {
        $this->characterName = $characterName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCharacterIndex()
    {
        return $this->characterIndex;
    }

    /**
     * @param int $characterIndex
     * @return Actor
     */
    public function setCharacterIndex($characterIndex)
    {
        $this->characterIndex = $characterIndex;
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
     * @return Actor
     */
    public function setBattlerName($battlerName)
    {
        $this->battlerName = $battlerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param string $profile
     * @return Actor
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    public function __toString()
    {
        return "{ "
            ."'ID':'".$this->getId()."',"
            ."'name':'".$this->getName()."'"
            . " }";
    }


}