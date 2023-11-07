<!DOCTYPE html>
<html lang="pt-br">

<?php

$titulo = "Título da Página";

include('includes/inc_head.php');

?>

<body>
    <!-- Inicio Header -->

    <?php
    include '../includes/inc_header.php';
  ?>

<!-- Fim Header -->
    <div class="container text-center">
        <div class="row">
            <figure>
                <img src="http://placekitten.com/1440/300" alt="Imagem Via Placeholder">
            </figure>
        </div>

        <article>
            <div class="row justify-content-start">
                <h1 class="col-2">h1 - Article</h1>
            </div>
            <div class="row">
                <figure class="col-lg-6 col-md-6 col-sm-12">
                    <img src="http://placekitten.com/473/284" alt="Imagem Via Placeholder">
                </figure>
                <section class="col-lg-6 col-md-6 col-sm-12">
                    <h3>h3 - Section</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam natus magni incidunt eaque ut
                        dolor impedit quod neque, vero fuga voluptatibus modi architecto ad tempore autem enim adipisci
                        alias unde! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error fuga quos eligendi
                        beatae quod deleniti quia non accusamus cupiditate. Voluptatibus quibusdam minus culpa vero
                        necessitatibus et modi ut fugit quo?</p>
                </section>
            </div>
        </article>

        <aside>
            <div class="row justify-content-start">
                <h2 class="col-2">h2 - Aside</h2>
            </div>
            <div class="row">
                <section class="col-lg-4 col-md-4 col-sm-6">
                    <h3>h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/270/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste laborum, tempora sit labore cum
                        consequatur autem minima cumque?.</p>
                </section>
                <section class="col-lg-4 col-md-4 col-sm-6">
                    <h3>h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/270/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste laborum, tempora sit labore cum
                        consequatur autem minima cumque?.</p>
                </section>
                <section class="col-lg-4 col-md-4 col-sm-6">
                    <h3>h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/270/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste laborum, tempora sit labore cum
                        consequatur autem minima cumque?.</p>
                </section>
            </div>
        </aside>


        <aside>
            <div class="row justify-content-start">
                <h3 class="col-2">h3 - Aside</h3>
            </div>
            <div class="row justify-content-end">
                <a class="col-2" href="#">ver mais+</a>
            </div>
            <div class="row">
                <figure class="col-lg-6 col-md-6 col-sm-6">
                    <img src="http://placekitten.com/473/284" alt="Imagem Via Placeholder">
                </figure>
                <figure class="col-lg-6 col-md-6 col-sm-6">
                    <img src="http://placekitten.com/473/284" alt="Imagem Via Placeholder">
                </figure>
            </div>
        </aside>

        <aside>
            <div class="row justify-content-start">
                <h3 class="col-2"> h3 - Aside</h3>
            </div>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <figure>
                        <img src="http://placekitten.com/473/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente odio recusandae aliquam
                        incidunt suscipit accusamus dolores fuga!</p>
                </section>
                <section class="col-lg-6 col-md-6 col-sm-12">
                  <h3 class="hide">h3 - Section</h3>
                    <p>lorem</p>
                    <figure>
                        <img src="http://placekitten.com/473/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente odio recusandae aliquam
                        incidunt suscipit accusamus dolores fuga!</p>
                </section>
            </div>
        </aside>

        <section>
            <div class="row justify-content-start">
                <h3 class="col-2">h3 - Section</h3>
            </div>
            <div class="row">
                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h4>h4 - Section</h4>
                    <figure>
                        <img src="http://placekitten.com/270/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente odio recusandae aliquam
                        incidunt suscipit accusamus dolores fuga!</p>
                </section>
                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h4>h4 - Section</h4>
                    <figure>
                        <img src="http://placekitten.com/270/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente odio recusandae aliquam
                        incidunt suscipit accusamus dolores fuga!</p>
                </section>
                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h4>h4 - Section</h4>
                    <figure>
                        <img src="http://placekitten.com/270/255" alt="Imagem Via Placeholder">
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente odio recusandae aliquam
                        incidunt suscipit accusamus dolores fuga!</p>
                </section>
            </div>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>