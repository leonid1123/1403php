<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1403</title>
</head>
<?php
    $txt1 = "В первое поле вы ввели";
    $txt2 = "Во второе поле вы ввели";
?>
<body>
    <h2>POST/GET И всё такое</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <p>Field1</p>
        <input type = "text" name = "field1">
        <p> Field2</p>
        <input type = "text" name = "field2">
        <input type = "submit" value = "Жмяк!">
    </form>
    <p>Place for results</p>
    <?php

        if (isset($_POST["field1"])){
            echo "<p>".$txt1." ".$_POST["field1"]."</p>";
            echo "<p>".$txt2."<b>"." ".$_POST["field2"]."</b></p>";

            if ($_POST["field1"]==$_POST["field2"]) {
                echo "<p>Креатив закончился</p>";
            } else {
                echo "<p>Ну хоть что-то оригинальное</p>";
            }
            if ($_POST["field1"]=="field1"){
                echo "<p>МОЗГ: Off</p>";
            }
        }
    ?>
</body>
</html>