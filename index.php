<?php require_once './vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('./views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>

<?php echo $twig->render('base.html', array('header' => 'CS 3500','path' => 'https://cs.wmich.edu/~brp9209/CS3500/')); ?>

<h2> Work in progress </h2>
