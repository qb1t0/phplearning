<?php

namespace TestUploadTrait;

class LoadTrait
{
    private $sex = array("mr.", "ms.");

    //solving same methods name in using traits
    use HelloParent, HelloWorld, HelloUniverse{
        HelloUniverse::loadName insteadof HelloWorld;
    }

    public function __construct($name, $sex)
    {
        if (!$name) {
            echo "No greetings for u, input parameter next time";
            return(0);
        }

        $id = $sex == 'male' ? 0 : 1;

        $this->sayHello();
        $this->loadName();
        echo " {$this->sex[$id]} {$name}\n";
        return(1);
    }

}