<!DOCTYPE html>
<html lang="pt-BR">

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

        <main>
            <figure>
                <img src="https://placekitten.com/320/160" alt="imagem via placeholder">
            </figure>
            <aside>
                <h2 class="hide">Aside - h2</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus quia explicabo nemo soluta laboriosam expedita esse quisquam, mollitia tempore vitae, eveniet odio adipisci rem doloribus itaque nulla molestiae eos iusto! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis labore, error magnam porro eius accusantium eligendi sit fugiat totam dignissimos molestias nisi aut corporis eos rerum, quaerat odio beatae quos.</p>
            </aside>
            <article>
                <h3>Festas de Agosto</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, sequi totam. Amet ab illum corporis nobis? Itaque iusto, placeat labore sint enim quidem, doloremque veniam nesciunt voluptatem atque id saepe?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias ipsum, animi odio quia quasi facere excepturi pariatur itaque. Doloremque reprehenderit temporibus cupiditate placeat sint consequuntur eius assumenda repellendus molestiae dicta.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, sequi totam. Amet ab illum corporis nobis? Itaque iusto, placeat labore sint enim quidem, doloremque veniam nesciunt voluptatem atque id saepe?Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <figure>
                    <img src="https://placekitten.com/240/150" alt="foto da festa">
                </figure>
            </article>
            <aside>
                <h2 class="hide">Aside - h2</h2>
                <figure>
                    <img src="https://placekitten.com/320/160" alt="ilustração">
                </figure>
            </aside>
            <article>
                <h3>Expo São Roque</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, sequi totam. Amet ab illum corporis nobis? Itaque iusto, placeat labore sint enim quidem, doloremque veniam nesciunt voluptatem atque id saepe?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias ipsum, animi odio quia quasi facere excepturi pariatur itaque. Doloremque reprehenderit temporibus cupiditate placeat sint consequuntur eius assumenda repellendus molestiae dicta.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, sequi totam. Amet ab illum corporis nobis? Itaque iusto, placeat labore sint enim quidem, doloremque veniam nesciunt voluptatem atque id saepe?Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <figure>
                    <img src="https://placekitten.com/240/150" alt="foto da festa">
                </figure>
            </article>
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

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>
</html>