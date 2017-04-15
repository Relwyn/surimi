<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
  public function menuAction()
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !

    return $this->render('OCPlatformBundle:Advert:menu.html.twig');
  }
}
