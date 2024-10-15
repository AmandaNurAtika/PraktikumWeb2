<?php
// kelas induk person
class Person{
    // atribut
    protected $name;
    // construct kelas person untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // mrtode untuk mengambil nilai atribut name
    public function getName() {
        return $this->name;
    }
}

// kelas student yang mewarisi person
class Student extends Person{
    private $studentID;
    // construct yang menerima parameter nama dan studentID
    public function __construct($name, $studentID){
        parent::__construct($name);
        $this->studentID=$studentID;
    }
    public function getStudentID(){
        return $this->studentID;
    }
}

// membuat objek student1
$student1 = new Student("Amanda","123456");
echo "Nama: " .$student1->getName(). "<br>";
echo "StudentID: " .$student1->getStudentID(). "<br>";

?>