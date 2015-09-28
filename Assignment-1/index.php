<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 1')); ?>
<html>

<body>
    <div class="container">

        <div class="row">
            <br>
            <h2 align="center"><b> Hello World: Welcome to HTML5 and CSS3 </b></h2>
            <h2 style="margin-left:4%"><b><Videos!</b></h2>
            <marquee class="html-marquee" direction="left" behavior="scroll" scrollamount="12"> VIDEOS!</marquee>
            <br>
            <div class="row" style="margin-top: 1%;display: block;margin-left: auto;margin-right: auto;text-align:center;">

                <div class="one-half column" style="text-align:center;">
                    <h4><b> HTML5 Tutorial by Derek Banas</b></h4>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/kDyJN7qQETA" frameborder="0" allowfullscreen></iframe>
                    <p>A little lengthy, but it provides an excellent range of fundamental functionalities of HTML5. </p>
                </div>
                <div class="one-half column" style="text-align:center;">
                    <h4><b> CSS Tutorial by Derek Banas</b></h4>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/CUxH_rWSI1k" frameborder="0" allowfullscreen></iframe>
                    <p>And Sir Patrick proclaimed, "Yes, Commander Blake--I will learn CSS3 and become the best I ever could!"</p>
                </div>
            </div>
        </div>
        <br>
        <div class="row" style="padding-top:5%;border-top: 1px solid ">
            <h2 align="center"><b>Tools Used</b></h2>
        </div>
        <div class="row" style="margin-top: 1%;display: block;margin-left: auto;margin-right: auto;text-align:center;">
            <div class="one-half column" style="text-align:center;">
                <br>
                <p>Skeleton is light weight responsive framework that can be used to make sites look cool on mobile as well as desktops. We used Skeleton on this site
                    so that we could develop our own css without having to reinvent the wheel. </p>
            </div>
            <div class="one-half column" style="text-align:center;">
                <a href="http://getskeleton.com/"> <img width="80%" src="./twig/images/skeleton.png">
                </a>
            </div>
        </div>
        <div class="row">
            <h4 aligin="center"><b>Touching On Responsive Design</b></h4>
            <p style="padding-top:1%;">Designing a website based on a responsive build has a lot to do with creating a grid for the site that uses a lot of proportions and adaptable media
                in order to produce similar builds on other devices. An increase in mobile traffic to the web has made responsive web design much more popular. Also, the introduction
                of media queries has resulted in an efficient way to have your website react with different displays on a multiplicity of devices.</p>
        </div>
        <div class="row" style="padding-top:5%;border-top: 1px solid ">
            <h2 align="center"><b>Roadblocks Along The Way</b></h2>
            <h4 aligin="center"><b>Chrome And Favicons </b></h4>
            <p>The biggest problem we have run into when creating this website is getting our favicon to show up in Google Chrome. For some odd reason no matter how
                we set its reference the favicon never shows up. Still not sure what the root cause of this is, Chrome is probably not caching the favicon correctly.
                See the <a href="https://code.google.com/p/chromium/issues/detail?id=440322">Bug Report</a> we found for more details.
                <h4 aligin="center"><b>Relative Pathing Issues</b></h4>
                <p>Another issue that we solved with some Javascript was that the base url for relative pathing was different depending on the enviroment the website
                    was being worked on causing the CSS not to be applied. Instead of constantly changing the path we wrote a Javascript to handle everything for
                    us.
                </p>
                <script type='text/javascript' src='//www.gistfy.com/github/gist/dd062af35840d64e5c0b?lang=Javascript&style=monokai_sublime'></script>

        </div>
    </div>
    </div>
</body>

</html>