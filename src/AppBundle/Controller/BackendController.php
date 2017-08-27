<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BackendController extends Controller
{

  public function indexAction(Request $request)
  {
    // replace this example code with whatever you need
    return $this->render('AppBundle:Backend:index.html.twig', array(
      'title' => 'Inicio',
      ));
  }
}
