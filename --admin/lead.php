<?php 
	include('header.php');

	include('../base-config.php');

	//Configurações
	$token = $_GET['id'];
?>
<div class="col-md-12">
	<h1>Lead</h1>
    <div class="profile-content">
		<?php 
			$result = mysqli_query($conexao, "SELECT * FROM users_register WHERE id = '".$token."'");
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 

					$data = explode(" ", $row['data']);
					$hora = $data[1];
					$data = explode("-", $data[0]);
					$data = $data[2].'/'.$data[1].'/'.$data[0];

					$ArrayTF = array(0 => 'Não',
							 1 => 'Sim');
 				?>			
				<div class="lead">
					<p><strong>Nome: </strong><?php echo $row['nome']; ?></p>
					<p><strong>E-mail: </strong><?php echo $row['email']; ?></p>
					<p><strong>Telefone: </strong><?php echo $row['telefone']; ?></p>
					<p><strong>Mensagem: </strong><?php echo $row['mensagem']; ?></p>
					<p><strong>Integrado ao CRM?: </strong><?php echo $ArrayTF[$row['sucesso']]; ?></p>
					<p><strong>Novo Prospect? </strong><?php echo $ArrayTF[$row['prospect']]; ?></p>
					<p><strong>Código da Integração: </strong><?php echo $row['retorno']; ?></p>
					<p><strong>Data: </strong><?php echo $data.' '.$hora; ?></p>
				</div>
		<?php } ?>

    </div>
</div>

<?php include('footer.php'); ?>