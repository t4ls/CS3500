<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 1')); ?>
<html>
<body>
<div class="container">
<div class="row">
<br>
<h2 align="center"><b> Hello World: Welcome to HTML5 and CSS3 </b></h2>
<br>
<h2 style="margin-left:4%"><b><u>Videos!</u></b></h2>
<div class="one-half column" style="margin-top: 1%">
<h3><b> HTML5 Tutorial by Derek Banas</b></h3>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/kDyJN7qQETA" frameborder="0" allowfullscreen></iframe>
<p>A little lengthy, but it provides an excellent range of fundamental functionalities of HTML5. </p>
<h3><b> CSS Tutorial by Derek Banas</b></h3>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/CUxH_rWSI1k" frameborder="0" allowfullscreen></iframe>
</div>
</div>
  <div class="row">
<h2 align="center"><b>Tools Used</b></h2>
  </div>
  <div class="row">
    <div class="one-half column" style "margin-top: 5000px;">
<p style "  padding-top: 25px;"> Skeleton is light weight responsive framework that can be used to make sites look cool on mobile as well as desktops without having to reinvent the wheel. </p>
    </div>
    <div class="one-half column">
        	<img src="./twig/images/skeleton.png"> 
    </div>
  </div>

</div>





</div>
</body>
</html>