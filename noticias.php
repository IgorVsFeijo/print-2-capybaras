<!DOCTYPE html>
<html lang="pt-br">


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

    <div class="container text-center">
        <article>
            <h1 class="hide">h1 - Article</h1>
            <div class="row">
                <figure class="col-lg-6 col-md-6 col-sm-12">
                    <img src="http://placekitten.com/553/434" alt="Imagem Via Placeholder">
                </figure>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing eli</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere nulla recusandae assumenda illo
                        minus a dicta eos atque sint quas qui repellendus, enim magni! Vel deserunt pariatur illo
                        debitis iste.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere nulla recusandae
                        assumenda illo minus a dicta eos atque sint quas qui repellendus, enim magni! Vel deserunt
                        pariatur illo debitis iste.
                    </p>
                </div>
            </div>
        </article>

        <aside>
            <div class="row">
                <h2>h2 - Aside</h2>
                <section class="col-lg-8 col-md-8 col-sm-12">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/637/336" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing eli</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere nulla recusandae assumenda illo
                        minus a dicta eos atque sint quas qui repellendus, enim magni! Vel deserunt pariatur illo
                        debitis iste.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="hide">h3 - Section</h3>
                    <div>
                        <figure>
                            <img src="http://placekitten.com/135/102" alt="Imagem Via Placeholder">
                        </figure>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div>
                        <figure>
                            <img src="http://placekitten.com/135/102" alt="Imagem Via Placeholder">
                        </figure>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>

                    <div>
                        <figure>
                            <img src="http://placekitten.com/135/102" alt="Imagem Via Placeholder">
                        </figure>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </section>

            </div>
        </aside>

        <aside>
            <div class="row">
                <h2>h2 - Aside</h2>
                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus consequuntur iure vel
                        assumenda? Nemo facilis quaerat amet consequuntur suscipit, inventore a unde in laborum
                        repudiandae doloribus quidem ullam repellendus.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus consequuntur iure vel
                        assumenda? Nemo facilis quaerat amet consequuntur suscipit, inventore a unde in laborum
                        repudiandae doloribus quidem ullam repellendus.</p>
                </section>
            </div>

            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus consequuntur iure vel
                        assumenda? Nemo facilis quaerat amet consequuntur suscipit, inventore a unde in laborum
                        repudiandae doloribus quidem ullam repellendus.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi minus consequuntur iure vel
                        assumenda? Nemo facilis quaerat amet consequuntur suscipit, inventore a unde in laborum
                        repudiandae doloribus quidem ullam repellendus.</p>
                </section>
            </div>
        </aside>

        <aside>
            <h2>h2 - aside</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/612/439" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p>Quasi quidem, fugit odit perspiciatis voluptatem quisquam reprehenderit repudiandae alias
                        voluptatum, laboriosam, a deleniti commodi ea error atque unde ipsam minus aperiam consequatur.
                        Debitis et accusamus ea sequi natus sint.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/417/439" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p>Quasi quidem, fugit odit perspiciatis voluptatem quisquam reprehenderit repudiandae alias
                        voluptatum, laboriosam, a deleniti commodi ea error atque unde ipsam minus aperiam consequatur.
                        Debitis et accusamus ea sequi natus sint.</p>
                </section>
            </div>
        </aside>

    </div>
        <!-- Inicio do Footer  -->
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

</body>

</html>