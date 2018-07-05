<?php

namespace TestUpload;

/*
 * Well, here i was trying t implement hole amount of __magic PHP methods
 */

class Magic
{
    //place, where overloading data stores
    private $data = array();

    // overloading wouldn't happen, 'cause of declared variables
    public $n = true;

    //overloading will happen only when vars will called out of class
    public $x;
    public $y;
    public $z;


    //default constructor
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        echo "Constructor launched with x: ".$x.", y: ".$y, PHP_EOL;
    }

    //unusable destructor should be here
    //public function __destruct($x, $y){}

    //when object calls with 'echo'
    public function __toString()
    {
        return "Here is all i have: $this->x, $this->y, $this->z\n";
    }

    //when trying to call object as function
    public function __invoke()
    {
        echo "I'm not a function, im above that\n";
    }

    //setting overloaded data here
    public function __set($name, $value){
        echo "Ok, setting '$value' in '$name'\n";
        $this->data[$name] = $value;
    }

    //setting foverloaded data here
    public function __get($name)
    {
        echo "Trying to get value from '$name'\n";
        if (array_key_exists($name, $this->data)) {
            echo "Data successfully founded and written\n";
            return $this->data[$name];
        }

        trigger_error(
            "Can't get undefined value '$name' with __get(): ",
            E_USER_NOTICE
        );
        return null;
    }

    //checks for existing
    public function __isset($name)
    {
        if (isset($this->data[$name]))
            return true;
        return false;
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
        echo "'$name' was removed\n";
    }

    public function __call($name, $value)
    {
        echo "Calling method '$name' "
            . implode(', ', $value). "\n";
    }
}
?>