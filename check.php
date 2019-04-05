<?php
    
        if(isset($_SESSION['animalskingdom'])){
            redirect("./results.php");
        }else {
            redirect("./settings.php");
        }
?>