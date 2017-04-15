<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject")
 * @ORM\Entity
 */
class Subject
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
     * @ORM\Column(name="shortname", type="string", length=30, nullable=true)
     */
    private $shortname;

    /**
     * @var integer
     *
     * @ORM\Column(name="cnu", type="bigint", nullable=false)
     */
    private $cnu;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;



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
     * Set shortname
     *
     * @param string $shortname
     *
     * @return Subject
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set cnu
     *
     * @param integer $cnu
     *
     * @return Subject
     */
    public function setCnu($cnu)
    {
        $this->cnu = $cnu;

        return $this;
    }

    /**
     * Get cnu
     *
     * @return integer
     */
    public function getCnu()
    {
        return $this->cnu;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Subject
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
