<!DOCTYPE html>
<html lang="PT-BR">

<?php

$titulo = "Título da Página";

include('includes/inc_head.php');

?>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

  <main id="pessoas-notaveis" class="container-lg">

    <article>
      <!-- Introducao do Artigo Pessoas Notaveis -->
      <div class="pn-introducao">
        <h1>
          PESSOAS <span class="titulo-h1-pessoas">Notáveis</span>
        </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, inventore tempore! Unde eius, totam
          consequatur perferendis recusandae doloremque ducimus laudantium voluptatibus possimus dignissimos hic
          asperiores. Sapiente odit ipsam adipisci voluptatum?</p>
        <ul>
          <li>Pessoa 1 da Silva</li>
          <li>Pessoa 2 da Silva</li>
          <li>Pessoa 3 da Silva</li>
          <li>Pessoa 4 da Silva</li>
        </ul>
      </div>

      <!-- Inicio Sessão Cards Pessoas Notaveis -->

      <section class="sessao-cards-pessoas-notaveis">
        <h2 class="titulo-sessao">Cartões Pessoas Notáveis</h2>
        <section class="card">
          <figure class="card-img"><img src="https://placekitten.com/400/500" alt=""></figure>
          <div class="card-body">
            <hgroup>
              <h3 class="card-title">NOME</h3>
              <p class="card-subtitle">Frase Notável</p>
            </hgroup>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, porro labore
              adipisci minus repellat id tenetur repellendus pariatur aut accusantium quidem dolorem rerum atque
              recusandae nostrum, magnam cupiditate fugiat dolore.</p>
            <p class="card-text">Doloremque error, dolorem accusamus corporis ab quo sequi placeat quaerat sunt in nemo
              adipisci amet at itaque! Vel iusto quidem, delectus quaerat alias magni cumque necessitatibus eveniet
              voluptatibus temporibus eum!</p>
            <aside>
              <ul class="list-group">
                <li class="list-group-item">Título Notável 1</li>
                <li class="list-group-item">Título Notável 2</li>
                <li class="list-group-item">Título Notável 3</li>
              </ul>
            </aside>
          </div>
        </section>
        <section class="card">
          <div class="card-body">
            <hgroup>
              <h3 class="card-title">NOME</h3>
              <p class="card-subtitle">Frase Notável</p>
            </hgroup>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit sunt perferendis
              aliquam voluptate deserunt quasi debitis commodi rerum iusto earum beatae provident soluta consequuntur,
              tempora repellendus veniam numquam libero perspiciatis?</p>
            <p class="card-text">Non, ullam debitis quidem consequatur quam soluta neque, perferendis temporibus iste
              distinctio ad nobis nulla placeat, nesciunt vel voluptate alias aspernatur iusto et recusandae nisi
              incidunt fuga libero earum! Dolores.</p>
            <aside>
              <ul class="list-group">
                <li class="list-group-item">Título Notável 1</li>
                <li class="list-group-item">Título Notável 2</li>
                <li class="list-group-item">Título Notável 3</li>
              </ul>
            </aside>
          </div>
          <figure class="card-img"><img src="https://placekitten.com/400/500" alt=""></figure>
        </section>
      </section>

      <!-- Fim Sessão Cards Pessoas Notaveis -->

      <!-- Inicio da Sessao São Roque na Mídia -->
      <section class="sessao-sao-roque-na-midia">
        <h2 class="titulo-sessao">SÃO ROQUE NA MÍDIA</h2>
        <div class="row row-cols-md-3">
          <section class="card noticia-pessoa-notavel">
            <div class="card-body order-1">
              <h3 class="card-title">NOTÍCIA 1</h3>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, alias. Quod libero eveniet temporibus voluptate nostrum soluta mollitia similique deserunt ipsa tempora. Aspernatur inventore, cum expedita architecto perferendis impedit tempore!</p>
            </div>
            <figure class="card-img-top"><img src="https://placekitten.com/400/350" alt=""></figure>
          </section>
          <section class="card noticia-pessoa-notavel">
            <div class="card-body order-1">
              <h3 class="card-title">NOTÍCIA 2</h3>
              <p class="card-text">Quia voluptate repellat dolorem sunt minus unde veritatis ea necessitatibus magnam harum id atque dolorum culpa, maxime error consequatur sequi quas similique aspernatur! Doloremque est asperiores perferendis ea mollitia veritatis.</p>
            </div>
            <figure class="card-img-top"><img src="https://placekitten.com/400/350" alt=""></figure>
          </section>
          <section class="card noticia-pessoa-notavel">
            <div class="card-body order-1">
              <h3 class="card-title">NOTÍCIA 3</h3>
              <p class="card-text">Fugiat, provident, quaerat accusamus consequuntur a nostrum ut, corrupti placeat enim saepe consequatur nesciunt alias optio! Ipsa accusantium ut sequi. Culpa soluta esse in rerum dolore quam omnis! Neque, quis?</p>
            </div>
            <figure class="card-img-top"><img src="https://placekitten.com/400/350" alt=""></figure>
          </section>
        </div>
        <a href="" class="btn btn-secondary btn-veja-mais">VEJA MAIS</a>
      </section>
      <!-- Fim da Sessao São Roque na Mídia -->

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

    </footer>

    <!-- Fim do Footer  -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>