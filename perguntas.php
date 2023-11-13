<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>São Roque - Título da Página</title>

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

    <div class="container text-center">
      <main>
        <article>
          <h2>Encontre respostas para as dúvidas mais comuns sobre a nossa cidade</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum magnam perspiciatis, eius dolores delectus excepturi repellendus ut? Ullam, iusto vitae quisquam aliquid labore libero, maxime, exercitationem tenetur harum dicta dignissimos?</p>
          <section>
            <h3>Dúvidas Gerais</h3>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur magnam pariatur non dolores similique at quidem nesciunt corporis, doloribus explicabo necessitatibus ducimus recusandae eius doloremque neque qui laborum delectus ea?</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, minus nesciunt? Soluta beatae amet mollitia quos porro animi cum enim autem, sint placeat qui iure incidunt quod velit! Commodi, animi.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam error reiciendis adipisci nulla veritatis deleniti et animi sapiente numquam. Ex vel exercitationem veniam. Tempore nobis temporibus cupiditate ad minus quos!</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam error reiciendis adipisci nulla veritatis deleniti et animi sapiente numquam. Ex vel exercitationem veniam. Tempore nobis temporibus cupiditate ad minus quos!</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam error reiciendis adipisci nulla veritatis deleniti et animi sapiente numquam. Ex vel exercitationem veniam. Tempore nobis temporibus cupiditate ad minus quos!</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam error reiciendis adipisci nulla veritatis deleniti et animi sapiente numquam. Ex vel exercitationem veniam. Tempore nobis temporibus cupiditate ad minus quos!</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </article>
      </main>
    </div>
    <?php
      include 'includes/inc_footer.php';
    ?>
    <!-- Fim Footer -->

        <?php
      include 'includes/inc_bootstrap_js.php';
    ?>
    
  </body>
</html>
