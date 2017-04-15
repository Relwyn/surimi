<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="utilisateurcrous_id_idx", columns={"utilisateurcrous_id"}), @ORM\Index(name="produit_id_idx", columns={"produit_id"})})
 * @ORM\Entity
 */
class Commande
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
     * @var integer
     *
     * @ORM\Column(name="utilisateurcrous_id", type="bigint", nullable=false)
     */
    private $utilisateurcrousId;

    /**
     * @var integer
     *
     * @ORM\Column(name="produit_id", type="bigint", nullable=false)
     */
    private $produitId;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb", type="bigint", nullable=false)
     */
    private $nb;



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
     * Set utilisateurcrousId
     *
     * @param integer $utilisateurcrousId
     *
     * @return Commande
     */
    public function setUtilisateurcrousId($utilisateurcrousId)
    {
        $this->utilisateurcrousId = $utilisateurcrousId;

        return $this;
    }

    /**
     * Get utilisateurcrousId
     *
     * @return integer
     */
    public function getUtilisateurcrousId()
    {
        return $this->utilisateurcrousId;
    }

    /**
     * Set produitId
     *
     * @param integer $produitId
     *
     * @return Commande
     */
    public function setProduitId($produitId)
    {
        $this->produitId = $produitId;

        return $this;
    }

    /**
     * Get produitId
     *
     * @return integer
     */
    public function getProduitId()
    {
        return $this->produitId;
    }

    /**
     * Set nb
     *
     * @param integer $nb
     *
     * @return Commande
     */
    public function setNb($nb)
    {
        $this->nb = $nb;

        return $this;
    }

    /**
     * Get nb
     *
     * @return integer
     */
    public function getNb()
    {
        return $this->nb;
    }
}
