<?php

abstract class VehicleBase {
    // 4 properties
    protected $name; //Vehicle Name
    protected $type; //Vehicle Type
    protected $price; //Price    
    protected $image; //Image URL

    //lode
    public function __construct($name, $type, $price, $image){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }

    abstract public function getDetails(); //method
}
