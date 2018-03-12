<?php

namespace Greenskies\WebLogViewerBundle\Tests\Model;

use Greenskies\WebLogViewerBundle\Model\LogList;

class LogListTest extends \PHPUnit\Framework\TestCase
{

    private $logList;
    private $logArray;

    public function setUp()
    {
        $this->logList = new LogList();
        $this->logArray = $this->logList->getLogList('Tests/Fixtures/LogList/');
    }

    public function testGetLogList()
    {
        $this->assertContains('log-a.log', $this->logArray);
        $this->assertContains('log-b.log', $this->logArray);
    }

    public function testGetLogListSubDir()
    {
        $this->assertContains('subDir/log-sub.log', $this->logArray);
    }

    public function testIgnoresDotFiles()
    {
        $this->assertNotContains('.', $this->logArray);
        $this->assertNotContains('..', $this->logArray);
    }

    public function testIgnoresNonLogFiles()
    {
        $this->assertNotContains('file.text', $this->logArray);
    }
}
