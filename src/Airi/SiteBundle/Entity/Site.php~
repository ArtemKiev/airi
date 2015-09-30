<?php

namespace Airi\SiteBundle\Entity;

use Airi\SiteBundle\Entity\Site\Agreement;
use Airi\SiteBundle\Entity\Site\Category;
use Airi\SiteBundle\Entity\Site\Group;
use Airi\SiteBundle\Entity\Site\SitePriority;
use Airi\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Airi\SiteBundle\Entity\SiteRepository")
 */
class Site
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
     * @ORM\Column(name="domain", type="string", length=255)
     */
    private $domain;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="supportManager", type="object")
     */
    private $supportManager;

    /**
     * @var User
     *
     * @ORM\Column(name="productManager", type="object")
     */
    private $productManager;

    /**
     * @var User
     *
     * @ORM\Column(name="optimizer", type="object")
     */
    private $optimizer;

    /**
     * @var Category
     *
     * @ORM\Column(name="category", type="object")
     */
    private $category;

    /**
     * @var SitePriority
     *
     * @ORM\Column(name="priority", type="object")
     */
    private $priority;

    /**
     * @var Group
     *
     * @ORM\Column(name="siteGroup", type="object")
     */
    private $siteGroup;

    /**
     * @var Agreement
     *
     * @ORM\Column(name="agreement", type="object")
     */
    private $agreement;

    /**
     * @var string
     *
     * @ORM\Column(name="contractAmount", type="decimal")
     */
    private $contractAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="stopPayment", type="decimal")
     */
    private $stopPayment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="receiptDate", type="date")
     */
    private $receiptDate;

    /**
     * @var string
     *
     * @ORM\Column(name="debt", type="decimal")
     */
    private $debt;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * Set domain
     *
     * @param string $domain
     *
     * @return Site
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set supportManager
     *
     * @param \stdClass $supportManager
     *
     * @return Site
     */
    public function setSupportManager($supportManager)
    {
        $this->supportManager = $supportManager;

        return $this;
    }

    /**
     * Get supportManager
     *
     * @return \stdClass
     */
    public function getSupportManager()
    {
        return $this->supportManager;
    }

    /**
     * Set productManager
     *
     * @param \stdClass $productManager
     *
     * @return Site
     */
    public function setProductManager($productManager)
    {
        $this->productManager = $productManager;

        return $this;
    }

    /**
     * Get productManager
     *
     * @return \stdClass
     */
    public function getProductManager()
    {
        return $this->productManager;
    }

    /**
     * Set optimizer
     *
     * @param \stdClass $optimizer
     *
     * @return Site
     */
    public function setOptimizer($optimizer)
    {
        $this->optimizer = $optimizer;

        return $this;
    }

    /**
     * Get optimizer
     *
     * @return \stdClass
     */
    public function getOptimizer()
    {
        return $this->optimizer;
    }

    /**
     * Set category
     *
     * @param \stdClass $category
     *
     * @return Site
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \stdClass
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set priority
     *
     * @param \stdClass $priority
     *
     * @return Site
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
     * Set siteGroup
     *
     * @param \stdClass $siteGroup
     *
     * @return Site
     */
    public function setSiteGroup($siteGroup)
    {
        $this->siteGroup = $siteGroup;

        return $this;
    }

    /**
     * Get siteGroup
     *
     * @return \stdClass
     */
    public function getSiteGroup()
    {
        return $this->siteGroup;
    }

    /**
     * Set agreement
     *
     * @param \stdClass $agreement
     *
     * @return Site
     */
    public function setAgreement($agreement)
    {
        $this->agreement = $agreement;

        return $this;
    }

    /**
     * Get agreement
     *
     * @return \stdClass
     */
    public function getAgreement()
    {
        return $this->agreement;
    }

    /**
     * Set contractAmount
     *
     * @param string $contractAmount
     *
     * @return Site
     */
    public function setContractAmount($contractAmount)
    {
        $this->contractAmount = $contractAmount;

        return $this;
    }

    /**
     * Get contractAmount
     *
     * @return string
     */
    public function getContractAmount()
    {
        return $this->contractAmount;
    }

    /**
     * Set stopPayment
     *
     * @param string $stopPayment
     *
     * @return Site
     */
    public function setStopPayment($stopPayment)
    {
        $this->stopPayment = $stopPayment;

        return $this;
    }

    /**
     * Get stopPayment
     *
     * @return string
     */
    public function getStopPayment()
    {
        return $this->stopPayment;
    }

    /**
     * Set receiptDate
     *
     * @param \DateTime $receiptDate
     *
     * @return Site
     */
    public function setReceiptDate($receiptDate)
    {
        $this->receiptDate = $receiptDate;

        return $this;
    }

    /**
     * Get receiptDate
     *
     * @return \DateTime
     */
    public function getReceiptDate()
    {
        return $this->receiptDate;
    }

    /**
     * Set debt
     *
     * @param string $debt
     *
     * @return Site
     */
    public function setDebt($debt)
    {
        $this->debt = $debt;

        return $this;
    }

    /**
     * Get debt
     *
     * @return string
     */
    public function getDebt()
    {
        return $this->debt;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Site
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
}
