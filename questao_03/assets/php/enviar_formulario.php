<?php

require '../lib/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['enviar'])){
        $erros = array();
        if(!empty($_POST['nome']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['mensagem']) && !empty($_POST['titulo'])){
            
            $mensagem_length = strlen($_POST['mensagem']);
            
            if(!$tel =  filter_input(INPUT_POST, 'tel', FILTER_VALIDATE_INT)){
                $erros[] = 'O telefone não é um valor int';
            }
    
            $tel_length = ceil(log10($tel));
    
            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $erros[] = "O email que você inseriu está invalido";
            }

            if(!empty($erros)){
                foreach($erros as $erro) {
                    echo "<script>alert('$erro'); location.href='../../index.php'</script>";
                }
                
            }else{
                
                $nome = $_POST['nome'];
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $titulo = $_POST['titulo'];
                $mensagem = $_POST['mensagem'];

                $mail = new PHPMailer(true);

                try {
        
                    $mail->isSMTP();
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port =   587;
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->SMTPAuth = true;
                    $mail->Username = 'phptesteconstrusite@gmail.com';
                    $mail->Password = 'construsite123';
                    $mail->setFrom('phptesteconstrusite@gmail.com', 'Joe Luis Gomes Ceruto');
                    $mail->addAddress($email, $nome);
                    $mail->Subject = $titulo;
                    $conteudo_email = "
                    Olá tester,<br>
                    Este é um email para testes.<br>
                    Telefone do remetente $tel,<br>
                    $mensagem
                    ";
                    $mail->IsHTML(true);
                    $mail->Body = $conteudo_email;

                    $mail->Send();
                    echo "<script>alert('A mensagem foi enviada com sucesso!'); location.href='../../index.php'</script>";
                }catch (Exception $e) {
                    echo "<script>alert('Houve um erro no envio da mensagem!'); location.href='../../index.php'</script>";
                }
            }
        }else {
            
            $erros[] = "Por favor preencha todos os campos corretamente!";
            if(!empty($erros)){
                foreach($erros as $erro) {
                    echo "<script>alert('$erro'); location.href='../../index.php'</script>";
                }
            }
        }
    }
?>





