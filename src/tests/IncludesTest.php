<?php
namespace Jade\Tests;

/**
 * Class Includes test
 * @package Jade\Tests
 */
class IncludesTest extends TestBase {
    public function testIncludes() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            