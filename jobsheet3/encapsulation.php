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