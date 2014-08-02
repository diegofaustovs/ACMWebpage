<?php 
	$pageTitle = "Cuadro de Honor - ";
	include "include/header.php";

	$integrantes = [
		array( "Diego Gomez", "Presidente", "https://scontent-a.xx.fbcdn.net/hphotos-xap1/t1.0-9/60573_472733149739_365699_n.jpg"),
		array( "Diego Rodriguez", "Vicepresidente", "https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10169336_10152361844514313_3204006109685667910_n.jpg"),
		array( "Diego Vanegas", "Stormaggedon", "https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfa1/t1.0-9/10552535_10152542599777908_500766573686849000_n.jpg"),
		array( "David Paternina", "Peasant", "https://scontent-a.xx.fbcdn.net/hphotos-xfa1/t31.0-8/920030_10203024644829913_5829924610810653281_o.jpg"),
		array( "Camilo Ortiz", "Slave", "http://i2.kym-cdn.com/photos/images/newsfeed/000/352/749/e44.gif"),
		array( "Battle Doge", "Security", "http://37.media.tumblr.com/4ec725928e2178e0d7bb73da9e5a9b0a/tumblr_n2lwoue1hy1sk3kono1_1280.jpg"),
		array( "Doge", "Better than Camilo", "http://www.nerdist.com/wp-content/uploads/2014/02/WatchDoge.png"),
	];
?>

<link rel="stylesheet" href="//frontend.reklamor.com/fancybox/jquery.fancybox.css" media="screen">
<script src="./js/fancybox.js"></script>

<div class="container">
	<div class="row">
		<!--<div class='list-group gallery'>-->

		<?php
			for ($i=0; $i < count($integrantes); $i++) 
			{ 
//				echo '<div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
//                <a class="thumbnail fancybox" rel="ligthbox" href="'.$integrantes[$i][2].'">
//                    <img class="img-responsive" alt="" src="'.$integrantes[$i][2].'" />
//                    <div class="text-right">
//                        <small class="text-muted">'.$integrantes[$i][0].'</small>
//                    </div>
//                </a>
//            </div> <!-- col-6 / end -->';

            	echo '<div class="col-md-3 col-sm-4 col-xs-6"><div class="thumbnail cust"><img class="img-responsive imgCarousel" src="'.$integrantes[$i][2].'"/><div class="caption cust">'.$integrantes[$i][0].'</div></div></div>';
			}

        ?>

        <!--</div> -->
	</div> <!-- row / end -->
</div> <!-- container / end -->

<?php include "include/footer.php" ?>