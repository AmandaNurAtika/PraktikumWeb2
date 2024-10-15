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
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Amanda", "230202051", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>