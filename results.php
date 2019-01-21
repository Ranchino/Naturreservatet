<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<?php
    include "class.php";

    $nrofApe = $_POST['apes'];
    $nrofGiraff = $_POST['girafs'];
    $nrofTiger = $_POST['tiger'];
    $nrofCoco = $_POST['coconuts'];

    for($i = 0; $i < $nrofApe; $i++){
        $Animal1 = new ap("Apa");
        echo $Animal1->GetImage()." ". "<h3>".$Animal1->get_name()."</h3><br>";
    }

    for($i = 0; $i < $nrofGiraff; $i++){
        $Animal2 = new giraff("Giraff");
        echo $Animal2->GetImage()." ". "<h3>".$Animal2->get_name()."</h3><br>";

    }

    for($i = 0; $i < $nrofTiger; $i++){
        $Animal3 = new tiger("Tiger");
        echo $Animal3->GetImage()." "."<h3>".$Animal3->get_name()."</h3><br>";

    }

    for($i = 0; $i < $nrofCoco; $i++){
        $Food1 = new coconuts("Kokosnöt");
        echo $Food1->GetImage()." "."<h3>".$Food1->get_food()."</h3><br>";

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


        $(".theApSound").on("click", function(){monkeySound();});

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

        
    });


</script>