<?php
// Kelas Induk Person
class Person {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode getRole akan di-override di kelas turunan
    public function getRole() {
        return "Role yang akan digunakan";
    }

    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen yang mewarisi Person
class Dosen extends Person {
    // Encapsulation pada atribut nidn (private)
    private $nidn;
    private $matakuliah;

    public function __construct($nama, $nidn, $matakuliah) {
        parent::__construct($nama);
        $this->nidn = $nidn;
        $this->matakuliah = $matakuliah;
    }

    // Implementasi metode getRole dengan polymorphism
    public function getRole() {
        return "Dosen";
    }

    // Getter dan setter untuk NIDN dengan Encapsulation
    public function getNidn() {
        return $this->nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getMatakuliah() {
        return $this->matakuliah;
    }
}

// Kelas Mahasiswa yang mewarisi Person
class Mahasiswa extends Person {
    // Encapsulation pada atribut nim (private)
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Implementasi metode getRole dengan polymorphism
    public function getRole() {
        return "Mahasiswa";
    }

    // Getter dan setter untuk NIM dengan Encapsulation
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getJurusan() {
        return $this->jurusan;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Metode abstrak untuk submit jurnal, harus diimplementasikan oleh kelas turunan
    abstract public function submit();
}

// Kelas JurnalDosen yang mengimplementasikan metode submit
class JurnalDosen extends Jurnal {
    public function submit() {
        echo "Jurnal dosen berjudul '{$this->judul}' telah diajukan ke sistem untuk direview.<br>";
    }
}

// Kelas JurnalMahasiswa yang mengimplementasikan metode submit
class JurnalMahasiswa extends Jurnal {
    public function submit() {
        echo "Jurnal mahasiswa berjudul '{$this->judul}' telah dibuat untuk tugas akhir.<br>";
    }
}

// Instansiasi objek Dosen
$dosen1 = new Dosen("Amanda", "123456789", "Pemrograman PHP");
echo $dosen1->getNama() . " adalah seorang " . $dosen1->getRole() . ".<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br>";
echo "Mengajar Matakuliah: " . $dosen1->getMatakuliah() . "<br>";

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Nur Atika", "230202051", "Teknik Informatika");
echo $mahasiswa1->getNama() . " adalah seorang " . $mahasiswa1->getRole() . ".<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

// Submit Jurnal oleh Dosen
$jurnalDosen = new JurnalDosen("Penelitian Kinerja Dosen dan Publikasi Ilmiah");
$jurnalDosen->submit();

// Submit Jurnal oleh Mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Skripsi tentang Implementasi IoT");
$jurnalMahasiswa->submit();

?>
