<?php 

$indicators = '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
$slides = '</ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./actividades/0/0.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>';
$controls = '</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>';
    

    echo $indicators;

    for ($i=1; $i < $imagenes; $i++) { 
      echo '<li data-target="#carousel-example-generic" data-slide-to="'.$i.'"></li>';
    }
  
    echo $slides;

    for ($i=1; $i < $imagenes; $i++) 
    {

    echo '<div class="item">
      <img src="./actividades/0/'.$i.'.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>';
    }

    echo $controls;
?>