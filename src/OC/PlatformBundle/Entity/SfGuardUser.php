<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SfGuardUser
 *
 * @ORM\Table(name="sf_guard_user", uniqueConstraints={@ORM\UniqueConstraint(name="email_address", columns={"email_address"}), @ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="is_active_idx_idx", columns={"is_active"})})
 * @ORM\Entity
 */
class SfGuardUser
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
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=255, nullable=false)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=128, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="algorithm", type="string", length=128, nullable=false)
     */
    private $algorithm = 'sha1';

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=128, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_super_admin", type="boolean", nullable=true)
     */
    private $isSuperAdmin = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="absences_login", type="datetime", nullable=true)
     */
    private $absencesLogin;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="OC\PlatformBundle\Entity\SfGuardGroup", inversedBy="user")
     * @ORM\JoinTable(name="sf_guard_user_group",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     *   }
     * )
     */
    private $group;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="OC\PlatformBundle\Entity\SfGuardPermission", inversedBy="user")
     * @ORM\JoinTable(name="sf_guard_user_permission",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     *   }
     * )
     */
    private $permission;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
        $this->permission = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return SfGuardUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return SfGuardUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return SfGuardUser
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return SfGuardUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set algorithm
     *
     * @param string $algorithm
     *
     * @return SfGuardUser
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;

        return $this;
    }

    /**
     * Get algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return SfGuardUser
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return SfGuardUser
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return SfGuardUser
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isSuperAdmin
     *
     * @param boolean $isSuperAdmin
     *
     * @return SfGuardUser
     */
    public function setIsSuperAdmin($isSuperAdmin)
    {
        $this->isSuperAdmin = $isSuperAdmin;

        return $this;
    }

    /**
     * Get isSuperAdmin
     *
     * @return boolean
     */
    public function getIsSuperAdmin()
    {
        return $this->isSuperAdmin;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return SfGuardUser
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set absencesLogin
     *
     * @param \DateTime $absencesLogin
     *
     * @return SfGuardUser
     */
    public function setAbsencesLogin($absencesLogin)
    {
        $this->absencesLogin = $absencesLogin;

        return $this;
    }

    /**
     * Get absencesLogin
     *
     * @return \DateTime
     */
    public function getAbsencesLogin()
    {
        return $this->absencesLogin;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return SfGuardUser
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
     * @return SfGuardUser
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
     * Add group
     *
     * @param \OC\PlatformBundle\Entity\SfGuardGroup $group
     *
     * @return SfGuardUser
     */
    public function addGroup(\OC\PlatformBundle\Entity\SfGuardGroup $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \OC\PlatformBundle\Entity\SfGuardGroup $group
     */
    public function removeGroup(\OC\PlatformBundle\Entity\SfGuardGroup $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add permission
     *
     * @param \OC\PlatformBundle\Entity\SfGuardPermission $permission
     *
     * @return SfGuardUser
     */
    public function addPermission(\OC\PlatformBundle\Entity\SfGuardPermission $permission)
    {
        $this->permission[] = $permission;

        return $this;
    }

    /**
     * Remove permission
     *
     * @param \OC\PlatformBundle\Entity\SfGuardPermission $permission
     */
    public function removePermission(\OC\PlatformBundle\Entity\SfGuardPermission $permission)
    {
        $this->permission->removeElement($permission);
    }

    /**
     * Get permission
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
