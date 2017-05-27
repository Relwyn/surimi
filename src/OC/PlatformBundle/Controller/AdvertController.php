<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Doctrine\ORM\Query;
use OC\PlatformBundle\Entity\Etudiant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;

use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityRepository;
use Zend\Json\Expr;
use Ob\HighchartsBundle\DependencyInjection\ObHighchartsExtension;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\PlatformBundle\Entity\Lesson;

class AdvertController extends Controller
{
    public function getRoomProblem()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Lesson');
        $room= $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Room');
        $teacher = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Teacher');

        $lessons = $em->findAll();
        $listConflict = array();

        //lessons devrait être un tableau de Entity\Lesson
        foreach ($lessons as $l) {
            foreach ($lessons as $t) {

                $r1=$l->getRoom();
                $r2=$t->getRoom();
                $t1=$l->getTeacher();
                $t2=$t->getTeacher();
                if($r1!=null and $r2!=null and $t1!=null and $t2!=null){
                    if (($l->getStart() == $t->getStart() || $l->getEnd() == $t->getEnd())
                        and $r1->getId() == $r2->getId() and $t1->getId() != $t2->getId()
                    ) {

                        $text="Il y a un conflit pour la salle ".$r1->getName()." le ".date_format($l->getStart(),'d-m-Y')."\n Mr/Mme ".$t1->getShortname()." et Mr/Mme ".$t2->getShortname()." sont priés de modifier l'emplacement de leurs cours";
                        $listConflict[] =$text;

                    }
                }
            }
        }
        return $listConflict;
    }
    public function getGroupProblem()
    {
        $em = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Lesson');
        $room= $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Room');
        $teacher = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Teacher');

        $lessons = $em->findAll();
        $listConflict = array();

        //lessons devrait être un tableau de Entity\Lesson
        foreach ($lessons as $l) {
            foreach ($lessons as $t) {

                $g1=$l->getGroupe();
                $g2=$t->getGroupe();
                $t1=$l->getTeacher();
                $t2=$t->getTeacher();
                if($g1!=null and $g2!=null and $t1!=null and $t2!=null){
                    if (($l->getStart() == $t->getStart() || $l->getEnd() == $t->getEnd())
                        and $g1->getId() == $g2->getId() and $t1->getId() != $t2->getId()
                    ) {

                        $text="Il y a un conflit concernant le groupe ".$g1->getName()." le ".date_format($l->getStart(),'d-m-Y')."\n Mr/Mme ".$t1->getShortname()." et Mr/Mme ".$t2->getShortname()." sont priés de modifier l'emplacement de leurs cours";
                        $listConflict[] =$text;

                    }
                }
            }
        }
        return $listConflict;
    }
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

      $absence = array(
          array(
              "name" => "Absences Justifiées",
              "data" => array($moisjust[0],$moisjust[1],$moisjust[2],$moisjust[3],$moisjust[4],$moisjust[5],$moisjust[6],$moisjust[7],$moisjust[8],$moisjust[9],$moisjust[10],$moisjust[11])
          ),
          array(
              "name" => "Absences Injustifiées",
              "data" => array($moisinjust[0],$moisinjust[1],$moisinjust[2],$moisinjust[3],$moisinjust[4],$moisinjust[5],$moisinjust[6],$moisinjust[7],$moisinjust[8],$moisinjust[9],$moisinjust[10],$moisinjust[11])
          ),
      );

      $dates = array(
          "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet","Août","Septembre","Octobre","Novembre","Décembre"
      );

      $ob = new Highchart();
      // ID de l'élement de DOM que vous utilisez comme conteneur
      $ob->chart->renderTo('linechart');
      $ob->title->text('');

      $ob->yAxis->title(array('text' => "Nombre d'absence"));

      $ob->xAxis->title(array('text'  => "Mois"));
      $ob->xAxis->categories($dates);

      $ob->series($absence);
//--------------------------------------------------------------------------------------------------------------------------------




      $repository = $this->getDoctrine()
          ->getRepository('OCPlatformBundle:Room');

// createQueryBuilder() automatically selects FROM AppBundle:Product
// and aliases it to "p"
      $query = $repository->createQueryBuilder('room')
          ->where('room.dept = :nom')
          ->setParameter('nom', 'INFO')
          ->orderBy('room.id', 'ASC')
          ->getQuery();

      $salle = $query->getResult();

//--------------------------------------------------------------------------------------------------------------------------------
      $repository = $this->getDoctrine()
          ->getRepository('OCPlatformBundle:Lesson');

      $rawSql = "select module, sum(nbtdhours)+sum(nbcmhours)+sum(nbtphours)+sum(nbgcm)+sum(nbgtd)+sum(nbgtp) as nbHeureTotal from course where module!='' and nbgcm is not null and nbgtd is not null and nbgtp is not null GROUP BY module HAVING nbHeureTotal is not null;";

      $module = $this->getDoctrine()->getConnection()->prepare($rawSql);
      $module->execute([]);
      $tabModule=$module->fetchAll();

      $rawSql = "select etudiant_id, module, count(etudiant_id)*sum((unix_timestamp(end)-unix_timestamp(start))/3600) as nbHeureRate from ( select etudiant_id, module, start, end from datas join lesson on lesson.id=lesson_id join course on course.id=lesson.course_id where justified=0 group by etudiant_id, lesson_id) as t2 GROUP BY etudiant_id, module";

      $abs = $this->getDoctrine()->getConnection()->prepare($rawSql);
      $abs->execute([]);
      $tabAbs=$abs->fetchAll();
      $eleveAbs=array();
      foreach ($tabAbs as $eleve){
          foreach ($tabModule as $cours){
              if($eleve['module']==$cours['module']) {
                  if ($eleve['nbHeureRate']>($cours['nbHeureTotal']*0.06)) {
                      $eleveAbs[] = $eleve; // faire le calcule avec table au dessus
                  }
              }
          }

      }
      $tabEtudiant=array();
      $em = $this->getDoctrine()->getEntityManager();
      $doublon=new Etudiant();
      $matiere="";

      foreach ($eleveAbs as $eleve){
          $etudiant=$em->getRepository('OCPlatformBundle:Etudiant')->find($eleve['etudiant_id']);
          $etudiant->setGender($eleve['module']);
          if ($doublon->getId()!=$etudiant->getId() or $matiere!=$eleve['module'])
          {
              $tabEtudiant[]=$etudiant;
          }
          $doublon=$etudiant;
          $matiere=$eleve['module'];

      }


//--------------------------------------------------------------------------------------------------------------------------------
      $sameRoom=$this->getRoomProblem();
      foreach ($sameRoom as $room){
          print_r($room);

      }
      $sameGroupe=$this->getGroupProblem();
      foreach ($sameGroupe as $room){
          print_r($room);

      }


//--------------------------------------------------------------------------------------------------------------------------------

      return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
          'linechart' => $ob,
          'salle' => $salle,
          'absences' =>$tabEtudiant,
      ));
  }

}

