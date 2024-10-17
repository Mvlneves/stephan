<?php 
	include('header.php');
	include('../base-config.php');
?>
<div class="col-md-12">
	<h1>Lista de Leads</h1>
    <div class="profile-content">
		<table>
			<thead>
				<tr>
					<td>ID</td>
					<td>E-mail</td>
					<td>Data</td>
				</tr>
			</thead>
			<tbody>

		<?php 
			$busca = "SELECT * FROM cadastros ORDER BY id DESC";
			$total_reg = "50";

			$ArrayTF = array(0 => 'Não',
							 1 => 'Sim');

			$pagina=$_GET['pagina'];
			if (!$pagina) {
				$pc = "1";
			} else {
				$pc = $pagina;
			}	

			$inicio = $pc - 1;
			$inicio = $inicio * $total_reg;	

			$limite = mysqli_query($conexao, "$busca LIMIT $inicio,$total_reg");
			$todos = mysqli_query($conexao, "$busca");
			$tr = mysqli_num_rows($todos);
			$tp = $tr / $total_reg;


			while($row = mysqli_fetch_array($limite, MYSQLI_ASSOC)) {

					$data = explode(" ", $row['created_at']);
					$hora = $data[1];
					$data = explode("-", $data[0]);
					$data = $data[2].'/'.$data[1].'/'.$data[0];
				
 				?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $data.' '.$hora; ?></td>
				</tr>
		    <?php } ?>
			</tbody>
		</table>

		<?php 
				$anterior = $pc -1;
				$proximo = $pc +1;
				if ($pc>1) {
					echo " <a href='?pagina=$anterior'><- Anterior</a> ";
				}
				echo "|";
				if ($pc<$tp) {
					echo " <a href='?pagina=$proximo'>Próxima -></a>";
				}
			?>
    </div>
</div>		

<?php include('footer.php'); ?>