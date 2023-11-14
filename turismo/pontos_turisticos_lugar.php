<!DOCTYPE html>
<html lang="pt-br">

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
    <div class="container text-center">
        <div class="row justify-content-start">
            <p class="col-2">lorem</p>
        </div>
        <article>
            <h1>h1 - Article</h1>
            <figure>
                <img src="http://placekitten.com/736/300" alt="Imagem Via Placeholder">
            </figure>
            <div class="row">
                <p class="col-lg-6 col-md-6 col-sm-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                    cum excepturi est earum repudiandae sint? Quam reiciendis accusantium neque illo minima ad, animi
                    alias quaerat aut eos id eveniet necessitatibus.</p>
                <p class="col-lg-6 col-md-6 col-sm-6">Accusantium, nulla odio ducimus ipsa delectus enim itaque animi
                    sed id excepturi nam optio sunt iusto blanditiis exercitationem porro necessitatibus aspernatur
                    laboriosam perferendis a. Nemo ad quas eum recusandae laborum.</p>
            </div>
        </article>
        <section>
            <div class="row justify-content-start">
                <h3 class="col-5">h3 - Section</h3>
            </div>

            <div class="row justify-content-start">
                <p class="col-7"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" />
                    </svg>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <p class="col-7"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" />
                    </svg>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <p class="col-7"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" />
                    </svg>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                <p class="col-7"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8" />
                    </svg>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </section>






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