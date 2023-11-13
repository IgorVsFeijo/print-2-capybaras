<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cultura - Agendamento</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container text-center">
        <main>
            <article class="col-12">
                <h2 class="hide">Article - h2</h2>
                <div class="row">
                  <section class="col-6">
                      <h2>Programe o seu espetáculo aqui!</h2>
                      <p>O espaço para apresentação está localizado na Brasital. Escolha uma sala, data e cheque a disponibilidade para preparar o ambiente e agendar o seu espetáculo.</p>
                      <div class="row g-4">
                        <label for="inputName4" class="form-label">Nome do Artista/Grupo</label>
                        <input type="text" class="form-control" id="inputName4">
                      </div>
                  </section>
                  <section class="col-6">
                      <h2 class="hide">Section - h2</h2>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">LOCAL</th>
                            <th scope="col">DATA</th>
                            <th scope="col">DISPONIBILIDADE</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr>
                              <td>lipsum</td>
                              <td>lipsum</td>
                              <td>lipsum</td>
                          </tr>
                          <tr>
                              <td>lipsum</td>
                              <td>lipsum</td>
                              <td>lipsum</td>
                          </tr>
                          <tr>
                              <td>lipsum</td>
                              <td>lipsum</td>
                              <td>lipsum</td>
                          </tr>
                          <tr>
                              <td>lipsum</td>
                              <td>lipsum</td>
                              <td>lipsum</td>
                          </tr>
                          <tr>
                              <td>lipsum</td>
                              <td>lipsum</td>
                              <td>lipsum</td>
                          </tr>
                          <tr>
                              <td>lipsum</td>
                              <td>lipsum</td>
                              <td>lipsum</td>
                          </tr>
                        </tbody>
                      </table>
                  </section>
                </div>
                <section>
                    <h2 class="hide">Section - h2</h2>
                    <form class="row g-3">
                      
                      <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputPhone4" class="form-label">Telefone para Contato</label>
                        <input type="tel" class="form-control" id="inputPhone4" placeholder="(00)00000-0000">
                      </div>
                        <label class="g-4">
                            <button class="btn btn-secondary">ENVIAR</button>
                        </label>
                    </form>
                </section>
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