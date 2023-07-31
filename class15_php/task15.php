<?php

class vehicle {
    private $name, $wheels, $brand, $price;

    public function get_info() {
        return [
            "name"=> $this->name,
            "wheels"=> $this->wheels,
            "brand"=> $this->brand,
            "price"=> $this->price
        ];
    }

    public function __construct($name, $wheels, $brand, $price) {
        $this->name = $name;
        $this->wheels = $wheels;
        $this->brand = $brand;
        $this->price = $price;
    }

}

class rickshaw extends vehicle {
    public function __construct($name, $brand, $price) {
        parent::__construct($name, 3, $brand, $price);
    }
}

class motorbike extends vehicle {

}

class car extends vehicle {

}

$new_rickshaw = new rickshaw("Green", "Brothers", 50000);

echo '<pre>'; print_r($new_rickshaw->get_info());
