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
  <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>
<body>

	<div class="header">
          
          <?php
	
		$usuario = new Usuarios();

		if(isset($_POST['cadastrar'])):

			$nome       = $_POST['nome'];
			$email      = $_POST['email'];
			$endereco   = $_POST['endereco'];
			$nascimento = $_POST['nascimento'];
			$password   = $_POST['password'];

			$usuario->setNome($nome);
			$usuario->setEmail($email);
			$usuario->setEndereco($endereco);
			$usuario->setNascimento($nascimento);
			$usuario->setPassword($password);

			# Insert
			if($usuario->insert()){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT='0; URL=cadastro.php'>
					<script type=\"text/javascript\">
					alert(\"Cadastro Completo \");
					</script>";
			}

		endif;

		?>

        <div class="register-container container">
            <div class="row">
                <div class="iphone span5">
                    <img src="img/iphone.png" alt="">
                </div>
                <div class="register span6">
                    <form action="" method="post">
                        <h2>Cadastro de Usuário <span class="red"><strong></strong></span></h2>
                        <label for="firstname">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Entre com seu primeiro nome...">
                         
                     
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Entre com seu Email...">
                         
                        <label for="email">Endereço</label>
                        <input type="text" id="endereco" name="endereco" placeholder="Entre com seu Endereço...">

                        <label for="email">Data de Nascimento</label>
                        <input type="text" id="nascimento" name="nascimento" placeholder="Entre com sua Data de Nascimento...">

                        <label for="email">Telefone</label>
                        <input type="text" id="Endereco" name="Endereco" placeholder="Entre com seu Endereço...">

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Entre com seu password...">
                        <button type="submit" name="cadastrar">Registrar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>


	 

<script src="js/jQuery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>