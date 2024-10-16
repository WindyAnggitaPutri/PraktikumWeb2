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