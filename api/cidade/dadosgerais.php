<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>São Roque - Dados Gerais</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <!-- Inicio Header -->

    <?php
    include '../includes/inc_header.php';
  ?>

<!-- Fim Header -->

  <main id="dados-gerais">
    <article class="container-lg">

      <!-- Título do Artigo -->

      <hgroup>
        <h1>DADOS GERAIS</h1>
        <p>Informações Úteis</p>
      </hgroup>

      <!-- Inicio da sessão de informações em formato Dashboard -->
      <section class="dashboard-dadosgerais row row-cols-md-2">
        <h2 class="d-none">Sessão de Informações</h2>
        <!-- Informações Gerais -->
        <section class="dashboard-informacoes-gerais col-md-4">
          <h3>Informações Gerais</h3>
          <ul class="list-unstyled">
            <li><strong>Tipologia:</strong> Mista (atividade turística, agrícola e vinícola)</li>
            <li><strong>Gentílico:</strong> São-roquense</li>
            <li><strong>População estimada:</strong> 79.484
            (IBGE 2022)</li>
            <li><strong>DDD:</strong> (11)</li>
            <li><strong>Área:</strong> 306,908 Km²</li>
            <li><strong>Altitude:</strong> 771m</li>
            <li><strong>CEP:</strong> 181300-000</li>
          </ul>
        </section>

        <div class="flex-grow-1">
          <div class="row row-cols-md-2">
            <section id="aniversario-da-cidade-dashboard">
              <h3>Aniversário da Cidade</h3>
              <p>16 de Agosto</p>
            </section>
            <section id="clima-dashboard">
              <h3>Clima:</h3>
              <p>Temperado</p>
            </section>
          </div>
          <section id="distancias-dashboard" class="row row-cols-md-2">
            <div>
              <h3>Distancias</h3>
              <ul class="list-unstyled">
                <li>Mairinque – 10</li>
                <li>Alumínio – 28</li>
                <li>Sorocaba – 55</li>
                <li>São Paulo – 60</li>
              </ul>
            </div>
            <picture><img src="https://placekitten.com/200/350" alt=""></picture>
          </section>
        </div>
        <section id="dashboard-relevo" class="col-md-8 row row-cols-md-2">
          <div>
            <h3>Relevo</h3>
            <p>Caracterizado por planaltos ricos e vales profundos, com terras férteis que se tornaram o berço da
              tradição vinícola de São Roque. A cidade é cortada pelo Rio Aracaí e por seus afluentes.</p>
          </div>
          <picture><img src="https://placekitten.com/250/200" alt=""></picture>
        </section>
        <section id="bioma-dashboard" class="w-auto flex-grow-1">
          <h3>Bioma: Mata Atlantica</h3>
          <picture><img src="https://placekitten.com/200/150" alt=""></picture>
        </section>
      </section>
      <!-- Fim da sessao de informações em formato Dashboard -->

      <!-- Inicio da Secao Enderecos Uteis -->

      <section id="enderecos-uteis">
        <h2 class="titulo-sessao">ENDEREÇOS ÚTEIS</h2>
        <div class="row row-cols-md-3">
          <section>
            <h3>LOCAL 1</h3>
            <picture><img src="https://placekitten.com/200/350" alt=""></picture><a href=""
              class="link-mapa d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe maiores delectus
              mollitia? Magnam voluptas officia natus debitis qui quae laudantium doloremque animi libero? Fugiat enim,
              quae temporibus necessitatibus doloribus nam?</a>
          </section>
          <section>
            <h3>LOCAL 2</h3>
            <picture><img src="https://placekitten.com/200/350" alt=""></picture><a href=""
              class="link-mapa d-block">Commodi deleniti nam ullam sit totam, quae aperiam, facilis repellat repellendus
              dolore corrupti nostrum illo aliquid ad, unde esse blanditiis velit eligendi provident sapiente qui
              asperiores? Labore dolorem natus nemo?</a>
          </section>
          <section>
            <h3>LOCAL 3</h3>
            <picture><img src="https://placekitten.com/200/350" alt=""></picture><a href=""
              class="link-mapa d-block">Eius corporis ullam sunt temporibus totam! Molestias suscipit voluptate aut
              ullam commodi similique quo beatae distinctio quidem placeat doloribus veritatis expedita labore
              doloremque sapiente praesentium, neque eius adipisci sunt officiis!</a>
          </section>
        </div>
      </section>

    </article>
  </main>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

</body>

</html>