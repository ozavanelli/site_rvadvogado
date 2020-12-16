<?php
	require 'PHPMailer/PHPMailerAutoload.php';
    
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];
    $body_content = "Formulario de contato - Site Rodrigo Vieira Advogado <br><br> Nome: $nome <br> E-mail: $email <br> Telefone: $telefone <br> Assunto: $assunto <br> Mensagem: $mensagem ";

	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
    $Mailer->isHTML(true);
    
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
    $Mailer->SMTPSecure = 'ssl';
	
	//nome do servidor
	$Mailer->Host = 'smtp.skymail.net.br';
	//Porta de saida de e-mail 
	$Mailer->Port = 465;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = 'ti@avilaeng.com.br';
	$Mailer->Password = '@vilaeng444AV';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'ti@avilaeng.com.br';
	
	//Nome do Remetente
	$Mailer->FromName = 'Contato - Rodrigo Vieira';
	
	//Assunto da mensagem
	$Mailer->Subject = 'Formulario de contato';
	
	//Corpo da Mensagem
    $Mailer->Body = $body_content;
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = 'Conteudo da mensagem';
	
	//Destinatario 
	$Mailer->AddAddress('contato@rodrigovieiraadvogado.com.br');
	
	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>



