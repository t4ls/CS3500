<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'About')); ?>

<h2> By Giggles and Goldenboy </h2>
<a href = "https://github.com/t4ls/CS3500"> Github</a>
