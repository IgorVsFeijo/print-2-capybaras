<!DOCTYPE html>
<html lang="pt-br">

<?php

$titulo = "Título da Página";

include('../includes/inc_head.php');

?>

<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    <div class="container text-center">
        <div class="row justify-content-start">
            <p class="col-2">lorem</p>
        </div>

        <article>
            <h1>h1 - Article</h1>
            <div class="row">
                <figure class="col-lg-6 col-md-6 col-sm-12">
                    <img src="http://placekitten.com/352/255" alt="Imagem Via Placeholder">
                </figure>
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <p>lorem</p>
                    <p>lorem</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sit illum alias dolores
                        recusandae asperiores libero vitae voluptatem error? Ea dolorem tempora corrupti officia non
                        distinctio velit dolorum repudiandae quia.</p>
            </section>
          </div>
        </article>

        <aside>
            <h2>h2 - Aside</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/371/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa debitis expedita
                        blanditiis, laboriosam labore explicabo sint! Accusantium tenetur sed nulla nobis illo minima
                        labore, voluptatum cumque. Enim, quasi.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/371/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa debitis expedita
                        blanditiis, laboriosam labore explicabo sint! Accusantium tenetur sed nulla nobis illo minima
                        labore, voluptatum cumque. Enim, quasi.</p>
                </section>
            </div>
        </aside>

        <aside>
            <h2>h2 - Aside</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/371/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa debitis expedita
                        blanditiis, laboriosam labore explicabo sint! Accusantium tenetur sed nulla nobis illo minima
                        labore, voluptatum cumque. Enim, quasi.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/371/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa debitis expedita
                        blanditiis, laboriosam labore explicabo sint! Accusantium tenetur sed nulla nobis illo minima
                        labore, voluptatum cumque. Enim, quasi.</p>
                </section>
            </div>

            <div class="row">
                <section class="col-lg-4 col-md-4 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/240/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa debitis expedita
                        blanditiis, laboriosam labore explicabo sint! Accusantium tenetur sed nulla nobis illo minima
                        labore, voluptatum cumque. Enim, quasi.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/240/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa debitis expedita
                        blanditiis, laboriosam labore explicabo sint! Accusantium tenetur sed nulla nobis illo minima
                        labore, voluptatum cumque. Enim, quasi.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/240/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sed culpa debitis expedita
                        blanditiis, laboriosam labore explicabo sint! Accusantium tenetur sed nulla nobis illo minima
                        labore, voluptatum cumque. Enim, quasi.</p>
                </section>
            </div>
        </aside>
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