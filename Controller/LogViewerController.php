<?php

namespace Eidsonator\WebLogViewerBundle\Controller;

use Eidsonator\WebLogViewerBundle\Model\LogView;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LogViewerController extends Controller
{
    /**
     * @Route("logs/viewer", name="log_viewer")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function logViewAction(Request $request)
    {
        $log = $request->query->get('log');
        $delete = filter_var($request->query->get('delete'), FILTER_VALIDATE_BOOLEAN);

        $logDir = $this->container->get('kernel')->getLogDir();
        $logfile = "$logDir/$log";

        if($delete) {
            unlink($logfile);
            return $this->redirectToRoute('eidsonator_weblogviewer_loglist_loglist');
        }

        if (file_exists($logfile)) {
            $log = file_get_contents($logfile);
            $context['log'] = LogView::logToArray($log);
        } else {
            $context['noLog'] = true;
        }
        return $this->render('@WebLogViewer/logView.html.twig', $context);
    }
}