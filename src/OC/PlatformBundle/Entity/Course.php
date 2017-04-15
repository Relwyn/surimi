<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course", indexes={@ORM\Index(name="subject_id_idx", columns={"subject_id"}), @ORM\Index(name="traininginfo_id_idx", columns={"traininginfo_id"})})
 * @ORM\Entity
 */
class Course
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
     * @ORM\Column(name="semester", type="string", length=30, nullable=false)
     */
    private $semester;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="nbcmhours", type="float", precision=18, scale=2, nullable=true)
     */
    private $nbcmhours;

    /**
     * @var float
     *
     * @ORM\Column(name="nbtdhours", type="float", precision=18, scale=2, nullable=true)
     */
    private $nbtdhours;

    /**
     * @var float
     *
     * @ORM\Column(name="nbtphours", type="float", precision=18, scale=2, nullable=true)
     */
    private $nbtphours;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbgcm", type="bigint", nullable=true)
     */
    private $nbgcm;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbgtd", type="bigint", nullable=true)
     */
    private $nbgtd;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbgtp", type="bigint", nullable=true)
     */
    private $nbgtp;

    /**
     * @var string
     *
     * @ORM\Column(name="dept", type="string", length=20, nullable=true)
     */
    private $dept;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var \OC\PlatformBundle\Entity\Subject
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Subject")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
     * })
     */
    private $subject;

    /**
     * @var \OC\PlatformBundle\Entity\Traininginfo
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Traininginfo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="traininginfo_id", referencedColumnName="id")
     * })
     */
    private $traininginfo;



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
     * Set semester
     *
     * @param string $semester
     *
     * @return Course
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
     * Set module
     *
     * @param string $module
     *
     * @return Course
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nbcmhours
     *
     * @param float $nbcmhours
     *
     * @return Course
     */
    public function setNbcmhours($nbcmhours)
    {
        $this->nbcmhours = $nbcmhours;

        return $this;
    }

    /**
     * Get nbcmhours
     *
     * @return float
     */
    public function getNbcmhours()
    {
        return $this->nbcmhours;
    }

    /**
     * Set nbtdhours
     *
     * @param float $nbtdhours
     *
     * @return Course
     */
    public function setNbtdhours($nbtdhours)
    {
        $this->nbtdhours = $nbtdhours;

        return $this;
    }

    /**
     * Get nbtdhours
     *
     * @return float
     */
    public function getNbtdhours()
    {
        return $this->nbtdhours;
    }

    /**
     * Set nbtphours
     *
     * @param float $nbtphours
     *
     * @return Course
     */
    public function setNbtphours($nbtphours)
    {
        $this->nbtphours = $nbtphours;

        return $this;
    }

    /**
     * Get nbtphours
     *
     * @return float
     */
    public function getNbtphours()
    {
        return $this->nbtphours;
    }

    /**
     * Set nbgcm
     *
     * @param integer $nbgcm
     *
     * @return Course
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
     * @return Course
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
     * @return Course
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

    /**
     * Set dept
     *
     * @param string $dept
     *
     * @return Course
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Course
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
     * Set subject
     *
     * @param \OC\PlatformBundle\Entity\Subject $subject
     *
     * @return Course
     */
    public function setSubject(\OC\PlatformBundle\Entity\Subject $subject = null)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return \OC\PlatformBundle\Entity\Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set traininginfo
     *
     * @param \OC\PlatformBundle\Entity\Traininginfo $traininginfo
     *
     * @return Course
     */
    public function setTraininginfo(\OC\PlatformBundle\Entity\Traininginfo $traininginfo = null)
    {
        $this->traininginfo = $traininginfo;

        return $this;
    }

    /**
     * Get traininginfo
     *
     * @return \OC\PlatformBundle\Entity\Traininginfo
     */
    public function getTraininginfo()
    {
        return $this->traininginfo;
    }
}
