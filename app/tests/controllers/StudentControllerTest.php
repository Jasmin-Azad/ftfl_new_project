<?php
class StudentControllerTest extends TestCase
{
    public function testLoadingStudentSayhi()
    {
        $this->call('GET','student/sayhi');
        $this->assertResponseOk();
    }
}