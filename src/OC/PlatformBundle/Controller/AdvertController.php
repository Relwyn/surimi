<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Doctrine\ORM\Query;
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

      $em = $this->getDoctrine()->getEntityManager();
      //$datas = $em->getRepository('OCPlatformBundle:Datas')->find(4);
      $datas = $em->getRepository('OCPlatformBundle:Datas')->findAll(array(), Query::HYDRATE_ARRAY);
      $moisjust=new \SplFixedArray(12);
      $moisinjust=new \SplFixedArray(12);
      for($i=0;$i<12;$i++)
      {
          $moisjust[$i]=0;
          $moisinjust[$i]=0;
      }


      foreach ($datas as $data)
      {
          if($data!=null)
          {
              $mydate = $data->getDate();
              $month = date("n",strtotime(date_format($mydate,"Y-m-d")));
              if($data->getJustified())
              {
                  $moisjust[$month-1]+=1;
              }
              else{
                  $moisinjust[$month-1]+=1;
              }

          }

      }



      $sellsHistory = array(
          array(
              "name" => "DUT 1",
              "data" => array($moisjust[0],$moisjust[1],$moisjust[2],$moisjust[3],$moisjust[4],$moisjust[5],$moisjust[6],$moisjust[7],$moisjust[8],$moisjust[9],$moisjust[10],$moisjust[11])
          ),
          array(
              "name" => "DUT 2",
              "data" => array($moisinjust[0],$moisinjust[1],$moisinjust[2],$moisinjust[3],$moisinjust[4],$moisinjust[5],$moisinjust[6],$moisinjust[7],$moisinjust[8],$moisinjust[9],$moisinjust[10],$moisinjust[11])
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

      ));
  }
}
