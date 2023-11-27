<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - História</title>

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

    <main class="cidade-historia">
      <article class="container-lg">

        <!-- Título do Artigo -->
        <hgroup>
          <h1>A HISTÓRIA</h1>
          <p>de São Roque</p>
        </hgroup>

        <!-- Introdução do Artigo -->
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nulla, iste magni blanditiis non aliquam nisi. Sunt, aut provident deleniti laborum soluta consequatur debitis dolores. Aliquid architecto officiis voluptatem. Explicabo!</p>

        <!-- Inicio Sessão Origens e Fundação -->

        <section class="origens">
          <h2 class="titulo-sessao">Origens e Fundação</h2>
          <div class="row row-cols-2">
            <picture><img src="https://placekitten.com/400/450" alt=""></picture>
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut hic obcaecati quaerat consectetur quibusdam mollitia dignissimos repudiandae doloremque dolorem aliquam, cum fugiat, beatae saepe reprehenderit debitis ea commodi eaque deserunt.</p>
              <p>Fugit nemo itaque enim qui ratione magnam veniam tempore soluta? Aut laborum at fuga ratione labore quasi, hic praesentium cumque cum veniam cupiditate consequuntur vero, error aliquid itaque omnis magni.</p>
              <p>Aspernatur, cupiditate magni sed autem nulla officia exercitationem rerum natus ut ipsum iste eos, libero officiis ipsa, veniam eaque corrupti laudantium ratione excepturi possimus fugiat voluptatum repellendus reprehenderit accusamus. Reprehenderit.</p>
            </div>
          </div>
        </section>

        <!-- Fim da Sessão Origens e Fundação -->
        
        <!-- Inicio da Sessão Riqueza Agricola -->
        <section class="riqueza-agricola">
          <h2 class="titulo-sessao">Riqueza Agrícola</h2>
          <div class="card">
            <picture class="card-img-top"><img src="https://placekitten.com/900/500" alt=""></picture>
            <p class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit placeat tempora itaque assumenda inventore, suscipit fugit cupiditate iusto nesciunt, corporis culpa blanditiis aperiam expedita, eveniet dolor voluptatum repellendus laudantium. Porro.</p>
          </div>
        </section>

        <!-- Fim de Sessao Riqueza Agricola -->

        <!-- Inicio da sessão Cultura e Patrimonio -->
        <section class="cultura-e-patrimonio titulo-sessao">
            <h2>Cultura e Patrimônio</h2>
            <div class="row row-cols-2">
            <p class="col-12">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum qui obcaecati assumenda facilis temporibus in perspiciatis vero aperiam, ipsam architecto accusantium nobis, neque voluptas nemo libero? Esse ex cupiditate consequatur.</p>
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum id, enim at ad nobis in voluptatem! Ipsa, blanditiis. Amet expedita ad quidem facere quibusdam asperiores possimus dolorum ex atque debitis.</p>
              <p>Vero delectus, vel quaerat deleniti culpa deserunt dolore. Quibusdam possimus aliquid odit! Enim, cupiditate beatae consequatur molestias odio culpa quibusdam aliquid non ab repudiandae deserunt earum, aspernatur numquam. Corporis, quis.</p>
            </div>
            <picture><img src="https://placekitten.com/" alt=""></picture>
          </div>
          <section class="historia-pts-turisticos">
            <h3 class="titulo-sessao2">CONHEÇA NOSSOS TESOUROS</h3>
            <div class="row row-cols-sm-3">
              <figure>
                <img src="https://placekitten.com/200/300" alt="">
                <figcaption>Ponto 1</figcaption>
              </figure>
              <figure>
                <img src="https://placekitten.com/200/300" alt="">
                <figcaption>Ponto 2</figcaption>
              </figure>
              <figure>
                <img src="https://placekitten.com/200/300" alt="">
                <figcaption>Ponto 3</figcaption>
              </figure>
              <a href="" class="btn btn-primary btn-veja-mais">VEJA MAIS</a>
            </div>
          </section>
        </section>

        <!-- Fim da sessão cultura e Patrimonio -->

        <section class="saoroque-atual">
          <h2 class="titulo-sessao">SÃO ROQUE ATUAL</h2>
          <div class="row row-cols-sm-2">
            <picture class="cols-sm-7"><img src="https://placekitten.com/300/200" alt=""></picture>
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam temporibus est illum mollitia repellat earum iusto corrupti incidunt sint nesciunt, debitis similique non optio recusandae ea dolor quibusdam ratione facere?</p>
              <p>Maiores atque culpa quibusdam inventore esse. Recusandae laborum officia repellendus necessitatibus odit fuga in ab porro obcaecati laboriosam magnam, at tempore nulla maiores architecto non esse nobis distinctio unde quas!</p>
            </div>
          </div>
          <div class="row row-cols-sm-2">
            <div class="flex-grow-1">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque cum deserunt provident eligendi rem atque illum omnis laudantium! Quae delectus pariatur unde quidem vel architecto dolorem atque incidunt, aut eaque.</p>
              <a href="" class="btn btn-saiba-mais">CONHEÇA NOSSOS PONTOS TURISTICOS</a>
            </div>
            <picture class="w-auto"><img src="https://placekitten.com/150/150" alt=""></picture>
          </div>
        </section>
      </article>
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