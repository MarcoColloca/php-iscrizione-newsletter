<?php 
//var_dump($_POST);
include_once __DIR__ . '/utilities.php';

//var_dump($mail_validation);

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
    <div id="App">

        <?php include __DIR__ . '/components/header.php'; ?> 
    
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
            if ($mail_validation === true) {
                ?>
                <div class="text-center alert alert-success" role="alert">
                    <h2>
                        Tutto secondo i piani!
                    </h2>
                    <a href="http://localhost/php-iscrizione-newsletter/">Torna alla pagina precedente</a>
                </div>
        
                <?php
            } else if ($mail_validation === false) {
                ?>
                    <div class="text-center alert alert-danger" role="alert">
                        <h2>
                            Qualcosa è andato storto.
                        </h2>
                        <a href="http://localhost/php-iscrizione-newsletter/">Riprova</a>
                    </div>
                <?php
            }
            ?>
        </main>


        
    
        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>
</body>


<style>

    #App{
        display: flex;
        flex-direction: column;
        height: 100vh;
    }


    /* Main */

    main{
       flex-grow: 1;
    }

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

</style>
</html>