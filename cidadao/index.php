<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cidadão</title>

    <?php
        include '../includes/inc_head_links.php';
      ?>

</head>
<body>
    <!-- Inicio Header -->

      <?php
        include '../includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container">
        <main class="row">
            <article class="col-lg-8 col-md-6 col-sm-12">
                <h1>Cidadão</h1>
                <p>A prefeitura de São Roque acredita que a ativa participação de seus cidadão é essencial para a construção de uma cidade mais inclusiva, segura e forte, por isso a área “Cidadão” é dedicada a você, cidadão de São Roque. Aqui você terá acesso a serviços, notícias e informações que possibilitem sua participação ativa no nosso município.</p>
                <section class="row">
                    <h2>Empregabilidade</h2>
                    <section class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <figure class="col-lg-4 text-center">
                                <img src="https://placekitten.com/150/150" alt="">
                            </figure>
                            <div class="col-lg-8">
                                <h3>Oportunidade de emprego</h3>
                                <p>Empresa de São Roque contrata Ajudante Geral; veja como se candidatar</p>
                                <a type="button" class="btn btn-primary" href="#">Ver mais</a>
                            </div>
                        </div>
                        <div class="row">
                            <figure class="col-lg-4 text-center">
                                <img src="https://placekitten.com/150/150" alt="">
                            </figure>
                            <div class="col-lg-8">
                                <h3>Oportunidade de emprego</h3>
                                <p>Fatec São Roque tem processo seletivo para uma vaga de professor no ensino superior; confira</p>
                                <a type="button" class="btn btn-primary" href="#">Ver mais</a>
                            </div>
                        </div>
                        
                    </section>
                </section>

                <section class="row">
                    <h2>Concursos e Processos Seletivos</h2>
                    <div>
                        <ul>
                            <li class="concursos"><a href="#">Processo Seletivo Simplificado Para Contratação De Auxiliar de Classe</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Para Contratação de Dentista, Farmacêutico e Enfermeiro</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Simplificado para Contratação por Tempo Determinado</a></li>
                            <li class="concursos"><a href="#">Processo Seletivo Para Cuidador</a></li>
                            <li class="concursos"><a href="#">Concurso Público Para Agente Comunitário de Saúde</a></li>
                        </ul>
                          <a class="btn btn-primary text-right" href="#">Ver mais</a>
                        
                    </div>
                    
    
                </section>

                <section class="row">
                    <h3>Saúde</h3>
                    <article class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <figure class="col-lg-4 text-center"><img src="https://placekitten.com/150/150" alt=""></figure>
                            <div class="col-lg-8">
                                <h4>Campanha de vacinação contra Influenza</h4>
                                <p>Procure a UBS mais próxima</p>
                                <a type="button" class="btn btn-primary" href="#">Ver mais</a>
                            </div>
                        </div>
                    </article>
                </section>
            </article>
            <aside class="col-lg-4 col-md-6 col-sm-12">
                <section>
                    <h3>Mais Acessados</h3>
                    <ul>
                        <li><a href="../empresa/iptu.php">IPTU</a></li>
                        <li><a href="../turismo/eventos.php">Eventos</a></li>
                        <li><a href="../cidade/pessoasnotaveis.php">Pessoal notáveis</a></li>
                        <li><a href="servicos.php">Serviços</a></li>
                        <li><a href="../governo/legislacao.php">Legislação</a></li>
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
                        <li><a href="../cidade/index.php">Cidade</a></li>
                        <li><a href="../governo/index.php">Governo</a></li>
                        <li><a href="../empresa/home.php">Empresa</a></li>
                        <li><a href="../turismo/index.php">Turismo</a></li>
                        <li><a href="../cultura/index.php">Cultura</a></li>
                    </ul>
                </section>

                <section class="col-12">
                    <h3>Unidades de saúde</h3>
                    <ul class="row">
                        <li class="col-6"><a href="https://maps.app.goo.gl/PXSkHLNZSr8ChbyEA">PS Goianã</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/nDbYxSshQyaVZ3m67">UBS Central</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/t734crhrBW7utfwT9">UBS Guaçu</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/arwkNt6oGCdiMFzh9">UBS Taboão</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/GngCUJZy2m1dpkrB6">PS Vila Nova</a></li>
                        <li class="col-6"><a href="https://maps.app.goo.gl/Vr97ieYDFkAnLy4K6">PS Saboó</a></li>

                    </ul>
                </section>

                <form class="row" action="post">
                    <label>Para receber notícias de vagas</label>
                    <input class="form-control" type="text" placeholder="Nome">
                    <input class="form-control" type="email" placeholder="Email">
                    <button class="btn btn-primary">Enviar</button>
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

    <?php
      include '../includes/inc_footer.php';
    ?>

    <!-- Fim do Footer  -->

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>
</body>
</html>