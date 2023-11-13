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
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <div class="container text-center">
    <div class="row">
        <section class="col-lg-12 col-md-12 col-sm-12">
            <h1>Poder Executivo</h1>
        </section>
        <article class="col-lg-6 col-md-6 col-sm-12">
            <img src="http://placekitten.com/600/300" alt="foto de gato">
        </article>

        <aside class="col-lg-6 col-md-6 col-sm-12">

            <h2>PREFEITO</h2>

            <p>Fusce ut tellus orci. Proin tincidunt dolor quis sagittis blandit. Donec rhoncus enim vitae nunc lacinia,at aliquet tellus convallis. In maximus quis enim auctor mollis. Duis pharetra mollis urna quissagittis. Ut sagittis cursus purus in blandit. Praesent vehicula rutrum est at consectetur. Nullam acsollicitudin turpis. Cras suscipit libero quis lectus tincidunt, nec tristique dui placerat. Phasellus at massa eget libero rhoncus pellentesque.</p>
        </aside>
    </div>

    <div class="row">

        <section class="col-lg-6 col-md-6 col-sm-12">
            
            <h2>VICE - PREFEITO</h2>

            <p>Fusce ut tellus orci. Proin tincidunt dolor quis sagittis blandit. Donec rhoncus enim vitae nunc lacinia,at aliquet tellus convallis. In maximus quis enim auctor mollis. Duis pharetra mollis urna quissagittis. Ut sagittis cursus purus in blandit. Praesent vehicula rutrum est at consectetur. Nullam acsollicitudin turpis. Cras suscipit libero quis lectus tincidunt, nec tristique dui placerat. Phasellus at massa eget libero rhoncus pellentesque.</p>
        </section>

        <section class="col-lg-6 col-md-6 col-sm-12">
            <img src="http://placekitten.com/600/300" alt="foto de gato">
        </section>


    </div>
  </div>

  <!-- Inicio do Footer -->

  <footer>
    <div class="container-lg">
      <div class="d-flex align-items-center">
        <figure>
          <picture><img src="https://placekitten.com/200/150" alt=""></picture>
        </figure>
        <address class="flex-grow-1">
          Av. São Paulo, Taboão, 966
        </address>
        <div class="desenvolvido-por">
          <p>Desenvolvido pelas Carnívoras Capivaras da Justiça</p>
          <div>
            <a href="https://www.facebook.com/prefeituradesaoroque/?locale=pt_BR" target="_blank">
              <i class="bi bi-facebook btn"></i>
            </a>
            <a href="https://www.instagram.com/prefeituradesaoroque/" target="_blank">
              <i class="bi bi-instagram btn"></i>
            </a>
          </div>
          <small>Todos os direitos reservados.</small>
        </div>
      </div>
    </div>
    <div class="text-center p-2 w-100 barra-acess" id="barra-acessibilidade2">
      <div class="btn-group acess row justify-content-center">
        <button type="button" class="btn btn-acessibilidade col-1">
          <img src="https://placekitten.com/30/30" alt="place kitten maneiro" />
        </button>
        <button type="button" class="btn btn-acessibilidade col-1">
          <img src="https://placekitten.com/30/30" alt="place kitten maneiro" />
        </button>
        <button type="button" class="btn btn-acessibilidade col-1">
          <img src="https://placekitten.com/30/30" alt="place kitten maneiro" />
        </button>
        <button type="button" class="btn btn-acessibilidade col-1">
          <img src="https://placekitten.com/30/30" alt="place kitten maneiro" />
        </button>
        <button type="button" class="btn btn-acessibilidade col-1">
          <img src="https://placekitten.com/30/30" alt="place kitten maneiro" />
        </button>
      </div>
    </div>
  </footer>

  <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>

</body>
</html>