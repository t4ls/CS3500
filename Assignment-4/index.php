<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment-4')); ?>


  <div class="container">
      <br>
          <h2 align="center"><b>graph thing</b></h2>
          <div class="row" style="text-align:center;">

<?php
 
echo "<form action='./Assignment-4/index.php' method='get'>";
echo "Number values to generate: <input type='text' name='N' />";
echo "<input type='submit' />";
echo "</form>";
 
if(isset($_GET['N']))
{
  $N = $_GET['N'];
 
  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  exec("Rscript my_rscript.R $N");
 
  // return image tag
  $nocache = rand();
  echo("<img src='./Assignment-4/temp.png?$nocache' />");
}
?>






    </div>






    </div>
