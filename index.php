<html>
<head>
	<title>MOVIES</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="http://vjs.zencdn.net/5.18.4/video-js.css" rel="stylesheet">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <script src="http://vjs.zencdn.net/5.18.4/video.js"></script>
    <script src="//cdn.sc.gl/videojs-hotkeys/latest/videojs.hotkeys.min.js"></script>
</head>
<body>
	<div id="wrapper">
			<header id="header" class="alt">
				<nav>
					<a href="#menu">Movies</a>
				</nav>
			</header>
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Tamil HD</a></li>
					<li><a href="tamil_dvd_rip.php">Tamil DVD-Rip</a></li>
					<li><a href="hollywood_hd.php">Hollywood HD</a></li>
					<li><a href="hollywood_dvd_rip.php">Hollywood DVD-Rip</a></li>
				</ul>
			</nav>
	</div>
<?php
  $video = array();
  $dir_path = "videos/tamil_hd";
  if(is_dir($dir_path))
  {
    $files = opendir($dir_path);
    {
      if($files)
      {
        while(($file_name = readdir($files)) !== FALSE)
        {
          if($file_name != '.' && $file_name != '..')
          {
            $video[] = $file_name;
          }
        }
      }
    }
  }
	echo "<div class='col-md-4'>";
    foreach ($video as $value) {
	  echo "<article class='image'>";
	  echo "<h3>".$value."</h3>";
      echo "<video width='420' height='320' controls >";
      echo "<source src='videos/tamil_hd/".$value."' >";
      echo "</video>";
	  echo "</article>";
    }
	echo "</div>";
?>
</body>
</html>
