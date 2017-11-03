<?php

namespace Eidsonator\WebLogViewerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LogViewerController extends Controller
{
    public function logViewAction(Request $request)
    {
        $this->render('@WebLogViewer/logView.html.twig');
    }
}