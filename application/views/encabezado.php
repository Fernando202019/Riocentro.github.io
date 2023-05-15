
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">

  <!--Para compativilidad con Android y edge-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riocentro</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</head>

<!-- Se encuentra el logo y la barra de busquedad  -->
<body>


  <div class="w-100 p-3" style="background-color: #5A2B93;">
    <br>

    <div class="container">
      <div class="row">

        <div class="col-sm">
    <img src="<?php echo base_url(); ?>/assets/images/logo2.png" alt="logo" class="img-thumbnail">

  </div>

  <div class="col-sm-1">
    <br>
    <br>
    <nav class="main-nav">
              <a href="#" class="nav-toggle"></a>
              <ul id="sub-nav" class="nav">

                <li> <a href="https://www.instagram.com/riocentroshopec/?hl=es" target="_blank" class="nav-link">instagram</a></li>
                  <li> <a href="https://www.facebook.com/RiocentroShoppingEc/" target="_blank" class="nav-link">facebook</a></li>
                  </ul>
            </nav>
  </div>



  <div class="col-sm-3">
    <select class="form-control" style="background-color: #E2F883;" id="inlineFormCustomSelect">
      <option selected>-Escoja un Riocentro Shopping</option>
      <option value="1">Riocentro El Dorado</option>
      <option value="2">Riocentro Entre Rios</option>
      <option value="3">Riocentro Los Ceibos </option>
      <option value="4">Riocentro Norte </option>
      <option value="5">Riocentro Quito </option>
      <option value="6">Riocentro Sur </option>
      <option value="7">Todos Los Riocntros Shopping </option>
    </select>
    <br>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <form class="d-flex" role="busquedad de tiendas">
          <input class="form-control me-2" type="busquedad de tiendas" placeholder="Busquedad de tiendas" aria-label="Busquedad de tiendas">
          <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </nav>
</div>
</div>
</div>
<br>
</div>


<!-- Inserto panel de Navegacion -->
<div class="w-100 p-0" style="background-color: #0E5B79;">

<nav class="navbar navbar-expand-lg bg-inverse">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=" <?php echo site_url('centros/centro'); ?>  ">CENTROS COMERCIALES</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active"aria-current="page"href="<?php echo site_url('horarios/hora'); ?>">HORARIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"aria-current="page"href="<?php echo site_url('locales/local'); ?>">LOCALES COMERCIALES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"aria-current="page"href="<?php echo site_url('Eventos/event'); ?>">EVENTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"aria-current="page"href="<?php echo site_url('resoluciones/resol'); ?>">RESOLUCIONES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"aria-current="page"href="<?php echo site_url('contactanos/contact'); ?>">CONTACTANOS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</div>
<br>

</body>
