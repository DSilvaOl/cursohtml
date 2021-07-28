<?php 
    global $tituloPagina;
    $tituloPagina = "Portifolio";
  inlude('partes/cabecalho.php'); ?>

          <header class="pagina-cabecalho">
              <h1 class="pagina-cabecalho__titulo">portifolio</h1>
          </header>
          <section class="pagina-conteudo">
              <p class="text-center">
                   eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee <br>
                  eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee <br>                      
                  eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee<br>
                </p>
                <nav>
                    <ul class="lista-trabalhos">
                        <li class="lista-trabalhos__item">
                            <a data-fancybox="gallery" href="img/Portifolio/futebol1.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/aircraft-2806035_1280.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">nome do trabalho</h2>
                        </a>
                        </li>
                        <li class="lista-trabalhos__item">
                            <a data-fancybox="gallery" href="img/Portifolio/futebol2.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/gear-2291916_1280.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                            <a data-fancybox="gallery" href="img/Portifolio/futebol3.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/hong-kong-1990268_1280.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">nome do trabalho</h2>
                        </a>
                        </li>
                        <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/Portifolio/futebol3.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/saddle-2614038_1280.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">nome do trabalho</h2>
                        </a>
                    </li>
                    <li class="lista-trabalhos__item">
                        <a data-fancybox="gallery" href="img/Portifolio/futebol3.jpg">
                            <img class="lista-trabalhos__img" src="img/portfolio/town-2430571_1920.jpg" alt="">
                            <h2 class="lista-trabalhos__titulo">nome do trabalho</h2>
                        </a>
                        </li>
                    </ul>
                </nav>

          </section>
          <?php include('partes/rodape.php'); ?>
