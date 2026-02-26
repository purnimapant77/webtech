<?php
class Student{
    public $name;
    public $address;
    public function __construct($name,$address){
        $this->name=$name;
        $this->address=$address;
    }
    public function display(){
        echo "Name: ". $this->name ."<br>";
        echo "Address: ". $this->address  ."<br>";
    }
}

$student1= new Student("ouluu","Dhangadhi");
$student1->display();
?>