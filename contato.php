<?php 
    global $tituloPagina;
    $tituloPagina = "Contato";
  inlude('partes/cabecalho.php'); ?>
    
            <header class="pagina-cabecalho"> 
               <h1 class="pagina-cabecalho__titulo">Contato</h1>
           </header>
           <section class="container pagina-conteudo">
              <p class="text-center"> lllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll</p>
              <form action="#" class="formulario">
                  <div class="formulario__grupo">
                      <label class="formulario__label" for="nome">Nome:</label><br>
                      <input class="formulario__campo" id="nome" type="text" name="nome">
                  </div>
                  <div class="formulario__grupo">
                      <label class="formulario__label" for="email">E-mail:</label><br>
                      <input class="formulario__campo" id="email" type="email" name="email" >
                      </div>
                     <div class="formulario__grupo">
                  <label class="formulario__label" for="mensagem">Mensagem:</label><br>
                  
                  <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class="formulario__botao" value="Enviar">
              </form>
              <text-centerp>mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmbr
                            mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
                </p>
    <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14628.048461698572!2d-46.932475283975144!3d-23.56800835122033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1617680570616!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
           </section>
<?php include('partes/rodape.php'); ?>