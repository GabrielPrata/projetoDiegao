<!-- Página feita por Gabriel Prata -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="img/icons/favicon.ico" />
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
    <script src="js/popUpWhats.js"></script>
    <script src="js/animate.js"></script>
</head>

<body>
    <?php
    include 'navbar.html';
    ?>

    <a href="#WhatsApp" onclick="tamanhoTela()">
        <img src="img/icons/popupWhats.png" alt="Pop Up WhatsApp" id="popupZap">
    </a>

    <section>
        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="tom-cinza-text">"Não fazemos churrasqueiras, transformamos vidas e propomos oportunidades de negócios"</h5>
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
                    <h1 class="roboto center-align titulos" id="titulo1">Por que a PoliGrill?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l5 right" id="img1">
                    <img src="img/imagem-home1.png" alt="Imagem homem PoliGrill" id="imagemHomemChurrasqueira">
                </div>
                <div class="col s12 l7 left" id="texto1">
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
                    <h1 class="tom-cinza-text roboto center-align titulos" id="titulo2">
                        Nossos Diferenciais:
                    </h1>
                </div>
            </div>
            <div class="row tom-cinza-text center-align">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center tom-cinza-text" id="icon1"><i class="material-icons large">done_all</i></h2>
                        <div id="textIcon1">
                            <h5 class="center">Maior Qualidade</h5>

                            <p class="tom-cinza-text">
                                Nós nos esforçamos para oferecer as melhores churrasqueiras industriais do mercado. Utilizamos materiais de alta qualidade e técnicas de fabricação de última geração para garantir que nossos produtos sejam duráveis, seguros e eficientes. Nossas churrasqueiras são projetadas para suportar altas temperaturas e uso intensivo, tornando-se uma opção confiável e duradoura para sua empresa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center tom-cinza-text" id="icon2"><i class="material-icons large">brush</i></h2>
                        <div id="textIcon2">
                            <h5 class="center">Personalização</h5>

                            <p class="tom-cinza-text">
                                Sabemos que cada negócio tem necessidades diferentes, por isso oferecemos opções personalizadas de churrasqueiras industriais. Seja para atender às suas necessidades específicas de espaço, volume ou design, podemos adaptar nossas churrasqueiras para atender às suas demandas. Além disso, podemos adicionar recursos extras, como sistemas de ventilação e isolamento térmico, para tornar sua experiência de churrasco ainda melhor.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center tom-cinza-text" id="icon3"><i class="material-icons large">support_agent</i></h2>
                        <div id="textIcon3">
                            <h5 class="center">Suporte ao Cliente</h5>

                            <p class="tom-cinza-text">
                                Nosso compromisso com a satisfação do cliente não acaba com a venda da churrasqueira. Oferecemos suporte completo aos nossos clientes, desde a instalação até o suporte técnico e manutenção. Nossa equipe experiente está sempre pronta para responder a qualquer pergunta ou solucionar qualquer problema que possa surgir. Você pode contar conosco para fornecer a melhor experiência possível de churrasco industrial.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>
    <section class="center-align">
        <br>
        <div class="conteiner">
            <div class="row">
                <div class="col s12">
                    <h1 class="tom-preto-text roboto titulos" id="titulo3">
                        Venha nos Visitar!
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.3412935914566!2d-47.3826829900281!3d-22.566335125705184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c87fd5b985d48b%3A0x6f3aefdee188775c!2sChurrasqueiras%20PoliGrill!5e0!3m2!1spt-BR!2sbr!4v1683908794751!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mapa"></iframe>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <?php
    include 'footer.php';
    ?>
</body>

</html>