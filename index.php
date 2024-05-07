<?php 
var_dump($_POST);

$mail = $_POST['newsletter'] ?? null;

$mail_validation = false;

if($mail === null){
    $mail_validation = null;
}else if(str_contains($mail, '@') && str_contains($mail, '.')){
    $mail_validation = true;
}else{
    $mail_validation = false;
}

var_dump($mail_validation);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            
            <div class="title py-5">
                <h1>
                    Newsletter
                </h1>
            </div>
            
        </div>
    </header>

    <main>
        <section class="newsletter">
            <div class="container">
                <div class="form-container">
                    <form action="" method="POST">
                        <label for="newsletter"> Inserisci la tua Mail:</label>
                        <input type="email" name="newsletter" id="newsletter" placeholder="example@mail.com">

                        <div class="button-container my-3">
                            <button class="btn btn-primary"> Invia </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php 
        if ($mail_validation === true){            
        ?>
            <div class="mail-validation text-success">
                <h2>
                    La Mail è Valida
                </h2>
                <a href="http://localhost/php-iscrizione-newsletter/">Torna indietro</a>
            </div>

        <?php
        }else if($mail_validation === false){
        ?>
            <div class="mail-validation text-danger">
                <h2>
                    La Mail Non è Valida
                </h2>
                <a href="http://localhost/php-iscrizione-newsletter/">Torna indietro</a>
            </div>
        <?php
        }
        ?>
    </main>
</body>


<style>

    /* Header */

    header{
        background-color: coral;
        color: white;
        margin-bottom: 100px;
    }

    .title{
        text-align: center;
        
    }


    /* Main */

    .newsletter label{
        display: block;
    }


    .button-container{
       margin-left: 33%;
    }

    .form-container{
        display: flex;
        justify-content: center;
    }


    /* Mail Validation */
    .mail-validation{
        text-align: center;
        margin: 20px 0;
    }
</style>
</html>