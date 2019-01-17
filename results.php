<?php
    include "class.php";

    $nrofApe = $_POST['apes'];
    $nrofGiraff = $_POST['girafs'];
    $nrofTiger = $_POST['tiger'];
    $nrofCoco = $_POST['coconuts'];

    for($i = 0; $i < $nrofApe; $i++){
        $Animal1 = new ap("Apa");
        echo $Animal1->GetImage()."<br>";
    }

    for($i = 0; $i < $nrofGiraff; $i++){
        $Animal2 = new giraff("Giraff");
        echo $Animal2->GetImage()." ".$Animal2-> MakeSound() ." ". $Animal2->get_name()." ".$_POST["girafs"]."<br>";

    }

    for($i = 0; $i < $nrofTiger; $i++){
        $Animal3 = new tiger("Tiger");
        echo $Animal3->GetImage()." ".$Animal3->MakeSound() ." ". $Animal3->get_name()." ".$_POST["tiger"]."<br>";

    }

    for($i = 0; $i < $nrofCoco; $i++){
        $Food1 = new coconuts("Kokosnöt");
        echo $Food1->GetImage()." ".$Food1->get_food()." ".$_POST["coconuts"]."<br>";

    }


        

?>