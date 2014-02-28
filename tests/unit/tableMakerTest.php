<?php

class tableMakerTest extends PHPUnit_Framework_TestCase
{

    public function testInitTable(){
        $maker = new tableMaker();
        $testString = $maker->initTable();

        $this->assertEquals($testString, "<table>");
    }

    public function testEndTable(){
        $maker = new tableMaker();
        $testString = $maker->endTable();

        $this->assertEquals($testString, "</table>");
    }

}

?>
