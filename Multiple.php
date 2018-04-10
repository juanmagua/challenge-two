<?php

/*
 *  Chanllenguer Nro. 2
 */

class Multiple {

    public $lineo = [1, 0, 0];
    public $it = [2, 0, 0, 0, 0];
    public $words = ['', "Linio", "IT", "Linianos"];

    /*
     * 
     */

    public function fizzbuzz($n) {
        for ($i = 0; $i <= $n; $i++) {
            $this->words[0] = $i;
            $this->show_me($this->words[$this->lineo[$i % 3] + $this->it[$i % 5]]);
        }
    }

    /*
     * 
     */

    public function show_me($n) {
        echo '<pre>';
        print_r($n);
    }

}
