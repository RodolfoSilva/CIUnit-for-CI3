<?php

/**
 * @group Controller
 */

class Welcome_Test extends CIUnit_TestCase
{
    public function setUp()
    {
        $this->CI = set_controller('Welcome');
    }

    public function testWelcomeController()
    {
        // Call the controllers method
        ob_start();
        $this->CI->index();

        // Fetch the buffered output
        $out =  ob_get_contents();
        ob_end_clean();

        // Check if the content is OK
        $this->assertSame(0, preg_match('/(error|notice)/i', $out));
    }
}
