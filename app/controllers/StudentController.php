<?php
class StudentController extends BaseController
{
    public function sayhi(){
        $message = "Hi,I am Daisy.";
        return View::make('student.sayhi')->with('variable',$message);
    }
}