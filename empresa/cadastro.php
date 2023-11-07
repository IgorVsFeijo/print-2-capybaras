<!DOCTYPE html>
<html lang="PT-BR">

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
    include '../includes/inc_header.php';
  ?>

<!-- Fim Header -->
    <h2>Infome Seus dados para cadastro</h2>

    <form>
    <div class="row text-center">
        <div class="my-3 col-lg-6 col-md-6 col-sm-12">
            <label class="form-label">Lorem:</label>
            <input class="form-control" type="text" name="Lorem"/>
        </div>

        <div class="my-3 col-lg-6 col-md-6 col-sm-12">
            <label class="form-label">Lorem:</label>
            <input class="form-control" type="text" name="Lorem"/>
        </div>

    </div>

    <div class="row text-center">
        <div class="my-3 col-lg-6 col-md-6 col-sm-12">
            <label class="form-label">Lorem:</label>
            <input class="form-control" type="text" name="Lorem"/>
        </div>

        <div class="my-3 col-lg-6 col-md-6 col-sm-12">
            <label class="form-label">Lorem:</label>
            <input class="form-control" type="text" name="Lorem"/>
        </div>

    </div>

    <div class="row text-center">

        <div class="my-3">
            <label class="form-label">Lorem:</label>
            <input class="form-control" type="text" name="Lorem"/>
        </div>

    </div>

    <div class="row text-center">

        <div class="col-lg-12 col-md-12 col-sm-12">
        <input type="submit" value="Enviar">
        </div>

    </div>

    </form>
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
</body>
</html>
</body>
</html>