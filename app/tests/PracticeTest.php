<?php
use Way\Tests\Assert;
use Way\Tests\Should;
class DateFormatter{
    protected  $stamp;
    public function __construct(DateTime $stamp)
    {
        $this->stamp=$stamp;
    }
    public function getstamp()
    {
        return $this->stamp;
    }
}

class PracticeTest extends TestCase{
    public function testHelloWorld()

{
    $greeting = 'Hello,World.';
    $this->assertTrue($greeting==='Hello,World.');


}

    public function testAssertEquals(){

    $greetings = 'Hello,World.';
    $this->assertEquals('Hello,World.',$greetings);

    }

    public function testLaravelDevsIncludeDayle()
    {
        $name=['Taylor','shawn','Dayle'];
        $this->assertContains('Dayle',$name);
    }

    public function testFamilyRequiresParent(){
        $family = [
            'parents'=>'joe',
            'children'=>['Timmy','Suzy']
        ];
        $this->assertArrayHasKey('parents',$family);
    }













     $date = new DateFormatter(new DateTime);

        $this->assertInstanceOf('DateTime',$date->getstamp());
    }
        public function testItWorks()
        {
            $name = 'Joe';
            Should :: equal('Joe',$name);
            Assert :: equals('Joe',$name);
        }

}
