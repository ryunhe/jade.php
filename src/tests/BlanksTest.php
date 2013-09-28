<?php

namespace Jade\Tests;

include_once 'TestBase.php';

class BlanksTest extends TestBase {
    public function testBlanks() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 