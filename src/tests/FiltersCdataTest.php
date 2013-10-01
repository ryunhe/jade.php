<?php

namespace Jade\Tests;

/**
 * Class Each Else test
 * @package Jade\Tests
 */
class FiltersCdataTest extends TestBase {
    public function testFilters_cdata() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 