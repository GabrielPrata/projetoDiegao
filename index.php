<!-- Página feita por Gabriel Prata -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo! Poligrill</title>

    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,400&display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="css/home.css" media="screen, projection">


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/materialize.min.js" defer></script>
    <script src="js/init.js"></script>
</head>

<body>
    <?php
    include 'navbar.html';
    ?>
    <section>
        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="tom-cinza-text" id="texto-parallax-1">"Não fazemos churrasqueiras, transformamos vidas e propomos oportunidades de negócios"</h5>
                        <p class="tom-cinza-text roboto" id="paragrafo-parallax-1">O ótimo resultado do seu negócio de espetinhos, que de algo aparentemente simples, o “assar espetinhos” precisou desenvolver melhorias para ser eficiente nos processos se deparando com diversos desafios...</p>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="img/carne-parallax.jpg" alt="Imagem Parallax 1"></div>
        </div>
    </section>
    <br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="roboto center-align titulos">Por que a PoliGrill?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l5 right">
                    <img src="img/imagem-home1.png" alt="Imagem homem PoliGrill" id="imagemHomemChurrasqueira">
                </div>
                <div class="col s12 l7 left">
                    A produção de churrasco em grande escala exige equipamentos robustos e eficientes. É por isso que a nossa empresa se dedica à fabricação de churrasqueiras industriais, desenvolvidas especificamente para atender às necessidades dos negócios de espetinhos e churrascarias.
                    <br>
                    Com anos de experiência na produção de churrasqueiras de alta qualidade, nossos equipamentos são projetados para oferecer o máximo desempenho e eficiência no preparo de carnes e outros alimentos. Utilizamos materiais resistentes e duráveis, como aço inoxidável de alta qualidade, para garantir a longevidade e durabilidade das nossas churrasqueiras.
                    <br>
                    Nosso objetivo é fornecer churrasqueiras industriais de alta qualidade que possam ajudar a impulsionar o seu negócio de espetinhos ou churrascaria. Com nossos equipamentos, você pode ter a certeza de que seus clientes receberão refeições deliciosas e de qualidade superior, preparadas de maneira rápida e eficiente.

                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="tom-preto">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="tom-cinza-text roboto center-align titulos">
                        Nossos Diferenciais:
                    </h1>
                </div>
            </div>
            <div class="row tom-cinza-text center-align">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center tom-cinza-text"><i class="material-icons large">flash_on</i></h2>
                        <h5 class="center">Maior Qualidade</h5>

                        <p class="tom-cinza-text">
                            Nós nos esforçamos para oferecer as melhores churrasqueiras industriais do mercado. Utilizamos materiais de alta qualidade e técnicas de fabricação de última geração para garantir que nossos produtos sejam duráveis, seguros e eficientes. Nossas churrasqueiras são projetadas para suportar altas temperaturas e uso intensivo, tornando-se uma opção confiável e duradoura para sua empresa.
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center tom-cinza-text"><i class="material-icons large">group</i></h2>
                        <h5 class="center">Personalização</h5>

                        <p class="tom-cinza-text">
                            Sabemos que cada negócio tem necessidades diferentes, por isso oferecemos opções personalizadas de churrasqueiras industriais. Seja para atender às suas necessidades específicas de espaço, volume ou design, podemos adaptar nossas churrasqueiras para atender às suas demandas. Além disso, podemos adicionar recursos extras, como sistemas de ventilação e isolamento térmico, para tornar sua experiência de churrasco ainda melhor.
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center tom-cinza-text"><i class="material-icons large">settings</i></h2>
                        <h5 class="center">Suporte ao Cliente</h5>

                        <p class="tom-cinza-text">
                            Nosso compromisso com a satisfação do cliente não acaba com a venda da churrasqueira. Oferecemos suporte completo aos nossos clientes, desde a instalação até o suporte técnico e manutenção. Nossa equipe experiente está sempre pronta para responder a qualquer pergunta ou solucionar qualquer problema que possa surgir. Você pode contar conosco para fornecer a melhor experiência possível de churrasco industrial.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
</body>

</html>