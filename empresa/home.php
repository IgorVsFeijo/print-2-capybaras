<!DOCTYPE html>
<html lang="PT-BR">

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
    <figure>
        <img src="https://placekitten.com/200/300" alt="gatinho">
    </figure> 

    <div class="row text-center">

    <figure class="col-lg-4 col-md-6 col-sm-12">
        <img src="https://placekitten.com/200/300" alt="gatinho">
    </figure>

    <aside class="col-lg-8 col-md-6 col-sm-12">
        <article>
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam qui, nisi corporis, perferendis provident dignissimos, illum consectetur error autem amet maxime quisquam eveniet voluptatum quia temporibus hic cupiditate quas. Non.</p>
        </article>
    </aside>

    </div>

    <hr>

    <section>
        <h3 class="hide">H3- Section</h3>
        <figure>
            <img src="https://placekitten.com/200/300" alt="gatinho">
        </figure>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <h2>Lorem Ipsum</h2>
        <p>Veja Mais</p>
    </section>

    <hr>

    <div class="row text-center">

    <section class="col-lg-6 col-md-6 col-sm-12">
        <h3 class="hide">H3- Section</h3>
        <nav>
            <a href="">Cadastro de Pessoa Juridica -></a>
        </nav>
    </section>

    <section class="col-lg-6 col-md-6 col-sm-12">
        <h3 class="hide">H3- Section</h3>
        <nav>
            <a href="">Aprovação de Projetos
            -></a>
        </nav>
    </section>

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
