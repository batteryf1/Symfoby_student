<?php

namespace Univercity\ScheduleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //echo 'Hello';
        return $this->render('@UnivercitySchedule/Default/index.html.twig');
    }
}
