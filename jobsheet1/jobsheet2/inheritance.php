<?php
// Definisi kelas
class Produk {
    // atribut nama, hanya bisa diakses oleh kelas ini dan kelas turunan
    protected $nama;
    // atribut/property, menginisialisasi nama saat objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // method untuk mengambil nilai
    public function getNama() {
        return $this->nama;
    }
}

// mendefinisikan kelas buku sebagai turunan produk
class Buku extends Produk {
    // atribut
    private $penulis;
    // atribut, menginsialisasi kelas induk dan penulis
    public function __construct($nama, $penulis) {
        // memanggil construct dari kelas induk
        parent::__construct($nama);
        $this->penulis = $penulis;
    }
    // method untuk mengambil nilai
    public function getPenulis() {
        return $this->penulis;
    }
}

// instansiasi objek buku
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama(); 
?>