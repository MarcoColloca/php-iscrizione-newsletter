<?php 
session_start();
//var_dump($_SESSION);
$is_valid_mail = $_SESSION['mail_validation'];

if($is_valid_mail === null){
    header('Location: ./index.php');
}


session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>   
    <div class="alert-box">
        <?php
        if ($is_valid_mail === true) {
            ?>
            <div class="text-center alert alert-success" role="alert">
                <h2>
                    Tutto secondo i piani!
                </h2>
                <a href="http://localhost/php-iscrizione-newsletter/">Torna alla pagina precedente</a>
            </div>
    
            <?php
        } else if ($is_valid_mail === false) {
            ?>
                <div class="text-center alert alert-danger" role="alert">
                    <h2>
                        Qualcosa è andato storto, controlla la tua mail.
                    </h2>
                    <a href="http://localhost/php-iscrizione-newsletter/">Riprova</a>
                </div>
            <?php
        }
        ?>
    </div>
</body>

<style>
    .alert-box{
        display: flex;
        flex-direction: column;
        height: 100vh;
        justify-content: center;
        background-color: rgb(100, 100, 100);
    }
</style>
</html>