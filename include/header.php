<!DOCTYPE html>
<html lang="sp">

<head>

  <link rel="icon" type="image/png" href="./img/favicon.png">
  <link rel="stylesheet" href="<?php if (isset($css)){echo $css;} ?>css/bootstrap-theme.min.css" type="text/css">
  <link rel="stylesheet" href="<?php if (isset($css)){echo $css;} ?>css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?php if (isset($css)){echo $css;} ?>css/customStyles.css" type="text/css">
  <title> <?php echo $pageTitle."ACM Uniandes"; ?> </title>
</head>

<?php 
  
  if ( !isset($index) && !isset($proyectos))
  {
    $index = 'index.php';
    $proyectos = 'proyectos.php';  
  }
  
?>

<body>
  <nav class="navbar navbar-default navbar-fixed-top cust" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $index; ?>"><img  class="navLogo" src="./img/favicon.png"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo $proyectos; ?>">Proyectos</a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <br><br><br>

    <div class="container">