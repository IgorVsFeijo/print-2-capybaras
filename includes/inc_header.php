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