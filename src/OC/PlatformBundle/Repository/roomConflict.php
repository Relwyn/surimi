<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 25/05/2017
 * Time: 18:59
 */
namespace OC\PlatformBundle\Repository;
use Doctrine\ORM\EntityRepository;
use OC\PlatformBundle\Entity\Lesson;


/**
 *   Une petite classe créer au pif
 * Je sais pas ce que tu utilises comme méthode pour envoyer les données à ton serveur web
 * donc bon je préfère pas trop m'avancer sur l'utilité de cette classe >.>
 */
class roomConflict
{
    private $conflict1;
    private $conflict2;

    /**
     * roomConflict constructor.
     * @param $conflict1
     * @param $conflict2
     */
    public function __construct($conflict1, $conflict2)
    {
        $this->conflict1 = new Lesson($conflict1);
        $this->conflict2 = new Lesson($conflict2);
    }

    /**
     * @return mixed
     */
    public function getConflict2()
    {
        return $this->conflict2;
    }

    /**
     * @param mixed $conflict2
     */
    public function setConflict2($conflict2)
    {
        $this->conflict2 = $conflict2;
    }

    /**
     * @return mixed
     */
    public function getConflict1()
    {
        return $this->conflict1;
    }

    /**
     * @param mixed $conflict1
     */
    public function setConflict1($conflict1)
    {
        $this->conflict1 = $conflict1;
    }
}
