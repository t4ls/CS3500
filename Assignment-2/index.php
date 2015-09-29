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

            <div class="row" style="margin-top: 1%;display: block;margin-left: auto;margin-right: auto;text-align:center;">

                <div class="one-half column" style="text-align:center;">
                    <h4><b> PATRICK L0L</b></h4>
                    <img width="80%" height="100%" src="./twig/images/patrick_lol.jpg">
                  
                </div>
                <div class="one-half column" style="text-align:center;">
                    <h4><b> BLAKE L0L</b></h4>
                    <img width="80%" height="100%" src="./twig/images/blake_lol.jpg">
                    
                </div>
            </div>
        </div>
	</div>

</body>

</html>