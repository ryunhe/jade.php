<?php
namespace Jade\Tests;

/**
 * Class Index test
 * @package Jade\Tests
 */
class IndexTest extends TestBase {
    public function testIndex() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            