<?php
// Kelas abstrak Course
abstract class Course {
    // Atribut protected yang bisa diakses oleh kelas turunan
    protected $courseName;  

    // Construct untuk menginisialisasi nama course
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mewarisi dari Course
class OnlineCourse extends Course {
    // atribut platform
    private $platform;  

    // Construct untuk menginisialisasi nama course dan platform
    public function __construct($courseName, $platform) {
        parent::__construct($courseName);  // Memanggil konstruktor kelas induk
        $this->platform = $platform;
    }

    // Implementasi metode abstrak getCourseDetails
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . " dapat diakses melalui " . $this->platform;
    }
}

// Kelas OfflineCourse yang mewarisi dari Course
class OfflineCourse extends Course {
    // atribut location
    private $location;  

    // Construct untuk menginisialisasi nama course dan lokasi
    public function __construct($courseName, $location) {
        parent::__construct($courseName);  // Memanggil konstruktor kelas induk
        $this->location = $location;
    }

    // Implementasi metode abstrak getCourseDetails
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " akan diadakan di " . $this->location;
    }
}

// Contoh penggunaan untuk OnlineCourse
$onlineCourse = new OnlineCourse("Web Development", "Google gmeet");
echo $onlineCourse->getCourseDetails() . "<br>";  // Output: Online Course: Web Development is available on Udemy

// Contoh penggunaan untuk OfflineCourse
$offlineCourse = new OfflineCourse("Data Science", "GTIL Lantai 5 PNC");
echo $offlineCourse->getCourseDetails() . "<br>";  // Output: Offline Course: Data Science is held at Campus A

?>
