<?php
// Definisi Kelas
class Dosen{
    // Atribut atau Properties
    public $nama;
    public $nip;
    public $matakuliah;
 
    // Constructor
    public function __construct($nama, $nip, $matakuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->matakuliah = $matakuliah;
    }

    // Metode atau Function
    public function tampilkanDosen(){
        return "Dosen itu bernama: $this->nama, NIP $this->nip, matakuliah $this->matakuliah <br>";
    }
}

// Instansiasi Objek
$dosen1 = new Dosen("Amanda", "1234567", "Pemrograman Web");
echo $dosen1->tampilkanDosen();
?>