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
               print "Whooo WHoo";  
            }

            public function GetImage(){
               print "<img src='ape1.jpg'>"; 
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
                print "sahhee sahe";  
             }

             public function GetImage(){
                echo "<img src='giraffe1.jpg'>"; 
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
                print "aahhwwre";  
             }

             public function GetImage(){
                echo "<img src='tiger1.jpg'>"; 
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
                print "Supperrgoood";  
             }
             public function GetImage(){
                echo "<img src='coconut1.jpg'>"; 
             }

            
        }


        
        
        
        
        

    ?>