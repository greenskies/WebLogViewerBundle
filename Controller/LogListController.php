<?php

namespace Eidsonator\WebLogViewerBundle\Controller;

use Eidsonator\WebLogViewerBundle\Model\LogList;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LogListController extends Controller
{
    /**
     * @Route("logs")
     */
    public function logListAction(Request $request)
    {
        $kernel = $this->container->get('kernel');
        $logDir = $kernel->getLogDir();
        $logs = (new LogList())->getLogList($logDir);
        return $this->render('@WebLogViewer/listView.html.twig', [
            'logs' => $logs
        ]);
    }

}