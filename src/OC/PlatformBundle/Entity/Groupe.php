<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity
 */
class Groupe
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
     * @ORM\Column(name="name", type="string", length=30, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="dept", type="string", length=20, nullable=true)
     */
    private $dept;

    /**
     * @var string
     *
     * @ORM\Column(name="semester", type="string", length=30, nullable=false)
     */
    private $semester;

    /**
     * @var integer
     *
     * @ORM\Column(name="surgroupe", type="bigint", nullable=true)
     */
    private $surgroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbgroupes", type="bigint", nullable=false)
     */
    private $nbgroupes;

    /**
     * @var string
     *
     * @ORM\Column(name="defaulttype", type="string", length=5, nullable=false)
     */
    private $defaulttype;

    /**
     * @var string
     *
     * @ORM\Column(name="maingroupe", type="string", length=20, nullable=true)
     */
    private $maingroupe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="date", nullable=false)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date", nullable=false)
     */
    private $end;



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
     * Set name
     *
     * @param string $name
     *
     * @return Groupe
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
     * Set dept
     *
     * @param string $dept
     *
     * @return Groupe
     */
    public function setDept($dept)
    {
        $this->dept = $dept;

        return $this;
    }

    /**
     * Get dept
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Set semester
     *
     * @param string $semester
     *
     * @return Groupe
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;

        return $this;
    }

    /**
     * Get semester
     *
     * @return string
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Set surgroupe
     *
     * @param integer $surgroupe
     *
     * @return Groupe
     */
    public function setSurgroupe($surgroupe)
    {
        $this->surgroupe = $surgroupe;

        return $this;
    }

    /**
     * Get surgroupe
     *
     * @return integer
     */
    public function getSurgroupe()
    {
        return $this->surgroupe;
    }

    /**
     * Set nbgroupes
     *
     * @param integer $nbgroupes
     *
     * @return Groupe
     */
    public function setNbgroupes($nbgroupes)
    {
        $this->nbgroupes = $nbgroupes;

        return $this;
    }

    /**
     * Get nbgroupes
     *
     * @return integer
     */
    public function getNbgroupes()
    {
        return $this->nbgroupes;
    }

    /**
     * Set defaulttype
     *
     * @param string $defaulttype
     *
     * @return Groupe
     */
    public function setDefaulttype($defaulttype)
    {
        $this->defaulttype = $defaulttype;

        return $this;
    }

    /**
     * Get defaulttype
     *
     * @return string
     */
    public function getDefaulttype()
    {
        return $this->defaulttype;
    }

    /**
     * Set maingroupe
     *
     * @param string $maingroupe
     *
     * @return Groupe
     */
    public function setMaingroupe($maingroupe)
    {
        $this->maingroupe = $maingroupe;

        return $this;
    }

    /**
     * Get maingroupe
     *
     * @return string
     */
    public function getMaingroupe()
    {
        return $this->maingroupe;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Groupe
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Groupe
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
}
