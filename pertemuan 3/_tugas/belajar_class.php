<?php
    
    require './belajar_function.php';
    
    // class diibaratkan sebuah tamplate
    class User {
        public $name;
        private $gender = "male";

        // method adalah fungsi yang ada didalam sebuah kelas
        // fungsi dapat digunakan secara global
        public function setGender() {
            $this->gender = $gender_name;
        }
        
        public function getGender() {
            printNumA();
            return $this->gender;
        }
        // salah satu mengambil value properti privat adalah dengan getter


    
    }
$ivan = new User;
$ivan->name ="Ivanri";
$ivan->Setgender("Male");
echo(ivan->getGender());

?>