<?php

namespace Eidsonator\WebLogViewerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LogListController extends Controller
{
    public function listAction(Request $request)
    {
        $this->render('@WebLogViewer/listView.html.twig');
    }
}