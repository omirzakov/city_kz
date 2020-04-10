<?php
    class Student {
        public $name;
        public $sname;
        public $gpa;

        function __construct($name, $sname, $gpa) {
            this->name = $name;
            this->sname = $sname;
            this->gpa = $gpa;
        }

        function getInfo() {
            echo "Имя: $this->name; <br> Возраст: $this->sname <br>";
        }
    }


    $user = new Student("Madiyar", "Umirzakov", 3.5);

    $user->getInfo();
    print_r($user);
?>