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
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class mahasiswa
class Mahasiswa{
    //melakukan pendefinisian atribut 
    public $nama;
    public $nim;
    public $jurusan;

    //perintah untuk membuat method tampilkanData untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim berasal dari jurusan $this->jurusan.";
    }
}

//instasiasi objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa("Windy", "230102072", "JKB");
echo "<br>";

//Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";
?>

```
#### Hasil Output
![image](https://github.com/user-attachments/assets/55e8fdab-a575-4a73-b9f6-78dfac13ae82)

Hasil output di atas tidak berhasil karena belum dibuatnya construct.
Constrcuct disini berfungsi sebagai perintah ibaratnya seperti mengisi nilai yang baru dibuat untuk dimasukan ke dalam atribut. Jadi jika sudah instansiasi tapi belum membuat construct maka nilai  yang dibuat baru tadi belum bisa diisikan ke dalam atributnya. Jika belum dibuatnya constrcu maka atribut tersebut belum ada nilainya, maka harus diisi manual, karena atribut tersebut kosong atau tidak terinisialisasi dengan benar.
#### Contoh codingan secara manual jika tidak menggunakan construct
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class mahasiswa
class Mahasiswa{
    //melakukan pendefinisian atribut 
    public $nama;
    public $nim;
    public $jurusan;

    //perintah untuk membuat method tampilkanData untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim berasal dari jurusan $this->jurusan.";
    }
}

//instasiasi objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Windy";
$mahasiswa1->nim = "230102072";
$mahasiswa1->jurusan = "JKB";
echo "<br>";

//Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";
?>
```
#### Dan Hasil Output jika memasukan nilai secara manual yaitu
![2](https://github.com/user-attachments/assets/9f9e21ae-de06-4069-9a82-fa5352587c94)
Nilai berhasil dimasukkan tetapi secara manual, maka dari itu langkah selanjutnya yaitu membuat class dengan menambahkan construct

2. Implementasi Constructor<br>
o Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.<br>
o Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.<br>

#### Codingan Untuk Menambahkan Method Construct
```php
 //perintah untuk membuat constructor untuk menginisialiasi atribut saat instansiasi objek
     public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
#### Dibawah ini codingan secara keseluruhan bila ditambahkan construct dan tidak menggunakan cara manual untuk memasukan nilai yang baru dibuat
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class mahasiswa
class Mahasiswa{
    //melakukan pendefinisian atribut 
    public $nama;
    public $nim;
    public $jurusan;

     //perintah untuk membuat constructor untuk menginisialiasi atribut saat instansiasi objek
     public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //perintah untuk membuat method tampilkanData untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim berasal dari jurusan $this->jurusan.";
    }
}

//instasiasi objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa("Windy", "230102072", "JKB");
echo "<br>";

//Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";
?>
```
#### Hasil Output
![3](https://github.com/user-attachments/assets/396330f8-709e-4f83-88db-606e9268bf25)
Output di atas berhasil karena menggunakan construct dan nilai berhasil di masukan ke dalam atribut

3. Membuat Metode Tambahan<br>
o Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.<br>
o Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.<br>
#### Codingan Untuk Menambahkan Method updateJurusan()
```php
 //perintah untuk membuat metode tambahan
     public function updateJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "Jurusan telah diubah menjadi $this->jurusan.";
    }

```
#### Setelah membuat metode updateJurusan, maka tambahkan script ini untuk menampilkan bagian jurusan yang telah berhasil diubah menggunakan metode updateJurusan()
```php
//Menampilkan bagian jurusan yang telah diubah
echo $mahasiswa1->updateJurusan("JREM");
echo "<br>";
```

#### Codingan secara keseluruhan apabila method updateJurusan() telah ditambahkan
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class mahasiswa
class Mahasiswa{
    //melakukan pendefinisian atribut 
    public $nama;
    public $nim;
    public $jurusan;

     //perintah untuk membuat constructor untuk menginisialiasi atribut saat instansiasi objek
     public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

     //perintah untuk membuat metode tambahan
     public function updateJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "Jurusan telah diubah menjadi $this->jurusan.";
    }

    //perintah untuk membuat method tampilkanData untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim berasal dari jurusan $this->jurusan.";
    }
}

//instasiasi objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa("Windy", "230102072", "JKB");
echo "<br>";

//Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//Menampilkan bagian jurusan yang telah diubah
echo $mahasiswa1->updateJurusan("JREM");
echo "<br>";
?>
```
#### Hasil Output
![4](https://github.com/user-attachments/assets/f1383145-0c4f-4766-af27-f13448a43891)
Output di atas menampilkan bahwa jurusan telah diubah

4. Penggunaan Atribut dan Method<br>
o Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.<br>
o Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().<br>
#### Untuk mengubah atribut nim dengan metode setter, artinya kita harus membuat terlebih dahulu
#### Berikut codingan untuk membuat metode setter
```php
 //perintah menggunakan metode setter untuk mengubah nim 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }
```
Metode setter digunakan untuk mengubah suatu nilai pada atribut. 
#### Setelah membuat metode setter, maka tambahkan script ini untuk menampilkan bagian nim yang telah berhasil diubah menggunakan metode setter
```php
//Menampilkan bagian nim yang telah diubah menggunakan metode setter
echo $mahasiswa1->setNim("250102072");
echo "<br><br>";
```
#### Hasil output setelah penggantian nim
![5](https://github.com/user-attachments/assets/57229629-e236-4f23-b4d3-821e7a7a5801)

#### Dibawah ini adalah codingan secara menyeluruh setelah menambah metode setter dan akan mengganti nilai pada atribut nim
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class mahasiswa
class Mahasiswa{
    //melakukan pendefinisian atribut 
    public $nama;
    public $nim;
    public $jurusan;

     //perintah untuk membuat constructor untuk menginisialiasi atribut saat instansiasi objek
     public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

     //perintah untuk membuat metode tambahan
     public function updateJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "Jurusan telah diubah menjadi $this->jurusan.";
    }

    //perintah untuk membuat method tampilkanData untuk menampilkan data mahasiswa
    public function tampilkanData(){
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim berasal dari jurusan $this->jurusan.";
    }

    //perintah menggunakan metode setter untuk mengubah nim 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }
}

//instasiasi objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa("Windy", "230102072", "JKB");
echo "<br>";

//Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//Menampilkan bagian jurusan yang telah diubah
echo $mahasiswa1->updateJurusan("JREM");
echo "<br>";

//Menampilkan bagian nim yang telahdiubah menggunakan metode setter
echo $mahasiswa1->setNim("250102072");
echo "<br><br>";

//Menampilkan data mahasiswa setelah jurusan dan nimnya diubah
echo $mahasiswa1->tampilkanData();
?>
```

#### Hasil Output setelah jurusan dan nim di ubah lalu ditampilkan
![6](https://github.com/user-attachments/assets/bb59f33c-b180-4ac4-a744-c5b227a0a70d)


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




