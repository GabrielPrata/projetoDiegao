<!-- Página feita por Giovane -->
<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="img/icons/favicon.ico"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    <!-- Estilos -->
    <link href="<?php echo $APP_CSS_PATH . 'materialize.css'; ?>" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo $APP_CSS_PATH . 'style.css'; ?>" media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo $APP_CSS_PATH . 'contacts.css'; ?>" media="screen, projection">

    <!-- JavaScript -->

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="<?php echo $APP_JAVASCRIPT_PATH .  'materialize.min.js'; ?>" defer></script>
    <script src="<?php echo $APP_JAVASCRIPT_PATH . 'init.js'; ?> "></script>
    <title>Contatos</title>
</head>

<body>
    <header>
    <?php
    include $APP_SHARED_PATH . '/navbar.php';
    ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1 s12">
                <h2 class="center-align-contato">Entre em Contato</h2>
                <div class="row">
                    <form id="formulario_contato"class="col m8 offset-m2 s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="text" placeholder="Nome">
                                <label for="name"></label>
                            </div>
                            <div class="input-field col s12">
                                <input class="form-input" placeholder="Email">
                                <label for="email"></label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="message-contato" class="materialize-textarea" placeholder="Mensagem"></textarea>
                                <label for="message"></label>
                            </div>
                        </div>
                        <div>
                            <a class="button blue" href="">Enviar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
    <?php
    include $APP_SHARED_PATH . 'footer.php';
    ?>
    </footer>
</body>

</html>