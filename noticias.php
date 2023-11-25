<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>

    <link rel="stylesheet" href="../print-2-capybaras/style/turismo.css">

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container text-start">

        <aside>
        <div class="row text-start">
            <b><a href="../print-2-capybaras/index.php">Home</a> <i class="bi bi-arrow-right"></i> <a href="../print-2-capybaras/noticias.php">Notícias</a></b>
        </div>
            <div class="row">
                <h2>Notícias</h2>
                <section class="col-lg-8 col-md-8 col-sm-12">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/637/336" alt="Imagem Via Placeholder">
                    </figure>
                    <p><b>Ministro Paulo Teixeira visita São Roque em encontro agroecológico</b></p>
                    <p>O Ministro do Desenvolvimento Agrário e Agricultura Familiar do Brasil, Paulo Teixeira, visitou São Roque na última semana para a mais recente edição do Encontro Paulista de Agroecologia...</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="hide">h3 - Section</h3>
                    <div>
                        <figure>
                            <img src="http://placekitten.com/300/102" alt="Imagem Via Placeholder">
                        </figure>
                        <p class="not_titulos">Prefeitura promove palestra de Conscientização e Prevenção do Câncer de Próstata</p>
                    </div>

                    <div>
                        <figure>
                            <img src="http://placekitten.com/300/102" alt="Imagem Via Placeholder">
                        </figure>
                        <p class="not_titulos">Festival José Cabinda acontece neste domingo e segunda-feira</p>
                    </div>

                    <div>
                        <figure>
                            <img src="http://placekitten.com/300/102" alt="Imagem Via Placeholder">
                        </figure>
                        <p class="not_titulos">Prefeitura abre anistia para regularização de imóveis</p>
                    </div>
                </section>

            </div>
        </aside>

        <aside class="tur_back text-center">
            <div class="row">
                <h2>h2 - Aside</h2>
                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p class="not_titulos">Qualifica São Roque abre inscrições para formação de bartender e estratégia de negociação</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p class="not_titulos">Triunfante da Fanfarra Municipal de São Roque vence Circuito Paulista de Bandas e Fanfarras</p>
                </section>
            </div>

            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p class="not_titulos">Confira as ações de zeladoria realizadas pela Prefeitura nesta segunda-feira - 13 de novembro</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure>
                        <img src="http://placekitten.com/472/262" alt="Imagem Via Placeholder">
                    </figure>
                    <p class="not_titulos">São Roque abre inscrições para eleição do Conselho Municipal dos Direito da Juventude</p>
                </section>
            </div>
        </aside>

        <aside>
            <h2>h2 - aside</h2>
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-6">
                    <h3 class="hide">h3 - Section</h3>
                    <figure class="text-center">
                        <img src="http://placekitten.com/612/439" alt="Imagem Via Placeholder">
                    </figure>
                    <p><b>Rotatória fixa será construída na região próxima à Tecama</b></p>
                    <p>O trânsito municipal no antigo trecho da Rodovia Raposo Tavares, próximo à fábrica Tecama, terá uma novidade: a implantação de uma rotatória fixa.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-6 text-end">
                    <h3 class="hide">h3 - Section</h3>
                    <figure class="text-center">
                        <img src="http://placekitten.com/417/439" alt="Imagem Via Placeholder">
                    </figure>
                    <p><b>Ginástica Rítmica encerra ano de atividades com apresentação A Magia do Circo</b></p>
                    <p>A equipe de Ginástica Rítmica de São Roque realizará nesta semana uma apresentação especial como forma de celebrar um ano de atividades repleto de conquistas.</p>
                </section>
            </div>
        </aside>

    </div>
        <!-- Inicio do Footer  -->
    <?php
      include 'includes/inc_footer.php';
    ?>
        <!-- Fim do Footer  -->

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>

</body>

</html>