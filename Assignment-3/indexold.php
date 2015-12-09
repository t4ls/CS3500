<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>

<?php echo $twig->render('base.html', array('header' => 'Display Webcam Stream')); ?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="stuff, to, help, search, engines, not" name="keywords">
<meta content="What this page is about." name="description">
<meta content="Display Webcam Stream" name="title">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="//www.opencpu.org/js/archive/opencpu-0.4.js"></script>
  
<style>
#container2 {
    margin: 0px auto;
    width: 500px;
    height: 375px;
    border: 10px #333 solid;
}
#videoElement {
    width: 500px;
    height: 375px;
    background-color: #666;
}
</style>
</head>
  
<body>
<br>

<div class="container">
<!--
<div id="container2">
   <video autoplay="true" id="videoElement">
     
    </video> 
</div>
<script>
var video = document.querySelector("#videoElement");
 
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
 
if (navigator.getUserMedia) {       
    navigator.getUserMedia({video: true}, handleVideo, videoError);
}
 
function handleVideo(stream) {
    video.src = window.URL.createObjectURL(stream);
}
 
function videoError(e) {
    // do something
} 
</script>

-->
<h1>Camera API</h1>

            <section class="main-content">
                <p>A demo of the Camera API, currently implemented in Firefox and Google Chrome on Android. Choose to take a picture with your device's camera and a preview will be shown through createObjectURL or a FileReader object (choosing local files supported too).</p>
                
                <p>
                    <input type="file" id="take-picture" accept="image/*">
                </p>

                <h2>Preview:</h2>
                <p>
                    <img src="about:blank" alt="" id="show-picture">
                </p>

                <p id="error"></p>

            </section>
      <script src="./Assignment-3/base.js"></script>




<h4> Added some cool R stuff</h4>
<p>Run Arbitrary Function</p>
<textarea id="input" rows="10" cols="50" style="width:50%; height: 120px;">
function(){
hello <- 5
  return(hello+1)   
}
</textarea> 
<br /> <button id="submitbutton" type="button">Call R</button>

<pre><code id="output"></code></pre>

<script type="text/javascript">
window.alert = function() {};
alert = function() {};

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


</div>




</body>
</html>

<script type="text/javascript">
    (function () {
        var takePicture = document.querySelector("#take-picture"),
            showPicture = document.querySelector("#show-picture");

        if (takePicture && showPicture) {
            // Set events
            takePicture.onchange = function (event) {
                // Get a reference to the taken picture or chosen file
                var files = event.target.files,
                    file;
                if (files && files.length > 0) {
                    file = files[0];
                    try {
                        // Get window.URL object
                        var URL = window.URL || window.webkitURL;

                        // Create ObjectURL
                        var imgURL = URL.createObjectURL(file);

                        // Set img src to ObjectURL
                        showPicture.src = imgURL;

                        // Revoke ObjectURL after imagehas loaded
                        showPicture.onload = function() {
                            URL.revokeObjectURL(imgURL);  
                        };
                    }
                    catch (e) {
                        try {
                            // Fallback if createObjectURL is not supported
                            var fileReader = new FileReader();
                            fileReader.onload = function (event) {
                                showPicture.src = event.target.result;
                            };
                            fileReader.readAsDataURL(file);
                        }
                        catch (e) {
                            // Display error message
                            var error = document.querySelector("#error");
                            if (error) {
                                error.innerHTML = "Neither createObjectURL or FileReader are supported";
                            }
                        }
                    }
                }
            };
        }
    })();

</script>