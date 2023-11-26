<!DOCTYPE html>
<html lang="zxx">

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
    <div class="row">
        <section class="col-lg-12 col-md-12 col-sm-12">
            <h1>GOVERNO</h1>
        </section>
        <article class="col-lg-8 col-md-6 col-sm-12">
            <h1>Legislação Municipal</h1>
            <img src="http://placekitten.com/600/300" alt="foto de gato">
            <p>Saiba mais sobre os projetos que estão em pauta na prefeitura da cidade, sobre as Leis de Diretrizes Orçamentárias, a Lei orgânica do Município e o Plano Plurianual da cidade de São Roque. <a href="legislacao.php">Leia Mais</a> 
            </p>
        </article>

        <aside class="col-lg-4 col-md-6 col-sm-12 aside_home_gov">
          <div class="container text-center">
            <h1>Secretarias</h1>
            <figure class="col-lg-4 col-md-6 col-sm-12">
                <img src="http://placekitten.com/400/300" alt="foto de gato">
                <figcaption> <a href="secretarias.php">Leia mais</a></figcaption>
            </figure>
            <figure class="col-lg-4 col-md-6 col-sm-12">
                <img src="http://placekitten.com/400/300" alt="foto de gato">
                <figcaption> <a href="secretarias.php">Leia mais</a></figcaption>
            </figure>
          </div>

        </aside>
    </div>

    <div class="row">
        <section class="col-lg-6 col-md-6 col-sm-12">
            <H2>PODER EXECUTIVO</H2>
            <figure>
                <img src="http://placekitten.com/300/200" alt="foto de gato">
            </figure>
            <p>Saiba mais sobre o prefeito e o vice-prefeito da cidade de São Roque, um pouco da biografia e história das pessoas que estão a frente do governo você pode encontrar na página do poder executivo. <a href="prefeitura.php">Saiba Mais</a></p>
        </section>
        <section class="col-lg-6 col-md-6 col-sm-12">
            <H2>PODER LEGISLATIVO</H2>
            <figure>
                <img src="http://placekitten.com/300/200" alt="foto de gato">
            </figure>
            <p>Saiba mais sobre quem compõe a Câmara de Vereadores da Cidade e um pouco sobre a importância dessa instituição nas decisões tomadas para melhoria de São Roque <a href="legislativo.php">Saiba Mais</a></p>
        </section>
       
    </div>
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
