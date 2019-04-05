<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<?php
    session_start();
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['apes']) || isset($_POST['girafs']) || isset($_POST['tiger']) || isset($_POST['coconuts'])) {
            
            include "class.php";
            
            $nrofApe = $_POST['apes'];
            $nrofGiraff = $_POST['girafs'];
            $nrofTiger = $_POST['tiger'];
            $nrofCoco = $_POST['coconuts'];
            
            $animalArray = array();
            
            
            for($i = 0; $i < $nrofApe; $i++){
                $Animal1 = new ap("ape1.jpg");
                $Animal1->echoImage();
                echo $Animal1->name . " " . $Animal1->MakeSound() . '<br><br>';
                array_push($animalArray, $Animal1);
                
            }
            
            for($i = 0; $i < $nrofGiraff; $i++){
                $Animal2 = new giraff("giraffe1.jpg");
                $Animal2->echoImage();
                echo $Animal2->name . " " . $Animal2->MakeSound() . '<br><br>';
                array_push($animalArray, $Animal2);
                
            }
            
            for($i = 0; $i < $nrofTiger; $i++){
                $Animal3 = new tiger("tiger1.jpg");
                $Animal3->echoImage();
                echo $Animal3->name . " " . $Animal3->MakeSound() . '<br><br>';
                array_push($animalArray, $Animal3);
                
            }
            
            for($i = 0; $i < $nrofCoco; $i++){
                $Food1 = new coconuts("coconut1.jpg");
                $Food1->echoImage();
                echo $Food1->name . " " . $Food1->MakeSound() . '<br><br>';
                array_push($animalArray, $Food1);
                
            } 

            //$_SESSION["animalskingdom"] = $animalArray;
            
            if(!isset($_SESSION['animalskingdom'])) {
                $_SESSION['animalskingdom'];
                echo true;
            }else{
                echo false;
            }
            
            $_SESSION["animalskingdom"] = serialize($animalArray);

            echo $_SESSION["animalskingdom"];
            
        } else {
            echo "POST INTE SATT!";
        }
    } else {
        include "class.php";
         $Animals = unserialize($_SESSION['animalskingdom']);

        foreach ($Animals as $animal1) {
            print_r($animal1->name."<br>".$animal1->echoImage());
        }
    }
    
    ?>

<script>
    $(document).ready(function(){

        var apa = <?php echo json_encode($Animal1->MakeSound());?>;
        var gir = <?php echo json_encode($Animal2->MakeSound());?>;
        var tig = <?php echo json_encode($Animal3->MakeSound());?>;
        var coc = <?php echo json_encode($Food1->MakeSound());?>;

        var apaName = <?php echo json_encode($Animal1->get_name());?>;
        var girName = <?php echo json_encode($Animal2->get_name());?>;
        var tigName = <?php echo json_encode($Animal3->get_name());?>;
        var cocName = <?php echo json_encode($Food1->get_food());?>;


        /* $(".theApSound").on("click", function(){monkeySound();});

        function monkeySound(){
            alert(apaName+" säger: "+apa);
        }

        $(".theGirafSound").on("click", function(){giraffSound();});
        
        function giraffSound(){
            alert(girName+" säger: "+gir);
        }

        $(".theTigerSound").on("click", function(){tigerSound();});
        
        function tigerSound(){
            alert(tigName+" säger: "+tig);
        }

        $(".theCoconutSound").on("click", function(){coconutSound();});
        
        function coconutSound(){
            alert(cocName+" säger: "+coc);
        }

         */
    });


</script>