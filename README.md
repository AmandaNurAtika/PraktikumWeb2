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
# Tugas Jobsheet 1
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
pembuatan kelas, penggunaan metode, dan hasil output.
## Script dan Output Tugas Jobsheet 1
![js1_tugas](https://github.com/user-attachments/assets/ea4731c7-077d-403f-876e-3b2c32ce7489)
![Screenshot 2024-10-15 145835](https://github.com/user-attachments/assets/c93169bf-0def-42c8-8f35-c681d58fac21)

# Jobsheet 2
mampu mengimplementasikan konsep dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction.
# Materi
## Konsep Dasar OOP
1. Class dan Object
- Class: Blueprint atau template untuk menciptakan objek.
- Object: Instance dari class yang memiliki atribut (properties) dan perilaku (methods).
2. Prinsip OOP
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
## 2. Encapsulation
- Ubah atribut dalam class Mahasiswa menjadi private.
- Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
- Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
### Script dan Output Program
![js2_insenkapsulasi](https://github.com/user-attachments/assets/fdb765f9-9589-41c5-8b8d-8b07a7599f1c)
![Screenshot 2024-10-15 152704](https://github.com/user-attachments/assets/56da1153-9561-4489-aef5-d81e469d04ba)
## 3. Inheritance
- Buat class Pengguna dengan atribut nama dan metode getNama().
- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
- Instansiasi objek dari class Dosen dan tampilkan data dosen.
### Script dan Output Program

## 4. Polymorphism
- Buat class Pengguna dengan metode aksesFitur().
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
### Script dan Output Program

5. Abstraction
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
