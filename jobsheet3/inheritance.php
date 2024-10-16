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

    //perintah untuk membuat method getter untuk mengakses atribut
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


