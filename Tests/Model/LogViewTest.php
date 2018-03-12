<?php

namespace Greenskies\WebLogViewerBundle\Tests\Model;

use Greenskies\WebLogViewerBundle\Model\LogView;

class LogViewTest extends \PHPUnit\Framework\TestCase
{
    public function testDateTime()
    {
        $log = file_get_contents('Tests/Fixtures/LogView/info.log');
        $logLine = LogView::logToArray($log)[0];
        $this->assertEquals('[2017-11-05 08:40:11]', $logLine['dateTime']);
    }
}
