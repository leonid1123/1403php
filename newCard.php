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
    <title>Document</title>
</head>
<body>
    
</body>
</html>