# PRAKTIKUMWEB2
# JOBSHEET1
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

#### Dibawah ini adalah codingan secara menyeluruh setelah menambah metode setter dan akan mengganti nilai pada atribut nim dan akan menampilkan data
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
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.<br>
##### Dibawah ini codingan untuk membuat class
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class dosen
class dosen{
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu public
    public $nama;
    public $nip;
    public $mataKuliah;

     //perintah untuk membuat constructor untuk menginisialiasi atribut saat instansiasi objek
    public function __construct($nama, $nip, $mataKuliah){
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    
    }
}
?>
```
Diatas adalah codingan untuk pembuatan class dan embuatan metode construct untuk mengisikan nilai ke atribut saat instasiasi objek. 
##### Hasil Output pembuatan class
![7](https://github.com/user-attachments/assets/044f136c-bb9a-410a-810f-05ff30766f53)
Belum ada output karena belum instansiasi objek dan belum menampilkan data

2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.<br>
##### Codingan untuk membuat metode tampilkanDosen()
```php
 //membuat method tampilkanDosen untuk saat nanti dipanggil untuk menampilkan data dosen
    public function tampilkanDosen(){
        return "Dosen ini bernama $this->nama dengan nip $this->nip mengajar mata kuliah $this->mataKuliah. ";
    }
```
##### Codingan dibawah ini untuk secara keseluruhan setelah ditambahkan metode tampilkanDosen()
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class dosen
class dosen{
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu public
    public $nama;
    public $nip;
    public $mataKuliah;

     //perintah untuk membuat constructor untuk menginisialiasi atribut saat instansiasi objek
    public function __construct($nama, $nip, $mataKuliah){
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    
    }

    //membuat method tampilkanDosen untuk saat nanti dipanggil untuk menampilkan data dosen
    public function tampilkanDosen(){
        return "Dosen ini bernama $this->nama dengan nip $this->nip mengajar mata kuliah $this->mataKuliah. ";
    }
}
?>
```
##### Hasil Output
![8](https://github.com/user-attachments/assets/8a9ae46d-e5d4-4d59-8543-e2465d09a235)
tetap kosong karena belum memanggil method dan belum instansiasi objek

3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut. <br>
##### codingan untuk membuat objek dan juga menampilkan data
```php
//instasiasi objek dari class Dosen
$dosen1 = new Dosen("Taylor", "1234567890", "Bahasa Inggris");

//menampilkan data dosen
echo $dosen1->tampilkanDosen();
```
##### codingan secara keseluruhan setelah membuat objek, membuat method dan membuat class
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat dan pendefinisian class dosen
class dosen{
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu public
    public $nama;
    public $nip;
    public $mataKuliah;

     //perintah untuk membuat constructor untuk menginisialiasi atribut saat instansiasi objek
    public function __construct($nama, $nip, $mataKuliah){
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    
    }

    //membuat method tampilkanDosen untuk saat nanti dipanggil untuk menampilkan data dosen
    public function tampilkanDosen(){
        return "Dosen ini bernama $this->nama dengan nip $this->nip mengajar mata kuliah $this->mataKuliah. ";
    }
}

//instasiasi objek dari class Dosen
$dosen1 = new Dosen("Taylor", "1234567890", "Bahasa Inggris");

//menampilkan data dosen
echo $dosen1->tampilkanDosen();
?>
```

##### hasil output
![9](https://github.com/user-attachments/assets/1bc24b95-11d8-4a23-9d44-03155ab132ec)

Hasil output di atas menampilkan data dosen yang stelah menerapkan konsep class objek dan method

##### Proses Pembuatan Class Dosen
1. Langkah pertama yaitu tuliskan perintah <?php?><br>
2. selanjutnya membuat class Dosen dengan di didalamnya diisi dengan atribut nama, nip dan matakuliah<br>
3. Selanjutnya membuat Construct, untuk menginisialisasi nilai baru yang akan dibuat nanti<br>
4. Selanjutnya yaitu membuat method tampilkan dosen untuk menampilkan data dosen yang telah dibuat<br>
5. selanjutnya yaitu melakukan Instansiasi dari class dosen, dengan memasukan nama, nim, dan mata kuliah<br>
6. membuat perintah untuk menampilkan data dosen dengan memanggilkan fungsi tampilkanDosen<br>

##### Penggunaan Metode pada Class Dosen
1. method yang digunakan disini adalah method construct dan method tampilkanDosen<br>
2. method consctruct adalah method khusus yang secara otomatis terpanggil saat membuat objek baru. Construct digunakan untuk mengatur nilai awal dari atribut. Constructor memastikan bahwa saat membuat objek baru maka nilai tersebut akan tersimpan ke dalam atribut tersebut.<br>
3. method tampilkanDosen adalah method dibuat untuk menampilkan informasi dosen. Ketika method ini dipanggil maka method ini akan mengembalikan nilai berupa kalimat yang berisi informasik dosen seperti nama, nip , dan mata kuliah<br>




# JOBSHEET2
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
o Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.<br>
##### codingan untuk membuat class
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
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }
}
?>
```
##### Hasil Output
![16](https://github.com/user-attachments/assets/5d482a54-49a0-48bb-b6af-b60ed17fe04b)
Output masih kosong karena belum instansiasi objek dan belum mempunyai method untuk menampilkan data

o Buat metode tampilkanData() dalam class Mahasiswa.<br>
##### codingan untuk membuat method tampilkanData()
```php
//perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }
```
Method ini dibuat untuk digunakan saat pemanggilan maka bisa mengembalikan nilai (return) dalam bentuk string atau kalimat

##### codingan secara menyeluruh setelah ditambahkan method tampilkanData()
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
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }
}
?>
```
##### Hasil Output
![17](https://github.com/user-attachments/assets/b3568534-e854-4f66-b13e-9d7d7a1599e6)
Hasil output masih kosong karena method tersebut belum dipanggil untuk menampilakn datanya, begitu pula belum instansiasi, maka belum ada data yang akan di tampilkan

o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.<br>
##### codingan untuk instansiasi objek dan menampilkan data mahasiswa
```php
//instasisasi objek dari class mahasiswa, membuat objek mahasiswa baru
$mahasiswa1 = new Mahasiswa("cantik", "2301020272", "JKB");

//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br>";
```
##### codingan secara keseluruhan setalah membuat class, method tampilkanData dan instansiasi serta untuk menampilkan data
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
##### Hasil Output
![18](https://github.com/user-attachments/assets/45afb5e2-99c4-4d4f-b228-21c29dc9736d)
Hasil output diatas menampilkan tampilan dari perintah untuk membuat instansiasi lalu ditampilkan dengan memanggil method 

2. Encapsulation<br>
o Ubah atribut dalam class Mahasiswa menjadi private.
o Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
o Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
##### Codingan mengubah atribut menjadi private
```php
<?php
//perintah untuk membuka perintah atau dokumen php
//perintah untuk membuat atau mendefinisikan class mahasiswa
class mahasiswa {
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu public
    private $nama;
    private $nim;
    private $jurusan;

    //membuat method construct untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }
}
?>
```
##### codingan membuat metode getter dan setter pada nama, nim dan jurusan
```php
/*membuat metode getter pada atribut name, karena atribut name bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNama(){
        return $this->nama;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNama($nama_baru) {
        $this->nama = $nama_baru;
        return "nama telah diganti menjadi $this->nama.";
    }

    /*membuat metode getter pada atribut nim, karena atribut nim bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNim(){
        return $this->nim;
    }
     
    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }

    
    /*membuat metode getter pada atribut jurusan, karena atribut jurusan bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getJurusan(){
        return $this->jurusan;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/
    public function setJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "jurusan telah diganti menjadi $this->jurusan.";
    }
```

Metode getter digunakan untuk bisa mengakses atribut yang bersifat private, sedangakan metode setter digunakan untuk menganti atau mengatur nilai pada atribut yang bersifat private tadi. 

##### mendemostrasikan method get dan set 
```php
<?php
//untuk mengubah pada atribut nama yang bersifat private
echo $mahasiswa1->setNama("Mona Lisa");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut nim yang bersifat private
echo $mahasiswa1->setNim("250202072");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut jurusan yang bersifat private
echo $mahasiswa1->setJurusan("Kedokteran");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br>";
?>
```
##### codingan secara kesuluran setelah encapsulation dilakukan 
```php
<?php
//perintah untuk membuka perintah atau dokumen php
//perintah untuk membuat atau mendefinisikan class mahasiswa
class mahasiswa {
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu public
    private $nama;
    private $nim;
    private $jurusan;

    //membuat method construct untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }

    /*membuat metode getter pada atribut name, karena atribut name bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNama(){
        return $this->nama;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNama($nama_baru) {
        $this->nama = $nama_baru;
        return "nama telah diganti menjadi $this->nama.";
    }

    /*membuat metode getter pada atribut nim, karena atribut nim bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNim(){
        return $this->nim;
    }
     
    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }

    
    /*membuat metode getter pada atribut jurusan, karena atribut jurusan bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getJurusan(){
        return $this->jurusan;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/
    public function setJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "jurusan telah diganti menjadi $this->jurusan.";
    }
}

//instasisasi objek dari class mahasiswa, membuat objek mahasiswa baru
$mahasiswa1 = new Mahasiswa("cantik", "2301020272", "JKB");

//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut nama yang bersifat private
echo $mahasiswa1->setNama("Mona Lisa");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut nim yang bersifat private
echo $mahasiswa1->setNim("250202072");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut jurusan yang bersifat private
echo $mahasiswa1->setJurusan("Kedokteran");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br>";
?>
```
##### Hasil Output
![19](https://github.com/user-attachments/assets/08220053-2dfa-46bb-bf0a-76842116d4ab)
Hasil Output di atas berhasil setelah melakukan Encapsulation.

4. Inheritance<br>
o Buat class Pengguna dengan atribut nama dan metode getNama().<br>
o Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.<br>
o Instansiasi objek dari class Dosen dan tampilkan data dosen.<br>

##### Codingan untuk membuat class pengguna dan method getNama()
```php
<?php
//perintah untuk melakukan pendefinisian class pengguna
 class Pengguna {
    //perintah untuk membuat atribut nama dengan hak akses protected
    protected $nama;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama){
         //menginisialisasi  nilai atribut nama
        $this->nama = $nama;
    }

    //Method untuk mengambil atau mengakses atribut private
    public function getNama(){
        return $this->nama;
    }
}
?>
```

##### codingan membuat class dosen yang mewarisi class pengguna dan menambahkan atribut mataKuliah
```php
<?php
//perintah untuk membuat class Dosen yang mewarisi sifat dari class pengguna
class Dosen extends Pengguna {
    //membuat atribut matakuliah dengan hak akses private
    private $matakuliah;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama, $matakuliah){
        //perintah untuk memanggil constructor class induk yaitu pengguna untuk menginisialisasi nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut matakuliah
        $this->matakuliah = $matakuliah;
    }

    //perintah untuk membuat method get untuk mengakses atribut private
    public function getMataKuliah(){
        //mengembalikan nilai
        return "Mata Kuliah $this->matakuliah";
    }
}
?>
```

##### Codingan untuk mengintansiasi objek dan menampilkan data
###### a.perintah untuk membuat method tampilDataDosen()
```php
<?php
 //perintah untuk membuat method tampilDataDosen() untuk menampilkan data dosen saat method ini dipanggil
    public function tampilDataDosen(){
        return "Dosen ini bernama $this->nama , beliau mengajar $this->matakuliah.";
    }
?>
```
Codingan di atas dibuat agar saat akan menampilkan data, hanya perlu memanggil method nya saja
###### b. perintah untuk melakukan inisiasi serta menampilkan data
```php
<?php
//perintah untuk instansiasi objek dari class dosen
$dosen1 = new Dosen("Taylor", "Bahasa Inggris");

//perintah untuk mengakses atau mengambil nilai dari atribut matakuliah
echo $dosen1->getMataKuliah();
echo "<br>";

//perintah untuk menampilkan data dosen dengan memanggil method tampilDataDosen()
echo $dosen1->tampilDataDosen();
echo "<br><hr>";
?>
```
##### Hasil Output
![14](https://github.com/user-attachments/assets/ee482c96-f640-4499-ba84-97b5cd3de2cd)
Hasil Output di atas menunjukan hasil setelah melakukan inheritance

##### Codingan ini merupakan codingan keseluruhan seetelah mmembuat class pengguna, class dosen yang mewarisi pengguna, instansiasi objek dan menampilkan data, masih satu file dengan codingan yang sebelum
```php
<?php
//perintah untuk membuka perintah atau dokumen php
//perintah untuk membuat atau mendefinisikan class mahasiswa
class mahasiswa {
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu public
    private $nama;
    private $nim;
    private $jurusan;

    //membuat method construct untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        //menginisialisasi  nilai atribut nama, nip, mataKuliah
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }

    /*membuat metode getter pada atribut name, karena atribut name bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNama(){
        return $this->nama;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNama($nama_baru) {
        $this->nama = $nama_baru;
        return "nama telah diganti menjadi $this->nama.";
    }

    /*membuat metode getter pada atribut nim, karena atribut nim bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNim(){
        return $this->nim;
    }
     
    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }

    
    /*membuat metode getter pada atribut jurusan, karena atribut jurusan bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getJurusan(){
        return $this->jurusan;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/
    public function setJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "jurusan telah diganti menjadi $this->jurusan.";
    }
}

//instasisasi objek dari class mahasiswa, membuat objek mahasiswa baru
$mahasiswa1 = new Mahasiswa("cantik", "2301020272", "JKB");

//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut nama yang bersifat private
echo $mahasiswa1->setNama("Mona Lisa");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut nim yang bersifat private
echo $mahasiswa1->setNim("250202072");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><br>";

//untuk mengubah pada atribut jurusan yang bersifat private
echo $mahasiswa1->setJurusan("Kedokteran");
echo "<br>";
//perintah untuk menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
echo "<br><hr>";

//perintah untuk melakukan pendefinisian class pengguna
 class Pengguna {
    //perintah untuk membuat atribut nama dengan hak akses protected
    protected $nama;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama){
         //menginisialisasi  nilai atribut nama
        $this->nama = $nama;
    }

    //Method untuk mengambil atau mengakses atribut private
    public function getNama(){
        return $this->nama;
    }
}

//perintah untuk membuat class Dosen yang mewarisi sifat dari class pengguna
class Dosen extends Pengguna {
    //membuat atribut matakuliah dengan hak akses private
    private $matakuliah;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama, $matakuliah){
        //perintah untuk memanggil constructor class induk yaitu pengguna untuk menginisialisasi nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut matakuliah
        $this->matakuliah = $matakuliah;
    }

    //perintah untuk membuat method get untuk mengakses atribut private
    public function getMataKuliah(){
        //mengembalikan nilai
        return "Mata Kuliah $this->matakuliah";
    }

    //perintah untuk membuat method tampilDataDosen() untuk menampilkan data dosen saat method ini dipanggil
    public function tampilDataDosen(){
        return "Dosen ini bernama $this->nama , beliau mengajar $this->matakuliah.";
    }

}
//perintah untuk instansiasi objek dari class dosen
$dosen1 = new Dosen("Taylor", "Bahasa Inggris");

//perintah untuk mengakses atau mengambil nilai dari atribut matakuliah
echo $dosen1->getMataKuliah();
echo "<br>";

//perintah untuk menampilkan data dosen dengan memanggil method tampilDataDosen()
echo $dosen1->tampilDataDosen();
echo "<br><hr>";
?>
```
##### Hasil Output 
![20](https://github.com/user-attachments/assets/0d69dd9c-8390-496c-9f55-11fedda538e2)

5. Polymorphism<br>
o Buat class Pengguna dengan metode aksesFitur().<br>
##### Codingan membuat class pengguna dengan metode akses Fitur()
```php
<?php
//perintah untuk melakukan pendefinisian class pengguna
 class Pengguna {
    //perintah untuk membuat atribut nama dengan hak akses protected
    protected $nama;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama){
         //menginisialisasi  nilai atribut nama
        $this->nama = $nama;
    }

    //Method untuk mengambil atau mengakses atribut private
    public function getNama(){
        return $this->nama;
    }

    //perintah untuk membuat method aksesFitur()
    public function aksesFitur(){
        //mengembalikan nilai
        return "Fitur ini memberikan akses";
    }

}
?>
```
o Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.<br>
##### Codingan untuk mengimplementasikan aksesFitur() di class Dosen dan Mahasiswa dengan cara yang berbeda
###### a. implementasi aksesFitur() di class Dosen 
```php
<?php
 //perintah untuk membuat method aksesFitur()
    public function aksesFitur(){
        //mengembalikan nilai
        return "Dosen ini bernama $this->nama, beliau mengajar $this->matakuliah dapat mengelola dan melihat jadwal perkuliahan";
    }
?>
```
###### b. codingan ini berisi keseluruhan class dosen setelah ditambahkan method aksesFitur()
```php
<?php
//perintah untuk membuat class Dosen yang mewarisi sifat dari class pengguna
class Dosen extends Pengguna {
    //membuat atribut matakuliah dengan hak akses private
    private $matakuliah;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama, $matakuliah){
        //perintah untuk memanggil constructor class induk yaitu pengguna untuk menginisialisasi nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut matakuliah
        $this->matakuliah = $matakuliah;
    }

    //perintah untuk membuat method get untuk mengakses atribut private
    public function getMataKuliah(){
        //mengembalikan nilai
        return "Mata Kuliah $this->matakuliah";
    }

    //perintah untuk membuat method tampilDataDosen() untuk menampilkan data dosen saat method ini dipanggil
    public function tampilDataDosen(){
        return "Dosen ini bernama $this->nama , beliau mengajar $this->matakuliah.";
    }

    //perintah untuk membuat method aksesFitur()
    public function aksesFitur(){
        //mengembalikan nilai
        return "Dosen ini bernama $this->nama, beliau mengajar $this->matakuliah dapat mengelola dan melihat jadwal perkuliahan";
    }

}
?>
```
###### c. memodifikasi class mahasiswa yang sudah dibuat sebelumnya agar mewarisi class pengguna
```php
<?php
//perintah untuk membuat atau mendefinisikan class mahasiswa untuk mewarisi dari class pengguna
class Mahasiswa extends pengguna{
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu private
    private $nim;
    private $jurusan;

    //membuat method construct untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        //perintah untuk memanggil constructor parent untuk menginisialisasi atribut nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut nip, mataKuliah
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }

    /*membuat metode getter pada atribut name, karena atribut name bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNama(){
        return $this->nama;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNama($nama_baru) {
        $this->nama = $nama_baru;
        return "nama telah diganti menjadi $this->nama.";
    }

    /*membuat metode getter pada atribut nim, karena atribut nim bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNim(){
        return $this->nim;
    }
     
    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }

    
    /*membuat metode getter pada atribut jurusan, karena atribut jurusan bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getJurusan(){
        return $this->jurusan;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/
    public function setJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "jurusan telah diganti menjadi $this->jurusan.";
    }
}
?>
```
###### d. menambahkan method aksesFitur() pada class mahasiswa yang telah di extends dari pengguna
```php
<?php
//perintah untuk membuat aksesFitur()
    public function aksesFitur(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan dapat mengakses jadwal perkuliahan";
    }
}
?>
```
###### e. codingan ini berisi seluruh class mahasiswa setelah menambahkan askesFitur()
```php
<?php
//perintah untuk membuka perintah atau dokumen php
//perintah untuk membuat atau mendefinisikan class mahasiswa untuk mewarisi dari class pengguna
class Mahasiswa extends pengguna{
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu private
    private $nim;
    private $jurusan;

    //membuat method construct untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        //perintah untuk memanggil constructor parent untuk menginisialisasi atribut nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut nip, mataKuliah
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }

    /*membuat metode getter pada atribut name, karena atribut name bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNama(){
        return $this->nama;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNama($nama_baru) {
        $this->nama = $nama_baru;
        return "nama telah diganti menjadi $this->nama.";
    }

    /*membuat metode getter pada atribut nim, karena atribut nim bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNim(){
        return $this->nim;
    }
     
    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }

    
    /*membuat metode getter pada atribut jurusan, karena atribut jurusan bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getJurusan(){
        return $this->jurusan;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/
    public function setJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "jurusan telah diganti menjadi $this->jurusan.";
    }

    //perintah untuk membuat aksesFitur()
    public function aksesFitur(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan dapat mengakses jadwal perkuliahan";
    }
}
?>
```
##### Hasil Output belum ada karena belum di instansiasi dan belum menampilkan data

o Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().<br>
##### Instansiasi obejek dan memanggil aksesFitur()
```php
<?php
//perintah untuk instansiasi objek dari class mahasiswa
$mahasiswa2 = new Mahasiswa("Olivia", "12354643", "Bahasa");
//perintah untuk memanggil dan mengakses method akesFitur()
echo $mahasiswa2->aksesFitur();
echo "<br>";

//perintah untuk instansiasi objek dari class dosen
$dosen2 = new Dosen("Sabrina", "Musik");
//perintah untuk memanggil dan mengakses method akesFitur()
echo $dosen2->aksesFitur();

?>
```
##### Hasil Output 
![21](https://github.com/user-attachments/assets/e77d45c9-f16e-43e4-bd00-146981fe1ba3)
Hasil Output di atas menampilkan setelah melakukan polymorphism bahwa berhasil melakukan implementasi method aksesFitur() dengan cara yang berbeda

7. Abstraction<br>
o Buat class abstrak Pengguna dengan metode abstrak aksesFitur().<br>
```php
<?php
//perintah untuk melakukan pendefinisian abstaract class pengguna
 abstract class Pengguna {
    //perintah untuk membuat atribut nama dengan hak akses protected
    protected $nama;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama){
         //menginisialisasi  nilai atribut nama
        $this->nama = $nama;
    }

    //Method untuk mengambil atau mengakses atribut private
    public function getNama(){
        return $this->nama;
    }

    //perintah untuk membuat abstract method aksesFitur()
    abstract public function aksesFitur();

}
?>
```
Pada saat di akses fiturnya tidak memiliki body, karena metode yang di buat sebagai abstract hanya memiliki head, dan kelas yang menurunin nya harus melakukan implemantasinya sendiri terhadap aksesFitur()

o Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.<br>
###### a. class mahasiswa
```php
<?php
//perintah untuk membuka perintah atau dokumen php
//perintah untuk membuat atau mendefinisikan class mahasiswa untuk mewarisi dari class pengguna
class Mahasiswa extends pengguna{
    //perintah untuk membuat atribut, dan memberikan hak akses kepada masing masing atribut, hak akses yang digunakan disini yaitu private
    private $nim;
    private $jurusan;

    //membuat method construct untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan){
        //perintah untuk memanggil constructor parent untuk menginisialisasi atribut nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut nip, mataKuliah
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    
    }

    //perintah untuk membuat method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        //mengembalikan niali berupa string ketika method ini dipanggil
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan.";
    }

    /*membuat metode getter pada atribut name, karena atribut name bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNama(){
        return $this->nama;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNama($nama_baru) {
        $this->nama = $nama_baru;
        return "nama telah diganti menjadi $this->nama.";
    }

    /*membuat metode getter pada atribut nim, karena atribut nim bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getNim(){
        return $this->nim;
    }
     
    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/ 
    public function setNim($nim_baru){
        $this->nim = $nim_baru;
        return "nim telah diganti menjadi $this->nim.";
    }

    
    /*membuat metode getter pada atribut jurusan, karena atribut jurusan bersifat private, 
    dan fungsi metode get digunakan untuk mengakses nilai dari atribut yang bersifat private 
    yang tidak bisa diakses oleh luar class, metode get juga dapat digunakan untuk mengambil nilai.*/
    public function getJurusan(){
        return $this->jurusan;
    }

    /*Membuat method setter untuk mengubah nilai yang ada pada atribut private
    methode ini digunakan untuk mangatur nilai dari atribut private yang tidak bisa diakses 
    secara langsung dari luar kelas*/
    public function setJurusan($jurusan_baru){
        $this->jurusan = $jurusan_baru;
        return "jurusan telah diganti menjadi $this->jurusan.";
    }

    //perintah untuk membuat aksesFitur()
    public function aksesFitur(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama $this->nama dengan nim $this->nim dari jurusan $this->jurusan dapat mengakses jadwal perkuliahan";
    }
}
?>
```

###### b. class dosen 
```php
<?php
//perintah untuk membuat class Dosen yang mewarisi sifat dari class pengguna
class Dosen extends Pengguna {
    //membuat atribut matakuliah dengan hak akses private
    private $matakuliah;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama, $matakuliah){
        //perintah untuk memanggil constructor class induk yaitu pengguna untuk menginisialisasi nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut matakuliah
        $this->matakuliah = $matakuliah;
    }

    //perintah untuk membuat method get untuk mengakses atribut private
    public function getMataKuliah(){
        //mengembalikan nilai
        return "Mata Kuliah $this->matakuliah";
    }

    //perintah untuk membuat method tampilDataDosen() untuk menampilkan data dosen saat method ini dipanggil
    public function tampilDataDosen(){
        return "Dosen ini bernama $this->nama , beliau mengajar $this->matakuliah.";
    }

    //perintah untuk membuat method aksesFitur()
    public function aksesFitur(){
        //mengembalikan nilai
        return "Dosen ini bernama $this->nama, beliau mengajar $this->matakuliah dapat mengelola dan melihat jadwal perkuliahan";
    }

}
?>
```
o Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.<br>
##### codingan pemanggilan method aksesFitur()
```php
<?php
//perintah untuk instansiasi objek dari class mahasiswa
$mahasiswa2 = new Mahasiswa("Olivia", "12354643", "Bahasa");
//perintah untuk memanggil dan mengakses method akesFitur()
echo $mahasiswa2->aksesFitur();
echo "<br>";

//perintah untuk instansiasi objek dari class dosen
$dosen2 = new Dosen("Sabrina", "Musik");
//perintah untuk memanggil dan mengakses method akesFitur()
echo $dosen2->aksesFitur();
?>
```

##### Hasil Output
![22](https://github.com/user-attachments/assets/40790777-61a2-4cf5-af83-13ceaa8a4fb8)
Hasil di atas berhasil karena semua class turunan dari pengguna mengimplemnetasikan aksesFitur dengan implementasi semua. Jika salah satu class gturunan tidak mengimplemntasikan aksesFitur() maka codingan akan error

##### contoh codingan jika salah satu tidak mengimplementasikan asksesFitur()
###### a. codingan dibagian class dosen 
```php
<?php
//perintah untuk membuat class Dosen yang mewarisi sifat dari class pengguna
class Dosen extends Pengguna {
    //membuat atribut matakuliah dengan hak akses private
    private $matakuliah;

    //perintah untuk membuat constructor untuk menginisialisasi atribut
    public function __construct($nama, $matakuliah){
        //perintah untuk memanggil constructor class induk yaitu pengguna untuk menginisialisasi nama
        parent::__construct($nama);
        //menginisialisasi  nilai atribut matakuliah
        $this->matakuliah = $matakuliah;
    }

    //perintah untuk membuat method get untuk mengakses atribut private
    public function getMataKuliah(){
        //mengembalikan nilai
        return "Mata Kuliah $this->matakuliah";
    }

    //perintah untuk membuat method tampilDataDosen() untuk menampilkan data dosen saat method ini dipanggil
    public function tampilDataDosen(){
        return "Dosen ini bernama $this->nama , beliau mengajar $this->matakuliah.";
    }

    // //perintah untuk membuat method aksesFitur()
    // public function aksesFitur(){
    //     //mengembalikan nilai
    //     return "Dosen ini bernama $this->nama, beliau mengajar $this->matakuliah dapat mengelola dan melihat jadwal perkuliahan";
    // }

}
?>
```
aksesFitur() di class dosen saya matikan dengan komen maka akan seperti ini outputnya
###### b. Hasil Output jika salah satu class turunan (contoh class dosen) tidak mengimplementasikan aksesFitur()
![23](https://github.com/user-attachments/assets/7b9e9802-e2d3-40ce-8f7a-659c5939d642)
Hasil di atas adalah error karena class dosen tidak mengimplementasikan aksesFitur()

##### Penggunaan method
1. method yang digunakan disini adalah method construct, tampilkanData(), getter, setter, aksesFitur() dan tampilDataDosen()<br>
2. method consctruct adalah method khusus yang secara otomatis terpanggil saat membuat objek baru. Construct digunakan untuk mengatur nilai awal dari atribut. Constructor memastikan bahwa saat membuat objek baru maka nilai tersebut akan tersimpan ke dalam atribut tersebut.<br>
3. method tampilkanData adalah method dibuat untuk menampilkan informasi mahasiswa. Ketika method ini dipanggil maka method ini akan mengembalikan nilai berupa kalimat yang berisi informasi mahasiswa seperti nama, nim dan jurursan.<br>
4. method getter adalah method yang digunakan untuk mengakses atribut yang bersifat private.
5. method setter adalah method yang digunakan untuk mengubah atau mengatur nilai apa atribut yang bersifat private
6. method aksesFitur adalah method yang digunakan untuk memberikan akses terhadap mahasiswa dan dosen, dalam kasus ini method ini digunakan untuk polymorphism dan abstract.
7. method tampilDataDosen adalah method dibuat untuk menampilkan informasi dosen. Ketika method ini dipanggil maka method ini akan mengembalikan nilai berupa kalimat yang berisi informasi dosen seperti nama, nip , dan mata kuliah<br>

##### Sumber Kode
1. <b>class mahasiswa</b> adalah class yang dibuat dengan nama mahasiswa untuk menampung beberapa data. data yang nantinya akan di buat dengan instansiasi objek dari class mahasiswa
2. <b>public $nama</b> adalah contoh atribut yang memiliki hak akses public, yang dimana dapat di akses oleh class manapun.
3. <b>private $nama</b> adalah contoh atribut yang dibuat dengan hak akses privat, yang dimana tidak bisa di akses oleh luar class
4. <b>protected $nama</b> adalah contoh atribut yang dibuat dengan hak  akses protected, dimana atribut ini hanya dapat diakses dengan class yang mendeklarasikannya dan class turunannya.
5. <b>public function __construct</b> adalah  metode yang dibuat untuk menginisialisasi atribut saat instansiasi objek nanti.
6. <b>public function tampilkanData()</b> adalah metode yang akan digunakan untuk menampilkan data saat dipanggil dan akan mengembalikan nilai berupa string.
7. <b> public function getNama()</b> adalah method getter yang digunakan untuk mengakses atribut yang bersifat private
8. <b>publuc function setName($nama_baru)</b> adakah method setter yang digunakan untuk mengubah atau mengatur nilai atribut yang bersifat private.
9. <b>$mahasiswa 1 = new Mahasiswa</b> adalah contoh instasiasi objek dari class Mahasiswa yang dimana ini adalah proses pembuatan objek, saat instansiasi maka method construct akan secara otomatis terpanggil.
10. <b>echo $mahasiswa1->setNama("Mona Lisa");</b> adalah contoh pemanggilan method setter untuk mengganti nilai dalam atribut yang bersifat private
11. <b>echo $mahasiswa1->tampilkanData();</b> adalah contoh pemanggilan method untuk menampilkan data setelah melakukan instansiasi objek
12. <b>Class Dosen extends Pengguna</b> adalah contoh pembuatan class dari turunan class induk (class pengguna).
13. <b>parent::__construct($nama);</b> adalah perintah untuk memanggil contructor dari class induk (class pengguna)
14. <b>$this->matakuliah = $matakuliah;</b> perintah untuk melakukan inisialisasi atribut
15. <b> abstract class Pengguna </b> adalah contoh pembuatan class yang dibuat absctract
16. <b>abstract public function aksesFitur();</b> adalah contoh pembuatan abstract method.

#JOBSHEET3
**Object-Oriented Programming (OOP)** dalam PHP memungkinkan pengembangan
perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance,
Polymorphism, Encapsulation, dan Abstraction adalah pilar penting yang membuat
OOP efisien. Dengan menguasai konsep-konsep ini, pengembang dapat membuat kode
yang lebih fleksibel, dapat digunakan kembali, dan mudah dipelihara.

**Prinsip OOP**
1. Inheritance<br>
Inheritance adalah konsep di mana sebuah kelas dapat mewarisi atribut dan
metode dari kelas lain. Ini memungkinkan penggunaan kembali kode dan
menciptakan hubungan hierarkis antara kelas.<br>
2. Polymorphism<br>
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode overriding di kelas turunan. Dengan ini, objek dapat
diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan.<br>
3. Encapsulation<br>
Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya
membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal
tetap aman dari perubahan tak terduga.<br>
4. Abstraction<br>
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai
dengan menggunakan kelas abstrak atau antarmuka.<br>

### Instruksi Kerja
1. Inheritance<br>
o Buat kelas Person dengan atribut name dan metode getName().<br>
##### codingan untuk membuat class person
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class bernama person
class Person {
    //perintah untuk membuat atribut dengan hak akses protected
    protected $name;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name){
        //inisialisasi atribut name
        $this->name = $name;
    }

    //perintah untuk membuat method getter yang dimana berfungsi untuk mengakses atribut yang bersifat protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }
}
?>
```
o Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID
serta metode getStudentID().<br>
##### codingan untuk membuat class student yang mewarisi person dan menambahkan atribut
```php
<?php
//perintah untuk membuat class turunan student dari person
class Student extends Person{
    //perintah untuk menambahkan atribut studentID 
    public $studentID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $studentID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->studentID = $studentID;
    }

    //perintah untuk membuat method getter untuk mengakses atribut
    public function getStudentID(){
        //mengembalikan nilai
        return $this->studentID;
    }
}
?>
```
##### perintah untuk instansiasi objek dan menampilkan
```php
<?php
//intansiasi objek dari class student
$student1 = new Student("Windy", "12334566");
//peerintah untuk menampilkan nama dan ID menggunakan metode yang sudah sesuai dan yang sudag tadi dibuat
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
?>
```
##### codingan secara menyeluruhan inheritance 
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class bernama person
class Person {
    //perintah untuk membuat atribut dengan hak akses protected
    protected $name;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name){
        //inisialisasi atribut name
        $this->name = $name;
    }

    //perintah untuk membuat method getter yang dimana berfungsi untuk mengakses atribut yang bersifat protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }
}

//perintah untuk membuat class turunan student dari person
class Student extends Person{
    //perintah untuk menambahkan atribut studentID 
    public $studentID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $studentID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->studentID = $studentID;
    }

    //perintah untuk membuat method getter untuk menggakse atribut
    public function getStudentID(){
        //mengembalikan nilai
        return $this->studentID;
    }
}

//intansiasi objek dari class student
$student1 = new Student("Windy", "12334566");
//peerintah untuk menampilkan nama dan ID menggunakan metode yang sudah sesuai dan yang sudag tadi dibuat
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
?>
```
##### Hasil Output
![24](https://github.com/user-attachments/assets/eaccf2a4-8593-439c-99a3-d65f04c841da)
hasil output di atas menunjukan bahwa telah berhasil melakukan inheritance

2. Polymorphism<br>
o Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut
teacherID.<br>
##### codingan membuat class teacher
```php
<?php
//perintah untuk membuat class turunan teacher dari person
class Teacher extends Person{
    //perintah untuk menambahkan atribut teacherID
    public $teacherID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $teacherID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->teacherID = $teacherID;
    }

}
?>
```
o Override metode getName() di kelas Student dan Teacher untuk menampilkan
format berbeda.<br>
###### a. codingan getName() di class student
```php
<?php
//perintah untuk membuat method getName untuk tujuan override
    public function getName(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama  $this->name";
    }
?>
```
###### b. codingan seluruh class student setelah ditambahkan getName()
```php
<?php
//perintah untuk membuat class turunan student dari person
class Student extends Person{
    //perintah untuk menambahkan atribut studentID
    public $studentID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $studentID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->studentID = $studentID;
    }

    //perintah untuk membuat method getter untuk menggakse atribut
    public function getStudentID(){
        //mengembalikan nilai
        return $this->studentID;
    }

    //perintah untuk membuat method getName untuk tujuan override
    public function getName(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama  $this->name";
    }

}
?>
```

###### c. codingan getName() di class teacher
```php
<?php
//perintah untuk membuat method getName untuk tujuan override
    public function getName(){
        //mengembalikan nilai
        return "Guru ini bernama  $this->name";
    }
?>
```

###### d. codingan seluruh class teacher setelah ditambahkan getName()
```php
<?php
//perintah untuk membuat class turunan teacher dari person
class Teacher extends Person{
    //perintah untuk menambahkan atribut teacherID
    public $teacherID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $teacherID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->teacherID = $teacherID;
    }

     //perintah untuk membuat method getName untuk tujuan override
    public function getName(){
        //mengembalikan nilai
        return "Guru ini bernama  $this->name";
    }

}
?>
```
##### Instansiasi Objek dan Menampilkan data
```php
<?php
//instansiasi objek dari class student
$student1 = new Student("Windy", "12334566");

//menampilkan nama dan id denggan menggunakan method getName dan getStudentID
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
echo "<br>";

//instansiasi objek dari class teacher
$teacher1 = new Teacher("Amanda", "5433211");

//menampilkan nama denggan menggunakan method getName
echo $teacher1->getName();
?>
```
###### Codingan seluruhnya steelah melalukan Polymotrphism
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class bernama person
class Person {
    //perintah untuk membuat atribut dengan hak akses protected
    protected $name;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name){
        $this->name = $name;
    }

     //perintah untuk membuat method getter yang dimana berfungsi untuk mengakses atribut yang bersifat protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }
}
//perintah untuk membuat class turunan student dari person
class Student extends Person{
    //perintah untuk menambahkan atribut studentID
    public $studentID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $studentID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->studentID = $studentID;
    }

    //perintah untuk membuat method getter untuk menggakse atribut
    public function getStudentID(){
        //mengembalikan nilai
        return $this->studentID;
    }

    //perintah untuk membuat method getName untuk tujuan override
    public function getName(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama  $this->name";
    }

}

//perintah untuk membuat class turunan teacher dari person
class Teacher extends Person{
    //perintah untuk menambahkan atribut teacherID
    public $teacherID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $teacherID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->teacherID = $teacherID;
    }

     //perintah untuk membuat method getName untuk tujuan override
    public function getName(){
        //mengembalikan nilai
        return "Guru ini bernama  $this->name";
    }

}

//instansiasi objek dari class student
$student1 = new Student("Windy", "12334566");

//menampilkan nama dan id denggan menggunakan method getName dan getStudentID
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
echo "<br>";

//instansiasi objek dari class teacher
$teacher1 = new Teacher("Amanda", "5433211");

//menampilkan nama denggan menggunakan method getName
echo $teacher1->getName();
?>
```

##### Hasil Output
![25](https://github.com/user-attachments/assets/8cfb105d-cd8e-4ae6-bee3-0d16acb4ee69)
Hasil Output di atas berhasil setelah melakuakn polymorphism

3. Encapsulation<br>
o Ubah atribut name dan studentID dalam kelas Student menjadi private.<br>
##### codingan stelah atribut studentID menjadi private
```php
<?php
//perintah untuk membuat class turunan student dari person
class Student extends Person{
    //perintah untuk menambahkan atribut studentID
    private $studentID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $studentID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->studentID = $studentID;
    }

    //perintah untuk membuat method getter untuk menggakse atribut
    public function getStudentID(){
        //mengembalikan nilai
        return $this->studentID;
    }
     //perintah untuk membuat method getName untuk tujuan override
     public function getName(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama  $this->name";
    }
}

?>
```
o Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.<br>
##### codingan menambahkan getter setter
```php
<?php
//perintah untuk membuat method getter untuk menggakse atribut
    public function getStudentID(){
        //mengembalikan nilai
        return $this->studentID;
    }

    //perintah untuk mengubah atau mengatur nilai pada atribut
    public function setStudentID($studentID_baru){
    $this->studentID = $studentID_baru;
    return "ID nya diganti $this->studentID";
    }
    

     //perintah untuk membuat method getName untuk tujuan override
     public function getName(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama  $this->name";
    }

    //perintah untuk mengubah atau mengatur nilai pada atribut
    public function setName($name_baru){
        $this->name = $name_baru;
        return "Namanya diganti $this->name";
    }
?>
```
##### instansiasi dan tampil data
```php
<?php
//perintah untuk instansiasi objek baru dari class student
$student1 = new Student("Windy", "12334566");
//perintah untuk menampilkan nama dan ID menggunakan metode yang sudah sesuai dan yang sudag tadi dibuat
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
echo "<br>";

//perintah memanggilkan method setter name untuk mengganti nilai pada atribut name
echo $student1->setName("Putri");
echo "<br>";

//perintah memanggilkan method setter studentID untuk mengganti nilai pada atribut studentsID
echo $student1->setStudentID("111111111");
echo "<br>";

//perintah untuk menampilkan nama dan id setelah diubah
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
echo "<br>";
?>
```

##### codingan seluruhnya setelah selesai melakukan encapsulation
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class bernama person
class Person {
    //perintah untuk membuat atribut dengan hak akses protected
    protected $name;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name){
        $this->name = $name;
    }

     //perintah untuk membuat method getter yang dimana berfungsi untuk mengakses atribut yang bersifat protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }
}

//perintah untuk membuat class turunan student dari person
class Student extends Person{
    //perintah untuk menambahkan atribut studentID
    private $studentID;

    //perintah membuat method construct untuk menginisialisasi atribut saat instansiasi objek
    public function __construct($name, $studentID){
        //perintah untuk memanggil constructor yang ada di class induk
        parent::__construct($name);
        //inisialisasi atribut
        $this->studentID = $studentID;
    }

    //perintah untuk membuat method getter untuk menggakse atribut
    public function getStudentID(){
        //mengembalikan nilai
        return $this->studentID;
    }

    //perintah untuk mengubah atau mengatur nilai pada atribut
    public function setStudentID($studentID_baru){
    $this->studentID = $studentID_baru;
    return "ID nya diganti $this->studentID";
    }
    

     //perintah untuk membuat method getName untuk tujuan override
     public function getName(){
        //mengembalikan nilai
        return "Mahasiswa ini bernama  $this->name";
    }

    //perintah untuk mengubah atau mengatur nilai pada atribut
    public function setName($name_baru){
        $this->name = $name_baru;
        return "Namanya diganti $this->name";
    }
}

//perintah untuk instansiasi objek baru dari class student
$student1 = new Student("Windy", "12334566");
//perintah untuk menampilkan nama dan ID menggunakan metode yang sudah sesuai dan yang sudag tadi dibuat
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
echo "<br>";

//perintah memanggilkan method setter name untuk mengganti nilai pada atribut name
echo $student1->setName("Putri");
echo "<br>";

//perintah memanggilkan method setter studentID untuk mengganti nilai pada atribut studentsID
echo $student1->setStudentID("111111111");
echo "<br>";

//perintah untuk menampilkan nama dan id setelah diubah
echo $student1->getName(). " Mempunyai ID " . $student1->getStudentID();
echo "<br>";
?>
```
##### Hasil Output
![26](https://github.com/user-attachments/assets/caa794f7-b1af-4f5b-9f89-671ef79c7c77)

4. Abstraction<br>
o Buat kelas abstrak Course dengan metode abstrak getCourseDetails().<br>
##### codingan class abstract course
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuka atau mendefinisikan class abstract course
abstract class Course {
    //perintah membuat method absctract yang harus diimplementasikan oleh semua class turunan
    abstract public function getCourseDetails();
}
?>
```
o Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda.<br>
##### codingan penerapan getcoursedetails()
###### a. class onlinecourse
```php
<?php
//perintah membuat class onlinecourse yang merupakan class turunan dari course
class OnlineCourse extends Course{
    //perintah untuk mengimplemntasikan getcoutrsedetails() dengan cara yang berbeda
    public function getCourseDetails(){
        //mengembalikan nilai
        return "Course ini dilaksanakan secara Online";
    }
}
?>
```
###### b. class offlinecourse
```php
<?php
//perintah membuat class offlinecourse yang merupakan class turunan dari course
class OfflineCourse extends Course{
    //perintah untuk mengimplemntasikan getcoutrsedetails() dengan cara yang berbeda
    public function getCourseDetails(){
        //mengembalikan nilai
        return "Course ini dilaksanakan secara Offline";
    }
}
?>
```
###### c. instansiasi objek
```php
<?php
//instasiasi objek dari class onlinecourse 
$tampil1 = new OnlineCourse();

//memaggil dan menampilkan method getcoursedetails()
echo "OnlineCourse : " . $tampil1->getCourseDetails();
echo "<br>";

//instasiasi objek dari class onfflinecourse 
$tampil2 = new OfflineCourse();
//memaggil dan menampilkan method getcoursedetails()
echo "OfflineCourse : " . $tampil2->getCourseDetails();
?>
```

###### d. codingan secara keseluruhan
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuka atau mendefinisikan class abstract course
abstract class Course {
    //perintah membuat method absctract yang harus diimplementasikan oleh semua class turunan
    abstract public function getCourseDetails();
}

//perintah membuat class onlinecourse yang merupakan class turunan dari course
class OnlineCourse extends Course{
    //perintah untuk mengimplemntasikan getcoutrsedetails() dengan cara yang berbeda
    public function getCourseDetails(){
        //mengembalikan nilai
        return "Course ini dilaksanakan secara Online";
    }
}

//perintah membuat class offlinecourse yang merupakan class turunan dari course
class OfflineCourse extends Course{
    //perintah untuk mengimplemntasikan getcoutrsedetails() dengan cara yang berbeda
    public function getCourseDetails(){
        //mengembalikan nilai
        return "Course ini dilaksanakan secara Offline";
    }
}

//instasiasi objek dari class onlinecourse 
$tampil1 = new OnlineCourse();

//memaggil dan menampilkan method getcoursedetails()
echo "OnlineCourse : " . $tampil1->getCourseDetails();
echo "<br>";

//instasiasi objek dari class onfflinecourse 
$tampil2 = new OfflineCourse();
//memaggil dan menampilkan method getcoursedetails()
echo "OfflineCourse : " . $tampil2->getCourseDetails();
?>
```

###### Hasil Output
![27](https://github.com/user-attachments/assets/72f5a945-6e51-4b22-81a0-1c239ff457d8)

### TUGAS JOBSHEET3
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.<br>
##### codingan class person
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class
class Person {
    //perointah untuk membuat atribut name dengan hak akses protected
    protected $name;

    //perintah untuk membuat method construct untuk menginisialisasi atribut
    public function __construct($name){
        //inisialisasi atribut
        $this->name = $name;
    }

    //perintah membuat method getter untuk mengakses atribut dengan hak akses protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }
}
?>
```
2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.<br>
##### inheritance
###### a. class dosen 
```php
<?php
//perintah untuk membbuat class dosen dengan menjadi turunan dari class person
class Dosen extends Person{
    //membuat atribut dengan hak akses public
    public $nidn;

    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nidn){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nidn = $nidn;
    }
}
?>
```
###### b. class mahasiswa
```php
<?php
//perintah untuk membbuat class mahasiswa dengan menjadi turunan dari class person
class Mahasiswa extends Person{
    //membuat atribut dengan hak akses public
    public $nim;

    
    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nim){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nim = $nim;
    }
}
?>
```
###### c. codingan keseluruhan setelah menngunakan inheritance
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class
class Person {
    //perointah untuk membuat atribut name dengan hak akses protected
    protected $name;

    //perintah untuk membuat method construct untuk menginisialisasi atribut
    public function __construct($name){
        //inisialisasi atribut
        $this->name = $name;
    }

    //perintah membuat method getter untuk mengakses atribut dengan hak akses protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }
}

//perintah untuk membbuat class dosen dengan menjadi turunan dari class person
class Dosen extends Person{
    //membuat atribut dengan hak akses public
    public $nidn;

    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nidn){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nidn = $nidn;
    }
}
//perintah untuk membbuat class mahasiswa dengan menjadi turunan dari class person
class Mahasiswa extends Person{
    //membuat atribut dengan hak akses public
    public $nim;

    
    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nim){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nim = $nim;
    }
}
?>
```
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang
berbeda.<br>
##### menerapkan polymorphism
###### a. class person
```php
<?php
//perintah membuat metode getRole()
    public function getRole(){
        //mengembalikan nilai
        return "Role ini ";
    }
?>
```
###### b. class dosen
```php
<?php
  //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Dosen, yang bernama $this->name memiliki nidn $this->nidn";
    }
?>
```
###### c. class mahasiswa
```php
<?php
 //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Mahasiswa, yang bernama $this->name memilik nim $this->nim";
    }
?>
```
##### Coding keseluruhan setelah menerapkan Polymorphism
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class
class Person {
    //perointah untuk membuat atribut name dengan hak akses protected
    protected $name;

    //perintah untuk membuat method construct untuk menginisialisasi atribut
    public function __construct($name){
        //inisialisasi atribut
        $this->name = $name;
    }

    //perintah membuat method getter untuk mengakses atribut dengan hak akses protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }

    //perintah membuat metode getRole()
    public function getRole(){
        //mengembalikan nilai
        return "Role ini ";
    }
}

//perintah untuk membbuat class dosen dengan menjadi turunan dari class person
class Dosen extends Person{
    //membuat atribut dengan hak akses public
    public $nidn;

    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nidn){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nidn = $nidn;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Dosen, yang bernama $this->name memiliki nidn $this->nidn";
    }
}
//perintah untuk membbuat class mahasiswa dengan menjadi turunan dari class person
class Mahasiswa extends Person{
    //membuat atribut dengan hak akses public
    public $nim;

    
    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nim){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nim = $nim;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Mahasiswa, yang bernama $this->name memilik nim $this->nim";
    }
}
?>
```

4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di
kelas Mahasiswa.<br>
##### encapsulation
###### a. class dosen
langkah yang pertama, yaitu ubah hak akses atribut nidn menjadi private
langkah kedua, yaitu buat methode getter
```php
<?php
//perintah untuk membbuat class dosen dengan menjadi turunan dari class person
class Dosen extends Person{
    //membuat atribut dengan hak akses public
    private $nidn;

    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nidn){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nidn = $nidn;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Dosen, yang bernama $this->name memiliki nidn $this->nidn";
    }

    //perintah untuk membuat method getter untuk mengakses atribut private
    public function getNidn(){
        //mengembalikan nilai
        return $this->nidn;
    }
}
?>
```

###### b. class mahasiswa
langkah yang pertama, yaitu ubah hak akses atribut nim menjadi private
langkah kedua, yaitu buat methode getter
```php
<?php
//perintah untuk membbuat class mahasiswa dengan menjadi turunan dari class person
class Mahasiswa extends Person{
    //membuat atribut dengan hak akses public
    public $nim;

    
    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nim){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nim = $nim;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Mahasiswa, yang bernama $this->name memilik nim $this->nim";
    }

     //perintah untuk membuat method getter untuk mengakses atribut private
    public function getNim(){
        //mengembalikan nilai
        return $this->nim;
    }
}
?>
```
##### instansiasi objek
###### 1. class dosen
```php
<?php
//perintah untuk membuat objek dari class dosen
$dosen1 = new Dosen("Windy", "123456");
//perintah untuk memanggil method getter name 
echo "Dosen ini bernama " . $dosen1->getName();
echo "<br>";
//perintah untuk memanggil method getter nidn
echo "Dosen ini memiliki Nidn " . $dosen1->getNidn();
echo "<br>";
//perintah untuk memanggil method getter role
echo $dosen1->getRole();
echo "<br><hr>";
?>
```
hasil output di atas mencangkup:
- nama : inheritance
- nidn : encapsulation
- role : polymorphism
###### 2. class mahasiswa
```php
<?php
//perintah untuk membuat objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa("Amanda", "200920");
//perintah untuk memanggil method getter name 
echo "Mahasiswa ini bernama " . $mahasiswa1->getName();
echo "<br>";
//perintah untuk memanggil method getter nim
echo "Mahasiswa ini memiliki Nim " . $mahasiswa1->getNim();
echo "<br>";
//perintah untuk memanggil method getter role
echo $mahasiswa1->getRole();
echo "<br><hr><hr>";
?>
```
hasil output di atas mencangkup:
- nama : inheritance
- nim : encapsulation
- role : polymorphism

##### coding seluruh setelah melakukan inheritance, polymorphis dan encapsulation
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class
class Person {
    //perointah untuk membuat atribut name dengan hak akses protected
    protected $name;

    //perintah untuk membuat method construct untuk menginisialisasi atribut
    public function __construct($name){
        //inisialisasi atribut
        $this->name = $name;
    }

    //perintah membuat method getter untuk mengakses atribut dengan hak akses protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }

    //perintah membuat metode getRole()
    public function getRole(){
        //mengembalikan nilai
        return "Role ini ";
    }
}

//perintah untuk membbuat class dosen dengan menjadi turunan dari class person
class Dosen extends Person{
    //membuat atribut dengan hak akses public
    private $nidn;

    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nidn){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nidn = $nidn;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Dosen, yang bernama $this->name memiliki nidn $this->nidn";
    }

    //perintah untuk membuat method getter untuk mengakses atribut private
    public function getNidn(){
        //mengembalikan nilai
        return $this->nidn;
    }
}
//perintah untuk membbuat class mahasiswa dengan menjadi turunan dari class person
class Mahasiswa extends Person{
    //membuat atribut dengan hak akses public
    public $nim;

    
    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nim){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nim = $nim;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Mahasiswa, yang bernama $this->name memilik nim $this->nim";
    }

     //perintah untuk membuat method getter untuk mengakses atribut private
    public function getNim(){
        //mengembalikan nilai
        return $this->nim;
    }
}
//perintah untuk membuat objek dari class dosen
$dosen1 = new Dosen("Windy", "123456");
//perintah untuk memanggil method getter name 
echo "Dosen ini bernama " . $dosen1->getName();
echo "<br>";
//perintah untuk memanggil method getter nidn
echo "Dosen ini memiliki Nidn " . $dosen1->getNidn();
echo "<br>";
//perintah untuk memanggil method getter role
echo $dosen1->getRole();
echo "<br><hr>";

//perintah untuk membuat objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa("Amanda", "200920");
//perintah untuk memanggil method getter name 
echo "Mahasiswa ini bernama " . $mahasiswa1->getName();
echo "<br>";
//perintah untuk memanggil method getter nim
echo "Mahasiswa ini memiliki Nim " . $mahasiswa1->getNim();
echo "<br>";
//perintah untuk memanggil method getter role
echo $mahasiswa1->getRole();
echo "<br><hr><hr>";
?>
```

##### Hasil Output
![28](https://github.com/user-attachments/assets/3b9ce721-a5bf-4189-885a-ed165ca99bcd)


5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal.<br>
##### codingan membuat class abstract jurnal, class jurnaldosen extend jurnal, class jurnal mahasiswa extends jurnal dan instansiasi
```php
<?php
//perintah untuk membuka atau mendefinisikan class abstract jurnal
abstract class Jurnal {
    //perintah membuat method absctract yang harus diimplementasikan oleh semua class turunan
    abstract public function pengajuanJurnal();
}

//perintah membuat class jurnaldosen yang merupakan class turunan dari jurnal
class JurnalDosen extends Jurnal{
    //perintah untuk mengimplemntasikan pengajuanjurnal() dengan cara yang berbeda
    public function pengajuanJurnal(){
        return "Pengajuan Jurnal ini dilakukan oleh Dosen";
    }
}

//perintah membuat class jurnalmahasiswa yang merupakan class turunan dari jurnal
class JurnalMahasiswa extends Jurnal{
    //perintah untuk mengimplemntasikan pengajuanjurnal() dengan cara yang berbeda
    public function pengajuanJurnal(){
        return "Pengajuan Jurnal ini dilakukan oleh Mahasiswa";
    }
}

//instasiasi objek dari class jurnaldosen 
$jurnal1 = new JurnalDosen();
//memanggil dan menampilkan method pengajuanjurnal()
echo "Jurnal Dosen :".$jurnal1->pengajuanJurnal();
echo "<br>";

//instasiasi objek dari class jurnaldosen 
$jurnal2 = new JurnalMahasiswa();
//memanggil dan menampilkan method pengajuanjurnal()
echo "Jurnal Mahasiswa :" .$jurnal2->pengajuanJurnal();
echo "<br>";
?>
```
##### Hasil Output
![29](https://github.com/user-attachments/assets/192ab26e-de8e-45a8-8733-ebeee811515e)

##### codingan seluruh tugas dari jobsheet3
```php
<?php
//perintah untuk membuka perintah php
//perintah untuk membuat class
class Person {
    //perointah untuk membuat atribut name dengan hak akses protected
    protected $name;

    //perintah untuk membuat method construct untuk menginisialisasi atribut
    public function __construct($name){
        //inisialisasi atribut
        $this->name = $name;
    }

    //perintah membuat method getter untuk mengakses atribut dengan hak akses protected
    public function getName(){
        //mengembalikan nilai
        return $this->name;
    }

    //perintah membuat metode getRole()
    public function getRole(){
        //mengembalikan nilai
        return "Role ini ";
    }
}

//perintah untuk membbuat class dosen dengan menjadi turunan dari class person
class Dosen extends Person{
    //membuat atribut dengan hak akses public
    private $nidn;

    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nidn){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nidn = $nidn;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Dosen, yang bernama $this->name memiliki nidn $this->nidn";
    }

    //perintah untuk membuat method getter untuk mengakses atribut private
    public function getNidn(){
        //mengembalikan nilai
        return $this->nidn;
    }
}
//perintah untuk membbuat class mahasiswa dengan menjadi turunan dari class person
class Mahasiswa extends Person{
    //membuat atribut dengan hak akses public
    public $nim;

    
    //perintah untuk membuat method construc untuk menginisialisaisi atribut
    public function __construct($name, $nim){
        //perintah untuk memanggil method construct yang ada di class induk (class person)
        parent::__construct($name);
        //perintah untuk inisialisasi atribut
        $this->nim = $nim;
    }

    //perintah untuk mengimplementasikan getRole() dengan cara yang berbeda
    public function getRole(){
        return "Role ini adalah Mahasiswa, yang bernama $this->name memilik nim $this->nim";
    }

     //perintah untuk membuat method getter untuk mengakses atribut private
    public function getNim(){
        //mengembalikan nilai
        return $this->nim;
    }
}
//perintah untuk membuat objek dari class dosen
$dosen1 = new Dosen("Windy", "123456");
//perintah untuk memanggil method getter name 
echo "Dosen ini bernama " . $dosen1->getName();
echo "<br>";
//perintah untuk memanggil method getter nidn
echo "Dosen ini memiliki Nidn " . $dosen1->getNidn();
echo "<br>";
//perintah untuk memanggil method getter role
echo $dosen1->getRole();
echo "<br><hr>";

//perintah untuk membuat objek dari class mahasiswa
$mahasiswa1 = new Mahasiswa("Amanda", "200920");
//perintah untuk memanggil method getter name 
echo "Mahasiswa ini bernama " . $mahasiswa1->getName();
echo "<br>";
//perintah untuk memanggil method getter nim
echo "Mahasiswa ini memiliki Nim " . $mahasiswa1->getNim();
echo "<br>";
//perintah untuk memanggil method getter role
echo $mahasiswa1->getRole();
echo "<br><hr><hr>";

//perintah untuk membuka atau mendefinisikan class abstract jurnal
abstract class Jurnal {
    //perintah membuat method absctract yang harus diimplementasikan oleh semua class turunan
    abstract public function pengajuanJurnal();
}

//perintah membuat class jurnaldosen yang merupakan class turunan dari jurnal
class JurnalDosen extends Jurnal{
    //perintah untuk mengimplemntasikan pengajuanjurnal() dengan cara yang berbeda
    public function pengajuanJurnal(){
        return "Pengajuan Jurnal ini dilakukan oleh Dosen";
    }
}

//perintah membuat class jurnalmahasiswa yang merupakan class turunan dari jurnal
class JurnalMahasiswa extends Jurnal{
    //perintah untuk mengimplemntasikan pengajuanjurnal() dengan cara yang berbeda
    public function pengajuanJurnal(){
        return "Pengajuan Jurnal ini dilakukan oleh Mahasiswa";
    }
}

//instasiasi objek dari class jurnaldosen 
$jurnal1 = new JurnalDosen();
//memanggil dan menampilkan method pengajuanjurnal()
echo "Jurnal Dosen :".$jurnal1->pengajuanJurnal();
echo "<br>";

//instasiasi objek dari class jurnaldosen 
$jurnal2 = new JurnalMahasiswa();
//memanggil dan menampilkan method pengajuanjurnal()
echo "Jurnal Mahasiswa :" .$jurnal2->pengajuanJurnal();
echo "<br>";
?>
```
##### Hasil Output
![30](https://github.com/user-attachments/assets/a6cbfa89-14aa-4fe4-b1fd-5969936b3c6e)
