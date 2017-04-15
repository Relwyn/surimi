<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Delay
 *
 * @ORM\Table(name="delay", indexes={@ORM\Index(name="datas_id_idx", columns={"datas_id"})})
 * @ORM\Entity
 */
class Delay
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
     * @ORM\Column(name="minuts", type="bigint", nullable=true)
     */
    private $minuts;

    /**
     * @var \OC\PlatformBundle\Entity\Datas
     *
     * @ORM\ManyToOne(targetEntity="OC\PlatformBundle\Entity\Datas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="datas_id", referencedColumnName="id")
     * })
     */
    private $datas;



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
     * Set minuts
     *
     * @param integer $minuts
     *
     * @return Delay
     */
    public function setMinuts($minuts)
    {
        $this->minuts = $minuts;

        return $this;
    }

    /**
     * Get minuts
     *
     * @return integer
     */
    public function getMinuts()
    {
        return $this->minuts;
    }

    /**
     * Set datas
     *
     * @param \OC\PlatformBundle\Entity\Datas $datas
     *
     * @return Delay
     */
    public function setDatas(\OC\PlatformBundle\Entity\Datas $datas = null)
    {
        $this->datas = $datas;

        return $this;
    }

    /**
     * Get datas
     *
     * @return \OC\PlatformBundle\Entity\Datas
     */
    public function getDatas()
    {
        return $this->datas;
    }
}
