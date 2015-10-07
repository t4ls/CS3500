<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 2')); ?>

<?php
$count = 0;
$myfile = fopen("read.txt", "r") or die("Unable to open file!");
$file = "read.txt";
$lines = count(file($file));
fgets($myfile);
$arr = array();
while(!feof($myfile)) {
  if($count < $lines){
//   echo "".$count.". ".fgets($myfile) . "";
  $arr[$count] = str_replace("\n","",fgets($myfile));
  }else{
  fgets($myfile);
  } 
$count = $count + 1;
}
$test = fread($myfile,filesize("read.txt"));
fclose($myfile);
//printVar($arr);
//echo "Current number of users: ".(count($arr)-1)."\n";
$arr = array_slice($arr,0,-1);
function printVar($var) {
    echo '<pre>';
    var_dump($var); 
    echo '</pre>';
}
?>
<html>

<script>
function validateNew() {
  //  alert("The username does not exist");
    var x = document.forms["newuser"]["username"].value;
    if (x == "" || x==null) {
        alert("A username is required");
        return false;
    }
    
        var users = <?php echo json_encode($arr); ?>;
        for (jj=0; jj < users.length; jj++){
        if (users[jj]==x) {
        alert("That username already exists");
        return false;
        }
    }    
    var x = document.forms["newuser"]["email"].value;
    var atpos = x.length
    if (atpos>15) {
        alert("Username limit is 15 characters");
        return false;
    }
    return false;

      
}
</script>




<body>
    <div class="container">
        <div class="row">
            <br>
            <h2 align="center"><b> Welcome to Javascript </b></h2>
            <br>
            <div class="row" style="text-align:center;">
                <h4><b> Javascript Tutorial by Derek Banas</b></h4>
                <iframe width="90%" height="315" src="https://www.youtube.com/embed/fju9ii8YsGs" frameborder="0" allowfullscreen></iframe>
                <p>Add Javascript tutorial stuff here</p>
            </div>
        </div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Javascript Standards</b></h2>
            <p>For these standards we used <a href="http://javascript.crockford.com/code.html">Crockford's JavaScript</a> coding guidelines </p>
            <ul>
                <li> Javascript programs are stored in and delivered as .js file type.</li>
                <li> JavaScript code should not be embedded in HTML files unless the code is specific to a single session.</li>
                <li> &lt;script src=filename.js &gt; tags should be placed as far down in the body as possible to reduce the delays caused by loading the script</li>
            </ul>

        </div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Javascript Examples</b></h2>
            <p>Add Javascript examples stuff here</p>
            <button type="button-primary" onclick="document.getElementById('demo').innerHTML = Date()">
            Click to display Date and Time.</button>
            <p><?php echo json_encode($arr); ?></p>

            <p id="demo"></p>
            <h1>Login</h1>
            <form name="newuser" form action="testread.php" onsubmit="return validateNew();" method="post" >
            <div class="form_row"><span class="form_label">Username: </span><input type="text" name="username"></div>
            <div class="form_row"><input type="submit" value="Submit"></div>
            </form>
        </div>

        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Javascript Frameworks</b></h2>
        </div>
    </div>


</body>

</html>
