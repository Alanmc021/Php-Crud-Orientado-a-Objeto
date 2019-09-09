<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
	}
?>

<!DOCTYPE HTML>
<html land="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>PHP OO</title>
  <meta name="description" content="PHP OO" />
  <meta name="robots" content="index, follow" />
   <meta name="author" content="Andrew Esteves"/>
   <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" />
 
</head>
<body>

	<div class="container">

		<?php
	
		$usuario = new Usuarios();

		if(isset($_POST['cadastrar'])):

			$nome  = $_POST['nome'];
			$email = $_POST['email'];

			$usuario->setNome($nome);
			$usuario->setEmail($email);

			# Insert
			if($usuario->insertIndex()){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
					<script type=\"text/javascript\">
					alert(\"Dados Inseridos com Sucesso \");
					</script>";
			}

		endif;

		?>



		<header class="masthead">
			<h1 class="muted">Sistema de Gerencimento de Funcionarios</h1>
			<nav class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<ul class="nav">
							<li class="active"><a href="index.php">Página inicial</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>


		 

		<?php 
		if(isset($_POST['atualizar'])):

			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			$usuario->setNome($nome);
			$usuario->setEmail($email);

			if($usuario->update($id)){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
					<script type=\"text/javascript\">
					alert(\"Atualizado Com Sucesso \");
					</script>";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

			$id = (int)$_GET['id'];
			if($usuario->delete($id)){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT='0; URL=index.php'>
					<script type=\"text/javascript\">
					alert(\"Dados Detelados com Sucesso \");
					</script>";
			}

		endif;
		?>

		<?php
		if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

			$id = (int)$_GET['id'];
			$resultado = $usuario->find($id);
		?>

		
        

       
		 

		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" value="<?php echo $resultado->nome; ?>" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" value="<?php echo $resultado->email; ?>" placeholder="E-mail:" />
			</div>
			<input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
			<br />
			<input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">					
		</form>

		<?php }else{ ?>


		<form method="post" action="">
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="text" name="nome" placeholder="Nome:" />
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-envelope"></i></span>
				<input type="text" name="email" placeholder="E-mail:" />
			</div>
			<br />
			<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">					
		</form>

		<?php } ?>

		 

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>#</th>
					<th>Nome:</th>
					<th>E-mail:</th>
					<th>Ações:</th>
				</tr>
			</thead>
			
			<?php foreach($usuario->findAll() as $key => $value): ?>

			<tbody>
				<tr>
					<td><?php echo $value->id; ?></td>
					<td><?php echo $value->nome; ?></td>
					<td><?php echo $value->email; ?></td>
				   	<td>
						<?php echo "<a href='index.php?acao=editar&id="     . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='#myModal?acao=deletar&id="    . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
						 
					</td>
				</tr>
			</tbody>

			<?php endforeach; ?>

		</table>
        

		 

	</div>
        
            <!-- Button to trigger modal -->
			    <a href="#myModal" role="button" class="btn" data-toggle="modal">Executar modal de demo</a>
			     
			    <!-- Modal -->
			    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h3 id="myModalLabel">Modal header</h3>
			      </div>
			      <div class="modal-body">
			         
  					<table class="table table-hover">
						
						<thead>
							<tr>
								<th>#</th>
								<th>Nome:</th>
								<th>E-mail:</th>
								<th>Ações:</th>
							</tr>
						</thead>
						
						<?php foreach($usuario->find($id) as $key => $value): ?>

						<tbody>
							<tr>
								<td><?php echo $value->id; ?></td>
								<td><?php echo $value->nome; ?></td>
								<td><?php echo $value->email; ?></td>
							   	<td>
									<?php echo "<a href='index.php?acao=editar&id="     . $value->id . "'>Editar</a>"; ?>
									<?php echo "<a href='#myModal?acao=deletar&id="    . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
									 
								</td>
							</tr>
						</tbody>

						<?php endforeach; ?>

					</table>

			      </div>
			      <div class="modal-footer">
			        <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
			        <button class="btn btn-primary">Salvar mudanças</button>
			      </div>
			    </div>
<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>