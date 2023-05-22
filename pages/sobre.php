<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sobre</title>

  <!-- Estilos -->
  <link href="<?php echo $APP_CSS_PATH . 'materialize.css'; ?>" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo $APP_CSS_PATH . 'style.css'; ?>" media="screen, projection">

  <!-- JavaScript -->
  <script src="<?php echo $APP_JAVASCRIPT_PATH .  'materialize.min.js'; ?>" defer></script>
  <script src="<?php echo $APP_JAVASCRIPT_PATH . 'init.js'; ?> "></script>
</head>

<body>
  <?php
  include $APP_SHARED_PATH . '/navbar.php';
  ?>
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
        <div class="col s6">
          <div class="card">
            <div class="card-image">
              <img src="../img/apresentacaoPoligrill.jpg" />
              <span class="card-title">PoliGrill</span>
            </div>
          </div>
        </div>
        <div class="col s4">
          <p>

          <h4 class="h5">
            PoliGrill é a marca registrada da empresa OMZIPI, empresa situada
            na cidade de Limeira no interior de São Paulo, região conhecida
            como pólo industrial de jóias, fábricas automotivas e maquinários
            para indústria agro.
          </h4>
          </p>
        </div>
      </div>
    </section>
    <section id="o-que-fazemos">
      <div>Página que fazemos</div>
    </section>
    <section id="como-nascemos">
      <div>Página Como nascemos</div>
    </section>
  </div>

  <?php
  include $APP_SHARED_PATH . 'footer.php';
  ?>
</body>

</html>