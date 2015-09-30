<?php

namespace Airi\TaskBundle\Entity;

use Airi\SiteBundle\Entity\Site;
use Airi\TaskBundle\Entity\Task\TaskPriority;
use Airi\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Airi\TaskBundle\Entity\TaskRepository")
 */
class Task
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Site
     *
     * @ORM\Column(name="site", type="object")
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var array
     *
     * @ORM\Column(name="performers", type="array")
     */
    private $performers;

    /**
     * @var User
     *
     * @ORM\Column(name="createdBy", type="object")
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var array
     *
     * @ORM\Column(name="files", type="json_array")
     */
    private $files;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deadline", type="date")
     */
    private $deadline;

    /**
     * @var float
     *
     * @ORM\Column(name="timeToDo", type="float")
     */
    private $timeToDo;

    /**
     * @var TaskPriority
     *
     * @ORM\Column(name="priority", type="object")
     */
    private $priority;

    /**
     * @var integer
     *
     * @ORM\Column(name="implementation", type="integer")
     */
    private $implementation;

    /**
     * @var integer
     *
     * @ORM\Column(name="payed", type="integer")
     */
    private $payed;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set site
     *
     * @param \stdClass $site
     *
     * @return Task
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \stdClass
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set performers
     *
     * @param array $performers
     *
     * @return Task
     */
    public function setPerformers($performers)
    {
        $this->performers = $performers;

        return $this;
    }

    /**
     * Get performers
     *
     * @return array
     */
    public function getPerformers()
    {
        return $this->performers;
    }

    /**
     * Set createdBy
     *
     * @param \stdClass $createdBy
     *
     * @return Task
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \stdClass
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Task
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set files
     *
     * @param array $files
     *
     * @return Task
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get files
     *
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     *
     * @return Task
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set timeToDo
     *
     * @param float $timeToDo
     *
     * @return Task
     */
    public function setTimeToDo($timeToDo)
    {
        $this->timeToDo = $timeToDo;

        return $this;
    }

    /**
     * Get timeToDo
     *
     * @return float
     */
    public function getTimeToDo()
    {
        return $this->timeToDo;
    }

    /**
     * Set priority
     *
     * @param \stdClass $priority
     *
     * @return Task
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return \stdClass
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set implementation
     *
     * @param integer $implementation
     *
     * @return Task
     */
    public function setImplementation($implementation)
    {
        $this->implementation = $implementation;

        return $this;
    }

    /**
     * Get implementation
     *
     * @return integer
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Set payed
     *
     * @param integer $payed
     *
     * @return Task
     */
    public function setPayed($payed)
    {
        $this->payed = $payed;

        return $this;
    }

    /**
     * Get payed
     *
     * @return integer
     */
    public function getPayed()
    {
        return $this->payed;
    }
}
