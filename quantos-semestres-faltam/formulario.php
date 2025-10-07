<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário GET e POST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-body">
           <h2 class="text-center mb-4 custom-title">QUANTOS SEMESTRES FALTAM PARA VOCÊ SE FORMAR?</h2>
            
            <form>
              <div class="mb-3">
                <label class="form-label">Informe seu nome:</label>
                <input type="text" class="form-control" name="nome" required
                       pattern="[A-Za-zÀ-ÿ\s]{2,}" 
                       oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '')">
                <div class="form-text">Somente letras, acentos e espaços são permitidos.</div>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Informe seu RA:</label>
                <input type="text" class="form-control" name="ra" required
                       pattern="[0-9]{13}" 
                       maxlength="13"
                       oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                <div class="form-text">Somente números são permitidos.</div>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Informe seu semestre atual:</label>
                <input type="number" class="form-control" name="semestre" min="1" max="6" required>
              </div>
              
              <div class="mb-3">
                <label class="form-label">Digite um número de 0 a 10:</label>
                <input type="number" class="form-control" name="numero" min="0" max="10" required>
              </div>
              
              <div class="d-flex gap-2">
                <button type="submit" formaction="resultado.php" formmethod="get" class="btn btn-outline-primary flex-fill">
                  Enviar (GET)
                </button>
                <button type="submit" formaction="resultado.php" formmethod="post" class="btn btn-outline-success flex-fill">
                  Enviar (POST)
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- Iniciar o PHP no terminal: php -S localhost:8000 -->
