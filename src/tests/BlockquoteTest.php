<?php

namespace Jade\Tests;

class BlockquoteTest extends TestBase {
    public function testBlockquote() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 