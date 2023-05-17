<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre a PoliGrill</title>

  <!-- Estilos -->
  <link rel="stylesheet" type="text/css" href="../css/materialize.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />

  <!-- JavaScript -->
  <script src="../js/materialize.min.js" defer></script>
</head>

<body>
  <?php
  include '../config.php';
  include $APP_SHARED_PATH . '/navbar.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <ul class="tabs" id="tabSobre">
          <li class="tab col s3">
            <a class="active" href="#sobre-nos">Quem Somos?</a>
          </li>
          <li class="tab col s3">
            <a href="#o-que-fazemos">O que fazemos?</a>
          </li>
          <li class="tab col s3">
            <a href="#como-nascemos">Como nascemos?</a>
          </li>
        </ul>
      </div>
      <section id="sobre-nos">
        <div class="row">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="<?php echo $APP_IMAGE_PATH . 'apresentacaoPoligrill.jpg' ?>" />
              </div>
            </div>
          </div>
          <div class="col s12 m4" style="min-height: 100% !important;">
            <h6>
              A PoliGrill, marca renomada de churrasqueiras, é uma empresa líder do setor, sediada em Limeira, São
              Paulo. Situada em uma região reconhecida por sua excelência industrial, a PoliGrill pertence à OMZIPI, uma
              empresa especializada em jóias, fábricas automotivas e maquinários para a indústria agro.
            </h6>
            <h6>
              Combinando a expertise em projetos industriais e a paixão pela culinária, a PoliGrill se esforça para
              oferecer churrasqueiras que vão além das expectativas dos clientes. Nossa marca representa a fusão
              perfeita entre design inovador, desempenho excepcional e uma experiência gastronômica única. Com a
              PoliGrill, você terá a certeza de estar adquirindo um produto de qualidade superior, criado por uma equipe
              dedicada e apaixonada por churrascos.
            </h6>
          </div>
        </div>
      </section>
      <section id="o-que-fazemos">
        <div class="row">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="<?php echo $APP_IMAGE_PATH . '4-9-8-Brasa-Espetaria.jpg' ?>"
                  alt="Imagem do restaurante Brasa Espetaria, demonstrando um dos muitos clientes de sucesso da PoliGrill" />
                <span class="card-title tom-vermelho-1-text" style="font-size: 22px; background-color: #d4d4d490">"Não
                  fazemos churrasqueiras,
                  transformamos vidas e
                  propomos oportunidades de
                  negócios".</span>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <h6>
              Desfrute da extraordinária experiência dos espetinhos gourmet do "O ESPETINHO DA HORA", criados pelo
              renomado projetista de máquinas industriais, nosso CEO e fundador David Zanetti. Cada detalhe foi
              cuidadosamente aprimorado para garantir eficiência, sabor e uma experiência gastronômica única. Nossa
              equipe enfrentou desafios e encontrou soluções engenhosas, resultando em espetinhos cuidadosamente
              montados, com ingredientes frescos e selecionados, proporcionando uma fusão perfeita de sabores. Junte-se
              a nós nessa jornada sensorial e descubra um novo nível de prazer ao saborear nossos espetinhos gourmet.
            </h6>
            <h6>
              Na PoliGrill, não apenas criamos as melhores churrasqueiras de espetinhos do mundo, mas também oferecemos
              uma experiência única de assar e saborear. Combinando paixão e expertise em projetos industriais, nossa
              marca é sinônimo de excelência e inovação. Nossas churrasqueiras foram projetadas para superar desafios
              como desperdícios, limpeza e temperatura, proporcionando maior produtividade e satisfação. Desfrute de
              momentos memoráveis ao lado de amigos e familiares, saboreando espetinhos cuidadosamente preparados,
              criando uma fusão perfeita de sabores que vai encantar seu paladar. Junte-se à PoliGrill e descubra o
              verdadeiro prazer de assar espetinhos.
            </h6>
            </p>
          </div>
        </div>
      </section>
      <section id="como-nascemos">
        <div class="row">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="<?php echo $APP_IMAGE_PATH . '4-1-2 Personal Grill.jpeg' ?>"
                  alt="Imagem do restaurante Brasa Espetaria, demonstrando um dos muitos clientes de sucesso da PoliGrill" />
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <h6>
              A PoliGrill nasceu da necessidade de aprimorar e otimizar o processo de assar espetinhos, enfrentando
              desafios como a limpeza da churrasqueira, que demandava duas horas diárias. Movido pela busca por
              soluções, nosso CEO e projetista industrial, David Zanetti, embarcou em um projeto de melhorias para todas
              as etapas do processo de uma churrasqueira de espetinhos.
            </h6>
            <h6>
              Após superar obstáculos como desperdícios, limpeza, temperatura externa e redução no consumo de carvão,
              nasceu a melhor churrasqueira de espetinhos do mundo. Essa inovação não apenas aumentou os lucros e a
              produtividade, mas também proporcionou maior satisfação aos clientes. Assim, a marca PoliGrill foi
              registrada e patenteada, marcando o início de uma jornada de sucesso no mercado de churrasqueiras.
            </h6>
          </div>
        </div>

      </section>
    </div>
  </div>

  <?php

  include $APP_SHARED_PATH . 'footer.php';
  ?>
</body>

</html>