<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilite
 *
 * @ORM\Table(name="disponibilite", indexes={@ORM\Index(name="teacher_id_idx", columns={"teacher_id"})})
 * @ORM\Entity
 */
class Disponibilite
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
     * @ORM\Column(name="jour", type="string", length=20, nullable=false)
     */
    private $jour;

    /**
     * @var integer
     *
     * @ORM\Column(name="h8", type="bigint", nullable=false)
     */
    private $h8;

    /**
     * @var integer
     *
     * @ORM\Column(name="h9", type="bigint", nullable=false)
     */
    private $h9;

    /**
     * @var integer
     *
     * @ORM\Column(name="h10", type="bigint", nullable=false)
     */
    private $h10;

    /**
     * @var integer
     *
     * @ORM\Column(name="h11", type="bigint", nullable=false)
     */
    private $h11;

    /**
     * @var integer
     *
     * @ORM\Column(name="h12", type="bigint", nullable=false)
     */
    private $h12;

    /**
     * @var integer
     *
     * @ORM\Column(name="h13", type="bigint", nullable=false)
     */
    private $h13;

    /**
     * @var integer
     *
     * @ORM\Column(name="h14", type="bigint", nullable=false)
     */
    private $h14;

    /**
     * @var integer
     *
     * @ORM\Column(name="h15", type="bigint", nullable=false)
     */
    private $h15;

    /**
     * @var integer
     *
     * @ORM\Column(name="h16", type="bigint", nullable=false)
     */
    private $h16;

    /**
     * @var integer
     *
     * @ORM\Column(name="h17", type="bigint", nullable=false)
     */
    private $h17;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

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
     * Set dept
     *
     * @param string $dept
     *
     * @return Disponibilite
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
     * Set jour
     *
     * @param string $jour
     *
     * @return Disponibilite
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set h8
     *
     * @param integer $h8
     *
     * @return Disponibilite
     */
    public function setH8($h8)
    {
        $this->h8 = $h8;

        return $this;
    }

    /**
     * Get h8
     *
     * @return integer
     */
    public function getH8()
    {
        return $this->h8;
    }

    /**
     * Set h9
     *
     * @param integer $h9
     *
     * @return Disponibilite
     */
    public function setH9($h9)
    {
        $this->h9 = $h9;

        return $this;
    }

    /**
     * Get h9
     *
     * @return integer
     */
    public function getH9()
    {
        return $this->h9;
    }

    /**
     * Set h10
     *
     * @param integer $h10
     *
     * @return Disponibilite
     */
    public function setH10($h10)
    {
        $this->h10 = $h10;

        return $this;
    }

    /**
     * Get h10
     *
     * @return integer
     */
    public function getH10()
    {
        return $this->h10;
    }

    /**
     * Set h11
     *
     * @param integer $h11
     *
     * @return Disponibilite
     */
    public function setH11($h11)
    {
        $this->h11 = $h11;

        return $this;
    }

    /**
     * Get h11
     *
     * @return integer
     */
    public function getH11()
    {
        return $this->h11;
    }

    /**
     * Set h12
     *
     * @param integer $h12
     *
     * @return Disponibilite
     */
    public function setH12($h12)
    {
        $this->h12 = $h12;

        return $this;
    }

    /**
     * Get h12
     *
     * @return integer
     */
    public function getH12()
    {
        return $this->h12;
    }

    /**
     * Set h13
     *
     * @param integer $h13
     *
     * @return Disponibilite
     */
    public function setH13($h13)
    {
        $this->h13 = $h13;

        return $this;
    }

    /**
     * Get h13
     *
     * @return integer
     */
    public function getH13()
    {
        return $this->h13;
    }

    /**
     * Set h14
     *
     * @param integer $h14
     *
     * @return Disponibilite
     */
    public function setH14($h14)
    {
        $this->h14 = $h14;

        return $this;
    }

    /**
     * Get h14
     *
     * @return integer
     */
    public function getH14()
    {
        return $this->h14;
    }

    /**
     * Set h15
     *
     * @param integer $h15
     *
     * @return Disponibilite
     */
    public function setH15($h15)
    {
        $this->h15 = $h15;

        return $this;
    }

    /**
     * Get h15
     *
     * @return integer
     */
    public function getH15()
    {
        return $this->h15;
    }

    /**
     * Set h16
     *
     * @param integer $h16
     *
     * @return Disponibilite
     */
    public function setH16($h16)
    {
        $this->h16 = $h16;

        return $this;
    }

    /**
     * Get h16
     *
     * @return integer
     */
    public function getH16()
    {
        return $this->h16;
    }

    /**
     * Set h17
     *
     * @param integer $h17
     *
     * @return Disponibilite
     */
    public function setH17($h17)
    {
        $this->h17 = $h17;

        return $this;
    }

    /**
     * Get h17
     *
     * @return integer
     */
    public function getH17()
    {
        return $this->h17;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Disponibilite
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
     * Set teacher
     *
     * @param \OC\PlatformBundle\Entity\Teacher $teacher
     *
     * @return Disponibilite
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
