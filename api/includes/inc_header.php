<?php

$rootPath = dirname(__DIR__);
echo $rootPath . "<br>";
$rootPath = str_replace('C:\\xampp\\htdocs\\', '', $rootPath);
echo $rootPath;

?>

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

      <a href="/<?php echo $rootPath ?>/index.php">
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
            <a class="nav-link" href="/<?php echo $rootPath ?>/noticias.php">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/<?php echo $rootPath ?>/ouvidoria.php">Ouvidoria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/<?php echo $rootPath ?>/contato.php">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/<?php echo $rootPath ?>/quemsomos.php">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/<?php echo $rootPath ?>/perguntas.php">Perguntas Frequentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/<?php echo $rootPath ?>/privacidade.php">Privacidade</a>
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
            <a class="nav-link" href="/<?php echo $rootPath ?>/cidade/">A Cidade</a>
            <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-reference="#navSecundario">
            </button>
            <!--Submenu -->
            <menu class="dropdown-menu">
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidade/historia.php">História</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidade/dadosgerais.php">Dados Gerais</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidade/pessoasnotaveis.php">Pessoas Notáveis</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidade/simbolos.php">Brasão e Bandeira</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidade/hino.php">Hino da Cidade</a>
              </li>
            </menu>

          </li>
          <li class="nav-item btn dropdown">

            <!-- Título da Área -->
            <a class="nav-link" href="/<?php echo $rootPath ?>/cidadao/">Cidadão</a>
            <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-reference="#navSecundario">
            </button>
            <!--Submenu -->
            <menu class="dropdown-menu">
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidadao/saude.php">Saúde</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidadao/servicos.php">Serviços</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidadao/transporte.php">Trânsito e Transporte</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cidadao/concursos.php">Concursos</a>
              </li>
            </menu>

          </li>
          <li class="nav-item btn dropdown">

            <!-- Título da Área -->
            <a class="nav-link" href="/<?php echo $rootPath ?>/governo/">Governo</a>
            <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-reference="#navSecundario">
            </button>
            <!--Submenu -->
            <menu class="dropdown-menu">
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/governo/prefeitura.php">Prefeitura</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/governo/secretarias.php">Secretarias</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/governo/legislacao.php">Legislação</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/governo/legislativo.php">Poder Legislativo</a>
              </li>
            </menu>

          </li>
          <li class="nav-item btn dropdown">

            <!-- Título da Área -->
            <a class="nav-link" href="/<?php echo $rootPath ?>/empresa/home.php">Empresa</a>
            <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-reference="#navSecundario">
            </button>
            <!--Submenu -->
            <menu class="dropdown-menu">
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/empresa/iptu.php">IPTU</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/empresa/diario_oficial.php">Diário Oficial</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/empresa/cadastro.php">Cadastro de Pessoa Jurídica</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/empresa/aprovacao.php">Aprovação de Projetos</a>
              </li>
            </menu>

          </li>
          <li class="nav-item btn dropdown">

            <!-- Título da Área -->
            <a class="nav-link" href="/<?php echo $rootPath ?>/cultura/">Cultura</a>
            <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-reference="#navSecundario">
            </button>
            <!--Submenu -->
            <menu class="dropdown-menu">
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cultura/culturaarte.php">Cultura e Arte</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cultura/tradicoes.php">Tradições</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cultura/agendamento.php">Agendamento</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/cultura/cadastro.php">Cadastro</a>
              </li>
            </menu>

          </li>
          <li class="nav-item btn dropdown">

            <!-- Título da Área -->
            <a class="nav-link" href="/<?php echo $rootPath ?>/turismo/">Turismo</a>
            <button class="dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-reference="#navSecundario">
            </button>
            <!--Submenu -->
            <menu class="dropdown-menu">
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/turismo/hospedagem.php">Hospedagem</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/turismo/pontos_turisticos.php">Pontos Turísticos</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/turismo/gastronomia.php">Gastronomia</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/turismo/eventos.php">Eventos</a>
              </li>
              <li class="dropdown-item">
                <a class="nav-link" href="/<?php echo $rootPath ?>/turismo/galeria.php">Galeria</a>
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