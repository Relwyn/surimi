<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Knoweval
 *
 * @ORM\Table(name="knoweval", indexes={@ORM\Index(name="evaluation_id_idx", columns={"evaluation_id"}), @ORM\Index(name="teacher_id_idx", columns={"teacher_id"})})
 * @ORM\Entity
 */
class Knoweval
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
     * @var \OC\PlatformBundle\Entity\Evaluation
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Evaluation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evaluation_id", referencedColumnName="id")
     * })
     */
    private $evaluation;

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
     * Set evaluation
     *
     * @param \OC\PlatformBundle\Entity\Evaluation $evaluation
     *
     * @return Knoweval
     */
    public function setEvaluation(\OC\PlatformBundle\Entity\Evaluation $evaluation = null)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return \OC\PlatformBundle\Entity\Evaluation
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set teacher
     *
     * @param \OC\PlatformBundle\Entity\Teacher $teacher
     *
     * @return Knoweval
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
