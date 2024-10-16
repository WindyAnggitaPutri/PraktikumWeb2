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