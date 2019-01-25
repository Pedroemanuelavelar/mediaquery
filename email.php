<?php


 
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

 
 
$to = "pedroemanuel5296@gmail.com";
$subject = "Portfólio - Contato";
$body = "<strong>Nome: </strong>".$nome;
$body .= "<br><strong>Email: </strong>".$email;
$body .= "<br><strong>Mensagem: </strong>".$mensagem;
$headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  gmail.com.br<pedroemanuel5296@gmail.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <pedroemanuel5296@gmail.com>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <pedroemanuel5296@gmail.com>\n"; //caso a msg //seja respondida vai para  este email.
 
if(mail($to,$subject,$body,$headers)){
    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado");
}
if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}

// Se nenhum valor foi recebido, o usuário não realizou o captcha
//if (!$captcha_data) {
    //echo "Por favor, confirme o captcha.";
   // exit; 
//}


//$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ldz24sUAAAAAITq2F4XkxcP4jLxDHAtQod6G2Q9
//&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);



//if ($resposta.success) {
    //echo "Obrigado por deixar sua mensagem!";
//} else {
    //echo "Usuário mal intencionado detectado. A mensagem não foi enviada.";
    //exit;
//}



require 'deucerto.html'


?>