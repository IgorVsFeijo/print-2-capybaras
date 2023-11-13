<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container">
      <main>
        <div class="row">
  <section class="col-lg-12 col-md-12 col-sm-12">
    <img src="http://placekitten.com/800/250" alt="foto de gato">
  </section>
  <article class="col-lg-8 col-md-6 col-sm-12">
      <h2>Atribuições da Ouvidoria</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada dapibus. Fusce ut tellus orci. Proin tincidunt dolor quis sagittis blandit. Donec rhoncus enim vitae nunc lacinia,at aliquet tellus convallis. In maximus quis enim auctor mollis. Duis pharetra mollis urna quissagittis. Ut sagittis cursus purus in blandit. Praesent vehicula rutrum est at consectetur. Nullam acsollicitudin turpis. Cras suscipit libero quis lectus tincidunt, nec tristique dui placerat. Phasellus at massa eget libero rhoncus pellentesque.</p>
      <p>
  </article>
  <aside class="col-lg-4 col-md-6 col-sm-12">
    <h2>Sua Voz nos Ajuda</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada dapibus. Fusce ut tellus orci. Proin tincidunt dolor quis sagittis blandit. Donec rhoncus enim vitae nunc lacinia,at aliquet tellus convallis. In maximus quis enim auctor mollis. Duis pharetra mollis urna quissagittis. Ut sagittis cursus purus in blandit. Praesent vehicula rutrum est at consectetur. Nullam acsollicitudin turpis. Cras suscipit libero quis lectus tincidunt, nec tristique dui placerat. Phasellus at massa eget libero rhoncus pellentesque.</p>
    <p>
  </aside>
</div>

<div class="row">
  <section class="col-lg-12 col-md-12 col-sm-12">

    <form class="row g-4">
      <div class="col-md-8">
        <label for="inputName4" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="inputName4">
      </div>
      <div class="col-md-4">
        <label for="inputName4" class="form-label">Telefone:</label>
        <input type="text" class="form-control" id="inputName4" placeholder="(xx)xxxxx-xxxx">
      </div>
      <div class="col-12">
        <label for="inputEmail4" class="form-label">Email:</label>
        <input type="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-12">
        <label for="inputTextarea" class="form-label">Sugestões:</label>
        <textarea type="text" class="form-control" id="inputTextarea" placeholder="Digite aqui os seus objetivos ou os objetivos do grupo"></textarea>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
      </div>
    </form>
  </section>
</div>
</main>
    </div>

    <?php
      include 'includes/inc_footer.php';
    ?>
    <!-- Fim Footer -->

        <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
    
  </body>
</html>
