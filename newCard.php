<?php
/*$mysqli = new mysqli("localhost", "pk1403", "123456", "cards");
    echo $mysqli->host_info . "\n";
    $stmt = $mysqli->prepare("INSERT INTO cardcontent(cardid, bigTitleText, smallTitleText, cardText, buttonText, buttonLink) VALUES (null,?,?,?,?,?)");
    $bigTitleText = "Большой заголовок ПХП";
    $smallTitleText = "Маленький заголовок ПХП";
    $cardText="азазазазазазазаза азазаза зззаааа!";
    $buttonText = "Пуньк!";
    $buttonLink = "https://kuda.to";
    $stmt->bind_param("sssss", $bigTitleText,$smallTitleText,$cardText,$buttonText,$buttonLink);
    $stmt->execute();*/
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
    <?php
    include 'pageTop.php';
    ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="bigTitleText" class="form-label">Укажите большой заголовок</label>
            <input type="text" class="form-control" id="bigTitleText" placeholder="Заголовок сюда">
            <label for="smallTitleText" class="form-label">Укажите малый заголовок</label>
            <input type="text" class="form-control" id="smallTitleText" placeholder="Заголовок сюда">
            <label for="cardText" class="form-label">Введите текст для карточки</label>
            <textarea class="form-control" id="cardText" rows="3"></textarea>
            <label for="buttonText" class="form-label">Текст на кнопке</label>
            <input type="text" class="form-control" id="buttonText" placeholder="Текст кнопки сюда">
            <label for="buttonLink" class="form-label">Укажите текст ссылки, начиная с https://</label>
            <input type="url" class="form-control" id="buttonLink" placeholder="https://">
            <button type="submit" class="btn btn-danger mb-3 ">Отправить</button>
        </div>

    </form>
    </div>
</body>

</html>