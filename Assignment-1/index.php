<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 1')); ?>
<div class="container">
<br>
<h2 align="center"><b> Hello World: Welcome to HTML5 and CSS3 </b></h2>
<br>
<h2 style="margin-left:4%"><b><u>Videos!</u></b></h2>
<div class="one-half column" style="margin-top: 1%">
<h3><b> HTML5 Tutorial by Derek Banas</b></h3>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/kDyJN7qQETA" frameborder="0" allowfullscreen></iframe>
<p>A little lengthy, but it provides an excellent range of fundamental functionalities of HTML5. Enjoy, nerds :D </p>
<h3><b> CSS Tutorial by Derek Banas</b></h3>
<iframe width="100%" height="315" src="https://www.youtube.com/embed/CUxH_rWSI1k" frameborder="0" allowfullscreen></iframe>
<p> And then Patrick said, "Yes, Commander Blake--I shall learn CSS3 and be the best I ever could."</p>
</div>
</div>
