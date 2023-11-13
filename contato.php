<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contatos</title>

    <?php
        include 'includes/inc_head_links.php';
      ?>

</head>

<body>
    <!-- Inicio Header -->

      <?php
        include 'includes/inc_header.php';
      ?>

    <!-- Fim Header -->

    <div class="container">

        <main class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="row text-center">
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Email</a>
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Número</a>
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Instagram</a>
                    <a class="col-lg-6 col-md-6 col-sm-12" href="#">Facebook</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <form class="row" action="post">
                    <label>Contate-nos</label>
                    <input class="form-control" type="text" placeholder="Nome">
                    <input class="form-control" type="email" placeholder="Email">
                    <textarea class="form-control"> </textarea>
                    <button class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </main> 
    </div>

    <?php
      include 'includes/inc_footer.php';
    ?>

    <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
</body>
</html>