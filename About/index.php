<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'About')); ?>
<div class="container">
<div class="one-half column" style="margin-top: 15%">
<a href = "https://github.com/t4ls/CS3500"> Github</a>
</div>
</div>