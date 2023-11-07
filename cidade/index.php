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

  <main class="container-lg home-cidade">
    <article>
      <hgroup>
        <h1>A CIDADE</h1>
        <p>de São Roque</p>
      </hgroup>

      <section id="hc-sessao-historia">
        <h2>HISTÓRIA</h2>
        <figure>
          <img src="https://placekitten.com/600/300" alt="">
          <figcaption>LEGENDA DA IMAGEM</figcaption>
        </figure>
        <p>São Roque, frequentemente referida como a "Cidade do Vinho", carrega uma rica tapeçaria de histórias que remonta à sua fundação em 1657. Ao mergulhar em sua trajetória, descobre-se um município que prosperou através da expansão ferroviária, da agricultura resiliente e de uma cultura vibrante, tornando-se um pilar histórico e cultural no estado de São Paulo. Ao explorar a história de São Roque, somos convidados a uma viagem no tempo, revisitando os marcos, as pessoas e os eventos que moldaram esta cidade única.
        </p>
        <a href="historia.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
      </section>

      <section id="hc-sessao-pessoas">
        <h2>PESSOAS NOTÁVEIS</h2>
        <section class="hc-cards-pessoas row row-cols-md-3">
          <h3 class="d-none">Cartões Pessoas Notáveis</h3>
          <section class="hc-card-pessoa">
            <h2>Darcy Penteado</h2>
            <figure>
              <img src="https://placekitten.com/200/350" alt="">
              <figcaption>Artista Multifacetado</figcaption>
            </figure>
          </section>
          <section class="hc-card-pessoa">
            <h2>Emiko Takatatsu</h2>
            <figure>
              <img src="https://placekitten.com/200/350" alt="">
              <figcaption>Mestra do Tênis de Mesa</figcaption>
            </figure>
          </section>
          <section class="hc-card-pessoa">
            <h2>Juca de Oliveira</h2>
            <figure>
              <img src="https://placekitten.com/200/350" alt="">
              <figcaption>Dramaturgo Consagrado</figcaption>
            </figure>
          </section>
        </section>
        <p>São Roque não só é reconhecida por sua história e cultura ricas, mas também por ser berço de personalidades que se destacaram em diversas áreas. Na página "Pessoas Notáveis", celebramos e revisitamos as trajetórias de figuras ilustres que, com seu talento e dedicação, deixaram um legado inestimável para a cidade e para o Brasil. Conheça esses ícones e inspire-se em suas histórias.</p>
        <a href="pessoasnotaveis.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
      </section>

      <section id="hc-sessao-dados">
        <h2 class="titulo-sessao">DADOS GERAIS</h2>

        <div class="row row-cols-md-2">
          <div>
            <figure><img src="https://placekitten.com/300/300" alt=""><img src="https://placekitten.com/80/80" alt="">
            </figure>
          </div>
          <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic iusto sed consequatur rem saepe officiis,
              aspernatur provident velit fuga eius voluptas odio temporibus enim labore vero. Voluptas exercitationem
              velit molestias?</p>
            <ul>
              <li>Dado Geral 1</li>
              <li>Dado Geral 2</li>
              <li>Dado Geral 3</li>
              <li>Dado Geral 4</li>
              <li>Dado Geral 5</li>
            </ul>
          </div>
        </div>
        <a href="dadosgerais.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
      </section>

      <section id="hc-sessao-simbolos">
        <h2 class="titulo-sessao">BRASÃO E BANDEIRA</h2>
        <div class="row row-cols-2">
          <section>
            <h3>BRASÃO</h3>
            <img src="https://placekitten.com/400/400" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum optio at delectus voluptatem fugit,
              voluptatum nostrum atque possimus dolorum excepturi qui ut explicabo dolor dolore beatae eveniet error,
              omnis quis.</p>
          </section>
          <section>
            <h3>BANDEIRA</h3>
            <img src="https://placekitten.com/400/400" alt="">
            <p>Possimus, ipsa dolorem! Illo temporibus minus dolores harum, voluptate impedit eos. Architecto suscipit
              quasi blanditiis, vel fugit harum commodi enim aperiam voluptas eius sit perferendis autem dignissimos
              soluta amet aliquid?</p>
          </section>
        </div>
        <a href="simbolos.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
      </section>

      <section id="hc-sessao-hino">
        <h2>HINO DA CIDADE</h2>
        <div class="row row-cols-md-2">
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
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fuga ipsa temporibus suscipit provident
              molestias. Est accusantium autem consectetur in quaerat fugit delectus consequuntur repellat,
              reprehenderit hic, nulla dignissimos expedita!</p>
            <p>Odit accusamus, omnis perferendis quos necessitatibus cumque libero numquam nisi maiores reprehenderit
              similique aliquam officia suscipit deleniti quisquam fugit, debitis incidunt harum aspernatur obcaecati
              velit ab optio inventore! Et, harum.</p>
            <p>Soluta aut officiis voluptate repudiandae ducimus. Quae autem recusandae consequuntur accusantium
              architecto debitis ipsam repudiandae pariatur dicta tenetur. Esse, quas earum quos minus qui eaque
              praesentium exercitationem laudantium fugit perferendis.</p>
          </div>
        </div>
        <a href="hino.php" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>