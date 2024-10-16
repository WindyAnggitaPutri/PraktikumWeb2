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