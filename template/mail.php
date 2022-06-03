<?php
error_reporting(E_ALL ^ E_NOTICE);
$for = "vinicius-alves@educar.rs.gov.br";
$mail = $_POST['Sender'];
$name = $_POST['name'];
$Content = $_POST['message'];
$verificar = $_POST['Sender'] && $_POST['name'] && $_POST['message'];
$headers = "vinicius-alves@educar.rs.gov.br";
if(empty($verificar)){
    echo " ";
}else{
    $envio = mail($for, $name, $mail,$Content, $headers);
    if($envio){
        echo "Email enviado com sucesso!";
    }
    else{
        echo "Erro no envio, Tente novamente!";
    }
}

?>
