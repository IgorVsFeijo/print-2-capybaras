<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="css/meu.css">
    <title>Serviços</title>
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

          <a href="/index.html">
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
                <a class="nav-link" href="/noticias.html">Notícias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ouvidoria.html">Ouvidoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contato.html">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/quemsomos.html">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/perguntas.html">Perguntas Frequentes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/privacidade.html">Privacidade</a>
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
                    <a class="nav-link" href="/cidade/historia.html">História</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/dadosgerais.html">Dados Gerais</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/pessoasnotaveis.html">Pessoas Notáveis</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/simbolos.html">Brasão e Bandeira</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidade/hino.html">Hino da Cidade</a>
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
                    <a class="nav-link" href="/cidadao/saude.html">Saúde</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidadao/servicos.html">Serviços</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidadao/transporte.html">Trânsito e Transporte</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cidadao/concursos.html">Concursos</a>
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
                    <a class="nav-link" href="/governo/prefeitura.html">Prefeitura</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/governo/secretarias.html">Secretarias</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/governo/legislacao.html">Legislação</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/governo/legislativo.html">Poder Legislativo</a>
                  </li>
                </menu>

              </li>
              <li class="nav-item btn dropdown">

                <!-- Título da Área -->
                <a class="nav-link" href="/empresa/home.html">Empresa</a>
                <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                  aria-expanded="false" data-bs-reference="#navSecundario">
                </button>
                <!--Submenu -->
                <menu class="dropdown-menu">
                  <li class="dropdown-item">
                    <a class="nav-link" href="/empresa/iptu.html">IPTU</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/empresa/diario_oficial.html">Diário Oficial</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/empresa/cadastro.html">Cadastro de Pessoa Jurídica</a>
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
                    <a class="nav-link" href="/cultura/culturaarte.html">Cultura e Arte</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cultura/tradicoes.html">Tradições</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cultura/agendamento.html">Agendamento</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/cultura/cadastro.html">Cadastro</a>
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
                    <a class="nav-link" href="/turismo/hospedagem.html">Hospedagem</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/pontos_turisticos.html">Pontos Turísticos</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/gastronomia.html">Gastronomia</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/eventos.html">Eventos</a>
                  </li>
                  <li class="dropdown-item">
                    <a class="nav-link" href="/turismo/galeria.html">Galeria</a>
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
        <main class="row text-center">
            <h1> Concursos Públicos e Processos Seletivos </h1>
                <p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.</p>

            <article class="row">
                    <h2>Assitência social</h2>
                    <div class="col-lg-8 col-md-12">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum beatae, illum velit id modi facilis facere rem incidunt consectetur delectus accusamus possimus. Id ratione quod minima voluptatem quis quasi laboriosam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore incidunt nesciunt in at, voluptas odio quaerat accusamus minima corrupti repudiandae ipsum assumenda, dignissimos illum recusandae id sint iste dolorem enim? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam debitis libero, esse nisi quae fugiat, hic laborum fuga voluptas beatae animi vitae commodi perferendis ipsum recusandae architecto repellendus voluptatum voluptates.</p>
                        <ul>
                            <li>Item</li>
                            <li>Item</li>
                            <li>Item</li>
                        </ul>
                    </div>

                <section class="col-lg-4 col-md-12 col-md-12 text-center">
                    <h2>Programas</h2>
                    <div class="row">
                        <a href="#" class="col-lg-6 col-md-6 col-sm-12">Programa</a>
                        <a href="#" class="col-lg-6 col-md-6 col-sm-12">Programa</a>
                        <a href="#" class="col-lg-6 col-md-6 col-sm-12">Programa</a>
                        <a href="#" class="col-lg-6 col-md-6 col-sm-12">Programa</a>
                    </div>
                </section>
            </article>

            <article class="col-lg-4 col-md-12 col-sm-12 text-center">
                <h2>Educação</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum beatae, illum velit id modi facilis facere rem incidunt consectetur delectus accusamus possimus. Id ratione quod minima voluptatem quis quasi laboriosam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore incidunt nesciunt in at, voluptas odio quaerat accusamus minima corrupti repudiandae ipsum assumenda, dignissimos illum recusandae id sint iste dolorem enim? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam debitis libero, esse nisi quae fugiat, hic laborum fuga voluptas beatae animi vitae commodi perferendis ipsum recusandae architecto repellendus voluptatum voluptates.</p>
                <ul>
                    <li>Item</li>
                    <li>Item</li>
                    <li>Item</li>
                </ul>

                <div class="row text-center">
                    <a class="" href="#">Boletim escolar</a>
                    <a class="" href="#">Material escolar</a>
                </div>

                <div class="row text-center">
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
                </div>
            </article>
            
            <article class="col-lg-8 col-md-12 col-sm-12 text-center">
                <h2>Empregabilidade</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum mollitia ab at fugiat unde necessitatibus nisi aliquid ullam, iusto eum assumenda id placeat nostrum tempora sit tempore repellat voluptas! Magnam!</p>

                <section class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <figure>
                            <img src="https://placekitten.com/150/150" alt="">
                        </figure>
                        <h3>Notícia</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis nulla eveniet laborum consequatur nesciunt.</p>
                        <a href="#">Ver mais</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <figure>
                            <img src="https://placekitten.com/150/150" alt="">
                        </figure>
                        <h3>Notícia</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis nulla eveniet laborum consequatur nesciunt.</p>
                        <a href="#">Ver mais</a>
                    </div>
                </section>
                
                <hr>
                
                <form class="row" action="post">
                    <label>Para receber notícias de vagas</label>
                    <input type="text" placeholder="Nome">
                    <input type="password" placeholder="Senha">
                    <button>Enviar</button>
                </form>
            </article>

            <article class="col-lg-6 col-md-12 col-sm-12">
                <h3>Comunicados</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis fuga provident voluptas deserunt numquam excepturi ex vel nemo hic incidunt nam est at quaerat blanditiis modi, id veritatis sapiente tempore.</p>
                <img src="https://placekitten.com/300/150" alt="">
            </article>

            <article class="col-lg-6 col-md-12 col-sm-12">
                <h3>Postagens recentes</h3>
                <section>
                    <h4>Postagem 1</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <p>__/__/__ 00:00</p>
                </section>
                <section>
                    <h4>Postagem 1</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <p>__/__/__ 00:00</p>
                </section>
                <section>
                    <h4>Postagem 1</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <p>__/__/__ 00:00</p>
                </section>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>