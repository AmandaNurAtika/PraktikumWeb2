# PraktikumWeb2
# Jobsheet 1
Mampu menggunakan konsep kelas dan objek dalam PHP melalui serangkaian tugas yang menekankan pada pembuatan dan penggunaan kelas serta objek
# Materi
## Kelas dan Objek
### Kelas (Class)
- Blueprint yang mendefinisikan atribut dan metode yang dimiliki oleh objek.
- Atribut atau properties adalah variabel yang menyimpan data untuk objek.
- Metode adalah fungsi yang ditentukan dalam kelas yang dipanggil oleh objek.
### Objek (Object)
- Instansiasi dari kelas.
- Memiliki akses ke atribut dan metode yang didefinisikan dalam kelas.
## Atribut dan Metode
- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.
- Public: Dapat diakses dari mana saja.
- Private: Hanya dapat diakses dalam kelas itu sendiri.
- Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
# Instruksi Kerja
1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
2. Implementasi Constructor
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
3. Membuat Metode Tambahan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.
4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().

## Script dan Output Instruksi Kerja Jobsheet 1
![js1_instruksi](https://github.com/user-attachments/assets/eb2a84b3-5259-4455-aa58-6b2a946613b8)
![Screenshot 2024-10-15 145526](https://github.com/user-attachments/assets/37b652e1-a86e-47e6-b45f-f997093010de)
## Fitur Utama
Instansiasi Objek: Membuat objek baru dari kelas Mahasiswa.
Tampilan Data Mahasiswa: Menampilkan informasi mahasiswa, termasuk nama, NIM, dan jurusan.
Perubahan Data:
Mengubah jurusan mahasiswa dengan menggunakan metode updateJurusan.
Mengubah NIM mahasiswa dengan menggunakan metode setNim.
## Struktur Kode
Kelas Mahasiswa:
Atribut: nama, nim, jurusan.
Constructor: Inisialisasi objek dengan nilai default untuk atribut nama, nim, dan jurusan.
Metode tampilkanData(): Menampilkan data mahasiswa dalam bentuk string.
Metode updateJurusan(): Mengubah nilai jurusan mahasiswa.
Setter setNim(): Mengubah nilai NIM mahasiswa.
# Tugas Jobsheet 1
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
pembuatan kelas, penggunaan metode, dan hasil output.
## Script dan Output Tugas Jobsheet 1
![js1_tugas](https://github.com/user-attachments/assets/ea4731c7-077d-403f-876e-3b2c32ce7489)
![Screenshot 2024-10-15 145835](https://github.com/user-attachments/assets/c93169bf-0def-42c8-8f35-c681d58fac21)
## Fitur
Kelas Dosen: Kelas PHP yang menyimpan informasi tentang nama dosen, NIP, dan mata kuliah yang diajarkan.
Constructor: Constructor menerima tiga parameter — nama, NIP, dan mata kuliah yang diajarkan — untuk menginisialisasi objek dari kelas ini.
Fungsi Tampilkan Dosen: Fungsi tampilkanDosen() digunakan untuk mengembalikan informasi dosen dalam format yang rapi.
## Cara Penggunaan
Definisikan kelas Dosen dengan atribut nama, nip, dan matakuliah.
Gunakan constructor untuk membuat objek baru dengan memberikan nilai-nilai yang dibutuhkan (nama, NIP, mata kuliah).
Gunakan metode tampilkanDosen() untuk menampilkan informasi dosen dalam format string.

# Jobsheet 2
mampu mengimplementasikan konsep dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction.
# Materi
## Konsep Dasar OOP
- Class: Blueprint atau template untuk menciptakan objek.
- Object: Instance dari class yang memiliki atribut (properties) dan perilaku (methods).
## Prinsip OOP
- Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
- Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.
- Polymorphism: Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
- Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.

# Instruksi Kerja
## 1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
### Script dan Output Program
![js2_insobjek](https://github.com/user-attachments/assets/d0c415b9-0936-42d3-aa2f-d2d02d48b74d)
![Screenshot 2024-10-15 151527](https://github.com/user-attachments/assets/dabb4723-d68f-4ac2-9b02-a3faaa1703ad)
## Fitur
- Kelas Mahasiswa: Kelas yang merepresentasikan data seorang mahasiswa dengan atribut:
- Nama mahasiswa (nama).
- NIM mahasiswa (nim).
- Jurusan mahasiswa (jurusan).
- Constructor: Konstruksi kelas yang menerima tiga parameter: nama, NIM, dan jurusan mahasiswa.
- Fungsi tampilkanData(): Fungsi yang mengembalikan data mahasiswa dalam format string yang mudah dibaca, mencakup nama, NIM, dan jurusan.
## Cara Penggunaan
- Definisikan kelas Mahasiswa dengan atribut nama, nim, dan jurusan.
- Buat objek baru dari kelas Mahasiswa menggunakan constructor, dan berikan nilai-nilai untuk nama, NIM, dan jurusan.
- Gunakan metode tampilkanData() untuk menampilkan informasi mahasiswa dalam format string yang rapi.
## Atribut Properti:
- public $nama: Menyimpan nama mahasiswa.
- public $nim: Menyimpan NIM mahasiswa.
- public $jurusan: Menyimpan jurusan mahasiswa.
- Constructor: Menginisialisasi objek mahasiswa dengan data yang diberikan (nama, NIM, jurusan).
- Metode tampilkanData(): Mengembalikan string yang berisi data mahasiswa dengan format: Mahasiswa itu bernama: [nama], NIM [nim], jurusan [jurusan].

## 2. Encapsulation
- Ubah atribut dalam class Mahasiswa menjadi private.
- Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
- Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
### Script dan Output Program
![js2_insenkapsulasi](https://github.com/user-attachments/assets/fdb765f9-9589-41c5-8b8d-8b07a7599f1c)
![Screenshot 2024-10-15 152704](https://github.com/user-attachments/assets/56da1153-9561-4489-aef5-d81e469d04ba)
## Fitur
Kelas Mahasiswa: Kelas yang merepresentasikan data mahasiswa dengan atribut yang diatur sebagai private dan hanya dapat diakses melalui metode setter dan getter.
## Metode Setter dan Getter:
- Metode setter untuk mengatur nilai atribut nama, NIM, dan jurusan mahasiswa.
- Metode getter untuk mengambil nilai atribut nama dan NIM mahasiswa.
- Fungsi tampilkanData(): Fungsi yang digunakan untuk menampilkan informasi mahasiswa dalam format string yang rapi, meliputi nama, NIM, dan jurusan.
## Cara Penggunaan
- Definisikan kelas Mahasiswa dengan atribut private untuk nama, NIM, dan jurusan.
- Gunakan metode setter untuk mengatur nilai atribut mahasiswa seperti nama, NIM, dan jurusan.
- Gunakan metode getter untuk mengambil data nama dan NIM jika diperlukan.
- Panggil metode tampilkanData() untuk menampilkan informasi mahasiswa dalam format string.
## Atribut Properti:
- private $nama: Menyimpan nama mahasiswa.
- private $nim: Menyimpan NIM mahasiswa.
- private $jurusan: Menyimpan jurusan mahasiswa.
- Constructor: Menginisialisasi nilai atribut mahasiswa dengan nilai kosong secara default.
## Metode Setter:
- setNama($nama): Mengatur nama mahasiswa.
- setNim($nim): Mengatur NIM mahasiswa.
- setJurusan($jurusan): Mengatur jurusan mahasiswa.
## Metode Getter:
- getNama(): Mengambil nama mahasiswa.
- getNim(): Mengambil NIM mahasiswa.
- Metode tampilkanData(): Mengembalikan string yang berisi data mahasiswa dengan format: Mahasiswa itu bernama: [nama], NIM [nim], jurusan [jurusan].
## 3. Inheritance
- Buat class Pengguna dengan atribut nama dan metode getNama().
- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
- Instansiasi objek dari class Dosen dan tampilkan data dosen.
### Script dan Output Program
![js2_ininheritance](https://github.com/user-attachments/assets/8f8d36ac-e511-44e0-a931-e55ade267d8f)
![Screenshot 2024-10-15 153335](https://github.com/user-attachments/assets/5d72bfcc-6fb7-45ad-9aa4-c4e01ff1713e)
## Fitur
- Kelas Pengguna: Kelas yang mendefinisikan atribut umum pengguna, dalam hal ini nama, yang diatur sebagai properti protected.
- Kelas Dosen: Kelas yang merupakan turunan dari kelas Pengguna. Kelas ini menambahkan atribut khusus yaitu mata kuliah yang diampu, serta metode tambahan untuk menampilkan data dosen.
- Fungsi Pewarisan (Inheritance): Kelas Dosen mewarisi atribut nama dari kelas Pengguna dan menambahkan atribut serta metode baru untuk menangani data dosen.
## Cara Penggunaan
- Kelas Pengguna: Kelas induk ini berisi atribut nama dan metode getNama() yang digunakan untuk mengambil nilai atribut nama pengguna.
- Kelas Dosen: Kelas turunan yang mewarisi atribut nama dari kelas Pengguna dan menambahkan atribut matakuliah. Kelas ini juga memiliki metode tampilkanDosen() untuk menampilkan data dosen, termasuk nama dan mata kuliah yang diampu.
- Instansiasi Objek: Objek Dosen dibuat dengan memberikan nilai untuk nama dosen dan mata kuliah melalui constructor. Objek ini dapat menampilkan informasi dosen menggunakan metode tampilkanDosen().
## Struktur Kode
- Kelas Pengguna:
Menyimpan nama pengguna dan menyediakan metode untuk mengaksesnya.
- Kelas Dosen:
Mewarisi atribut nama dari kelas Pengguna.
Menambahkan atribut khusus matakuliah yang menyimpan mata kuliah yang diampu oleh dosen.
Menyediakan metode tampilkanDosen() untuk menampilkan nama dan mata kuliah.
- Instansiasi Objek:
Membuat objek dari kelas Dosen dengan parameter nama dosen dan mata kuliah.
Menggunakan metode tampilkanDosen() untuk menampilkan data.

## 4. Polymorphism
- Buat class Pengguna dengan metode aksesFitur().
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
### Script dan Output Program
![js2_inpoly](https://github.com/user-attachments/assets/8ec98a5d-a95d-4542-bc12-ab17fec8428b)
![Screenshot 2024-10-15 153351](https://github.com/user-attachments/assets/57bb4b26-7ddf-4898-a7e0-e4cd556f1513)
## Fitur
- Kelas Pengguna: Kelas induk yang berisi atribut umum, yaitu nama, dan metode aksesFitur() yang dapat di-override oleh kelas turunan untuk menyesuaikan akses fitur.
- Kelas Dosen: Kelas turunan dari Pengguna yang menambahkan atribut matakuliah serta metode untuk menampilkan data dosen. Kelas ini juga meng-override metode aksesFitur() untuk memberikan akses fitur khusus dosen.
- Kelas Mahasiswa: Kelas turunan dari Pengguna yang menambahkan atribut jurusan serta metode untuk menampilkan data mahasiswa. Kelas ini juga meng-override metode aksesFitur() untuk memberikan akses fitur khusus mahasiswa.
## Cara Penggunaan
- Kelas Pengguna: Kelas induk yang berisi atribut nama dan metode aksesFitur().
- Kelas Dosen: Mewarisi atribut nama dari kelas Pengguna dan menambahkan atribut matakuliah. Kelas ini juga meng-override metode aksesFitur() untuk menampilkan fitur yang dapat diakses oleh dosen.
- Kelas Mahasiswa: Mewarisi atribut nama dari kelas Pengguna dan menambahkan atribut jurusan. Kelas ini juga meng-override metode aksesFitur() untuk menampilkan fitur yang dapat diakses oleh mahasiswa.
- Instansiasi Objek: Objek Dosen dan Mahasiswa dibuat dengan parameter yang diberikan saat pembuatan. Setiap objek dapat memanggil metode untuk menampilkan data pengguna dan akses fitur yang tersedia.
## Struktur Kode
- Kelas Pengguna:
Atribut protected $nama: Menyimpan nama pengguna.
Metode aksesFitur(): Menyediakan akses fitur umum yang dapat di-override oleh kelas turunan.
- Kelas Dosen:
Mewarisi atribut nama dari Pengguna.
Menambahkan atribut private $matakuliah untuk menyimpan mata kuliah yang diampu dosen.
Meng-override metode aksesFitur() untuk menampilkan fitur khusus dosen.
- Kelas Mahasiswa:
Mewarisi atribut nama dari Pengguna.
Menambahkan atribut private $jurusan untuk menyimpan jurusan mahasiswa.
Meng-override metode aksesFitur() untuk menampilkan fitur khusus mahasiswa.
- Instansiasi Objek:
Membuat objek Dosen dan Mahasiswa dengan parameter nama dan mata kuliah/jurusan.
Menampilkan informasi dan fitur yang dapat diakses oleh dosen dan mahasiswa.

## 5. Abstraction
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
### Script dan Output Program
![js2_inabstrak](https://github.com/user-attachments/assets/afb062e8-2db1-4e18-8f14-bfb569f095e8)
![Screenshot 2024-10-15 153400](https://github.com/user-attachments/assets/f409a4a9-5afe-4335-98f5-90a3f83fc95e)
## Fitur
- Kelas Abstrak Pengguna: Kelas induk yang berfungsi sebagai dasar untuk Dosen dan Mahasiswa. Kelas ini mendefinisikan atribut nama dan metode abstrak aksesFitur(), yang harus diimplementasikan oleh kelas turunan.
- Kelas Dosen: Kelas turunan dari Pengguna, menambahkan atribut matakuliah serta implementasi metode aksesFitur() yang menunjukkan fitur yang bisa diakses oleh dosen.
- Kelas Mahasiswa: Kelas turunan dari Pengguna, menambahkan atribut jurusan serta implementasi metode aksesFitur() yang menunjukkan fitur yang bisa diakses oleh mahasiswa.
## Cara Penggunaan
- Kelas Abstrak Pengguna: Kelas induk ini berisi atribut nama dan metode abstrak aksesFitur(). Kelas abstrak tidak dapat diinstansiasi langsung, sehingga harus diimplementasikan oleh kelas turunan.
- Kelas Dosen: Mewarisi kelas Pengguna dan menambahkan atribut matakuliah. Metode aksesFitur() diimplementasikan untuk menampilkan fitur yang dapat diakses oleh dosen.
- Kelas Mahasiswa: Mewarisi kelas Pengguna dan menambahkan atribut jurusan. Metode aksesFitur() diimplementasikan untuk menampilkan fitur yang dapat diakses oleh mahasiswa.
- Instansiasi Objek: Objek Dosen dan Mahasiswa dibuat dengan memberikan parameter nama dan mata kuliah atau jurusan. Metode yang tersedia digunakan untuk menampilkan data pengguna dan akses fitur masing-masing.
## Struktur Kode
- Kelas Pengguna (Abstract):
Atribut protected $nama: Menyimpan nama pengguna.
Metode getNama(): Mengambil nama pengguna.
Metode abstract aksesFitur(): Harus diimplementasikan oleh kelas turunan untuk menunjukkan fitur yang bisa diakses pengguna.
- Kelas Dosen:
Mewarisi atribut nama dari Pengguna.
Menambahkan atribut private $matakuliah untuk menyimpan mata kuliah.
Implementasi metode aksesFitur() untuk menampilkan fitur dosen.
- Kelas Mahasiswa:
Mewarisi atribut nama dari Pengguna.
Menambahkan atribut private $jurusan untuk menyimpan jurusan.
Implementasi metode aksesFitur() untuk menampilkan fitur mahasiswa.
- Instansiasi Objek:
Membuat objek Dosen dan Mahasiswa dengan parameter nama, mata kuliah atau jurusan.
Metode tampilkanDosen() dan tampilkanMahasiswa() menampilkan data pengguna masing-masing.
Metode aksesFitur() menampilkan fitur sesuai peran.

# Tugas Jobsheet 2
1. Buat dokumentasi lengkap dari proyek yang telah dibuat dan unggah ke repository
GitHub. Dokumentasi ini harus mencakup penjelasan dari tiap langkah, kode
sumber, dan hasil output program.
2. Unggah laporan proyek dalam bentuk dokumentasi GitHub, beserta penjelasan dan
panduan penggunaan.

# Jobsheet 3
Mampu Menerapkan Konsep Inheritance, Polymorphism, Encapsulation,
dan Abstraction dalam PHP
# Materi
1. Inheritance (Pewarisan)
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.
2. Polymorphism (Polimorfisme)
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.
3. Encapsulation (Enkapsulasi)
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal
tetap aman dari perubahan tak terduga
4. Abstraction (Abstraksi)
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.
# Instruksi Kerja
## 1. Inheritance
- Buat kelas Person dengan atribut name dan metode getName().
- Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
serta metode getStudentID().
### Script dan Output Program
![js3_ininheritance](https://github.com/user-attachments/assets/451b831d-40f1-4e3e-ad7e-8ee2dc62974a)
![Screenshot 2024-10-15 170115](https://github.com/user-attachments/assets/fd626271-aaf7-464d-963a-e5eba62203d1)
## Fitur
- Kelas Person: Kelas induk yang berfungsi untuk menyimpan informasi dasar mengenai orang, khususnya nama.
- Kelas Student: Kelas turunan dari Person yang menambahkan atribut khusus untuk mahasiswa, yaitu studentID.
## Cara Penggunaan
- Kelas Person:
Kelas ini memiliki atribut protected $name untuk menyimpan nama seseorang.
Metode __construct($name) digunakan untuk menginisialisasi nama saat objek dibuat.
Metode getName() digunakan untuk mengambil nama.
- Kelas Student:
Mewarisi kelas Person dan menambahkan atribut private $studentID untuk menyimpan ID mahasiswa.
Metode __construct($name, $studentID) menerima dua parameter, yaitu nama dan student ID, dan memanggil konstruktor kelas induk untuk menginisialisasi nama.
Metode getStudentID() untuk mengambil student ID.
- Instansiasi Objek:
Objek Student dibuat dengan memberikan nama dan student ID.
Menggunakan metode getName() dan getStudentID() untuk menampilkan informasi mahasiswa.
## Struktur Kode
- Kelas Person:
Atribut protected $name: Menyimpan nama orang.
Metode __construct($name): Menginisialisasi nama.
Metode getName(): Mengambil nama.
- Kelas Student:
Mewarisi atribut name dari Person.
Menambahkan atribut private $studentID untuk menyimpan ID mahasiswa.
Metode __construct($name, $studentID): Menginisialisasi nama dan ID mahasiswa.
Metode getStudentID(): Mengambil ID mahasiswa.
- Instansiasi Objek:
Membuat objek Student dengan parameter nama dan student ID.
Menampilkan informasi menggunakan metode yang tersedia.

## 2. Polymorphism
- Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID.
- Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.
### Script dan Output Program
![js3_inpoly](https://github.com/user-attachments/assets/5eb6e191-2f5d-419c-a607-a863fc607ee5)
![Screenshot 2024-10-15 170140](https://github.com/user-attachments/assets/d4f29749-2e70-4c0e-b4a6-57dda5d70449)
## Fitur
- Kelas Person: Kelas induk yang menyimpan informasi dasar mengenai orang, khususnya nama.
- Kelas Student: Kelas turunan dari Person yang menambahkan atribut khusus untuk mahasiswa, yaitu studentID.
- Kelas Teacher: Kelas turunan dari Person yang menambahkan atribut khusus untuk guru, yaitu teacherID.
## Cara Penggunaan
- Kelas Person:
Kelas ini memiliki atribut protected $name untuk menyimpan nama seseorang.
Metode __construct($name) digunakan untuk menginisialisasi nama saat objek dibuat.
Metode getName() untuk mengambil nama.
- Kelas Student:
Mewarisi kelas Person dan menambahkan atribut private $studentID untuk menyimpan ID mahasiswa.
Metode __construct($name, $studentID) menerima dua parameter, yaitu nama dan student ID.
Metode getName() di-override untuk memberikan format yang berbeda dalam menampilkan nama dan ID mahasiswa.
Metode getStudentID() untuk mengambil student ID.
- Kelas Teacher:
Mewarisi kelas Person dan menambahkan atribut private $teacherID untuk menyimpan ID guru.
Metode __construct($name, $teacherID) menerima dua parameter, yaitu nama dan teacher ID.
Metode getName() di-override untuk memberikan format yang berbeda dalam menampilkan nama dan ID guru.
Metode getTeacherID() untuk mengambil teacher ID.
- Instansiasi Objek:
Objek Student dan Teacher dibuat dengan memberikan nama dan ID masing-masing.
Menggunakan metode getName() untuk menampilkan informasi.
## Struktur Kode
- Kelas Person:
Atribut protected $name: Menyimpan nama orang.
Metode __construct($name): Menginisialisasi nama.
Metode getName(): Mengambil nama.
- Kelas Student:
Mewarisi atribut name dari Person.
Menambahkan atribut private $studentID untuk menyimpan ID mahasiswa.
Metode __construct($name, $studentID): Menginisialisasi nama dan ID mahasiswa.
Metode getName(): Di-override untuk menampilkan nama dan ID mahasiswa.
Metode getStudentID(): Mengambil ID mahasiswa.
- Kelas Teacher:
Mewarisi atribut name dari Person.
Menambahkan atribut private $teacherID untuk menyimpan ID guru.
Metode __construct($name, $teacherID): Menginisialisasi nama dan ID guru.
Metode getName(): Di-override untuk menampilkan nama dan ID guru.
Metode getTeacherID(): Mengambil ID guru.
- Instansiasi Objek:
Membuat objek Student dan Teacher dengan parameter nama dan ID.
Menampilkan informasi menggunakan metode yang tersedia.

## 3. Encapsulation
- Ubah atribut name dan studentID dalam kelas Student menjadi private.o Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai
atribut name dan studentID.
### Script dan Output Program
![js3_inenkapsulasi](https://github.com/user-attachments/assets/502eac4f-23da-4739-8e59-83301dea7a55)
![Screenshot 2024-10-15 170149](https://github.com/user-attachments/assets/b01e3752-1f4f-4403-8811-3853194628db)
## Fitur
- Kelas Person: Kelas induk yang menyimpan informasi dasar mengenai orang, khususnya nama.
- Kelas Student: Kelas turunan dari Person yang menambahkan atribut khusus untuk mahasiswa, yaitu studentID.
- Getter dan Setter: Metode untuk mengambil dan mengubah nilai atribut dalam kelas.
## Cara Penggunaan
- Kelas Person:
Memiliki atribut private $name untuk menyimpan nama seseorang.
Metode __construct($name) digunakan untuk menginisialisasi nama saat objek dibuat.
Metode getName() untuk mengambil nama.
Metode setName($name) untuk mengubah nama.
- Kelas Student:
Mewarisi kelas Person dan menambahkan atribut private $studentID untuk menyimpan ID mahasiswa.
Metode __construct($name, $studentID) menerima dua parameter, yaitu nama dan student ID.
Metode getStudentID() untuk mengambil student ID.
Metode setStudentID($studentID) untuk mengubah student ID.
- Instansiasi Objek:
Objek Student dibuat dengan memberikan nama dan ID masing-masing.
Menggunakan metode getter untuk menampilkan informasi awal.
Menggunakan metode setter untuk mengubah nilai atribut.
Menampilkan informasi yang telah diperbarui.
## Struktur Kode
- Kelas Person:
Atribut private $name: Menyimpan nama orang.
Metode __construct($name): Menginisialisasi nama.
Metode getName(): Mengambil nama.
Metode setName($name): Mengubah nama.
- Kelas Student:
Mewarisi atribut name dari Person.
Menambahkan atribut private $studentID untuk menyimpan ID mahasiswa.
Metode __construct($name, $studentID): Menginisialisasi nama dan ID mahasiswa.
Metode getStudentID(): Mengambil student ID.
Metode setStudentID($studentID): Mengubah student ID.
- Instansiasi Objek:
Membuat objek Student dengan parameter nama dan ID.
Menampilkan informasi menggunakan metode yang tersedia.
Mengubah nama dan ID menggunakan setter, dan menampilkan informasi yang baru.

## 4. Abstraction
- Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
- Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda.
### Script dan Output Program
![js3_inabstrak](https://github.com/user-attachments/assets/03f66d5b-ebb2-41c7-b7b4-04f90bf097c7)
![Screenshot 2024-10-15 170200](https://github.com/user-attachments/assets/f37362ff-7df6-4efe-bc5d-540f435f201d)
## Fitur
- Kelas Abstrak Course: Kelas dasar yang menyediakan struktur umum untuk kursus. Memiliki atribut courseName dan metode abstrak getCourseDetails().
- Kelas OnlineCourse: Kelas turunan dari Course yang mewakili kursus yang diadakan secara online. Menambahkan atribut platform.
- Kelas OfflineCourse: Kelas turunan dari Course yang mewakili kursus yang diadakan secara offline. Menambahkan atribut location.
## Cara Penggunaan
- Kelas Abstrak Course:
Memiliki atribut protected $courseName untuk menyimpan nama kursus.
Konstruktor __construct($courseName) digunakan untuk menginisialisasi nama kursus.
Metode abstrak getCourseDetails(), yang harus diimplementasikan oleh kelas turunan untuk memberikan detail kursus.
- Kelas OnlineCourse:
Mewarisi dari kelas Course dan menambahkan atribut private $platform untuk menyimpan informasi platform.
Konstruktor __construct($courseName, $platform) menginisialisasi nama kursus dan platform.
Implementasi metode getCourseDetails() memberikan detail kursus online.
- Kelas OfflineCourse:
Mewarisi dari kelas Course dan menambahkan atribut private $location untuk menyimpan informasi lokasi.
Konstruktor __construct($courseName, $location) menginisialisasi nama kursus dan lokasi.
Implementasi metode getCourseDetails() memberikan detail kursus offline.
- Instansiasi Objek:
Membuat objek dari kelas OnlineCourse dan OfflineCourse.
Menggunakan metode getCourseDetails() untuk menampilkan informasi kursus.
## Struktur Kode
- Kelas Course (Abstrak):
Atribut protected $courseName: Menyimpan nama kursus.
Metode __construct($courseName): Menginisialisasi nama kursus.
Metode abstrak getCourseDetails(): Harus diimplementasikan oleh kelas turunan.
- Kelas OnlineCourse:
Menambahkan atribut private $platform.
Metode __construct($courseName, $platform): Menginisialisasi kursus online.
Metode getCourseDetails(): Mengembalikan detail kursus online.
- Kelas OfflineCourse:
Menambahkan atribut private $location.
Metode __construct($courseName, $location): Menginisialisasi kursus offline.
Metode getCourseDetails(): Mengembalikan detail kursus offline.

# Tugas Jobsheet 3
Buat proyek PHP dengan studi kasus sebagai berikut:
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang
berbeda.
4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di
kelas Mahasiswa.
5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal.
Dokumentasikan proyek ini dalam bentuk laporan yang diunggah ke GitHub, termasuk
penjelasan tentang penerapan masing-masing konsep OOP.
## Script dan Output Program
![js3_tugas](https://github.com/user-attachments/assets/12a6d9ff-d99a-4a22-9efd-90caf0b8c758)
![Screenshot 2024-10-15 172203](https://github.com/user-attachments/assets/34e7397b-c0d2-4e8d-b289-b830b9966b54)
## Fitur
Repositori ini berisi contoh kode PHP yang menggunakan konsep Pemrograman Berorientasi Objek (OOP) 
untuk mendefinisikan kelas-kelas yang merepresentasikan dosen, mahasiswa, dan jurnal. 
Kode ini menunjukkan penggunaan pewarisan, enkapsulasi, dan polimorfisme.
- Kelas Induk Person: Kelas dasar untuk Dosen dan Mahasiswa, dengan atribut nama dan metode untuk mendapatkan peran (role).
- Kelas Dosen dan Mahasiswa: Mewarisi dari kelas Person, dengan atribut khusus (NIDN untuk dosen, NIM dan jurusan untuk mahasiswa). Mengimplementasikan metode getRole untuk menunjukkan peran masing-masing.
- Kelas Abstrak Jurnal: Kelas dasar untuk Jurnal, dengan metode abstrak submit yang harus diimplementasikan oleh kelas turunan.
- Kelas JurnalDosen dan JurnalMahasiswa: Kelas turunan dari Jurnal yang mengimplementasikan metode submit untuk mengajukan jurnal dosen dan jurnal mahasiswa.
## Cara Penggunaan
- Kelas Person:
Mewakili entitas umum yang memiliki nama.
Memiliki metode getRole yang akan di-override di kelas turunan.
Metode getNama untuk mengambil nama.
- Kelas Dosen:
Mewarisi dari kelas Person.
Memiliki atribut nidn dan matakuliah.
Metode getRole diimplementasikan untuk mengembalikan string "Dosen".
- Kelas Mahasiswa:
Mewarisi dari kelas Person.
Memiliki atribut nim dan jurusan.
Metode getRole diimplementasikan untuk mengembalikan string "Mahasiswa".
- Kelas Jurnal (Abstrak):
Memiliki atribut judul.
Metode abstrak submit yang harus diimplementasikan oleh kelas turunan.
Kelas JurnalDosen dan JurnalMahasiswa:
Mewarisi dari kelas Jurnal dan mengimplementasikan metode submit untuk memberikan pesan sesuai konteks.
- Instansiasi Objek:
Membuat objek dari kelas Dosen dan Mahasiswa, lalu menampilkan informasi yang relevan.
Membuat objek JurnalDosen dan JurnalMahasiswa untuk mengajukan jurnal.
Struktur Kode
- Kelas Person:
Atribut protected $nama: Menyimpan nama.
Metode __construct($nama): Menginisialisasi nama.
Metode getRole(): Di-override oleh kelas turunan.
Metode getNama(): Mengembalikan nama.
- Kelas Dosen:
Atribut private $nidn dan private $matakuliah: Menyimpan informasi dosen.
Metode getRole(): Mengembalikan string "Dosen".
Getter dan setter untuk NIDN dan matakuliah.
- Kelas Mahasiswa:
Atribut private $nim dan private $jurusan: Menyimpan informasi mahasiswa.
Metode getRole(): Mengembalikan string "Mahasiswa".
Getter dan setter untuk NIM dan jurusan.
- Kelas Jurnal (Abstrak):
Atribut protected $judul: Menyimpan judul jurnal.
Metode __construct($judul): Menginisialisasi judul jurnal.
Metode abstrak submit(): Harus diimplementasikan oleh kelas turunan.
- Kelas JurnalDosen:
Mengimplementasikan metode submit() untuk memberikan pesan pengajuan jurnal.
Kelas JurnalMahasiswa:
Mengimplementasikan metode submit() untuk memberikan pesan pembuatan jurnal.
## Contoh Penggunaan:
Menginstansiasi objek Dosen dan Mahasiswa serta menampilkan informasi mereka.
Menginstansiasi objek JurnalDosen dan JurnalMahasiswa serta mengajukan jurnal mereka.
