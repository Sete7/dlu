<?php
require_once('./mailer/class.phpmailer.php');

$btnContato = filter_input(INPUT_POST, 'btnContact', FILTER_SANITIZE_STRING);
if ($btnContato):
  
    echo $nome = utf8_decode(strip_tags(trim($_POST['txtnome'])));
    echo $email = utf8_decode(strip_tags(trim($_POST['txtemail'])));
    echo $telefone = utf8_decode(strip_tags(trim($_POST['txtfone'])));
    echo $assunto = utf8_decode(strip_tags(trim($_POST['assunto'])));
    echo $mensagem = html_entity_decode(filter_input(INPUT_POST, 'txtmsg', FILTER_SANITIZE_STRING));


    echo "<pre>";
    try {
        $mailer = new PHPMailer();
        $mailer->IsSMTP();
        $mailer->SMTPDebug = 1;
        $mailer->SMTPAuth = true;
        $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails
        $mailer->CharSet = utf8_decode($mensagem);
        $mailer->Host = 'mail.delurdes.com.br'; //smtp.dominio.com.br
        $mailer->Username = 'contato@dlurdes.com.br';
        $mailer->Password = 'a1b2c3d4';

        $mailer->SetFrom("$email", "$nome"); //Seu e-mail
        $mailer->AddAddress('contato@dlurdes.com.br', 'DLURDES');
        $mailer->AddAddress('bkpemail@cialdf.com.br');
        $mailer->Subject = "Formulario Contato"; //Assunto do e-mail      
        $mailer->isHTML(true);
        $mailer->Body .= "<br><br/> "
                . "Nome:  $nome <br><br/>"
                . "Email: $email <br><br/>"
                . "Telefone: $telefone <br><br/>"
                . "Assunto: $assunto <br><br/>"
                . "Mensagem: $mensagem <br><br/>";

        //Define o corpo do email        
 echo       $mailer->Send();
//        echo "<script>alert('Sr(a) $nome sua mensagem foi enviada com sucesso! Em breve entraremos em contato!');</script>";
//        echo "<script>window.location = 'http://localhost/projetos/dlurdes'</script>";
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
    }
echo "</pre>";
endif;
?> 

<form class="form-contact" method="POST">
    <div class="form-group">
        <input type="text" id="nome" name="txtnome" placeholder="Nome*" required="" /><br/>
    </div>
    <div class="form-group">
        <input type="tel"  name="txtemail" class="email" placeholder="Email*" required="" />
        <input type="tel"  name="txtfone" class="phone" placeholder="Telefone*" required="" />
    </div>
    <div class="form-group">
        <input type="assunto" id="assunto" name="assunto" placeholder="Assunto*" required="" /><br/>
    </div>
    <div class="form-group">                        
        <textarea cols="100" rows="5" name="txtmsg" placeholder="Mensagem*"></textarea><br/>
    </div>

    <div class="form-group">
        <input type="submit" class="btnContact" value="Enviar"/>                    
    </div>
</form>

