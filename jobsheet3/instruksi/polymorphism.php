<?php
// kelas induk person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // metode get untuk mengambil nama
    public function getName() {
        return $this->name;
    }
}

// kelas student yang mewarisi person
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Override metode getName
    public function getName() {
        return "Nama Siswa: " . $this->name . ", ID: " . $this->studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}

// kelas teacher yang mewarisi dari person
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override metode getName
    public function getName() {
        return "Nama Guru: " . $this->name . ", ID: " . $this->teacherID;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }
}

// Contoh penggunaan untuk Student
$student1 = new Student("Amanda", "123456");
echo "Nama: " . $student1->getName() . "<br>";

// Contoh penggunaan untuk Teacher
$teacher1 = new Teacher("Atika", "789101");
echo "Nama: " . $teacher1->getName() . "<br>";

?>
