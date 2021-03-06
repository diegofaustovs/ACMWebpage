<!DOCTYPE html>
<html lang="sp">

<head>
<?php 
  $favicon = "./img/favicon.png";
?>
  <link rel="icon" type="image/png" href="<?php echo $favicon ?>">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/bootsnipp.timeline.css" type="text/css">
  <link rel="stylesheet" href="css/customStyles.css" type="text/css">
  <title> <?php echo $pageTitle."ACM Uniandes"; ?> </title>
</head>

<?php 

  $cuadroHonor = 'integrantes.php';
  $actividades = 'actividades.php';
  
  if ( !isset($index) && !isset($proyectos))
  {
    $index = 'index.php';
    $proyectos = 'proyectos.php';  
  };
  
?>

<script>
function goBack() {
    window.history.back()
}
</script>

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
        <a class="navbar-brand cust" href="<?php echo $index; ?>"><img  class="navLogo" src="<?php echo $favicon?>"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo $proyectos; ?>">Proyectos</a></li>
          <li><a href="<?php echo $actividades; ?>">Actividades</a></li>
          <li><a href="<?php echo $cuadroHonor; ?>">Cuadro de Honor</a></li>
          
        </ul>
      </div>
    </nav>
    <br><br><br>

    <div class="container">