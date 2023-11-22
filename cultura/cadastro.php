<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cultura - Cadastro</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>
    <link rel="stylesheet" href="../style/cultura.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container text-center">
        <main>
            <article>
                <h2>Faça seu cadastro!</h2>
                <form class="row g-4">
                  <div class="col-md-6">
                    <label for="inputName4" class="form-label">Nome do Artista/Grupo</label>
                    <input type="text" class="form-control" id="inputName4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputTextarea" class="form-label">Objetivos</label>
                    <textarea type="text" class="form-control" id="inputTextarea" placeholder="Digite aqui os seus objetivos ou os objetivos do grupo"></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Área de Atuação</label>
                    <select id="inputState" class="form-select">
                      <option selected>...</option>
                      <option>Teatro</option>
                      <option>Bate-Papo</option>
                      <option>Oficina</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Nº de integrantes</label>
                    <select id="inputState" class="form-select">
                      <option selected>0</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10+</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">ENVIAR</button>
                  </div>
                </form>
            </article>
        </main>
    </div>
  <!-- Inicio do Footer -->

    <?php
      include '../includes/inc_footer.php';
    ?>

  <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>
</html>