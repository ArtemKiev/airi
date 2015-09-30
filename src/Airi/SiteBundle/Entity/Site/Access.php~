<?php

namespace Airi\SiteBundle\Entity\Site;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Access
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
     * @var array
     *
     * @ORM\Column(name="ftp", type="json_array")
     */
    private $ftp;

    /**
     * @var array
     *
     * @ORM\Column(name="ga", type="json_array")
     */
    private $ga;

    /**
     * @var array
     *
     * @ORM\Column(name="admin", type="json_array")
     */
    private $admin;


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
     * Set ftp
     *
     * @param array $ftp
     *
     * @return Access
     */
    public function setFtp($ftp)
    {
        $this->ftp = $ftp;

        return $this;
    }

    /**
     * Get ftp
     *
     * @return array
     */
    public function getFtp()
    {
        return $this->ftp;
    }

    /**
     * Set ga
     *
     * @param array $ga
     *
     * @return Access
     */
    public function setGa($ga)
    {
        $this->ga = $ga;

        return $this;
    }

    /**
     * Get ga
     *
     * @return array
     */
    public function getGa()
    {
        return $this->ga;
    }

    /**
     * Set admin
     *
     * @param array $admin
     *
     * @return Access
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return array
     */
    public function getAdmin()
    {
        return $this->admin;
    }
}
