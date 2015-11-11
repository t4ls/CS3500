 <link rel="stylesheet" href="../Assignment-3/screen.css">
<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>

<?php echo $twig->render('base.html', array('header' => 'Assignment-3')); ?>
<?php require '../Assignment-3/upload.php';?>

<!DOCTYPE html>
<html>

<body>
    <div class="container">

        <div class="row" style="text-align:center;">
            <br>
            <form action="" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submitbutton">
            </form>

  <!--          <img id="i" width="50%" style="text-align:center;" src="./Assignment-3/image"> -->
            </div>


</body>

</html>



<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">




  <meta name="viewport" content="width=device-width,initial-scale=1">

</head>
<body>
  <!--

  <header>

    <div class="container">
      <h1 class="logo">Color Thief</h1>
      <p class="lead">
        Grab the color palette from an image.<br /> Uses Javascript and the canvas tag to make it happen.
      </p>

      <a href="https://github.com/lokesh/color-thief/" class="button">
        Download from Github</small>
      </a>

    </div>


  </header>
  -->
  <section id="examples" class="examples-section">
    <div class="container">
      <div id="example-images"  width="50%"></div>
    </div>
  </section>
<!--
  <section id="drag-drop" class="drag-drop-section">
    <div class="container">
      <h2>Try it yourself</h2>
      <div id="drop-zone" class="drop-zone">
        <div class="drop-zone-label default-label">Drag an image here</div>
        <div class="drop-zone-label dragging-label">Drop it!</div>
      </div>
      <div id="dragged-images" class="dragged-images"></div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>
        Created by Lokesh Dhakar<br />
        <a href="https://twitter.com/lokesh" class="button button-minor">Follow me on Twitter</a>
      </p>
    </div>
  </footer>

  <div id="sharing" class="sharing-section">
    <a href="https://twitter.com/share" class="twitter-share-button" data-via="lokesh" data-size="large">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
-->

  <!-- Mustache templates -->
  <script id='image-section-template' type='text/x-mustache'>
    {{#images}}
    <div class="image-section {{class}}">
      <div class="image-wrap">
        <button class="run-functions-button">
          <span class="no-touch-label">Click</span>
          <span class="touch-label">Tap</span>
        </button>
        <img class="target-image" src="{{file}}"  width="50%"/>
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
<!--
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2196019-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
-->
</body>
</html>
