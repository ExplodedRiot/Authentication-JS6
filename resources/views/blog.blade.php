<!DOCTYPE HTML>
<head>
<title>Bigshot | Blog</title>
<meta charset="utf-8">
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="assets/menu/css/simple_menu.css">
<link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="assets/boxes/css/style6.css">
<!-- JS Files -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/slides/slides.min.jquery.js"></script>
<script src="assets/js/cycle-slider/cycle.js"></script>
<script src="assets/js/nivo-slider/jquery.nivo.slider.js"></script>
<script src="assets/js/tabify/jquery.tabify.js"></script>
<script src="assets/js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script src="assets/js/twitter/jquery.tweet.js"></script>
<script src="assets/js/scrolltop/scrolltopcontrol.js"></script>
<script src="assets/js/portfolio/filterable.js"></script>
<script src="assets/js/modernizr/modernizr-2.0.3.js"></script>
<script src="assets/js/easing/jquery.easing.1.3.js"></script>
<script src="assets/js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script src="assets/js/swfobject/swfobject.js"></script>
<!-- FancyBox -->
<link rel="stylesheet" type="text/css" href="assets/js/fancybox/jquery.fancybox.css" media="all">
<script src="assets/js/fancybox/jquery.fancybox-1.2.1.js"></script>
</head>
<body>
<div class="header">
  <!-- Logo/Title -->
  <div id="site_title"><a href="index.blade.php"> <img src="assets/img/logo.png" alt=""></a> </div>
  <!-- Main Menu -->
  <ol id="menu">
    <li><a href="index.blade.php">Home</a>
      <!-- sub menu -->
      <ol>
        <li><a href={{route('nivo')}}>Nivo Slider</a></li>
        <li><a href={{route('ei-slider')}}>EI Slider</a></li>
        <li><a href={{route('fullscreen-gallery')}}>Fullscreen Slider</a></li>
        <li><a href={{route('image-frontpage')}}>Static Image</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href="#">Pages</a>
      <!-- sub menu -->
      <ol>
        <li><a href={{route('magazine')}}>Magazine</a></li>
        <li><a href={{route('blog')}}>Blog</a></li>
        <li><a href={{route('full-server')}}>Full Width Page</a></li>
        <li><a href={{route('columns')}}>Columns</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href={{route('elements')}}>Elements</a></li>
    <li><a href="#">Galleries</a>
      <!-- sub menu -->
      <ol>
        <li><a href={{route('gallery-simple')}}>Simple</a></li>
        <li><a href={{route('portfolio')}}>Filterable</a></li>
        <li><a href={{route('gallery-fade')}}>Fade Scroll</a></li>
        <li><a href={{route('video')}}>Video</a></li>
        <li class="last"><a href={{route('photogrid')}}>PhotoGrid</a></li>
      </ol>
    </li>
    <!-- end sub menu -->
    <li><a href={{route('contact')}}>Contact</a></li>
  </ol>

<!-- END footer -->
</body>
</html>
