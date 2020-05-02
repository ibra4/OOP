<?php

namespace MainApp;

interface ComputerInterface {
    /**
     * Sets the name of the computer
     *
     * @param string $name
     * @return void
     */
    public function setName($name);
    public function setRam($ram);
    public function setCpu($year);
    public function getFullSpecifications();
}