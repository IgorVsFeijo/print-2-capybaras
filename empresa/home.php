<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>

</head>
<body class="pages-empresa">
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <figure>
        <img src="https://placekitten.com/200/300" alt="gatinho">
    </figure> 

    <div class="row text-center">

    <figure class="col-lg-4 col-md-6 col-sm-12">
        <img src="https://placekitten.com/200/300" alt="gatinho">
    </figure>

    <aside class="col-lg-8 col-md-6 col-sm-12">
        <article>
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam qui, nisi corporis, perferendis provident dignissimos, illum consectetur error autem amet maxime quisquam eveniet voluptatum quia temporibus hic cupiditate quas. Non.</p>
        </article>
    </aside>

    </div>

    <hr>

    <section>
        <h3 class="hide">H3- Section</h3>
        <figure>
            <img src="https://placekitten.com/200/300" alt="gatinho">
        </figure>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <p>Veja Mais</p>
    </section>

    <hr>

    <div class="row text-center">

    <section class="col-lg-6 col-md-6 col-sm-12">
        <h3 class="hide">H3- Section</h3>
        <nav>
            <a href="">Cadastro de Pessoa Juridica -></a>
        </nav>
    </section>

    <section class="col-lg-6 col-md-6 col-sm-12">
        <h3 class="hide">H3- Section</h3>
        <nav>
            <a href="">Aprovação de Projetos
            -></a>
        </nav>
    </section>

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
