<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", uniqueConstraints={@ORM\UniqueConstraint(name="course_id", columns={"course_id"})}, indexes={@ORM\Index(name="course_id_idx", columns={"course_id"}), @ORM\Index(name="groupe_id_idx", columns={"groupe_id"}), @ORM\Index(name="teacher_id_idx", columns={"teacher_id"})})
 * @ORM\Entity
 */
class Evaluation
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
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

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
     * @var \OC\PlatformBundle\Entity\Groupe
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupe_id", referencedColumnName="id")
     * })
     */
    private $groupe;

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
     * Set password
     *
     * @param string $password
     *
     * @return Evaluation
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
     * Set course
     *
     * @param \OC\PlatformBundle\Entity\Course $course
     *
     * @return Evaluation
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
     * Set groupe
     *
     * @param \OC\PlatformBundle\Entity\Groupe $groupe
     *
     * @return Evaluation
     */
    public function setGroupe(\OC\PlatformBundle\Entity\Groupe $groupe = null)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \OC\PlatformBundle\Entity\Groupe
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set teacher
     *
     * @param \OC\PlatformBundle\Entity\Teacher $teacher
     *
     * @return Evaluation
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
