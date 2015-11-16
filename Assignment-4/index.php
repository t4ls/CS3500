<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment-4')); ?>


  <div class="container">
      <br>
          <h2 align="center"><b>graph thing</b></h2>
          <div class="row" style="text-align:center;">

<?php
 
echo "<form action='' method='post'>";
echo "Number values to generate: <input type='text' name='N' />";
echo "<input type='submit'  value='Submit Type' name='submitbutton'/>";
echo "</form>";
 
if(isset($_POST['submitbutton'])){
  $N = $_POST['N'];
 
  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  exec("Rscript my_rscript.R $N");
 
  // return image tag
  echo("<img src='./Assignment-4/temp.png' />");
}
?>






    </div>






    </div>
