<?php
// Definisi Kelas
class Mahasiswa{
    // Atribut atau Properties
    private $nama;
    private $nim;
    private $jurusan;
 
    // metode construct otomatis dipanggil saat objek dibuat
    public function __construct(){
        $this->nama = "";
        $this->nim = "";
        $this->jurusan = "";
    }

    // Metode setter dan getter
    public function setNama($nama){ // mengatur nama mahasiswa
        $this->nama=$nama;}
    public function getNama(){ // mengambil nama mahasiswa
        return $this->nama;}
    public function setNim($nim){ // mengatur nim mahasiswa
        $this->nim=$nim;}
    public function getNim(){ // mengambil nim
        return $this->nim;}
    public function setJurusan($jurusan){ // mengatur jurusan
        $this->jurusan=$jurusan;}

    // metode untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa itu bernama: $this->nama, NIM $this->nim, jurusan $this->jurusan <br>";
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa();
// mengatur nilai atribut melalui metode setter
$mahasiswa1->setNama("Amanda");
$mahasiswa1->setNim("230202051");
$mahasiswa1->setJurusan("Teknik Informatika");

// menampilkan data mahasiswa yang telah diatur
echo $mahasiswa1->tampilkanData();
?>