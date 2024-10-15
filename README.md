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
![js2_ininheritance](https://github.com/user-attachments/assets/8f8d36ac-e511-44e0-a931-e55ade267d8f)
![Screenshot 2024-10-15 153335](https://github.com/user-attachments/assets/5d72bfcc-6fb7-45ad-9aa4-c4e01ff1713e)
## 4. Polymorphism
- Buat class Pengguna dengan metode aksesFitur().
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
### Script dan Output Program
![js2_inpoly](https://github.com/user-attachments/assets/8ec98a5d-a95d-4542-bc12-ab17fec8428b)
![Screenshot 2024-10-15 153351](https://github.com/user-attachments/assets/57bb4b26-7ddf-4898-a7e0-e4cd556f1513)
## 5. Abstraction
- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
### Script dan Output Program
![js2_inabstrak](https://github.com/user-attachments/assets/afb062e8-2db1-4e18-8f14-bfb569f095e8)
![Screenshot 2024-10-15 153400](https://github.com/user-attachments/assets/f409a4a9-5afe-4335-98f5-90a3f83fc95e)

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
## 2. Polymorphism
- Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID.
- Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.
### Script dan Output Program
![js3_inpoly](https://github.com/user-attachments/assets/5eb6e191-2f5d-419c-a607-a863fc607ee5)
![Screenshot 2024-10-15 170140](https://github.com/user-attachments/assets/d4f29749-2e70-4c0e-b4a6-57dda5d70449)
## 3. Encapsulation
- Ubah atribut name dan studentID dalam kelas Student menjadi private.o Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai
atribut name dan studentID.
### Script dan Output Program
![js3_inenkapsulasi](https://github.com/user-attachments/assets/502eac4f-23da-4739-8e59-83301dea7a55)
![Screenshot 2024-10-15 170149](https://github.com/user-attachments/assets/b01e3752-1f4f-4403-8811-3853194628db)
## 4. Abstraction
- Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
- Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda.
### Script dan Output Program
![js3_inabstrak](https://github.com/user-attachments/assets/03f66d5b-ebb2-41c7-b7b4-04f90bf097c7)
![Screenshot 2024-10-15 170200](https://github.com/user-attachments/assets/f37362ff-7df6-4efe-bc5d-540f435f201d)
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
