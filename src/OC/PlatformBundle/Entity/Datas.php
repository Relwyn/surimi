<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Datas
 *
 * @ORM\Table(name="datas", indexes={@ORM\Index(name="etudiant_id_idx", columns={"etudiant_id"}), @ORM\Index(name="lesson_id_idx", columns={"lesson_id"})})
 * @ORM\Entity
 */
class Datas
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
     * @ORM\Column(name="reason", type="string", length=255, nullable=false)
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="piece", type="string", length=255, nullable=false)
     */
    private $piece;

    /**
     * @var boolean
     *
     * @ORM\Column(name="justified", type="boolean", nullable=false)
     */
    private $justified;

    /**
     * @var integer
     *
     * @ORM\Column(name="lesson_id", type="bigint", nullable=true)
     */
    private $lessonId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var \OC\PlatformBundle\Entity\Etudiant
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Etudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     * })
     */
    private $etudiant;



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
     * Set reason
     *
     * @param string $reason
     *
     * @return Datas
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set piece
     *
     * @param string $piece
     *
     * @return Datas
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return string
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Set justified
     *
     * @param boolean $justified
     *
     * @return Datas
     */
    public function setJustified($justified)
    {
        $this->justified = $justified;

        return $this;
    }

    /**
     * Get justified
     *
     * @return boolean
     */
    public function getJustified()
    {
        return $this->justified;
    }

    /**
     * Set lessonId
     *
     * @param integer $lessonId
     *
     * @return Datas
     */
    public function setLessonId($lessonId)
    {
        $this->lessonId = $lessonId;

        return $this;
    }

    /**
     * Get lessonId
     *
     * @return integer
     */
    public function getLessonId()
    {
        return $this->lessonId;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Datas
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etudiant
     *
     * @param \OC\PlatformBundle\Entity\Etudiant $etudiant
     *
     * @return Datas
     */
    public function setEtudiant(\OC\PlatformBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \OC\PlatformBundle\Entity\Etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}
