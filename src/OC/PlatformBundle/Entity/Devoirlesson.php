<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devoirlesson
 *
 * @ORM\Table(name="devoirlesson", indexes={@ORM\Index(name="devoir_id_idx", columns={"devoir_id"}), @ORM\Index(name="lesson_id_idx", columns={"lesson_id"})})
 * @ORM\Entity
 */
class Devoirlesson
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
     * @var \OC\PlatformBundle\Entity\Devoir
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Devoir")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="devoir_id", referencedColumnName="id")
     * })
     */
    private $devoir;

    /**
     * @var \OC\PlatformBundle\Entity\Lesson
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Lesson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lesson_id", referencedColumnName="id")
     * })
     */
    private $lesson;



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
     * Set devoir
     *
     * @param \OC\PlatformBundle\Entity\Devoir $devoir
     *
     * @return Devoirlesson
     */
    public function setDevoir(\OC\PlatformBundle\Entity\Devoir $devoir = null)
    {
        $this->devoir = $devoir;

        return $this;
    }

    /**
     * Get devoir
     *
     * @return \OC\PlatformBundle\Entity\Devoir
     */
    public function getDevoir()
    {
        return $this->devoir;
    }

    /**
     * Set lesson
     *
     * @param \OC\PlatformBundle\Entity\Lesson $lesson
     *
     * @return Devoirlesson
     */
    public function setLesson(\OC\PlatformBundle\Entity\Lesson $lesson = null)
    {
        $this->lesson = $lesson;

        return $this;
    }

    /**
     * Get lesson
     *
     * @return \OC\PlatformBundle\Entity\Lesson
     */
    public function getLesson()
    {
        return $this->lesson;
    }
}
