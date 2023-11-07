<!DOCTYPE html>
<html lang="en">

<?php
function incluirHeader($titulo) {
    include('includes/inc_head.php');
}
$titulo = "Título da Página";
incluirHeader($titulo);
?>

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