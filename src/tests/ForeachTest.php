<?php

namespace Jade\Tests;

/**
 * Class Each Else test
 * @package Jade\Tests
 */
class ForeachTest extends TestBase {
    public function testForeach() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 