<?php

namespace MainApp;

class Computer extends ComputerBase implements ComputerInterface {

    use ComputerTrait1;
    use ComputerTrait2;

    // Properties
    private $name, $ram, $cpu;

    // Methods

    /**
     * {@inheritDoc}
     */
    public function setName($name) {
        $this->name = $name;
    }

    public function setRam($ram) {
        $this->ram = $ram;
    }

    public function setCpu($cpu) {
        $this->cpu = $cpu;
    }

    public function getFullSpecifications() {
        $this->printComputer([
            'name' => $this->name,
            'ram' => $this->ram,
            'cpu' => $this->cpu
        ]);
    }

    // this is abstract method defined in abstract class ComputerBase
    public function abstractMethod() {}

}
