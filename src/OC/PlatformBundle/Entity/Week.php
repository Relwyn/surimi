<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Week
 *
 * @ORM\Table(name="week", uniqueConstraints={@ORM\UniqueConstraint(name="dept", columns={"dept"})})
 * @ORM\Entity
 */
class Week
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
     * @ORM\Column(name="dept", type="string", length=20, nullable=false)
     */
    private $dept;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="students", type="date", nullable=true)
     */
    private $students;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="teachers", type="date", nullable=true)
     */
    private $teachers;



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
     * @return Week
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
     * Set students
     *
     * @param \DateTime $students
     *
     * @return Week
     */
    public function setStudents($students)
    {
        $this->students = $students;

        return $this;
    }

    /**
     * Get students
     *
     * @return \DateTime
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Set teachers
     *
     * @param \DateTime $teachers
     *
     * @return Week
     */
    public function setTeachers($teachers)
    {
        $this->teachers = $teachers;

        return $this;
    }

    /**
     * Get teachers
     *
     * @return \DateTime
     */
    public function getTeachers()
    {
        return $this->teachers;
    }
}
