<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table(name="absence", indexes={@ORM\Index(name="datas_id_idx", columns={"datas_id"})})
 * @ORM\Entity
 */
class Absence
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
     * Set datas
     *
     * @param \OC\PlatformBundle\Entity\Datas $datas
     *
     * @return Absence
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
