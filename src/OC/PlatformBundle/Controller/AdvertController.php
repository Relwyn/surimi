<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
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
      $sellsHistory = array(
          array(
              "name" => "Total des ventes",
              "data" => array(683, 756, 543, 1208, 617, 990, 1001)
          ),
          array(
              "name" => "Ventes en France",
              "data" => array(467, 321, 56, 698, 134, 344, 452)
          ),

      );

      $dates = array(
          "21/06", "22/06", "23/06", "24/06", "25/06", "26/06", "27/06"
      );

      $ob = new Highchart();
      // ID de l'élement de DOM que vous utilisez comme conteneur
      $ob->chart->renderTo('linechart');
      $ob->title->text('Vente du 21/06/2013 au 27/06/2013');

      $ob->yAxis->title(array('text' => "Ventes (milliers d'unité)"));

      $ob->xAxis->title(array('text'  => "Date du jours"));
      $ob->xAxis->categories($dates);

      $ob->series($sellsHistory);

      return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
          'linechart' => $ob
      ));
  }
}
