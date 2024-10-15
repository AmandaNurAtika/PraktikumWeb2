<?php
// kelas induk animal
class Animal {
    // atribut protected yang dpt diakses oleh kelas ini dan anak kelas
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
}

// kelas dog yang mewarisi dari kelas animal
class Dog extends Animal {
    // metode untuk menghasilkan suara anjing
    public function makeSound() {
        return "Woof!";
    }
}

// kelas cat yang mewarisi dari kelas animal
class Cat extends Animal {
    // metode untuk menghasilkan suara kucing
    public function makeSound() {
        return "Meow!";
    }
}

// membuat objek dog
$dog = new Dog("Buddy");
echo $dog->getName() . " says " . $dog->makeSound(); // Output: Buddy says Woof!


?>