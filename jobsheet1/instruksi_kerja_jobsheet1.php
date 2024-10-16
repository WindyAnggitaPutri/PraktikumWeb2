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

//Menampilkan bagian nim yang telah diubah menggunakan metode setter
echo $mahasiswa1->setNim("250102072");
echo "<br><br>";

//Menampilkan data mahasiswa setelah jurusan dan nimnya diubah
echo $mahasiswa1->tampilkanData();
?>