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

    public function testMakeRow(){
        $maker = new tableMaker();
        $result = $maker->makeRow(array('one','two','three'));
        $expected = '<tr><td>one</td><td>two</td><td>three</td></tr>';

        $this->assertEquals($result,$expected);
    }

    public function testMakeHeaders(){
        $maker = new tableMaker();
        $result = $maker->makeHeaders(array('one','two','three'));
        $expected = '<tr><th>one</th><th>two</th><th>three</th></tr>';

        $this->assertEquals($result,$expected);
    }
}

?>
