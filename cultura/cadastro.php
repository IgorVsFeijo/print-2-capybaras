<!DOCTYPE html>
<html lang="pt-BR">

<?php
function incluirHeader($titulo) {
    include('includes/inc_head.php');
}
$titulo = "Título da Página";
incluirHeader($titulo);
?>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container text-center">
        <main>
            <article>
                <h2>Faça seu cadastro!</h2>
                <form class="row g-4">
                  <div class="col-md-6">
                    <label for="inputName4" class="form-label">Nome do Artista/Grupo</label>
                    <input type="text" class="form-control" id="inputName4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputTextarea" class="form-label">Objetivos</label>
                    <textarea type="text" class="form-control" id="inputTextarea" placeholder="Digite aqui os seus objetivos ou os objetivos do grupo"></textarea>
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Área de Atuação</label>
                    <select id="inputState" class="form-select">
                      <option selected>...</option>
                      <option>Teatro</option>
                      <option>Bate-Papo</option>
                      <option>Oficina</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Nº de integrantes</label>
                    <select id="inputState" class="form-select">
                      <option selected>0</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10+</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">ENVIAR</button>
                  </div>
                </form>
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</html>