<!DOCTYPE html>
<html lang="pt-br">

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

<body>

    <!-- Inicio Main -->

    <main id="home-principal" class="container-lg p-3">
      <article id="secoes-portais" class="row row-cols-2 gy-3">
        <!--Inicio article das secoes portais-->

        <h1 class="d-none">Áreas do Portal São Roque</h1>

        <div class="col-12 col-md-7">
            <section class="prefeitura">
              <!--Inicio secao prefeitura-->
              <picture class="img-home-princ"><img src="" alt=""></picture>
              <div>
                  <h2>Prefeitura SR</h2>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A, autem
                    exercitationem ratione eum nostrum veritatis labore impedit
                    voluptatibus, ipsam id quisquam natus repellat minus totam.
                    Perferendis tempore esse nisi quod!
                  </p>
              </div>
            </section>
        </div>

        <a href="cidade/index.php" class="col-12 col-md-5">
          <section class="cidade">
            <!--Inicio secao cidade-->
            <picture class="img-home-princ"><img src="" alt=""></picture>
            <div>
                <h2>Cidade</h2>
                <p>
                  Magnam accusantium quod eligendi. Quasi sint iure iste
                  necessitatibus adipisci iusto explicabo ullam odio, vitae nihil
                  veritatis voluptates, sunt hic sapiente id minus maxime quis
                  labore veniam laudantium consequatur reprehenderit.
                </p>
            </div>
          </section>
        </a>

        <a href="cidadao/index.php">
          <section class="cidadao">
            <!--Inicio secao ciadadao-->
            <picture class="img-home-princ"><img src="" alt=""></picture>
            <div>
                <h2>Cidadão</h2>
                <p>
                  Numquam saepe excepturi, illum obcaecati expedita perferendis. Vel
                  ipsa blanditiis, asperiores quos magnam dicta optio officia
                  tempora voluptate quibusdam reprehenderit Vel?
                </p>
            </div>
          </section>
        </a>

        <div class="cultura-e-turismo row mx-0 gy-3">
          <a href="cultura/index.php">
            <section class="cultura">
              <!--Inicio secao cultura-->
              <picture class="img-home-princ"><img src="https://placekitten.com/632/197" alt=""></picture>
              <div>
                  <h2>Cultura</h2>
                  <p class="d-none d-md-block">
                    Officia dolorum quia quibusdam molestias nam nemo esse quo error
                    commodi cumque!
                  </p>
              </div>
            </section>
          </a>
          <a href="turismo/index.php">
            <section class="turismo">
              <!-- Inicio secao turismo -->
              <picture class="img-home-princ"><img src="https://placekitten.com/632/197" alt=""></picture>
              <div>
                  <h2>Turismo</h2>
                  <p class="d-none d-md-block">
                    Minus, repellendus ut accusamus similique ad incidunt sunt
                    voluptatibus quaerat laudantium, beatae ipsam veritatis.
                  </p>
              </div>
            </section>
          </a>
        </div>

        <a href="governo/index.php">
          <section class="governo">
            <!--Inicio secao governo-->
            <picture class="img-home-princ"><img src="" alt=""></picture>
            <div>
                <h2>Governo</h2>
                <p>
                  Recusandae natus incidunt tempora dolore delectus odit, veniam
                  debitis illo odio similique ad iure reprehenderit, est ipsam nam
                  distinctio dolores magnam nemo quidem molestias.
                </p>
            </div>
          </section>
        </a>

        <a href="empresa/index.php">
          <section class="empresa">
            <!-- inicio secao empresa -->
            <picture class="img-home-princ"><img src="" alt=""></picture>
            <div>
                <h2>Empresa</h2>
                <p>
                  Temporibus cupiditate dolorum veritatis recusandae maiores
                  accusantium, reiciendis eligendi ullam, at vero similique dolorem,
                  distinctio nesciunt.
                </p>
            </div>
          </section>
        </a>
      </article>

      <!-- Fim article secoes portais -->

      <!-- Inicio da secao veja mais  -->

      <section class="veja-mais">
        <h3>Veja Mais</h3>
        <ul>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ul>
      </section>
    </main>

    <!-- Fim da secao veja mais -->

    <!-- Fim Main -->

    <!-- Inicio Footer -->
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
    <!-- Fim Footer -->

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
  </body>
</html>
