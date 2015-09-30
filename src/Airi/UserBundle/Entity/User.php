<?php

namespace Airi\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Airi\UserBundle\Entity\Department;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Airi\UserBundle\Entity\UserRepository")
 * @ExclusionPolicy("all")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="fullName", type="string", length=255)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32)
     */
    private $password;

    /**
     * @var Department
     *
     * @ORM\Column(name="department", type="object")
     */
    private $department;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var integer
     *
     * @ORM\Column(name="totalStatus", type="integer")
     */
    private $totalStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="onlineStatus", type="integer")
     */
    private $onlineStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="onlineLastUpdated", type="datetime")
     */
    private $onlineLastUpdated;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="userStatus", type="object")
     */
    private $userStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="lastIp", type="string", length=255)
     */
    private $lastIp;

    /**
     * @var User
     *
     * @ORM\Column(name="createdBy", type="object")
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;


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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set department
     *
     * @param \stdClass $department
     *
     * @return User
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return \stdClass
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set totalStatus
     *
     * @param integer $totalStatus
     *
     * @return User
     */
    public function setTotalStatus($totalStatus)
    {
        $this->totalStatus = $totalStatus;

        return $this;
    }

    /**
     * Get totalStatus
     *
     * @return integer
     */
    public function getTotalStatus()
    {
        return $this->totalStatus;
    }

    /**
     * Set onlineStatus
     *
     * @param integer $onlineStatus
     *
     * @return User
     */
    public function setOnlineStatus($onlineStatus)
    {
        $this->onlineStatus = $onlineStatus;

        return $this;
    }

    /**
     * Get onlineStatus
     *
     * @return integer
     */
    public function getOnlineStatus()
    {
        return $this->onlineStatus;
    }

    /**
     * Set onlineLastUpdated
     *
     * @param \DateTime $onlineLastUpdated
     *
     * @return User
     */
    public function setOnlineLastUpdated($onlineLastUpdated)
    {
        $this->onlineLastUpdated = $onlineLastUpdated;

        return $this;
    }

    /**
     * Get onlineLastUpdated
     *
     * @return \DateTime
     */
    public function getOnlineLastUpdated()
    {
        return $this->onlineLastUpdated;
    }

    /**
     * Set userStatus
     *
     * @param \stdClass $userStatus
     *
     * @return User
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return \stdClass
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set lastIp
     *
     * @param string $lastIp
     *
     * @return User
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * Get lastIp
     *
     * @return string
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set createdBy
     *
     * @param \stdClass $createdBy
     *
     * @return User
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return User
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}

