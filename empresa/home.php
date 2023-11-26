<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>
    <link rel="stylesheet" href="../style/empresa.css">

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <main class="container empresa pages-empresas">
        <div class="row text-start">
            <b><a href="../empresa/home.php">Home</a></b>
        </div>
      <figure class="text-center">
        <img src="https://placekitten.com/800/200" alt="gatinho" class="imagemcentral_empresas">
      </figure> 

      <div class="row text-center">
        <figure class="col-lg-4 col-md-6 col-sm-12">
            <img src="https://placekitten.com/300/300" alt="gatinho">
        </figure>
        <aside class="col-lg-8 col-md-6 col-sm-12">
            <article>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum neque non gravida egestas. In aliquam mauris non placerat hendrerit. Morbi dictum, mauris et feugiat rhoncus, urna enim bibendum magna, non posuere leo odio id libero. Nunc luctus urna ante, id maximus nisl sagittis laoreet. Morbi in nisi faucibus, iaculis felis nec, mattis nisl. Vivamus arcu augue, vestibulum et placerat et, mattis eget massa. Morbi a felis nec felis vestibulum suscipit id at diam. Aliquam pellentesque mauris in hendrerit mollis. Praesent tempus varius erat ac porttitor. Duis ornare ex nec pulvinar euismod. Nulla convallis ex metus, eget consectetur nulla lacinia in. </p>
            </article>
        </aside>
      </div>
      <hr>
      <section class="row text-center col-12">
        <h3 class="hide">H3- Section</h3>
        <div class="col-4">
          <figure>
              <img src="https://placekitten.com/200/300" alt="gatinho">
          </figure>
        </div>
        <div class="col-4">
          <h2>Lorem Ipsum</h2>
          <h2>Lorem Ipsum</h2>
          <h2>Lorem Ipsum</h2>
          <h2>Lorem Ipsum</h2>
          <h2>Lorem Ipsum</h2>
        </div>
          <a class="btn btn-vermais botao_empresa col-2" href="#">Ver mais</a>
      </section>

      <hr>

      <div class="row text-center col-12">
        <section class="col-6">
            <h3 class="hide">H3- Section</h3>
            <a href="../empresa/cadastro.php" class="link_home">Cadastro de Pessoa Juridica</a>
        </section>
        <section class="col-5">
            <h3 class="hide">H3- Section</h3>
            <a href="../empresa/aprovacao.php" class="link_home">Aprovação de Projetos</a>
        </section>
      </div>

    </main>
    

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
