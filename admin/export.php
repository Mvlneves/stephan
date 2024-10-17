<?php

	include('../base-config.php');

    $data = date('Ymd');
    $data_texto = date('d/m/Y');

    $arquivo = $data.'-leads-artem.xls';
    
    $html = '';
    $html .= '<table>';
    $html .= '<tr>';
    $html .= '<td colspan="9" style="background:#0073aa; text-align: center;"><b>Leads Lumen at&eacute; '.$data_texto.'</b></tr>';
    $html .= '</tr>';
    $html .= '<tr>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>ID</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>Nome</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>Sobrenome</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>E-mail</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>Telefone</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>Mensagem</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>Acesso Inicial</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>Acesso Lead</b></td>';
	$html .= '<td style="text-align: center; border: 1px solid #000;"><b>Data</b></td>';
    $html .= '</tr>';

	$result = mysqli_query($conexao, "SELECT * FROM users_register GROUP BY email ORDER BY id DESC");
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

			$data = explode(" ", $row['data']);
			$hora = $data[1];
			$data = explode("-", $data[0]);
			$data = $data[2].'/'.$data[1].'/'.$data[0];

			$result_access = mysqli_query($conexao, "SELECT * FROM users_access WHERE token = '".$row['token']."' ORDER BY id ASC limit 1");

		while($row_access = mysqli_fetch_array($result_access, MYSQLI_ASSOC)) { 
			if ($row_access['tipo_acesso'] == 'midia') {
					$primeiro_acesso = $row_access['utms'].' > '.$row_access['utmm'];
				}else{
					$primeiro_acesso = $row_access['tipo_acesso'];
				}	
		} 
		
			$result_access_last = mysqli_query($conexao, "SELECT * FROM users_access WHERE token = '".$row['token']."' AND data <= '".$row['data']."' AND lead = 1 ORDER BY id ASC limit 1");
		while($row_access_last = mysqli_fetch_array($result_access_last, MYSQLI_ASSOC)) { 
			if ($row_access_last['tipo_acesso'] == 'midia') {
					$ultimo_acesso = $row_access_last['utms'].' > '.$row_access_last['utmm'];
				}else{
					$ultimo_acesso = $row_access_last['tipo_acesso'];
				}	
		} 		
					$html .= '<tr><td style="text-align: center; border: 1px solid #000;">'.$row['id'].'</td>';
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.utf8_decode($row['nome']).'</td>';
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.utf8_decode($row['sobrenome']).'</td>';
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.$row['email'].'</td>';
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.$row['telefone'].'</td>';
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.utf8_decode($row['mensagem']).'</td>';
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.$primeiro_acesso.'</td>';
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.$ultimo_acesso.'</td>';					
					$html .= '<td style="text-align: center; border: 1px solid #000;">'.$data.' '.$hora.'</td></tr>';
		}

    $html .= '</table>';

    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
    header ("Content-Description: PHP Generated Data" );

    echo $html;
    exit;
?>