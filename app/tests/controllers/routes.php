<?php
Route :: get('/',function()
{
 return view :: make('hello');
});
Route :: get('welcome/Sayhello','welcomeController@Sayhello');
Route :: get('greeting/Sayhi','greetingController@Sayhi');
Route :: get('student/sayhi','StudentController@sayhi');
