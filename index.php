<?php
$bigTitle=$smallTitle=$cardText=$buttonText="";
    if (isset($_POST["bigTitle"])) {
        $bigTitle = $_POST["bigTitle"];
        $smallTitle = $_POST["smallTitle"];
        $cardText = $_POST["cardText"];
        $buttonText = $_POST["buttonText"];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="bootstrap/js/bootstrap.min.js">
    <title>1403</title>
</head>
<?php
$txt1 = "В первое поле вы ввели";
$txt2 = "Во второе поле вы ввели";
?>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <?php echo $bigTitle; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $smallTitle; ?></h5>
                        <p class="card-text"><?php echo $cardText; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $buttonText; ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
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
        </div>
    </div>
    <h2>POST/GET И всё такое</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p>Большой заголовок</p>
        <input type="text" name="bigTitle">
        <p>Маленький заголовок</p>
        <input type="text" name="smallTitle">
        <p>Текст карточки</p>
        <input type="text" name="cardText">
        <p>Текст на кнопке</p>
        <input type="text" name="buttonText">
        <input type="submit" value="Жмяк!">
    </form>
    <p name="debug">Place for results</p>
</body>

</html>