<?php
// Definisi Kelas
class Mahasiswa{
    // Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;
 
    // Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau Function
    public function tampilkanData(){
        return "Mahasiswa itu bernama: $this->nama, NIM $this->nim, jurusan $this->jurusan <br>";
    }
    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusan_1){
        $this->jurusan = $jurusan_1;
    }
    // Setter untuk mengubah nim
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Amanda", "230202051", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
// Mengubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("Teknik Komputer");

// Mengubah nim menggunakan metode setNim
$mahasiswa1->setNim("230202061");

// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
?>