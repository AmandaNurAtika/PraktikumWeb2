<?php
// Definisi kelas
class Buku{
    // atribut private, hanya bisa diakses oleh kelas ini
    private $judul;
    private $penulis;
    // construct atribut
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    // method untuk mengambil nilai
    public function getJudul() {
        return $this->judul;
    }
    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

// instansiasi objek buku
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); // Output: Pemrograman PHP
?>