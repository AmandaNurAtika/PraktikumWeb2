<?php
// Kelas induk Person
class Person {
    private $name; // Atribut private

    // Konstruktor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter untuk mengambil nilai nama
    public function getName() {
        return $this->name;
    }

    // Setter untuk mengubah nilai nama
    public function setName($name) {
        $this->name = $name;
    }
}

// Kelas Student yang mewarisi dari Person
class Student extends Person {
    private $studentID; // Atribut private

    // Konstruktor untuk menginisialisasi nama dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name); // Panggil konstruktor kelas induk untuk set nama
        $this->studentID = $studentID; // Inisialisasi studentID
    }

    // Getter untuk mengambil nilai studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Setter untuk mengubah nilai studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// membuat objek
$student1 = new Student("Amanda", "230202051");

// Menampilkan nama dan studentID awal
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";

// Mengubah nama dan studentID menggunakan setter
$student1->setName("Amanda Nur Atika");
$student1->setStudentID("230202052");

// Menampilkan nama dan studentID yang baru
echo "Nama baru: " . $student1->getName() . "<br>";
echo "Student ID baru: " . $student1->getStudentID() . "<br>";
?>
