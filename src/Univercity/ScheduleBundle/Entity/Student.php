<?php

namespace Univercity\ScheduleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Univercity\ScheduleBundle\Repository\StudentRepository")
 * @ORM\Table(name="students")
 * @ORM\HasLifecycleCallbacks()
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $second_name;

    /**
     * @ORM\ManyToOne(targetEntity="Groups", inversedBy="students")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    private $groups;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set groups
     *
     * @param integer $groups
     *
     * @return Student
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Get groups
     *
     * @return int
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     *
     * @return Student
     */
    public function setSecondName($secondName)
    {
        $this->second_name = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string
     */
    public function getSecondName()
    {
        return $this->second_name;
    }
}
