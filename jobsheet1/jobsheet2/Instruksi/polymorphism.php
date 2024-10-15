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
    public function aksesFitur(){
        return "Fitur umum pengguna <br>";
    }
}

// Mendeklarasikan class dosen yang mewarisi kelas Pengguna
class Dosen extends Pengguna {
    // atribut private, hanya bisa diakses didalam kelas
    private $matakuliah;

    // construct khusus kelas dosen
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }
    // mengambil nilai matakuliah
    public function getMatakuliah() {
        return $this->matakuliah;
    }
    // override metode aksesfitur
    public function aksesFitur(){
        return "Dosen dapat mengakses fitur manajemen kelas dan nilai<br>";
    }
    // metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        echo "Nama Dosen: ".$this->nama." <br>";
        echo "Mengampu Matkul: ".$this->matakuliah." <br>";
    }
}

// Mendeklarasikan class Mahasiswa yang mewarisi kelas Pengguna
class Mahasiswa extends Pengguna {
    // atribut private, hanya bisa diakses didalam kelas
    private $jurusan;
    public function __construct($nama, $jurusan) {
        parent::__construct($nama);
        $this->jurusan = $jurusan;
    }
    // metode untuk mengambil nilai jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    // overide metode aksesfitur
    public function aksesFitur() {
        return "Mahasiswa dapat mengakses Google Classroom<br>";
    }
    // metode untuk menampilkan data
    public function tampilkanMahasiswa() {
        echo "Nama Mahasiswa: ".$this->nama."<br>";
        echo "Jurusan: ".$this->jurusan." <br>";
    }
}
// instansiasi objek dosen
$dosen1 = new Dosen("Amanda", "Pemrograman PHP");
echo $dosen1->tampilkanDosen(); // menampilkan informasi dosen
echo $dosen1->aksesFitur(); // menampilkan fitur yang dapat diakses oleh dosen
// instansiasi objek mahasiswa
$mahasiswa1 = new Mahasiswa("Nur Atika", "Teknik Informatika");
echo $mahasiswa1->tampilkanMahasiswa(); // menampilkan informasim mahasiswa
echo $mahasiswa1->aksesFitur(); // menampilkan fitur yang dapat diakses oleh mahasiswa
?>