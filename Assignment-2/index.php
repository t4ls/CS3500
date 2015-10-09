<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 2')); ?>


<?php
    
if(isset($_POST['submitbutton'])){
$file = 'read.txt';
$appendfile = file_get_contents($file);
$appendfile .=  $_POST['username']."\n";
file_put_contents($file, $appendfile);

$get_info = "?status=success";
header("Location: ".$_SERVER['REQUEST_URI'].$get_info);
exit();
}    

$count = 0;
$myfile = fopen("read.txt", "r") or die("Unable to open file!");
$file = "read.txt";
$lines = count(file($file));
fgets($myfile);
$arr = array();
while(!feof($myfile)) {
  if($count < $lines){
  $arr[$count] = str_replace("\n","",fgets($myfile));
  }else{
  fgets($myfile);
  } 
$count = $count + 1;
}
$test = fread($myfile,filesize("read.txt"));
fclose($myfile);
$arr = array_slice($arr,0,-1);
if( $count > 11){
$arr = array_slice($arr,($count - 11));
}
?>
<html>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="//www.opencpu.org/js/archive/opencpu-0.4.js"></script>


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
            <p id="demo"></p>
	    
	    <p>Displays the last 10 users: <?php echo json_encode($arr); ?></p>
            <h3>Login</h3>
            <form name="newuser" form action="" onsubmit="return validateNew();" method="post" >
            <div class="form_row"><span class="form_label">Username: </span><input type="text" name="username"></div>
            <mybutton><div class="form_row"><input type="submit" value="Submit" name="submitbutton"></mybutton></div>
            </form>
        </div>

        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Javascript Frameworks</b></h2>
	    <h4 aligin=><b>jQuery JavaScript Library</b></h4>
            <p>One framework we are planning to use is jQuery. jQuery is a fast, small, and feature-rich JavaScript library. It is designed to make client
	    side scripting easier for HTML. This button is hidden when clicked on because of a jQuery script <hidden><button>Click Me</button></hidden></p>
	 <h4 aligin=><b>OpenCPU Framework</b></h4>
	<p>OpenCPU is a framework for embedded scientific computing and reproducible research. We are using it here to run R code</p>
	<textarea id="input" rows="10" cols="50" style="width:70%; height: 120px; display: block; margin-left: auto; margin-right: auto;">
	function(){
	   hello <- 1:10
  	return(hello+1)   
	}
	</textarea> 
	<br /> <button id="submitbutton" type="button">Call R</button>

<pre><code id="output"></code></pre>
	
	</div>

        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Compatability</b></h2>
	<p>ADD CONTENT</p>
	</div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Security</b></h2>
	<p>ADD CONTENT</p>
	</div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Tools and Debugging</b></h2>
	<p>ADD CONTENT</p>
	</div>    
   </div>


<script>
var users = <?php echo json_encode($arr); ?>;
</script>
<script type="text/javascript" src="./Assignment-2/Validator.js">
</script>
<script>
$(document).ready(function(){
    $("hidden").click(function(){
        $(this).hide();
    });
});
//because identity is in base
ocpu.seturl("//public.opencpu.org/ocpu/library/base/R")
//actual handler
$("#submitbutton").on("click", function(){
    //arguments
    var mysnippet = new ocpu.Snippet($("#input").val());
    
    //disable button
    $("button").attr("disabled", "disabled");
    //perform the request
    var req = ocpu.rpc("do.call", {
        what : mysnippet,
        args : {
//            x : [1,2,3,4,5],
//            n : 3
        }
    }, function(output){
      $("#output").text(output); 
    });
        
    //if R returns an error, alert the error message
    req.fail(function(){
        alert("Server error: " + req.responseText);
    });      
    
    req.always(function(){
        $("button").removeAttr("disabled");    
    });
}); 

</script>




</body>

</html>

