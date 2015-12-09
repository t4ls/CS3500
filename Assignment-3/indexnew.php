 <link rel="stylesheet" href="../Assignment-3/screen.css">
<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>

<?php echo $twig->render('base.html', array('header' => 'Assignment-3')); ?>
<?php require '../Assignment-3/upload.php';?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

</head>
<html>

<body>
    <div class="container">
        <br>
          <h2 align="center"><b> Lighting Analysis</b></h2>
          <div class="row" style="text-align:center;">
            <form action="" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                <input type="submit" value="Upload Image" name="submitbutton">
            </form>
        </div>


        <section id="examples" class="examples-section">
            <div class="container">
                <div id="example-images" width="50%"></div>
            </div>
        </section>

        <!-- Mustache templates -->
        <script id='image-section-template' type='text/x-mustache'>
            {{#images}}
            <div class="image-section {{class}}">
                <div class="image-wrap">
                    <button class="run-functions-button">
                        <span class="no-touch-label">Click</span>
                        <span class="touch-label">Tap</span>
                    </button>
                    <img class="target-image" src="{{file}}" width="50%" />
                </div>
                <div class="color-thief-output"></div>
            </div>
            {{/images}}
        </script>

        <script id="color-thief-output-template" type="text/x-mustache">
            <div class="function get-color">
                <h3 class="function-title">Dominant Color</h3>
                <div class="swatches">
                    <div class="swatch" style="background-color: rgb({{color.0}}, {{color.1}}, {{color.2}})"></div>
                </div>
                <div class="function-code">
                    <code>colorThief.getColor(image):{{elapsedTimeForGetColor}}ms</code>
                </div>
            </div>
            <div class="function get-palette">
                <h3 class="function-title">Palette</h3>
                <div class="function-output">
                    <div class="swatches">
                        {{#palette}}
                        <div class="swatch" style="background-color: rgb({{0}}, {{1}}, {{2}})"></div>
                        {{/palette}}
                    </div>
                </div>
                <div class="function-code">
                    <code>colorThief.getPalette(image):{{elapsedTimeForGetPalette}}ms</code>
                </div>
            </div>
        </script>

        <script src="./twig/bower_components/color-thief/src/color-thief.js"></script>
        <script src="./twig/bower_components/color-thief/examples/js/jquery.js"></script>
        <script src="./twig/bower_components/color-thief/examples/js/mustache.js"></script>
        <script src="./Assignment-3/demo.js"></script>
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



        
</body>

</html>