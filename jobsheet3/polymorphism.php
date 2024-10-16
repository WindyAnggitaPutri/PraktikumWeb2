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


