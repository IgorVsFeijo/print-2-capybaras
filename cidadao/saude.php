<!DOCTYPE html>
<html lang="en">

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

    <!-- Fim Header -->
    <div class="container">
        <main>
            <h1>Saúde</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa perspiciatis, praesentium repellat consequatur quidem nobis reiciendis ut sapiente iure doloribus nihil dolores, quae animi at enim fuga omnis tempora voluptatum.</p>

            <section class="row text-center">
                <h2>botões</h2>
                <a class="col-lg-3 col-md-6 col-sm-12" href="#">Políticas de Saúde</a>
                <a class="col-lg-3 col-md-6 col-sm-12" href="#">Formulários e Documentos</a>
                <a class="col-lg-3 col-md-6 col-sm-12" href="#">Agendamento de consultas</a>
                <a class="col-lg-3 col-md-6 col-sm-12" href="#">Boletins de Saúde</a>
            </section>

            <section class="row text-center">
                <h2>Extras</h2>
                <article class="col-lg-4 col-md-8 col-12">
                    <h3>Unidades de saúde</h3>
                    <ul>
                        <li>Posto 1</li>
                        <li>Posto 1</li>
                        <li>Posto 1</li>
                        <li>Posto 1</li>
                        <li>Posto 1</li>
                        <li>Posto 1</li>
                        <li>Posto 1</li>
                        <li>Posto 1</li>
                    </ul>
                </article>

                <aside class="col-lg-8 col-md-12 col-sm-12">
                    <h3>Cartilha do Uso Correto de Medicamentos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, quo veniam esse cum voluptatibus eos facilis labore quisquam, ullam soluta molestias, nisi quos. Molestias, omnis dolor? Harum ipsa odit fuga.</p>
                    
                    <table class="table">
                        <tr>
                            <th>pru</th>
                            <th>pru</th>
                            <th>pru</th>
                        </tr>
                        <tr>
                            <th>pru</th>
                            <th>pru</th>
                            <th>pru</th>
                        </tr>
                        <tr>
                            <th>pru</th>
                            <th>pru</th>
                            <th>pru</th>
                        </tr>
                        <tr>
                            <th>pru</th>
                            <th>pru</th>
                            <th>pru</th>
                        </tr>
                    </table>
                </aside>
            </section>
            <section class="row">
                <h3>Campanhas de Vacinação</h3>
                <article class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <figure class="col-lg-4 col-md- text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                        <div class="col-lg-8">
                            <h4>Campanha 1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">Ver mais</a>
                        </div>
                    </div>
                </article>
                <article class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row">
                        <figure class="col-lg-4 col-md- text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                        <div class="col-lg-8">
                            <h4>Campanha 1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">Ver mais</a>
                        </div>
                    </div>
                </article>
            </section>

        </main>
    </div>    <!-- Inicio do Footer -->

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