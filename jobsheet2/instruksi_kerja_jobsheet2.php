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
//perintah untuk instansiasi objek dari class dosen
$dosen1 = new Dosen("Taylor", "Bahasa Inggris");

//perintah untuk mengakses atau mengambil nilai dari atribut matakuliah
echo $dosen1->getMataKuliah();
echo "<br>";

//perintah untuk menampilkan data dosen dengan memanggil method tampilDataDosen()
echo $dosen1->tampilDataDosen();
echo "<br><hr>";

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