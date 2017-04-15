<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="planning", indexes={@ORM\Index(name="teacher_id_idx", columns={"teacher_id"}), @ORM\Index(name="course_id_idx", columns={"course_id"})})
 * @ORM\Entity
 */
class Planning
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
     * @var float
     *
     * @ORM\Column(name="cm", type="float", precision=18, scale=2, nullable=true)
     */
    private $cm;

    /**
     * @var float
     *
     * @ORM\Column(name="td", type="float", precision=18, scale=2, nullable=true)
     */
    private $td;

    /**
     * @var float
     *
     * @ORM\Column(name="tp", type="float", precision=18, scale=2, nullable=true)
     */
    private $tp;

    /**
     * @var \OC\PlatformBundle\Entity\Course
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Course")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;

    /**
     * @var \OC\PlatformBundle\Entity\Teacher
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Teacher")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="teacher_id", referencedColumnName="id")
     * })
     */
    private $teacher;



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
     * Set cm
     *
     * @param float $cm
     *
     * @return Planning
     */
    public function setCm($cm)
    {
        $this->cm = $cm;

        return $this;
    }

    /**
     * Get cm
     *
     * @return float
     */
    public function getCm()
    {
        return $this->cm;
    }

    /**
     * Set td
     *
     * @param float $td
     *
     * @return Planning
     */
    public function setTd($td)
    {
        $this->td = $td;

        return $this;
    }

    /**
     * Get td
     *
     * @return float
     */
    public function getTd()
    {
        return $this->td;
    }

    /**
     * Set tp
     *
     * @param float $tp
     *
     * @return Planning
     */
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get tp
     *
     * @return float
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set course
     *
     * @param \OC\PlatformBundle\Entity\Course $course
     *
     * @return Planning
     */
    public function setCourse(\OC\PlatformBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \OC\PlatformBundle\Entity\Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set teacher
     *
     * @param \OC\PlatformBundle\Entity\Teacher $teacher
     *
     * @return Planning
     */
    public function setTeacher(\OC\PlatformBundle\Entity\Teacher $teacher = null)
    {
        $this->teacher = $teacher;

        return $this;
    }

    /**
     * Get teacher
     *
     * @return \OC\PlatformBundle\Entity\Teacher
     */
    public function getTeacher()
    {
        return $this->teacher;
    }
}
