<?php

namespace Jade\Tests;

include_once 'TestBase.php';
/**
 * Class CaseTest
 * THe switch handling results in ugly html due to PHP rendering
 * @package Jade\Tests
 */
class CaseTest extends TestBase {
    public function testCase() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 