<?php 
$pageTitle = "Actividades - ";
include "include/header.php";

function ellipse($str,$n_chars,$projNumber)
{
  $crop_str=' <a href="activity.php?id='.$projNumber.'"> [Read More ...] </a>';
  $buff=strip_tags($str);
  if(strlen($buff) > $n_chars)
  {
    $cut_index=strpos($buff,' ',$n_chars);
    $buff=substr($buff,0,($cut_index===false? $n_chars: $cut_index+1)).$crop_str;
  }
  return $buff;
}

$nombreActividades = [
  "Hack@Tejas Hackaton",
];

 ?>  
  <div class="container">
  <link rel="stylesheet" type="text/css" href="css/bootsnipp.timeline.css"> <!-- Includes Timeline Script -->
    <ul class="timeline">

      <?php

        $preTitle = '<li>
          <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">';
        $preInclude='        </h4>
              </div>
              <div class="timeline-body">
                <p>';

        $postInclude="</p>
            </div>
          </div>
        </li>";

        for ($i = (count($nombreActividades)-1); $i >= 0; $i--) 
        { 
          echo $preTitle;
          echo $nombreActividades[$i];
          echo $preInclude;
          include './actividades/'.$i.'.php';
          echo $postInclude;
        };
        
      ?>
    </ul>
  </div>
<?php include "include/footer.php" ?>