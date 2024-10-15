<?php
// kelas printer untuk mencetak informasi hewan
class Printer {
    public function print(Animal $animal) {
        echo $animal->getName() . " say " . $animal->makeSound() . "<br>";
    }
}

// kelas induk animal
class Animal {
    // atribut
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    // metode untuk mengambil nama hewan
    public function getName() {
        return $this->name;
    }
}

// kelas dog yang mewarisi kelas animal
class Dog extends Animal {
    // metode untuk menghasilkan suara anjing
    public function makeSound() {
        return "Woof!";
    }
}

// kelas cat yang mewarisi kelas animal
class Cat extends Animal {
    // metode untuk menghasilkan suara kucing
    public function makeSound() {
        return "Meow!";
    }
}

// membuat objek
$dog = new Dog("Buddy");
$cat = new Cat("Kitty");

// membuat objek printer untuk mencetak informasi hewan
$printer = new Printer();
$printer->print($dog); //Output: Buddy says Woof!
$printer->print($cat); //Output: Kitty says Meow!

?>