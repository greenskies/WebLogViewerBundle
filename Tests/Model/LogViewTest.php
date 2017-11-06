<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 06/11/17
 * Time: 7:18 AM
 */

namespace Eidsonator\WebLogViewerBundle\Tests\Model;

use Eidsonator\WebLogViewerBundle\Model\LogView;

class LogViewTest extends \PHPUnit_Framework_TestCase
{
    public function testDateTime()
    {
        $log = file_get_contents('Tests/Fixtures/LogView/info.log');
        $logLine = LogView::logToArray($log)[0];
        $this->assertEquals('[2017-11-05 08:40:11]', $logLine['dateTime']);
    }
}