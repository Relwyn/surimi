<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Doctrine\ORM\EntityRepository;
use Zend\Json\Expr;
use Ob\HighchartsBundle\DependencyInjection\ObHighchartsExtension;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
  public function menuAction()
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
      // Chart

//      $qb->select('p')
//          ->where('YEAR(p.postDate) = :year')
//          ->andWhere('MONTH(p.postDate) = :month')
//          ->andWhere('DAY(p.postDate) = :day');
//
//      $qb->setParameter('year', $year)
//          ->setParameter('month', $month)
//          ->setParameter('day', $day);
//

//      $em = $this->getDoctrine()->getEntityManager();
//      $datas = $em->getRepository('OCPlatformBundle:Datas')->findAll();
//      $datas = $em->getRepository('OCPlatformBundle:Datas')->findAll(array(), Query::HYDRATE_ARRAY);

//test




      $sellsHistory = array(
          array(
              "name" => "DUT 1",
              "data" => array(683, 756, 543, 1208, 617, 990, 1001)
          ),
          array(
              "name" => "DUT 2",
              "data" => array(467, 321, 56, 698, 134, 344, 452)
          ),

      );

      $dates = array(
          "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet","Août","Septembre","Octobre","Novembre","Décembre"
      );

      $ob = new Highchart();
      // ID de l'élement de DOM que vous utilisez comme conteneur
      $ob->chart->renderTo('linechart');
      $ob->title->text('Taux d\'absence par mois');

      $ob->yAxis->title(array('text' => "Nombre d'absence"));

      $ob->xAxis->title(array('text'  => "Mois"));
      $ob->xAxis->categories($dates);

      $ob->series($sellsHistory);

      return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
          'linechart' => $ob,
//          'datas' =>$datas
      ));
  }
}
