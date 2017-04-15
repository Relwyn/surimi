<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfGuardRememberKey
 *
 * @ORM\Table(name="sf_guard_remember_key", indexes={@ORM\Index(name="user_id_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class SfGuardRememberKey
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="remember_key", type="string", length=32, nullable=true)
     */
    private $rememberKey;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_address", type="string", length=50, nullable=true)
     */
    private $ipAddress;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \OC\PlatformBundle\Entity\SfGuardUser
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\SfGuardUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



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
     * Set rememberKey
     *
     * @param string $rememberKey
     *
     * @return SfGuardRememberKey
     */
    public function setRememberKey($rememberKey)
    {
        $this->rememberKey = $rememberKey;

        return $this;
    }

    /**
     * Get rememberKey
     *
     * @return string
     */
    public function getRememberKey()
    {
        return $this->rememberKey;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return SfGuardRememberKey
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return SfGuardRememberKey
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return SfGuardRememberKey
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set user
     *
     * @param \OC\PlatformBundle\Entity\SfGuardUser $user
     *
     * @return SfGuardRememberKey
     */
    public function setUser(\OC\PlatformBundle\Entity\SfGuardUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \OC\PlatformBundle\Entity\SfGuardUser
     */
    public function getUser()
    {
        return $this->user;
    }
}
