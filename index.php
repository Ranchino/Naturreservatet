<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturreservatet</title>
</head>
<body>
    <?php
        class Animal{
            abstract public function MakeSound(){

            }
        }

        class Ap extends Animal {
            
        }

        class giraff extends Animal{
            
        }

        class tiger extends Animal{
            
        }
    ?>
    <form action="results.php" method="POST">
        <h2>Hur många av varje vill du ha i reservatet?</h2><br>
        <label>Apor?</label><br>
        <input type=text name=apes><br><br>

        <label>Giraffer?</label><br>
        <input type=text name=girafs><br><br>

        <label>Tigrar?</label><br>
        <input type=text name=tiger><br><br>

        <label>Kokosnötter?</label><br>
        <input type=text name=coconuts><br><br>
        <button type=submit>Skicka</button><br>

    </form>
    
</body>
</html>