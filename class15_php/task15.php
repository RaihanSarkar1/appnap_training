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
    public function __construct($name, $brand, $price) {
        parent::__construct($name, 2, $brand, $price);
    }
}

class car extends vehicle {
    public function __construct($name, $brand, $price) {
        parent::__construct($name, 4, $brand, $price);
    }
}

$new_rickshaw = new rickshaw("Green", "Brothers", 50000);
$new_bike = new motorbike("Scrambler","Ducati", 1000000);
$new_car = new car("Corolla", "Toyota", 1500000);
echo '<pre>'; print_r($new_rickshaw->get_info());
print_r($new_bike->get_info());
echo '<pre>'; print_r($new_car->get_info());
