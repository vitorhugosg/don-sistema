<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Conta</title>

	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-4 col-md-offset-4">
  				<div class="page-header">
  					<h1>Login <small>CodeIgniter</small></h1>
  				</div>	
  				<?php if ($alerta != null): ?>
  					<div class="alert alert-<?php echo $alerta['class']; ?>">
  						<?php echo $alerta['mensagem'] ?>
  					</div>
  					
  				<?php endif ?>
  				
  				<form action="<?php echo base_url('conta/entrar') ?>" method="POST">
  					<input type="hidden" name="captcha">
  					<div class="form-group">
  						<label for="email">Email</label>
  						<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" required>
  					</div>
  					<div class="form-group">
  						<label for="senha">Senha</label>
  						<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" value="<?php echo set_value('senha'); ?>"  required>
  					</div>
  					
  					
  					<button type="submit" class="btn pull-right btn-success" name="entrar" value="entrar">Entrar</button>
  				</form>
  			</div>
  			
  		</div>
  	</div>

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
  </html>


