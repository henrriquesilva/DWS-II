<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Praticando 1</title>
  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
  <!-- Titulo do formulário -->
  <div class="container">
  <h1 class=" p-3 text-primary">Exercício 1 - Formulario gerador de página!</h1>
</div>
<hr>
  <div class="container">
  <!-- Formulario ocupando toda a tela -->
  <div class="container-fluid">
    <!-- formulario -->
    <form action="destino.php" method="post">
      <!-- label horizontal -->



<div class="float-start">



      <div class="row mb-3">
        <label for="texto" class="col-form-label">Titulo da página:</label>
        <div class="col-sm-10">
          <input type="text" id="title" name="title" class="form-control">
        </div>
      </div>

      <div class="row mb-3">
        <label for="mensagem" class="col-form-label">Corpo:</label>
        <div class="col-sm-10">
          <input type="textarea" id="texto" name="texto" class="form-control"></input>
        </div>
      </div>

      <div class="row mb-3">
        <label for="cor" class="col-form-label">Cor do texto:</label>
        <div class="col-sm-10">
          <input type="color" id="cor" name="cor" class="form-control">
        </div>
      </div>


      <button type="submit" class="btn btn-outline-primary btn-lg">ENVIAR</button>


      </div>

<div class="float-none">


      <div class="row mb-3">
        <label for="url_img" class="col-form-label">URL de uma imagem:</label>
        <div class="col-sm-10">
          <input type="url" id="url_img" name="url_img" class="form-control">
        </div>
      </div>

      <div class="row mb-3">
        <label for="url" class="col-form-label">URL de link:</label>
        <div class="col-sm-10">
          <input type="text" id="url" name="url" class="form-control">
        </div>
      </div>

      <div class="row mb-3">
        <label for="corbg" class="col-form-label">Cor do fundo da página:</label>
        <div class="col-sm-10">
          <input type="color" id="corbg" name="corbg" class="form-control">
        </div>
      </div>

      <button type="reset" class="btn btn-outline-danger btn-lg">APAGAR</button>
    </form>
  </div>

  </div>
    </div>
  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>