<?php 

	header('Access-Control-Allow-Origin: *');
	
	require_once('base-config.php');
	require_once('phpmailer/PHPMailerAutoload.php');

	if ($_POST) {

		extract($_POST);

	    date_default_timezone_set('America/Sao_Paulo');
	    $data = date('Y-m-d H:i:s', time());

		$sql="INSERT INTO cadastros VALUES
				(NULL,
				'$data',
				'$email')";	
		mysqli_query($conexao,$sql);

		$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Sou Mente Forte</title></head><body bgcolor="#ffffff" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" style="-ms-text-size-adjust: 100%; font-size: 14px; -webkit-text-size-adjust: 100%; background-color: #ffffff; font-family: Tahoma, Verdana, sans-serif; text-align: center; -webkit-font-smoothing: antialiased; width: 100% !important;"><div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden; mso-hide: all;"> </div><meta name="viewport" content="width=device-width"><style type="text/css"> table{border-spacing: 0 !important; border-collapse: collapse !important;}</style><style type="text/css"> @media screen and (max-width: 575px){.he-col{width: 100% !important;}table{display: table;}div.he-col{display: inline-block !important;}div.he-col table.he-image td{padding-left: 0 !important; padding-right: 0 !important;}}</style> <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden; mso-hide: all;"> </div><table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0; border-collapse: collapse !important; padding: 0px; margin: 0px; background: #ffffff;"><tbody><tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"> <tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"> <tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"> <table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0; border-collapse: collapse !important; padding: 0px; margin: 0px; max-width: 600px;" class="wrapper body"> <tbody> <tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td align="center" valign="top" atr="" class="side-border" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0px 0px 0px 0px;"><div class="he-wrapper he-col he-twelve" style="margin: 0 -2px; display: inline-block; vertical-align: top; width: 100%; max-width: 600px;"> <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="he-wrapper he-col he-twelve" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0; border-collapse: collapse !important; padding: 0px; margin: 0 -2px; max-width: 600px;"> <tbody> <tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"> <table width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0; border-collapse: collapse !important; padding: 0px; margin: 0px;"> <tbody> <tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td align="center" class="he-reset-padding" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 0px;"> <table class="he-image " align="center" border="0" cellpadding="0" cellspacing="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0; border-collapse: collapse !important; padding: 0px; margin: 0px;"> <tbody> <tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><img src="http://soumenteforte.com.br/assets/images/email_01.jpg" alt="" title="" style="max-width: 100%; float: none !important; -ms-interpolation-mode: bicubic; border: 0; line-height: 100%; outline: none; text-decoration: none; width: 100%; display: block; height: auto;"></td></tr><tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><p style="font-family: Arial; color: #757575; text-align: center; font-size: 17px; line-height: 22px;">Seu download deverá iniciar automaticamente. <br/>Se isso não ocorrer, <a href="http://soumenteforte.com.br/assets/ebook/ebook-Sou-Mente-Forte.zip"><span style="font-weight: bold;text-decoration: underline;color:#000;">clique aqui</span></a> para baixar seu ebook.<br/><br/><br/> </p><p style="font-family: Arial; color: #757575; text-align: justify; font-size: 17px; padding: 0 50px; line-height: 22px;">Se quiser estimular ainda mais a capacidade de reflexão, conexão entre corpo e mente e mudança de comportamento visando a busca e realização de objetivos pessoais, siga nosso canal no <a class="youtube" href="https://www.youtube.com/channel/UCetTOhbnJ4jx3dvRuAn54gQ" target="_blank"><span style="font-weight: bold;text-decoration: underline;color:#FF0000;">YouTube</span></a> e o nosso <a class="instagram" href="https://instagram.com/soumenteforte" target="_blank"><span style="font-weight: bold;text-decoration: underline;color:#7e34ff;">Instagram.</span></a><br/></p><p style="font-family: Arial; color: #757575; text-align: justify; font-size: 17px; padding: 0 50px; line-height: 22px;">Acreditamos na força do pensamento como elemento fundamental na evolução pessoal de todas as pessoas. Tudo é possível através do domínio e entendimento das capacidades cognitivas de cada um. Lá você irá encontrar conteúdos que te ajudarão a manter o foco, energia e conquistar uma MENTE FORTE a cada dia.</p></td></tr><tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><a href="https://chat.whatsapp.com/CPmhh1gfEGOBYSA5lAZj45" target="_blank"><img src="http://soumenteforte.com.br/assets/images/email_03.jpg"></a></td></tr><tr style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;"><img src="http://soumenteforte.com.br/assets/images/email_04.jpg"></td></tr></tbody> </table></td></tr></tbody> </table></td></tr></tbody> </table></div></td></tr></tbody> </table></td></tr></tbody></table></body></html>';

		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->SMTPDebug = 0;
		$mailer->Port = 587;
		$mailer->Host = 'smtp.office365.com';
		$mailer->SMTPAuth = true;
		$mailer->Username = 'leads@newton.ag';
		$mailer->Password = '#L_3!aD5!2o2o@';
		$mailer->setFrom('leads@newton.ag', 'Sou Mente Forte');
		$mailer->addAddress($email);
		$mailer->Subject = 'E-Book Mente Forte';
		$mailer->CharSet = 'UTF-8';
		$mailer->Body = $html;
		$mailer->IsHTML(true); 	

		if(!$mailer->Send()){
			echo '0';
		}else{
			echo '1';
		}

	}
?>