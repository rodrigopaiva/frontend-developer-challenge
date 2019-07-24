<?php

	// verifica se é spam
	if (preg_match( "/bcc:|cc:|multipart|\[url|Content-Type:/i", implode($_POST))) {
		$spam=true;
	} elseif (preg_match_all("/<a|http:/i", implode($_POST), $out) > 0) {
		$spam=true;
	}


	if ($spam==true) {
		echo "<p class='spam-alert'>Lamento, mas esta mensagem parece ser spam.</p>";
	} else {
		//echo "mensagem ok";

		// recebe as Variaveis
			$nome     = $_POST["news-nome-amigo"];
			$email    = $_POST["news-email"];

		// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
			include("classe/class.phpmailer.php");

		// Inicia a classe PHPMailer
			$mail = new PHPMailer();

		// Define os dados do servidor e tipo de conexão
			$mail->IsSMTP();
			$mail->Host     = "dominio.com.br";     // Endereço do servidor SMTP
			$mail->SMTPAuth = true;                   // Usa autenticação SMTP? (opcional)
			$mail->Username = 'contato@dominio.com.br';  // Usuário do servidor SMTP
			$mail->Password = 'xxxxxxxx';               // Senha do servidor SMTP

		// Define o remetente.
			$mail->From     = "contato@dominio.com.br"; // Seu e-mail
			$mail->FromName = "$nome";       // Seu nome

		// Define os destinatário(s)
			$mail->AddAddress($email, $nome);
			$mail->AddCC('contato@dominio.com.br', 'Eu'); // Copia
			//$mail->AddBCC('teste@gmail.com', 'Fulano da Silva'); // Cópia Oculta

		// Define os dados técnicos da Mensagem
			$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

		// Define a mensagem (Texto e Assunto)
			$mail->Subject = "Formulário de Newsletter"; // Assunto da mensagem
			$mail->Body    = '<table cellpadding="0" cellspacing="0" border="0" style="margin:0; padding:0; width:100% !important; line-height: 100% !important; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
            <tr>
                <td width="600">
                    <div style="width: 600px; height: 220px; margin: 0 0 30px 0;">
                        <img src="http://www.dominio.com.br/images/email/hdr-email.jpg" alt="" title="" width="600" height="207" border="0" style="display:block; outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;" />
                    </div>

                    <div style="background-color: #ffffff; width: 556px; padding: 0 22px;">
                        <h1 style="color: #563289; font-size: 24px; font-family: Helvetica; text-align: center; margin: 0 0 20px 0; text-transform: uppercase;">Formulário de Newsletter</h1>

                        <h2 style="color: #563289; font-size: 18px; font-family: Helvetica; text-align: center; margin: 0 0 13px 0; text-transform: uppercase;">Dados enviados</h2>

                        <p style="color: #563289; font-size: 18px; font-family: Helvetica; text-align: left; margin: 0 0 50px 0; line-height: 25px;"><b>Nome:</b> '.$nome.'<br/>
							  <b>E-mail:</b> '.$email.'</p>
                    </div>

                    <div style="width: 600px;">
                        <div style="background-color: #563289; padding: 10px 0 10px 0;">
                            <p style="color: #ffffff; font-size: 9px; font-family: Helvetica; text-align: center;">©Teste.<br />Todos os direitos reservados.</p>
                        </div>
                    </div>
                </td>
            </tr>
        </table>';

		// Envia o e-mail
			$enviado = $mail->Send();

		// Exibe uma mensagem de resultado
			if ($enviado) {
			   echo "<p>Formulario enviado com sucesso!</p>";
			} else {
			   echo "<p>Não foi possível enviar o formulário!</p>";
			}

	}

?>
