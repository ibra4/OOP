<?php

namespace MainApp;

abstract class ComputerBase {
    private function arrayToString($arr) {
        return implode(" , ", $arr);
    }
    
    protected function printComputer(array $computer_details) {
        print_r($this->arrayToString($computer_details));
    }

    abstract public function abstractMethod();
}
