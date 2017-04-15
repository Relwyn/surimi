<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traininginfo
 *
 * @ORM\Table(name="traininginfo")
 * @ORM\Entity
 */
class Traininginfo
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
     * @ORM\Column(name="dept", type="string", length=255, nullable=false)
     */
    private $dept;

    /**
     * @var string
     *
     * @ORM\Column(name="training", type="string", length=255, nullable=true)
     */
    private $training;

    /**
     * @var string
     *
     * @ORM\Column(name="semester", type="string", length=255, nullable=true)
     */
    private $semester;

    /**
     * @var string
     *
     * @ORM\Column(name="ue", type="string", length=255, nullable=true)
     */
    private $ue;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbgcm", type="integer", nullable=true)
     */
    private $nbgcm;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbgtd", type="integer", nullable=true)
     */
    private $nbgtd;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbgtp", type="integer", nullable=true)
     */
    private $nbgtp;



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
     * Set dept
     *
     * @param string $dept
     *
     * @return Traininginfo
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
     * Set training
     *
     * @param string $training
     *
     * @return Traininginfo
     */
    public function setTraining($training)
    {
        $this->training = $training;

        return $this;
    }

    /**
     * Get training
     *
     * @return string
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * Set semester
     *
     * @param string $semester
     *
     * @return Traininginfo
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
     * Set ue
     *
     * @param string $ue
     *
     * @return Traininginfo
     */
    public function setUe($ue)
    {
        $this->ue = $ue;

        return $this;
    }

    /**
     * Get ue
     *
     * @return string
     */
    public function getUe()
    {
        return $this->ue;
    }

    /**
     * Set nbgcm
     *
     * @param integer $nbgcm
     *
     * @return Traininginfo
     */
    public function setNbgcm($nbgcm)
    {
        $this->nbgcm = $nbgcm;

        return $this;
    }

    /**
     * Get nbgcm
     *
     * @return integer
     */
    public function getNbgcm()
    {
        return $this->nbgcm;
    }

    /**
     * Set nbgtd
     *
     * @param integer $nbgtd
     *
     * @return Traininginfo
     */
    public function setNbgtd($nbgtd)
    {
        $this->nbgtd = $nbgtd;

        return $this;
    }

    /**
     * Get nbgtd
     *
     * @return integer
     */
    public function getNbgtd()
    {
        return $this->nbgtd;
    }

    /**
     * Set nbgtp
     *
     * @param integer $nbgtp
     *
     * @return Traininginfo
     */
    public function setNbgtp($nbgtp)
    {
        $this->nbgtp = $nbgtp;

        return $this;
    }

    /**
     * Get nbgtp
     *
     * @return integer
     */
    public function getNbgtp()
    {
        return $this->nbgtp;
    }
}
