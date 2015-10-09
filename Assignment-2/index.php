<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 2')); ?>

<?php require '../Assignment-2/newuser.php';?>


<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//www.opencpu.org/js/archive/opencpu-0.4.js"></script>

<html>
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
            <p>For these standards we used <a href="http://javascript.crockford.com/code.html">Crockford's JavaScript</a> coding
                guidelines </p>
            <ul>
                <li> Javascript programs are stored in and delivered as .js file type.</li>
                <li> JavaScript code should not be embedded in HTML files unless the code is specific to a single session.</li>
                <li> &lt;script src=filename.js &gt; tags should be placed as far down in the body as possible to reduce the delays
                    caused by loading the script</li>
            </ul>

        </div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Javascript Examples</b></h2>
            <p>This is a simple example of Javascript used to send the date to html id "demo"</p>
            <button type="button-primary" onclick="document.getElementById('demo').innerHTML = Date()">
                Click to display Date and Time.</button>
            <p id="demo"></p>
	    <p>This form calls the function validateNew() from an external <a href="./Assignment-2/Validator.js">javascript file.</a> The function 
		checks to if the user input is valid before allowing it to post data.</p>	
            <div class="row">
                <div class="one-half column">
                    <form name="newuser" form action="" onsubmit="return validateNew();" method="post">
                        <div class="form_row"><span class="form_label">Username: </span>
                            <input type="text" name="username" style="width:70%;">
                        </div>
                        <div class="form_row">
                            <input type="submit" value="Submit" name="submitbutton">
                        </div>
                    </form>
                </div>
                <div class="one-half column">
                    <p>Displays the last 10 users:
                        <?php echo json_encode($arr); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Javascript Frameworks</b></h2>
            <h4 aligin=><b>jQuery JavaScript Library</b></h4>
            <p>One framework we are planning to use is jQuery. jQuery is a fast, small, and feature-rich JavaScript library.
                It is designed to make client side scripting easier for HTML. This button is hidden when clicked on because
                of a jQuery script
                <hidden>
                    <button>Click Me</button>
                </hidden>
            </p>
            <h4 aligin=><b>OpenCPU Framework</b></h4>
            <p>OpenCPU is a framework for embedded scientific computing and reproducible research. We are using it here to run
                R code. OpenCPU requires jQuery to provide Ajax wrappers for calling R from within a web page.</p>
            <textarea id="input" rows="10" cols="50" style="width:70%; height: 120px; display: block; margin-left: auto; margin-right: auto;">
                function(){ 
		hello = 1:10 
		return(hello+1) 
		}
            </textarea>
            <br />
            <button id="submitbutton" type="button">Call R</button>

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
        var users = <? php echo json_encode($arr); ?> ;
    </script>
    <script src="./Assignment-2/Validator.js"></script>
    <script src="./Assignment-2/jqueryscripts.js"></script>

</body>
</html>

