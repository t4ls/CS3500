<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment-4')); ?>




  <div class="container">
      <br>
          <h2 align="center"><b>graph thing</b></h2>
          <div class="row" style="text-align:center;">

<a href="http://www.vps.cs.wmich.edu:60343/sample-apps/preypred/">http://www.vps.cs.wmich.edu:60343/sample-apps/preypred/</a>
</div>
    </div>
