<?php

namespace Jade\Tests;

include_once 'TestBase.php';

class BasicTest extends TestBase {
    public function testBasic() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 