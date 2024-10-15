<?php
// Definisi Kelas
abstract class Pengguna {
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
    abstract public function aksesFitur();
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
    public function aksesFitur(){
        return "Dosen dapat mengakses fitur manajemen kelas dan nilai<br>";
    }
    public function tampilkanDosen() {
        echo "Nama Dosen: ".$this->nama." <br>";
        echo "Mengampu Matkul: ".$this->matakuliah." <br>";
    }
}

// Mendeklarasikan class Mahasiswa yang mewarisi kelas Pengguna
class Mahasiswa extends Pengguna {
    private $jurusan;
    public function __construct($nama, $jurusan) {
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }
    public function getJurusan() {
        return $this->jurusan;
    }
    public function aksesFitur(){
        return "Mahasiswa dapat mengakses Google Classroom<br>";
    }
    public function tampilkanMahasiswa() {
        echo "Nama Mahasiswa: ".$this->nama."<br>";
        echo "Jurusan: ".$this->jurusan." <br>";
    }
}
// instansiasi objek
$dosen1 = new Dosen("Amanda", "Pemrograman PHP");
echo $dosen1->tampilkanDosen(); // Output: Pemrograman PHP
echo $dosen1->aksesFitur();
$mahasiswa1 = new Mahasiswa("Atika", "Teknik Informatika");
echo $mahasiswa1->tampilkanMahasiswa();
echo $mahasiswa1->aksesFitur();
?>