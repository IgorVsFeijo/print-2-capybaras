<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/api/style/style.css">
    <title>Concursos</title>
</head>
<body>
  <header class="p-0">

    <!-- Barra de Acessilibidade -->

    <div class="text-center p-2 w-100 barra-acess fixed-top" id="barra-acessibilidade">
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

    <!-- Essa div serve apenas para preencher o espaço referente a barra de acessibilidade, que está com position absolute -->

    <div class="placeholder-acess"></div>

    <!-- Container Nav Principal e Nav Secundária -->
    <div class="d-flex flex-wrap align-items-center text-center h-auto">

      <!-- Container Background Dark (Ocupando toda a tela)-->

      <div class="container-fluid bg-dark">

        <!-- Navbar Principal -->
        <nav
          class="flex-wrap-lg container-logo-nav container-lg navbar navbar-expand-xl navbar-dark w-100 w-xl-auto flex-shrink-1">

          <a href="/index.php">
            <figure class="m-0 flex-shrink-1 ">
              <img src="https://placekitten.com/250/120" alt="Logo Site" class="m-0">
            </figure>
          </a>

          <!-- Botao Sanduiche -->

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navsComprimidos"
            aria-controls="navPrincipal navSecundario" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar Comprimida -->

          <div class="navbar-collapse collapse navsComprimidos order-1 order-xxl-0" id="navPrincipal">
            <menu class="navbar-nav justify-content-between w-100 d-flex pt-2 pt-xxl-0">
              <li class="nav-item">
                <a class="nav-link" href="/noticias.php">Notícias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ouvidoria.php">Ouvidoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contato.php">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/quemsomos.php">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/perguntas.php">Perguntas Frequentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/privacidade.php">Privacidade</a>
              </li>
            </menu>
          </div>
          <!-- Fim Navbar Comprimida -->

        </nav>
        <!-- Fim Navbar Principal -->

      </div>
      <!-- Fim Container Background Dark (Ocupando toda a tela)-->

      <!-- Container Navbar Secundário e Terciário -->

      <nav class="w-100 bg-secondary">

        <!-- Container Background Secundario -->
        <div class="flex-wrap nav-secundario navbar navbar-expand-md w-100 w-xl-auto flex-shrink-1 p-0"
          id="backgroundSecundario">

          <!-- Nav Secundário Comprimido -->
          <div class="navbar-collapse collapse navsComprimidos" id="navSecundario">
            <menu class="navbar-nav container-lg px-3 gap-2 px-md-0 justify-content-around d-flex py-2">
              <li class="nav-item btn dropdown">

                <!-- Título da Área -->
                <a class="nav-link" href="/cidade/">A Cidade</a>
                <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-reference="#navSecundario">
                </button>
                <!--Submenu -->
                <menu class="dropdown-menu">
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/historia.php">História</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/dadosgerais.php">Dados Gerais</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/pessoasnotaveis.php">Pessoas Notáveis</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/simbolos.php">Brasão e Bandeira</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/hino.php">Hino da Cidade</a>
                  </li>
                </menu>

              </li>
              <li class="nav-item btn dropdown">

                <!-- Título da Área -->
                <a class="nav-link" href="/cidadao/">Cidadão</a>
                <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-reference="#navSecundario">
                </button>
                <!--Submenu -->
                <menu class="dropdown-menu">
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidadao/saude.php">Saúde</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidadao/servicos.php">Serviços</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidadao/transporte.php">Trânsito e Transporte</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidadao/concursos.php">Concursos</a>
                  </li>
                </menu>

              </li>
              <li class="nav-item btn dropdown">

                <!-- Título da Área -->
                <a class="nav-link" href="/governo/">Governo</a>
                <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-reference="#navSecundario">
                </button>
                <!--Submenu -->
                <menu class="dropdown-menu">
                  <li class="dropdown-item">
                    <a class="nav-link" href="/governo/prefeitura.php">Prefeitura</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/governo/secretarias.php">Secretarias</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/governo/legislacao.php">Legislação</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/governo/legislativo.php">Poder Legislativo</a>
                  </li>
                </menu>

              </li>
              <li class="nav-item btn dropdown">

                <!-- Título da Área -->
                <a class="nav-link" href="/empresa/home.php">Empresa</a>
                <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-reference="#navSecundario">
                </button>
                <!--Submenu -->
                <menu class="dropdown-menu">
                  <li class="dropdown-item">
                    <a class="nav-link" href="/empresa/iptu.php">IPTU</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/empresa/diario_oficial.php">Diário Oficial</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/empresa/cadastro.php">Cadastro de Pessoa Jurídica</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/empresa/apr">Aprovação de Projetos</a>
                  </li>
                </menu>

              </li>
              <li class="nav-item btn dropdown">

                <!-- Título da Área -->
                <a class="nav-link" href="/cultura/">Cultura</a>
                <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-reference="#navSecundario">
                </button>
                <!--Submenu -->
                <menu class="dropdown-menu">
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cultura/culturaarte.php">Cultura e Arte</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cultura/tradicoes.php">Tradições</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cultura/agendamento.php">Agendamento</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cultura/cadastro.php">Cadastro</a>
                  </li>
                </menu>

              </li>
              <li class="nav-item btn dropdown">

                <!-- Título da Área -->
                <a class="nav-link" href="/turismo/">Turismo</a>
                <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-reference="#navSecundario">
                </button>
                <!--Submenu -->
                <menu class="dropdown-menu">
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/hospedagem.php">Hospedagem</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/pontos_turisticos.php">Pontos Turísticos</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/gastronomia.php">Gastronomia</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/eventos.php">Eventos</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/galeria.php">Galeria</a>
                  </li>
                </menu>
              </li>
            </menu>
          </div>
          <!-- Fim Nav Secundário Comprimido -->
        </div>
        <!-- Container Background Secundario -->
      </nav>
    </div>
  </header>
    <div class="container text-left">
        <main>
            <article>
                <h1 class="text-center"> Concursos Públicos e Processos Seletivos </h1>
                <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>

                <section class="row text-">
                    <h2>Links</h2>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <ul>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <ul>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                        </ul>
                    </div>
                </section>
            </article>
            <aside class="row">
                <h2>Dicas para concurso</h2>
                <section class="col-lg-6 col-md-12">
                    <div class="row">
                        <figure class="col-lg-4 col-md-4 text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                        <div class="col-lg-8 col-md-8">
                            <h3>Dica</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quia aspernatur non sint nihil, architecto minus, aperiam provident saepe.</p>
                        </div>
                    </div>
                    <div class="row">
                        <figure class="col-lg-4 col-md-4 text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                        <div class="col-lg-8 col-md-8">
                            <h3>Dica</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quia aspernatur non sint nihil, architecto minus, aperiam provident saepe.</p>
                        </div>
                    </div>
                </section>

                <section class="col-lg-6 col-md-12">
                    <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <figure class="col-lg-4 text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                        <div class="col-lg-8">
                            <h3 class="">Dica</h3>
                            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quia aspernatur non sint nihil, architecto minus, aperiam provident saepe.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <figure class="col-lg-4 text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                        <div class="col-lg-8">
                            <h3 class="">Dica</h3>
                            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium quia aspernatur non sint nihil, architecto minus, aperiam provident saepe.</p>
                        </div>
                    </div>
                </div>
                </section>

            </aside>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>