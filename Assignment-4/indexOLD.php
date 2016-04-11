<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('noheader.html', array('header' => 'Assignment-4')); ?>


  <div class="container">
      <br>
          <div class="row" style="text-align:center;">

<?php
 
echo "<form action='' method='post'>";
echo "Select a value for N (starting pop of prey): <input type='text' name='N' /><br/>";
echo "Select a value for P (starting pop of predator): <input type='text' name='P' /><br/>";
echo "Select a value for K (prey's carrying capacity): <input type='text' name='K' /><br/>";
echo "Choose a value for r (prey intrinsic growth rate): <input type='text' name='R' /><br/>";
echo "Choose a value for a (predation efficiency): <input type='text' name='A' /><br/>";
echo "Choose a value for d (predator death rate):  <input type='text' name='D' /><br/>";
echo "Choose a value for b (conversion efficiency): <input type='text' name='B' /><br/>";
echo "Number of time steps to run the model: <input type='text' name='Tmax' /><br/>";
echo "<input type='submit'  value='Submit' name='submitbutton'/><br/>";
echo "</form>";
 
if(isset($_POST['submitbutton'])){
  $N = $_POST['N'];
  $P = $_POST['P'];
  $K = $_POST['K'];
  $R = $_POST['R'];
  $A = $_POST['A'];
  $D = $_POST['D'];
  $B = $_POST['B'];
  $Tmax = $_POST['Tmax'];
 
  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  exec("/usr/bin/Rscript my_rscript.R $N $P $K $R $A $D $B $Tmax");
  exec("bash /var/www/html/CS3500/Assignment-4/supercopy.sh");
  //exec("cp /var/www/html/CS3500/Assignment-4/temp.png  /home/blake/github/CS3500-ON-RAILS/predprey2/public/images/temp.png");
  
  // return image tag
  // echo("<img src='./Assignment-4/temp.png' />");
}
?>






    </div>






    </div>
