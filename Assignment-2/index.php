4<?php require_once '../twig/vendor/autoload.php'; ?>
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
                <p>Derek Banas has many other instuctional videos on his YouTube channel. If you have further interest in these subjects, check it out!</p>
            </div>
        </div>
        <div class="row" style="text-align:center;">
        <p>Another fantastic source for becoming comfortable with writing your own Javascript is <a href="http://www.w3schools.com/js/default.asp" style="color:blue;">w3schools</a>. The
        following are simple examples that you can find on w3schools that involve playing around with some Javascript.</p>
        </div>
        <div class="row" style="margin-top: 1%;display: block;margin-left: auto;margin-right: auto;text-align:center;">

                <div class="one-half column" style="text-align:center;">
                <p id="change1">JavaScript can change the style of an HTML element.</p>
					<script>
						function myFunction() {
    					var x = document.getElementById("change1");
   						 x.style.fontSize = "25px";           
   						 x.style.color = "purple"; 
						}
					</script>
				<button type="button" onclick="myFunction()">Click Me!</button>
                </div>
                <div class="one-half column" style="text-align:center;">
                    <p id="change2">JavaScript can change HTML content, too!</p>
					<button type="button" onclick="document.getElementById('change2').innerHTML = 'Hello, changed content!'">
					Click Me!</button>
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
            <h2 align="center"><b>More Javascript Examples</b></h2>
            <p>This is a simple example of Javascript used to send the date to html id "demo"</p>
            <button type="button-primary" onclick="document.getElementById('demo').innerHTML = Date()">
                Click to display Date and Time.</button>
            <p id="demo"></p>
	    <p>This form calls the function validateNew() from an external javascript file, <a href="./Assignment-2/validator.js">validator.js</a>, the function 
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
                       <?php echo json_encode(implode(" ",$arr)); ?>
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

            <p>When troubleshooting  browser compatibility it is important to know what type of browser the user is running.
            We used a javascript to check the browser: <a href="./Assignment-2/browsercheck.js">browsercheck.js</a> </p>
            <p><div id="browserResult"></div></p>
        </div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Security</b></h2>
            <p>Since its release, there have been several JavaScript security issues that have gained widespread attention. 
            For one, the way JavaScript interacts with the DOM poses a risk for end users by enabling malicious actors to 
            deliver scripts over the web and run them on client computers. There are two measures that can be taken to contain 
            this JavaScript security risk. First is sandboxing, or running scripts separately so that they can only access 
            certain resources and perform specific tasks. The second measure is implementing the same origin policy, which 
            prevents scripts from one site from accessing data that is used by scripts from other sites. Many JavaScript 
            security vulnerabilities are the result of browser authors failing to take these measures to contain DOM-based 
            JavaScript security risks.</p>
            
            <p style="color:gray;padding-left:25px">Excerpt from article written by Fergal Glynn</p>
        </div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Tools and Debugging</b></h2>
            <p>Javascript has it's own debugger built into it. It will become very useful to programmers just getting started
            with their Javascript adventures. It gives you the ability to implement breakpoints and other helpful features
            when it comes to debugging your code. Many popular browsers have tools that involve debugging scripts that you have
            written up, as well. For more information on the Javascript Debugger, visit this page 
            <a href="http://www.w3schools.com/js/js_debugging.asp" style="color:blue;">here</a>.</p>

        </div>
    </div>

    <script>
        var users = <?php echo json_encode($arr); ?> ;
    </script>
    <script src="./Assignment-2/validator.js"></script>
    <script src="./Assignment-2/jqueryscripts.js"></script>
    <script src="./Assignment-2/browsercheck.js"></script>

</body>
</html>

