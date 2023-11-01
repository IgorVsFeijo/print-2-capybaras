<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style/style.css">
    <title>Cidadão</title>
</head>
<body>

    <!-- Inicio Header -->

    <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->
    
        <main id="page-acessibilidade">
            <section class="container">
              <h1 class="d-none">Botões de Acessibilidade</h1>
              <div class="row row-cols-3 row-cols-md-4 gap-5 justify-content-between p-5">
                <button class="col-12 btn btn-secondary p-2 col-sm-4 col-md-3 order-sm-1 order-md-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="95" height="75" viewBox="0 0 95 75" fill="none">
                    <path d="M23.7501 68.75L7.91675 56.25L23.7501 43.75L29.3907 48.125L23.0574 53.125H71.9428L65.7084 48.125L71.2501 43.75L87.0834 56.25L71.2501 68.75L65.6095 64.375L71.9428 59.375H23.0574L29.2917 64.375L23.7501 68.75ZM27.3126 40.625L43.5417 6.25H51.4584L67.6876 40.625H60.1667L56.4063 31.875H38.7917L34.8334 40.625H27.3126ZM40.9688 26.875H54.0313L47.698 12.6562H47.3022L40.9688 26.875Z"/>
                    </svg>
                  <span class="maldito-wrap m-auto">Espaçamento de Texto</span>
                </button>
                <button class="btn btn-secondary p-2">
                  <i class="bi bi-moon-fill"></i>
                  <span class="m-auto">Modo Escuro</span>
                </button>
                <button class="btn btn-secondary p-2">
                  <span class="material-symbols-outlined icon">
                    text_fields
                    </span>
                  <span class="m-auto">Texto Maior</span>
                </button>
                <button class="btn btn-secondary p-2 order-md-4">
                  <img src="imgs/principal/acessibilidade/line-height.svg" alt="">
                  <span class="m-auto">Altura da Linha</span>
                </button>
                <button class="btn btn-secondary p-2 order-sm-2 offset-sm-4 offset-md-0">
                  <span class="material-symbols-outlined icon">
                    custom_typography
                    </span>
                  <span class="m-auto">Fonte de Dislexia</span>
                </button>
                <button class="btn btn-secondary p-2 d-none d-md-block">
                  <span class="material-symbols-outlined icon">
                    arrow_selector_tool
                    </span>
                  <span class="m-auto">Cursor Maior</span>
                </button>
              </div>
              
            </section>
        </main>

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
<!-- Fim Footer -->

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"
></script>
</body>
</html>