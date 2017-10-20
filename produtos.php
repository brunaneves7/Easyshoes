<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nossos Produtos</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/   css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">EasyShoes</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login/cadastro_sapato.php">Cadastrar Produto (FUNCIONÁRIOS)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login/login.php">Login (FUNCIONÁRIOS)</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Nossos Produtos: </h2>
          </div>
        </div>
      </div>
    </section>

     <div class="container"><br><br><br>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Pesquise aqui o que deseja:</h3>
            <div class="pull-right">
              <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                <i class="glyphicon glyphicon-filter"></i>
              </span>
            </div>
          </div>
          <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtro de Produtos" />
          </div>
          <table class="table table-hover" id="dev-table">
            <thead>
              <tr>
                <th>Marca</th>
                <th>Número</th>
                <th>Cor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sapato Adidas</td>
                <td>42</td>
                <td>Preto</td>
              </tr>
              <tr>
                <td>Sandália Hawaianas</td>
                <td>38</td>
                <td>Branco</td>
              </tr>
              <tr>
                <td>Bolsa Corean</td>
                <td>10</td>
                <td>Preto</td>
              </tr>
              <tr>
                <td>Cinto de Couro</td>
                <td>20</td>
                <td>Bege</td>
              </tr>
              <tr>
                <td>Sapato Adidas</td>
                <td>20</td>
                <td>Branco</td>
              </tr>
              <tr>
                <td>Salto Scarpan</td>
                <td>39</td>
                <td>Vermelho</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="js/filter.js"></script>
    

  </body>

</html>