# PraktikumWeb2
# JoobSheet1
### OOP atau Object Oriented Programming 
adalah suatu metode pemrograman yang berfokus atau berorientasi pada objek. OOP adalah bentuk suatu pendekatan pengembangan perangkat lunak yang memiliki struktur berbasis atau berorientasi pada objek yang memiliki atribut dan method yang saling terhubung satu sama lain.
##### 1. Class
Class atau Kelas adalah rancangan dari sebuah objek. struktur yang mendefinisikan atribut dan metode yang dimiliki oleh suatu objek. Class menampung sekumpulan variable dan method yang digunakan oleh pengolahan datanya. Class adalah himpunan dari objek.
##### 2. Objek
Objek adalah sebuah instansiasi atau bentuk dari class. Objek adalah sebuah variable. Objek memiliki akses ke atribut dan metode yang di definisakn dalam kelas. Jika belum di instansiasikan maka class tidak dapat digunakan, karena di dalam class terdapat objek. 
##### 3. Atribut
Atribut adalah variable yang dimiliki oleh class. Atribut menyimpan data atau informasi yang menunjukan karateristik dari objek atau class. Atribut dapat disebut sebagai variable class
##### 4. Method
Method adalah perilaku atau kemampuan yang dimiliki oleh sebuah class. Method bisa berupa prosedure atau function. Prosedure bila tidak mengembalikan nilai, dan function bila mengembalika nilai. Method adalah operasi atau fungsi yang dilakukan oleh objek.
Aksebilitas atau Hak Akses yang dimiliki atribut dan method : <br>
  a. Public : Dapat diakses dari mana saja <br>
  b. Private : Hanya dapat diakses dalam kelas itu sendiri <br>
  c. Protected : Dapat diakses oleh kelas itu sendiri atau kelas turunan<br>

### Instruksi Kerja Jobsheet 1
1. Membuat Class dan Object<br>
o Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.<br>
o Buat metode tampilkanData() dalam class Mahasiswa.<br>
o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.<br>

3. Implementasi Constructor<br>
4. Membuat Metode Tambahan<br>
5. Penggunaan Atribut dan Method<br>

### Tugas Jobsheet 1
##### Proses Pembuatan Class
1. Langkah pertama yaitu tuliskan perintah <?php?><br>
2. selanjutnya membuat class Dosen dengan di didalamnya diisi dengan atribut nama, nip dan matakuliah<br>
3. Selanjutnya membuat Construct, untuk menginisialisasi nilai baru yang akan dibuat nanti<br>
4. Selanjutnya yaitu membuat method tampilkan dosen untuk menampilkan data dosen yang telah dibuat<br>
5. selanjutnya yaitu melakukan Instansiasi dari class dosen, dengan memasukan nama, nim, dan mata kuliah<br>
6. membuat perintah untuk menampilkan data dosen dengan memanggilkan fungsi tampilkanDosen<br>


# JoobSheet2
### OOP atau Object Oriented Programming
adalah paradigma pemrograman yang berfokus pada konsep objek. OOP memiliki konsep dasar yaitu Class, Objek, Atribut dan Method. Jika ada konsep dasar maka akan ada Prinsip dasar dari OOP yaitu : <br>
1. Encapsulation<br>
Encapsulation digunakan untuk menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tersebut<br>
2. Inheritance<br>
Inheritance merupakan prinsip dimana kelas daoat mewarisi properti dan metode dari kelas lainnya.<br>
3. Polymorphism<br>
Polymorphism merupakan prinsip dimana metode yang sama dapat memiliki implementasi berbeda di dalam class yang berbeda.<br>
4. Abstraction<br> 
Abstraction adalah prinsip yang menyembunyikan detail implementasi dan hanya menampilkan fungsi penting<br>


### Instruksi Kerja Jobsheet 2
1. Membuat Class dan Object<br>

```php
<?php
//perintah untuk membuka perintah atau dokumen php

//perintah untuk membuat atau mendefinisikan class mahasiswa
class mahasiswa {
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu public
    public $nama;
    public $nim;
    public $jurusan;

    //membuat method construct untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikanniali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }
}

//instasisasi objek dari class mahasiswa, membuat objek mahasiswa baru
$mahasiswa1 = new Mahasiswa("cantik", "2301020272", "JKB");

//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br>";
?>
```
2. Encapsulation<br>
3. Inheritance<br>
4. Polymorphism<br>
5. Abstraction<br>

<h5>Proses Membuat Class, Encapsulation, Inheritance, Polymorphism dan Abstraction</h5>
1. 




