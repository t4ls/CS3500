<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>

<?php echo $twig->render('base.html', array('header' => 'Display Webcam Stream')); ?>
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

            <img width="50%" style="text-align:center;" src="./Assignment-3/image">
        </div>
    </div>


</body>

</html>