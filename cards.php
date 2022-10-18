<?php
    $mysqli = new mysqli("localhost", "pk1403", "123456", "cards");
    echo $mysqli->host_info . "\n";
    $result = $mysqli->query("SELECT bigTitleText, smallTitleText, cardText, buttonText, buttonLink FROM cardcontent");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/js/bootstrap.min.js">
    <title>CARDS & MySQL</title>
</head>

<body>
    <div class="container-lg">
        <h1>Пример работы PHP и MySQL</h1>
        <?php
        $k=10;
        while ($row = $result->fetch_row()) {
        echo '<div class="card">';
        echo    '<div class="card-header">';
        echo        $row[0];
        echo    '</div>';
        echo    '<div class="card-body">';
        echo       '<h5 class="card-title">'.$row[1].'</h5>';
        echo        '<p class="card-text">'.$row[2].'</p>';
        echo        '<a href="'.$row[4].'" class="btn btn-primary">'.$row[3].'</a>';
        echo    '</div>';
        echo '</div>';
        }
        ?>
    </div>
</body>

</html>