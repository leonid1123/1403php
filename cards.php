<?php
    $mysqli = new mysqli("localhost", "pk1403", "123456", "cards");
    echo $mysqli->host_info . "\n";
    $stmt = $mysqli->prepare("INSERT INTO cardcontent(cardid, bigTitleText, smallTitleText, cardText, buttonText, buttonLink) VALUES (null,?,?,?,?,?)");
    $bigTitleText = "Большой заголовок ПХП";
    $smallTitleText = "Маленький заголовок ПХП";
    $cardText="азазазазазазазаза азазаза зззаааа!";
    $buttonText = "Пуньк!";
    $buttonLink = "https://kuda.to";
    $stmt->bind_param("sssss", $bigTitleText,$smallTitleText,$cardText,$buttonText,$buttonLink);
    $stmt->execute();
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
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</body>

</html>