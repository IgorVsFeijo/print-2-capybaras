<!DOCTYPE html>
<html lang="pt-BR">

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
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <div class="text-center">
        <main>
            <figure>
                <img class="img-fluid" src="https://placekitten.com/500/200" alt="imagem inicial da página">
            </figure>
            <article>
                <h2>Cidade de Cultura</h2>
                <p>Fonte de renda fundamental para a nossa cidade e um de nossos maiores orgulhos, a cidade de São Roque conta com uma série única de atividades, lugares e eventos tradicionais-culturais. Não apenas ajudando no crescimento financeiro, mas colocando a nossa cidade no mapa de São Paulo como uma das principais produtoras de vinho do estado.</p>
                <div class="col-12">
                    <h2>Notícias</h2>
                    <div class="col-4">
                        <section class="notícia_mobile">
                            <h2 class="hide">Section - h2</h2>
                            <figure>
                                <img src="/imgs/cultura/noticia1.jpg" alt="Primeira notícia">
                            </figure>
                            <p>Entenda mais a fundo sobre a Lei Paulo Gustavo</p>
                        </section>
                    </div>
                    <div class="col-4">
                        <section class="notícia_mobile">
                            <h2 class="hide">Section - h2</h2>
                            <figure>
                                <img src="/imgs/cultura/noticia2.jpeg" alt="Segunda Notícia">
                            </figure>
                            <p>Festival de Teatro Estudantil Vasco Barioni 2023 - Saiba mais sobre o evento!</p>
                        </section>
                    </div>
                    <div class="col-4">
                        <section class="notícia_mobile">
                            <h2 class="hide">Section - h2</h2>
                            <figure>
                                <img src="/imgs/cultura/noticia3.jpg" alt="Terceira Notícia">
                            </figure>
                            <p>Festival de Artes Catatau é sucesso entre as crianças na Brasital</p>
                        </section>
                    </div>
                </div>
            </article>
            <aside>
                <div>
                    <h2>Conheça Mais!</h2>
                    <section>
                        <h2 class="hide">Section - h2</h2>
                        <figure>
                            <img src="https://placekitten.com/260/180" alt="Cultura">
                        </figure>
                        <h4>Marcos Culturais</h4>
                    </section>
                    <section>
                        <h2 class="hide">Section - h2</h2>
                        <figure>
                            <img src="https://placekitten.com/260/180" alt="Eventos">
                        </figure>
                        <h4>Festas Tradicionais</h4>
                    </section>
                </div>
            </aside>
        </main>

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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</html>