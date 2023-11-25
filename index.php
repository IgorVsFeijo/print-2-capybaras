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
          <section class="prefeitura position-relative">
            <!--Inicio secao prefeitura-->
            <picture class="img-home-princ"><img src="https://placekitten.com/741/610" alt=""></picture>
            <div>
              <h2>Prefeitura SR</h2>
              <p>
              A Prefeitura de São Roque é o órgão de maior autoridade na cidade de São Roque e responsável pelos processos, protocolos, zelo, proteção e administração da cidade, promovendo vagas de emprego para a população e ajudando a manter a estabilidade e a segurança. Conheça mais sobre as diferentes áreas que abrangem a nossa cidade.
              </p>
            </div>
          </section>
        </div>

        <a href="cidade/index.php" class="col-12 col-md-5">
          <section class="cidade">
            <!--Inicio secao cidade-->
            <picture class="img-home-princ"><img src="htpps://placekitten.com/522/610" alt=""></picture>
            <div>
              <h2>Cidade</h2>
              <p>
              Conheça a nossa história e tudo o que São Roque representa para o seu povo e para o Estado de São Paulo.
              </p>
            </div>
          </section>
        </a>

        <a href="cidadao/index.php">
          <section class="cidadao">
            <!--Inicio secao ciadadao-->
            <picture class="img-home-princ"><img src="htpps://placekitten.com/632/610" alt=""></picture>
            <div>
              <h2>Cidadão</h2>
              <p>
              Acesse a Área do Cidadão para conhecer e ter acesso a todos os serviços públicos e privados que podemos oferecer para você.
              </p>
            </div>
          </section>
        </a>

        <div class="cultura-e-turismo row mx-0 gy-3">
          <a href="cultura/index.php">
            <section class="cultura position-relative">
              <!--Inicio secao cultura-->
              <picture class="img-home-princ"><img src="https://placekitten.com/632/197" alt=""></picture>
              <div>
                <h2>Cultura</h2>
                <p class="d-none d-md-block">
                Conheça mais sobre a rica e diversa cultura de São Roque, a Terra do Vinho!
                </p>
              </div>
            </section>
          </a>
          <a href="turismo/index.php">
            <section class="turismo position-relative">
              <!-- Inicio secao turismo -->
              <picture class="img-home-princ"><img src="https://placekitten.com/632/197" alt=""></picture>
              <div>
                <h2>Turismo</h2>
                <p class="d-none d-md-block">
                Várias atrações e locais aguardam você em São Roque! Aproveite para conhecer todos e se programar para um fim de semana divertido em nossa cidade!
                </p>
              </div>
            </section>
          </a>
        </div>

        <a href="governo/index.php">
          <section class="governo">
            <!--Inicio secao governo-->
            <picture class="img-home-princ"><img src="htpps://placekitten.com/632/610" alt=""></picture>
            <div>
              <h2>Governo</h2>
              <p>
              Veja mais sobre o campo político são-roquense e todos os projetos de lei em andamento.
              </p>
            </div>
          </section>
        </a>

        <a href="empresa/index.php">
          <section class="empresa">
            <!-- inicio secao empresa -->
            <picture class="img-home-princ"><img src="htpps://placekitten.com/632/610" alt=""></picture>
            <div>
              <h2>Empresa</h2>
              <p>
              Quer começar no ramo comercial? Acesse a área de empresas para entender todos os requisitos para implementar o seu negócio.
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

    <?php
    include 'includes/inc_footer.php';
    ?>

    <!-- Fim Footer -->

    <?php
    include 'includes/inc_bootstrap_js.php';
    ?>
  </body>

</html>