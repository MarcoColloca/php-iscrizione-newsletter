<?php 
if ($mail_validation === true){            
?>
    <div class="text-center alert alert-success" role="alert">
        <h2>
            Tutto secondo i piani!
        </h2>
        <a href="http://localhost/php-iscrizione-newsletter/">Torna alla pagina precedente</a>
    </div>

<?php
}else if($mail_validation === false){
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