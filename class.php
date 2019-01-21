<?php
        abstract class Animal{
            abstract function GetImage();
            abstract function MakeSound();

            public function __construct() {
                $randListName = array("ninja", "unicorn", "rainbows", "bunny", "captain", "cupcake", "glitter", "exorcism", "dragon", "jellybeans", "snakes", "dolls", "bushes", "cookies", "ice cream", "kazoo");
                $name = $randListName;
                $this->name = $name[array_rand($name)];
            }

        }

        class Ap extends Animal {

            public function get_name(){
                return $this->name;
            }
                
            public function MakeSound(){
                return "Whooo WHoo";
            }

            public function GetImage(){
               print "<img src='ape1.jpg' class='theApSound' height='200px' width='200px'>"; 
            }
        }

        class giraff extends Animal{
            

            public function get_name(){
                return $this->name;
            }

            public function MakeSound(){
                return "sahhee sahe";  
             }

             public function GetImage(){
                print "<img src='giraffe1.jpg' class='theGirafSound' height='200px' width='200px'>"; 
             }
        }

        class tiger extends Animal{
            

            public function get_name(){
                return $this->name;
            }

            public function MakeSound(){
                return "aahhwwre";  
             }

             public function GetImage(){
                print "<img src='tiger1.jpg' class='theTigerSound' height='200px' width='200px'>"; 
             }
        }
    

        class coconuts extends Animal{
        

            public function get_food(){
                return $this->name;
            }

            public function MakeSound(){
                return "Supperrgoood";  
             }
             public function GetImage(){
                print "<img src='coconut1.jpg' class='theCoconutSound' height='200px' width='200px'>"; 
             }

            
        }   
        

    ?>