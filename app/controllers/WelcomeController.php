<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 12:14 PM
 */

class WelcomeController extends BaseController{
    public function sayhello(){
        return View::make('welcome.sayhello')
            ->with(array('hi'=>'hello, how are you?','name'=>'I am Piash',
                         'anArrayExampleKey'=>'Hello Bangladesh'));
    }
} 