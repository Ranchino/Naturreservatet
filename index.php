<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturreservatet</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script.js"></script>

</head>
<body>
   
    <form action="results.php" method="POST">
        <h2>Hur många av varje vill du ha i reservatet?</h2><br>
        <label>Apor?</label><br>
        <input type="number" name="apes" id="theAp"><br><br>

        <label>Giraffer?</label><br>
        <input type="number" name="girafs" id="theGiraf"><br><br>

        <label>Tigrar?</label><br>
        <input type="number" name="tiger" id="theTiger"><br><br>

        <label>Kokosnötter?</label><br>
        <input type="number" name="coconuts" id="theCoconut"><br><br>

        <button type="number">Skicka</button><br>

    </form>
    
</body>
</html>