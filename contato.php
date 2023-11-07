<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container">

        <main class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row text-center">
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Email</a>
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Número</a>
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Instagram</a>
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Facebook</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <form class="row" action="post">
                    <label>Contate-nos</label>
                    <input class="form-control" type="text" placeholder="Nome">
                    <input class="form-control" type="email" placeholder="Email">
                    <textarea class="form-control"> </textarea>
                    <button class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </main> 
    </div>

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

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
</body>
</html>