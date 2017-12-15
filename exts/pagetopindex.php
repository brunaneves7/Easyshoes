
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">

        <a class="navbar-brand js-scroll-trigger" href="index.php">EasyShoes</a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">SOBRE</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">SERVIÇOS</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="equipe.php">EQUIPE</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pagina_funcionario.php">PÁGINA DO FUNCIONÁRIO</a>
            </li>

            <?php if ( $_SESSION['logado'] == true ): ?>

              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="aboutuser.php"?><i class="fa fa-2x fa-user-circle-o sr-icons" title="Deslogar"></i> USUÁRIO:  <?=$_SESSION['usuario']?></a>
              </li>
                   
              <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="unlog.php"><i class="fa fa-2x fa-power-off sr-icons" title="Deslogar"></i></a>
              </li>

            <?php endif ?>
            
            <?php if ( $_SESSION['logado'] == false ): ?>

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
              </li>

            <?php endif ?>
            
          </ul>
        </div>
      </div>
    </nav>
  

