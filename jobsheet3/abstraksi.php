<?php
// kelas abstrak
abstract class Shape {
    abstract public function area();
}

// kelas rectangle yang mewarisi kelas shape
class Rectangle extends Shape {
    private $width;
    private $height;

    // construct untuk menginisialisasi lebar dan tinggi
    public function __construct($width, $height) {
        $this->width = $width;
        $this->width = $height;
    }

    // metode untuk menghitung luas persegi panjang
    public function area() {
        return $this->width * $this->height;
    }
}

// kelas circle yang mewarisi dari kelas abstrak shape
class Circle extends Shape {
    private $radius;

    // construct untuk menginisialisasi radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // metode untuk menghitung luas lingkaran
    public function area() {
        return pi() * pow ($this->radius, 2);
    }
}

// membuat objek rectangle
$rectangle = new Rectangle(5, 10);
echo "Area of Rectangle: " . $rectangle->area(). "<br>" ; // Output: Area of Rectangle: 50
// membuat objek circle
$circle = new Circle(7);
echo "Area of Circle: " . $circle->area(); // Output: Area of Circle: 153.9380400259
?>