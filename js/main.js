
//for(let i = 10; i >= 1; i --)
//{
//   console.log(i);
//}

//function somaDoisNumeros(x,y){
//return x + y;
//}
//console.log( somaDoisNumeros(10,3) );

//let cores = ["azul","vermelho", "verde"];

//console.log(cores[1]);

//cores[5] = "amarelo";

//console.log(cores);

//for(let i = 0; i <= cores.length - 1; i++){
//    console.log(cores[i]);
//}

//console.log("------------------");

//cores.forEach(function(valor){
//    console.log(valor);
//});


//let cores = ["azul","vermelho", "verde"];

//let carro = {
//   marca: "Fiat",
//    modelo: "147",
//    cor: "Branca",
//    andar: function(){
//        return "andar";
//    }
//};

//console.log(carro.andar());


//let carro = {
 //   marca: "Fiat",
   // modelo: "147",
 //   cor: "Branca",
   // ligado: false,
//    km: 0,
  //  ligar: function(){
    //    this.ligado = true;
//    },
  //  andar: function(distancia){
    //    this.ligar();
//        this.km = this.km + distancia;
  //      return this.km;
    //}
//};

//console.log(carro.andar(10));
//console.log(carro.andar(20));
//console.log(carro.andar(16));
//console.log(carro.andar(13));
//console.log(carro.km);

//let servicos = document.getElementById('servicos');
//servicos.innerHTML = "Nossa primeirra transformação";

//document.getElementsByIdTagName('p');
//document.getElementsByClassName('.menu-principal');
//document.getElementsByName('');
//document.querySelector('p.principal');

//let resultados = document.getElementsByClassName('cabecalho-home__titulo');
//console.log( resultados[0] );
//let botao = document.createElement('button');
//botao.innerHTML = "Botao JS";
//resultados[0].parentElement.appendChild(botao);
//resultados[0].parentElement.removeChild(resultado[0]);

//let resultados = document.getElementsByClassName('cabecalho-home__titulo');

//resultados[0].addEventListener('click', funcaoResposta);

//clicou = 1;
//function funcaoResposta(evento){
   // evento.toElement.innerHTML = "clicou!" + contador + "x" ;
    //contador++;
//}


//javaScript Puro

//let botao = document.querySelector('.menu-principal__btn');
//let menuPrincipal = document.querySelector('.menu-principal');
//console.log(botao;)

//botao.addEventListener("click", abreFechaMenu );

//function abreFechaMenu(evento){
  //menuPrincipal.classList.toggle('menu-principal--fechado');
//}

//jquery


//$('.cabecalho-home__titulo').html('texto novo');
//$('.cabecalho-home__titulo').click(function(){
//  alert("clicou");
//});


$(document).ready(function(){
  // botao do menu
    $('.menu-principal__btn').click(function(){
      $('.menu-principal').toggleClass('menu-principal--fechado');
  });
});

//slide depoimentos

    $('.depoimentos__caixa').slick({
    autoplay: true,
    arrows: false,
    dots: true,
    });

    // validadção do formulario de contrato 

    $('.formulario').validate({
      rules: {
        nome:'required',
        email: {
            required: true,
            email: true
        },
        mensagem: 'required'
            
        },messages: {
              nome: "Por favor preencha o campo Nome",
              email: {
                required: 'Por favor preencha o e-mail.',
                email: 'Por favor preencha um e-mail valido.',
              },
              mensagem: "Por favor preencha o campo mensagem",
      }
    
    });

  



