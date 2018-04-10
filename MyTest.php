<?php

use PHPUnit\Framework\TestCase;


class MyTest extends TestCase {

    protected $multiple;

    public function setup() {
        
        require_once ('Multiple.php');
        
        $this->multiple = new Multiple();
    }

    public function testIsLinio() {

        $result = $this->multiple->words[$this->multiple->lineo[9 % 3]];

        $this->assertEquals('Linio', $result);
    }

    public function testIsIt() {

        $result = $this->multiple->words[$this->multiple->it[10 % 5]];

        $this->assertEquals('IT', $result);
    }

    public function testIsLinianos() {


        $result = $this->multiple->words[$this->multiple->lineo[15 % 3] + $this->multiple->it[15 % 5]];

        $this->assertEquals('Linianos', $result);
    }

}
