<?php
        abstract class Animal{
            abstract function GetImage();
            abstract function MakeSound();

        }

        class Ap extends Animal {
            private $animalName;
            function __construct($animalName){
            $this->animalName = $animalName;  
            }

            public function get_name(){
                return $this->animalName;
            }
                
            public function MakeSound(){
                return "Whooo WHoo";
            }

            public function GetImage(){
               print "<img src='ape1.jpg' class='theApSound' height='200px' width='200px'>"; 
            }
        }

        class giraff extends Animal{
            private $animalName;
            function __construct($animalName){
            $this->animalName = $animalName;
            }

            public function get_name(){
                return $this->animalName;
            }

            public function MakeSound(){
                return "sahhee sahe";  
             }

             public function GetImage(){
                print "<img src='giraffe1.jpg' class='theGirafSound' height='200px' width='200px'>"; 
             }
        }

        class tiger extends Animal{
            private $animalName;
            function __construct($animalName){
            $this->animalName = $animalName;
            }

            public function get_name(){
                return $this->animalName;
            }

            public function MakeSound(){
                return "aahhwwre";  
             }

             public function GetImage(){
                print "<img src='tiger1.jpg' class='theTigerSound' height='200px' width='200px'>"; 
             }
        }
    

        class coconuts extends Animal{
            private $animalName;
            function __construct($animalName){
            $this->animalName = $animalName;
            }

            public function get_food(){
                return $this->animalName;
            }

            public function MakeSound(){
                return "Supperrgoood";  
             }
             public function GetImage(){
                print "<img src='coconut1.jpg' class='theCoconutSound' height='200px' width='200px'>"; 
             }

            
        }

       
        
        
        
        
        

    ?>