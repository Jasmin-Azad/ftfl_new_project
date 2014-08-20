<?php
/**
 * Created by PhpStorm.
 * User: LAB5
 * Date: 8/19/14
 * Time: 5:10 PM
 */

class GreetingsController extends BaseController{
    public function sayhi(){
        $message ="Hello, sayhi";
        return View::make('greeting.sayhi')
            ->with('message',$message);
    }
} 