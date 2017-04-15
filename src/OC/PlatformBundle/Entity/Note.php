<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="etudiant_id_idx", columns={"etudiant_id"}), @ORM\Index(name="devoir_id_idx", columns={"devoir_id"})})
 * @ORM\Entity
 */
class Note
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
     * @ORM\Column(name="note", type="float", precision=18, scale=2, nullable=true)
     */
    private $note;

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
     * Set note
     *
     * @param float $note
     *
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set devoir
     *
     * @param \OC\PlatformBundle\Entity\Devoir $devoir
     *
     * @return Note
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
     * Set etudiant
     *
     * @param \OC\PlatformBundle\Entity\Etudiant $etudiant
     *
     * @return Note
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
