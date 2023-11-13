<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

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
        <div class="row justify-content-start">
            <p class="col-2">lorem</p>
        </div>
        <article>
            <h1>h1 - Article</h1>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <figure>
                        <img src="http://placekitten.com/420/300" alt="Imagem Via Placeholder">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <figure>
                        <img src="http://placekitten.com/420/300" alt="Imagem Via Placeholder">
                    </figure>
                </section>
            </div>
        </article>

        <article>
          <h2 class="hide">h2 - Article</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <figure>
                        <img src="http://placekitten.com/420/300" alt="Imagem Via Placeholder">
                    </figure>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <figure>
                        <img src="http://placekitten.com/420/300" alt="Imagem Via Placeholder">
                    </figure>
                </section>
            </div>

            <div class="row">
                <section class="col-lg-12 col-md-12 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <figure>
                        <img src="http://placekitten.com/928/300" alt="Imagem Via Placeholder">
                    </figure>
                </section>
            </div>
        </article>
    </div>

  <!-- Inicio do Footer -->

    <?php
      include '../includes/inc_footer.php';
    ?>

  <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>
</body>

</html>