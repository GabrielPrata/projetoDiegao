<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <title>Contatos</title>
</head>
<body>
    <header>
        <?php include 'navbar.html'; ?>
      </header>
    <div class="container">
        <div class="row">
            <div class="col m10 offset-m1 s12">
                <h2 class="center-align">Entre em Contato</h2>
                <div class="row">
                    <form class="col m8 offset-m2 s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name" type="text" placeholder="Nome">
                                <label for="name"></label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email" class="form-input" placeholder="Email">
                                <label for="email"></label>
                            </div>
                            <div class="input-field col s12">
                              <textarea id="message" class="materialize-textarea" placeholder="Mensagem"></textarea>
                              <label for="message"></label>
                            </div>
                          </div>
                          <div class="wrap">
                            <a class="button blue" href="">Enviar</a>
                          </div>
                          <div class="text">
                            <h1>Se preferir entre em contato atráves de outros links!</h1>
                          </div>
                          <div class="links">
                            <a href="https://wa.me/5519982870034">
                                <img src="img/whats.png" alt="whats">
                            </a>
                            <a href="tel:+551998287-0034">
                                <img src="img/phone.png" alt="phone">
                            </a>
                            <a href="mailto:contato@poligrill.com.br">
                                <img src="img/email.png" alt="email">
                            </a>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
      <?php include 'footer.php' ?>
    </footer>
</body>
</html>