<header class="navbar-fixed">
    <nav class="tom-vermelho-1 roboto" role="navigation" id="navbar">
        <a href="#" data-target="nav-mobile" class="sidenav-trigger tom-cinza-text hide-on-large-only left">
            <i class="material-icons">menu</i>
        </a>
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo">
                <img id="logoHeader" src="<?php echo $APP_IMAGE_PATH . 'logo_PoliGrill_fundo_preto.png' ?>" alt="Logo PoliGrill">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo $APP_HOME_PATH . 'index.php' ?>" class="tom-cinza-text">Home</a></li>
                <li><a href="<?php echo $APP_PAGES_PATH . 'products.php' ?>" class="tom-cinza-text">Produtos</a></li>
                <li><a href="<?php echo $APP_PAGES_PATH . 'contact.php' ?>" class="tom-cinza-text">Contato</a></li>
                <li><a href="<?php echo $APP_PAGES_PATH . 'sobre.php' ?>" class="tom-cinza-text">Sobre</a></li>
            </ul>
        </div>

        <!-- Sidenav para Mobile -->
        <ul class="sidenav tom-vermelho-2 white-text" id="nav-mobile">
            <li><a href="<?php echo $APP_HOME_PATH . 'index.php' ?>" class="white-text">Home</a></li>
            <li><a href="<?php echo $APP_PAGES_PATH . 'products.php' ?>" class="white-text">Produtos</a></li>
            <li><a href="<?php echo $APP_PAGES_PATH . 'contact.php' ?>" class="white-text">Contato</a></li>
            <li><a href="<?php echo $APP_PAGES_PATH . 'sobre.php' ?>" class="white-text">Sobre</a></li>
        </ul>
    </nav>


</header>