<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

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
                        <li><a href="#">Página 1</a></li>
                        <li><a href="#">Página 1</a></li>
                        <li><a href="#">Página 1</a></li>
                        <li><a href="#">Página 1</a></li>
                        <li><a href="#">Página 1</a></li>
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
                        <li><a href="#">Área 1</a></li>
                        <li><a href="#">Área 1</a></li>
                        <li><a href="#">Área 1</a></li>
                        <li><a href="#">Área 1</a></li>
                        <li><a href="#">Área 1</a></li>
                    </ul>
                </section>

                <section class="col-12">
                    <h3>Unidades de saúde</h3>
                    <ul class="row">
                        <li class="col-6"><a href="#">Posto 1</a></li>
                        <li class="col-6"><a href="#">Posto 1</a></li>
                        <li class="col-6"><a href="#">Posto 1</a></li>
                        <li class="col-6"><a href="#">Posto 1</a></li>
                        <li class="col-6"><a href="#">Posto 1</a></li>
                        <li class="col-6"><a href="#">Posto 1</a></li>
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

    <?php
      include '../includes/inc_bootstrap_js.php';
    ?>
</body>
</html>