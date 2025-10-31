<?php
$nome = $_POST['nome'];
$ra = $_POST['ra'];
$semestre = $_POST['semestre'];
$numero = $_POST['numero'];
$metodo = "POST";

$totalSemestres = 6;
$faltam = $totalSemestres - $semestre;
if ($faltam < 0) {
  $faltam = 0;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow mb-4">
          <div class="card-body">
            <h3 class="card-title mt-3 card-text-custom">Olá! Você utilizou o método: <strong><?php echo $metodo; ?></strong></h3>
            <p class="card-text mt-3">
              Nome: <strong><?php echo $nome; ?></strong><br>
              RA: <strong><?php echo $ra; ?></strong>
            </p>
            <div class="alert alert-warning mt-3">
              Faltam <strong><?php echo $faltam; ?></strong> semestre(s) para concluir o curso de Gestão
              da Tecnologia da Informação na FATEC Jahu.
            </div>
          </div>
        </div>

        <div class="text-center">
          <a href="formulario.php" class="btn btn-secondary">Voltar</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>