<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 5:08 PM
 */

class GreetingControllerTest extends TestCase{
    function testLoadingGreetingsSayHi(){
        $this->call('GET', 'greetings/sayhi');
        $this->assertResponseOk();
    }
} 