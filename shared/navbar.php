<header class="navbar-fixed">
    <nav class="tom-vermelho-1 roboto" role="navigation" id="navbar">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo left">
                <img id="logoHeader" src="<?php echo $APP_IMAGE_PATH . 'logo_PoliGrill_fundo_preto.png' ?>" alt="Logo PoliGrill">
            </a>

            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo $APP_HOME_PATH . 'index.php' ?>" class="tom-cinza-text">Home</a></li>
                <li><a href="<?php echo $APP_PAGES_PATH . 'products.php' ?>" class="tom-cinza-text">Produtos</a></li>
                <li><a href="<?php echo $APP_PAGES_PATH . 'contact.php' ?>" class="tom-cinza-text">Contato</a></li>
                <li><a href="<?php echo $APP_PAGES_PATH . 'sobre.php' ?>" class="tom-cinza-text">Sobre</a></li>
            </ul>
        </div>
    </nav>
    <!-- Sidenav para Mobile -->

    <a href="#" data-target="nav-mobile" class="sidenav-trigger tom-cinza-text hide-on-large-only">
        <i class="material-icons">menu</i>
    </a>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Home</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="/projetoDiegao/pages/sobre.php">Sobre</a></li>
    </ul>

</header>