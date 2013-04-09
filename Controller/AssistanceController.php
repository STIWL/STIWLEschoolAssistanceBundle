<?php

namespace Esolving\Eschool\AssistanceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AssistanceController extends Controller
{
    public function submenuAction()
    {
        return $this->render('EsolvingEschoolAssistanceBundle:Assistance:submenu.html.twig', array());
    }
}
