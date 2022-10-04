<?php
$bigTitle = $smallTitle = $cardText = $buttonText = "";
$bigTitle1 = $smallTitle1 = $cardText1 = $buttonText1 = "";
$bigTitle2 = $smallTitle2 = $cardText2 = $buttonText2 = "";
$cardNumber=0;
if (isset($_POST["bigTitle"])) {
    $cardNumber = $_POST["cardNumber"];
    switch ($cardNumber){
        case 1:
            $bigTitle = $_POST["bigTitle"];
            $smallTitle = $_POST["smallTitle"];
            $cardText = $_POST["cardText"];
            $buttonText = $_POST["buttonText"];
            break;
        case 2:
            $bigTitle1 = $_POST["bigTitle"];
            $smallTitle1 = $_POST["smallTitle"];
            $cardText1 = $_POST["cardText"];
            $buttonText1 = $_POST["buttonText"];
            break;
        case 3:
            $bigTitle2= $_POST["bigTitle"];
            $smallTitle2 = $_POST["smallTitle"];
            $cardText2 = $_POST["cardText"];
            $buttonText2 = $_POST["buttonText"];
            break;
        default:
            break;
    }
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
                    <?php echo $bigTitle1; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $smallTitle1; ?></h5>
                        <p class="card-text"><?php echo $cardText1; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $buttonText1; ?></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    <?php echo $bigTitle2; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $smallTitle2; ?></h5>
                        <p class="card-text"><?php echo $cardText2; ?></p>
                        <a href="#" class="btn btn-primary"><?php echo $buttonText2; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>POST/GET И всё такое</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <select name="cardNumber">
            <option value="1">Карточка 1</option>
            <option value="2">Карточка 2</option>
            <option value="3">Карточка 3</option>
        </select>
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