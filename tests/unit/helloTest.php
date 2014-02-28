<?php

class helloTest extends PHPUnit_Framework_TestCase
{

    public function testHello(){
        $testString = say_hi();

        $this->assertEquals($testString, "Hello world!");
    }

    public function brokenTest(){
        $this->assertEquals('no','yes');
    }

}

?>
