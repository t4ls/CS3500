<?php require_once './vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('./views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>

<?php echo $twig->render('page.html', array('text' => 'CS 3500  By Giggles and Goldenboy')); ?>
