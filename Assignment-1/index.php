<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 1')); ?>
<div class="container">
<div class="one-half column" style="margin-top: 5%">
<h2> Hello World </h2>
<p> Patrick write stuff here</p>
</div>
</div>