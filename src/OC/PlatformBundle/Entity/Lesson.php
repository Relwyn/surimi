<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesson
 *
 * @ORM\Table(name="lesson", indexes={@ORM\Index(name="course_id_idx", columns={"course_id"}), @ORM\Index(name="groupe_id_idx", columns={"groupe_id"}), @ORM\Index(name="room_id_idx", columns={"room_id"}), @ORM\Index(name="teacher_id_idx", columns={"teacher_id"})})
 * @ORM\Entity
 */
class Lesson
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
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="datetime", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="bigint", nullable=true)
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=2, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="bigint", nullable=true)
     */
    private $duration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="manual", type="boolean", nullable=true)
     */
    private $manual = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=10, nullable=true)
     */
    private $color;

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
     * @var \OC\PlatformBundle\Entity\Course
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Course")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;

    /**
     * @var \OC\PlatformBundle\Entity\Room
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     * })
     */
    private $room;

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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Lesson
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
     * @return Lesson
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

    /**
     * Set num
     *
     * @param integer $num
     *
     * @return Lesson
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Lesson
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return Lesson
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set manual
     *
     * @param boolean $manual
     *
     * @return Lesson
     */
    public function setManual($manual)
    {
        $this->manual = $manual;

        return $this;
    }

    /**
     * Get manual
     *
     * @return boolean
     */
    public function getManual()
    {
        return $this->manual;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Lesson
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set groupe
     *
     * @param \OC\PlatformBundle\Entity\Groupe $groupe
     *
     * @return Lesson
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
     * Set course
     *
     * @param \OC\PlatformBundle\Entity\Course $course
     *
     * @return Lesson
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
     * Set room
     *
     * @param \OC\PlatformBundle\Entity\Room $room
     *
     * @return Lesson
     */
    public function setRoom(\OC\PlatformBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \OC\PlatformBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set teacher
     *
     * @param \OC\PlatformBundle\Entity\Teacher $teacher
     *
     * @return Lesson
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
