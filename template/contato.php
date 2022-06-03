<?php
    include "config.php";
    include TEMPLATE_PATH."/header.php";
    include TEMPLATE_PATH."/nav.php";
    
?>

<main>


        <form action="email.php" name="email" method="POST">

        <input type="text" name="Sender" placeholder="Nome">
        <input type="text" name="name" placeholder="Assunto">
        <input type="text" name="message" placeholder="Mensagem">
        <input type="submit" name = "btn" value = "Enviar">
        <input type="reset" value = "clear">
</form>

</main>

<?php
include TEMPLATE_PATH."/footer.php";
?>