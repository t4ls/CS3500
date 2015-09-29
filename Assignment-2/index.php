<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 2')); ?>

<html>

<body>
	<div class="container">
		<div class="row">
            <br>
            <h2 align="center"><b> Welcome to Javascript </b></h2>
        </div>
	</div>

</body>

</html>