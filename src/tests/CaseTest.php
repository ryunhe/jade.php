<?php

namespace Jade\Tests;

include_once 'TestBase.php';

class CaseTest extends TestBase {
    public function testCase() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 