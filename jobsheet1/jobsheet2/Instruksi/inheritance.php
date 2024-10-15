<?php
// Definisi Kelas
class Pengguna {
    // atribut atau property
    protected $nama;

    // Construck akan dijalankan saat objek baru dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }
    // Metode atau function 
    public function getNama() {
        return $this->nama;
    }
}

// Mendeklarasikan class dosen yang mewarisi kelas Pengguna
class Dosen extends Pengguna {
    private $matakuliah;
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }
    public function getMatakuliah() {
        return $this->matakuliah;
    }
    public function tampilkanDosen() {
        echo "Nama Dosen tersebut: ".$this->nama." <br>";
        echo "Mengampu Matkul: ".$this->matakuliah." <br>";
    }
}
// instansiasi objek
$dosen1 = new Dosen("Amanda", "Pemrograman PHP");
echo $dosen1->tampilkanDosen(); // Output: Pemrograman PHP
?>