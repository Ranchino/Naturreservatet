<?php
        abstract class Animal{
            abstract protected function MakeSound();
            public $name;
            public $imageUrl;
            public function __construct() {
                $randListName = array("Ninja", "Unicorn", "Rainbow", "Bunny", "Captain", "Cupcake", "Glitter", "Exorcism", "Dragon", "Jellybean", "Snake", "Doll", "Bush", "Cookie", "Ice cream", "Kazoo");
                $this->name = $randListName[array_rand($randListName)];
            }
            public function onClickCode() {
                $text = 'alert("';
                $text .= $this->name;
                $text .= " säger: ";
                $text .= $this->MakeSound();
                $text .= '");';
                return $text;
            }
            public function echoImage() {
                echo "<img style='max-width:25em;' src='".$this->imageUrl."' onClick='".$this->onClickCode()."'/><br>";
            }

        }

        class Ap extends Animal {
            
            function __construct($imageUrl) {
                parent::__construct();
                $this->imageUrl = $imageUrl;
            }
                
            function MakeSound(){
                return "Whooo WHoo";
            }
        }

        class giraff extends Animal{
            
            function __construct($imageUrl) {
                parent::__construct();
                $this->imageUrl = $imageUrl;
            }

            public function MakeSound(){
                return "sahhee sahe";  
             }
        }

        class tiger extends Animal{
            
            function __construct($imageUrl) {
                parent::__construct();
                $this->imageUrl = $imageUrl;
            }

            public function MakeSound(){
                return "rraaaawwww";  
             }

        }
    

        class coconuts extends Animal{
        

            function __construct($imageUrl) {
                parent::__construct();
                $this->imageUrl = $imageUrl;
            }

            public function MakeSound(){
                return "suupperrNajs";  
             }
            
        }   
        

    ?>