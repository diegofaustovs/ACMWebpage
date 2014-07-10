  <?php 

  function ellipse($str,$n_chars,$projNumber)
  {
    $crop_str=' <a href="projects/proj.php?id='.$projNumber.'"> [...] </a>';
    $buff=strip_tags($str);
    if(strlen($buff) > $n_chars)
    {
      $cut_index=strpos($buff,' ',$n_chars);
      $buff=substr($buff,0,($cut_index===false? $n_chars: $cut_index+1)).$crop_str;
    }
    return $buff;
  }

  ?>