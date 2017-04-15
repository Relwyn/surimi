<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingroup
 *
 * @ORM\Table(name="ingroup", indexes={@ORM\Index(name="etudiant_id_idx", columns={"etudiant_id"}), @ORM\Index(name="groupe_id_idx", columns={"groupe_id"})})
 * @ORM\Entity
 */
class Ingroup
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
     * @ORM\Column(name="start", type="date", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date", nullable=true)
     */
    private $end;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupe_id", type="bigint", nullable=false)
     */
    private $groupeId;

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
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Ingroup
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
     * @return Ingroup
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
     * Set groupeId
     *
     * @param integer $groupeId
     *
     * @return Ingroup
     */
    public function setGroupeId($groupeId)
    {
        $this->groupeId = $groupeId;

        return $this;
    }

    /**
     * Get groupeId
     *
     * @return integer
     */
    public function getGroupeId()
    {
        return $this->groupeId;
    }

    /**
     * Set etudiant
     *
     * @param \OC\PlatformBundle\Entity\Etudiant $etudiant
     *
     * @return Ingroup
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
