<!DOCTYPE html>
<html lang="PT-BR">

<?php
function incluirHeader($titulo) {
    include('includes/inc_head.php');
}
$titulo = "Título da Página";
incluirHeader($titulo);
?>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

  <main id="sessao-hino">
    <!-- Inicio do Artigo -->
    <article class="container-lg">

      <hgroup>
        <h1>HINO DE SÃO ROQUE</h1>
        <p>Canto de Exaltação à São Roque</p>
      </hgroup>

      <div class="titulo-sessao3"></div>

      <section class="cidade-sessao-retangulares">
        <h3 class="titulo-sessao">VÍDEO</h3>
        <figure>
          <iframe src="https://www.youtube.com/embed/DrYRJNrCN3U?si=0TtCDzLd1wE_-WGR" title="YouTube video player"
            class="flex-grow-1"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
            <figcaption>
              <p>Música: Cândido Francisco de Camargo (Neto)</p>
              <p>Letra: Edson João Gonçalves (Edson D’aisa)</p>
            </figcaption>
        </figure>
      </section>

      <section>
        <h3 class="titulo-sessao">LETRA</h3>
        <div class="row row-cols-md-2">
          <div>
            <p>
              Surge estância altaneira<br>
              Um sol ardente por ti<br>
              Do verde das tuas matas<br>
              Brotam, águas do Aracaí<br>
            </p>
            <p>
              Embala um sono sereno <br>
              Berço de colo moreno <br>
              Poetas da natureza são índios <br>
              Do Vale Carambeí <br>
            </p>
            <p>
              O grande eleva teu nome <br>
              O forte luta até o fim <br>
              Rio de sangue nas veias <br>
              Da terra onde nasci <br>
            </p>
            <p>
              São Roque, São Roque! <br>
              Agosto dourado de Ipê <br>
              São Roque, São Roque! <br>
              Guardo em meu peito você <br>
            </p>
          </div>
          <div>

            <p>
              Da serra do Taxaquara <br>
              Ao morro do Saboó <br>
              Do Ibaté se avista <br>
              A surgir: Minha gente paulista <br>
            </p>

            <p>
              O teu céu cor de anil resplandece <br>
              Sob a luz do Cruzeiro do Sul <br>
              Homens frutos da tua videira <br>
              Semeando o chão de Vaz Guaçú <br>
            </p>
            <p>

              Herdeiros das tuas glórias <br>
              Cantam o teu esplendor <br>
              Filhos do solo sagrado <br>
              Bebem na fonte o amor <br>
            </p>

            <p>
              São Roque, São Roque! <br>
              Agosto dourado de Ipê <br>
              São Roque, São Roque! <br>
              Guardo em meu peito você <br>
            </p>
          </div>
        </div>
      </section>
    </article>
    <!-- Fim do Artigo -->
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

    </footer>

    <!-- Fim do Footer  -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>