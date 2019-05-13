<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
</head>
<body>

<div class="container">
  <h2>Cadastro Clientes</h2>
  <form action="controller/inserirCliente.php" method="post">
    <div class="form-group">
      <label >Nome:</label>
      <input type="text" class="form-control" placeholder="Enter email" name="nome">
    </div>
    <div class="form-group">
      <label for="email">Cpf:</label>
      <input type="text" class="form-control"  placeholder="Enter email" name="cpf">
    </div>
    <div class="form-group">
      <label for="email">Telefone:</label>
      <input type="text" class="form-control"  placeholder="Enter email" name="telefone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control"  placeholder="Enter email" name="email">
    </div>
    
    <button type="submit" class="btn btn-primary">cadastrar</button>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
