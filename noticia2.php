<!DOCTYPE html>
<html lang="pt-br">


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

    <div class="container text-center">
        <div class="row">
            <article class="col-lg-8 col-md-8 col-sm-12">
                <h1>h1 - Article</h1>
                <figure>
                    <img src="http://placekitten.com/760/349" alt="Imagem Via Placeholder">
                </figure>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Quas minima fuga quaerat deserunt odit illum numquam eveniet officiis tempora dicta, magni provident
                    facilis adipisci at? Rem quasi in, aliquam beatae molestias explicabo deserunt delectus voluptate
                    ullam, repellat omnis?Quas minima fuga quaerat deserunt odit illum numquam eveniet officiis tempora
                    dicta, magni provident facilis adipisci at? Rem quasi in, aliquam beatae molestias explicabo
                    deserunt delectus voluptate ullam, repellat omnis?Quas minima fuga quaerat deserunt odit illum
                    numquam eveniet officiis tempora dicta, magni provident facilis adipisci at? Rem quasi in, aliquam
                    beatae molestias explicabo deserunt delectus voluptate ullam, repellat omnis?</p>
                <p>Vero, quia omnis! Eum aperiam impedit ut, quae, fugit necessitatibus quibusdam illum omnis quisquam
                    alias dolore placeat est expedita beatae iste! Iste dicta aliquid tempore voluptas magni non
                    adipisci voluptatibus.Vero, quia omnis! Eum aperiam impedit ut, quae, fugit necessitatibus quibusdam
                    illum omnis quisquam alias dolore placeat est expedita beatae iste! Iste dicta aliquid tempore
                    voluptas magni non adipisci voluptatibus.Vero, quia omnis! Eum aperiam impedit ut, quae, fugit
                    necessitatibus quibusdam illum omnis quisquam alias dolore placeat est expedita beatae iste! Iste
                    dicta aliquid tempore voluptas magni non adipisci voluptatibus.</p>
            </article>

            <section class="col-lg-4 col-md-4 col-sm-12">
                <h3>h3 - Section</h3>
                <figure>
                    <img src="http://placekitten.com/294/176" alt="Imagem Via Placeholder">
                </figure>
                <a href="#">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </a>

                <figure>
                    <img src="http://placekitten.com/294/176" alt="Imagem Via Placeholder">
                </figure>
                <a href="#">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </a>

                <figure>
                    <img src="http://placekitten.com/294/176" alt="Imagem Via Placeholder">
                </figure>
                <a href="#">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </a>

                <figure>
                    <img src="http://placekitten.com/294/176" alt="Imagem Via Placeholder">
                </figure>
                <a href="#">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </a>

                <figure>
                    <img src="http://placekitten.com/294/176" alt="Imagem Via Placeholder">
                </figure>
                <a href="#">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </a>
            </section>
        </div>
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
      include 'includes/inc_bootstrap_js.php';
    ?>
</body>

</html>