<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ServicesController extends Controller
{
    /**
     * @Route("/taggable-services", name="services")
     */
    public function indexAction(Request $request)
    {

        return $this->render('AppBundle:frontend:services.html.twig');
    }
}
