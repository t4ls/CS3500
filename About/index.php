<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'About')); ?>
<html>
<body>
        <div class="container">
                <div class="row">
            <br>
            <h2 align="center"><b>About The Authors</b></h2>

            <div class="row" style="margin-top: 1%;display: block;margin-left: auto;margin-right: auto;text-align:center;">

                <div class="one-half column" style="text-align:center;">
                    <h4><b>BRANDON</b></h4>
                    <img width="80%" height="100%" src="./twig/images/brandon_lol.jpg">
                  
                </div>
                <div class="one-half column" style="text-align:center;">
                    <h4><b>BLAKE</b></h4>
                    <img width="80%" height="100%" src="./twig/images/blake_lol.jpg">
                    
                </div>
            </div>
        </div>
	<a href = "https://github.com/t4ls/CS3500">Github</a>
        </div>


</body>

</html>


