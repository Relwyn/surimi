<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devoir
 *
 * @ORM\Table(name="devoir", indexes={@ORM\Index(name="evaluation_id_idx", columns={"evaluation_id"})})
 * @ORM\Entity
 */
class Devoir
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="coef", type="float", precision=20, scale=18, nullable=false)
     */
    private $coef;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=true)
     */
    private $jour;

    /**
     * @var integer
     *
     * @ORM\Column(name="final", type="bigint", nullable=false)
     */
    private $final;

    /**
     * @var integer
     *
     * @ORM\Column(name="limite", type="integer", nullable=false)
     */
    private $limite;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Devoir
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set coef
     *
     * @param float $coef
     *
     * @return Devoir
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;

        return $this;
    }

    /**
     * Get coef
     *
     * @return float
     */
    public function getCoef()
    {
        return $this->coef;
    }

    /**
     * Set jour
     *
     * @param \DateTime $jour
     *
     * @return Devoir
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set final
     *
     * @param integer $final
     *
     * @return Devoir
     */
    public function setFinal($final)
    {
        $this->final = $final;

        return $this;
    }

    /**
     * Get final
     *
     * @return integer
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * Set limite
     *
     * @param integer $limite
     *
     * @return Devoir
     */
    public function setLimite($limite)
    {
        $this->limite = $limite;

        return $this;
    }

    /**
     * Get limite
     *
     * @return integer
     */
    public function getLimite()
    {
        return $this->limite;
    }

    /**
     * Set evaluation
     *
     * @param \OC\PlatformBundle\Entity\Evaluation $evaluation
     *
     * @return Devoir
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
}
