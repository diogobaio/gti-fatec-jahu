<?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $semestre = $_POST['semestre'];
    $numero = $_POST['numero'];
    $metodo = "POST";
  } else {
    $nome = $_GET['nome'];
    $ra = $_GET['ra'];
    $semestre = $_GET['semestre'];
    $numero = $_GET['numero'];
    $metodo = "GET";
  }
  
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

        <div class="d-flex justify-content-center mb-4">
          <div class="tabuada-container">
            <table class="tabuada">
              <thead>
                <tr>
                  <th colspan="2">Tabuada do <?php echo $numero; ?></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  for ($i = 0; $i <= 10; $i++) {
                    echo "<tr>
                            <td>$numero × $i</td>
                            <td>" . ($numero * $i) . "</td>
                          </tr>";
                  }
                ?>
              </tbody>
            </table>
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
