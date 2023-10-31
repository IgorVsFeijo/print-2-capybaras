<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="css/meu.css">
    <title>Cidadão</title>
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
    <div class="container">
        <main class="row">
            <article class="col-lg-8 col-md-6 col-sm-12">
                <h1>Cidadão</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque porro alias harum sed libero ipsum consectetur expedita veritatis debitis. Aliquid, unde error aut ipsum distinctio voluptatum ullam similique esse. Beatae!</p>
                <section class="row">
                    <h2>Empregabilidade</h2>
                    <section class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <figure class="col-lg-4 text-center">
                                <img src="https://placekitten.com/150/150" alt="">
                            </figure>
                            <div class="col-lg-8">
                                <h3>Notícia</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis nulla eveniet laborum consequatur nesciunt.</p>
                                <a href="#">Ver mais</a>
                            </div>
                        </div>
                        <div class="row">
                            <figure class="col-lg-4 text-center">
                                <img src="https://placekitten.com/150/150" alt="">
                            </figure>
                            <div class="col-lg-8">
                                <h3>Notícia</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis nulla eveniet laborum consequatur nesciunt.</p>
                                <a href="#">Ver mais</a>
                            </div>
                        </div>
                        
                    </section>
                </section>

                <section class="row">
                    <h2>Concursos e Processos Seletivos</h2>
                    <div>
                        <ul>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                            <li class="concursos"><a href="#">Processo seletivo 1</a></li>
                        </ul>
                    </div>
                    <a class="text-right" href="#">Ver mais</a>
    
                </section>

                <section class="row">
                    <h3>Saúde</h3>
                    <article class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <figure class="col-lg-4 text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                            <div class="col-lg-8">
                                <h4>Campanha 1</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <a href="#">Ver mais</a>
                            </div>
                        </div>
                    </article>
                </section>
            </article>
            <aside class="col-lg-4 col-md-6 col-sm-12">
                <section>
                    <h3>Mais Acessados</h3>
                    <ul>
                        <li>Página 1</li>
                        <li>Página 1</li>
                        <li>Página 1</li>
                        <li>Página 1</li>
                        <li>Página 1</li>
                    </ul>
                </section>

                <section>
                    <h3>Botões</h3>
                    <div class="row text-center">
                        <a href="#"><img src="#" alt="">Multas</a>
                        <a href="#"><img src="#" alt="">2° via CNH</a>
                        <a href="#"><img src="#" alt="">Contatos de emergência</a>
                    </div>
                </section>

                <section class="col-12">
                    <h3>Outras áreas</h3>
                    <ul>
                        <li>Área 1</li>
                        <li>Área 1</li>
                        <li>Área 1</li>
                        <li>Área 1</li>
                        <li>Área 1</li>
                    </ul>
                </section>

                <section class="col-12">
                    <h3>Unidades de saúde</h3>
                    <ul class="row">
                        <li class="col-6">Posto 1</li>
                        <li class="col-6">Posto 1</li>
                        <li class="col-6">Posto 1</li>
                        <li class="col-6">Posto 1</li>
                        <li class="col-6">Posto 1</li>
                        <li class="col-6">Posto 1</li>
                    </ul>
                </section>

                <form class="row" action="post">
                    <label>Para receber notícias de vagas</label>
                    <input type="text" placeholder="Nome">
                    <input type="password" placeholder="Senha">
                    <button>Enviar</button>
                </form>

                <table class="table">
                    <tr>
                        <th>dom</th>
                        <th>seg</th>
                        <th>ter</th>
                        <th>qua</th>
                        <th>qui</th>
                        <th>sex</th>
                        <th>sáb</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                    </tr>
                    <tr>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                    </tr>
                    <tr>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                    </tr>
                    <tr>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th></th>
                        <th></th>
                    </tr>
                </table>
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