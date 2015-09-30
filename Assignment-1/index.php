<?php require_once '../twig/vendor/autoload.php'; ?>
<?php $loader = new Twig_Loader_Filesystem('../twig/views/'); ?>

<?php $twig = new Twig_Environment($loader); ?>
<?php echo $twig->render('base.html', array('header' => 'Assignment 1')); ?>
<html>

<body link="blue">
    <div class="container">

        <div class="row">
            <br>
            <h2 align="center"><b> Welcome to HTML5 and CSS3 </b></h2>
            <marquee class="html-marquee" direction="left" behavior="scroll" scrollamount="3"> VIDEOS!</marquee>
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
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Tools Used</b></h2>
        </div>
        <div class="row">
            <h4 aligin="center"><b>Skeleton CSS Framework</b></h4>
            <p>Skeleton is light weight responsive framework that can be used to make sites look cool on mobile as well as desktops. We used Skeleton on this site so
                that we could develop our own css without having to reinvent the wheel. </p>
        </div>
        <div class="row" style="margin-top: 1%;display: block;margin-left: auto;margin-right: auto;text-align:center;">
            <div class="one-half column" >
                <p>Designing a website based on a responsive build has a lot to do with creating a grid for the site that uses a lot of proportions and adaptable media
                    in order to produce similar builds on other devices. An increase in mobile traffic to the web has made responsive web design much more popular.
                    Also, the introduction of media queries has resulted in an efficient way to have your website react with different displays on a multiplicity
                    of devices.</p>
            </div>
            <div class="one-half column" style="text-align:center;">
                <a href="http://getskeleton.com/"> <img width="80%" src="./twig/images/skeleton.png">
                </a>
            </div>
        </div>
        <div class="row">
            <h4 aligin="center"><b>Twig PHP Framework</b></h4>
            <p>Another tool that we used to create our site was Twig, a modern template engine for PHP. While we currently aren't using this framework to it's full
                ability, we hope that in the future it will serve as a standard for all of our assignments. We are using Twig to render the title and menu
                html across all of our pages to ensure that it they are consistent.
                <p>

        </div>
        <div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Roadblocks Along The Way</b></h2>
            <h4 aligin="center"><b>Chrome And Favicons </b></h4>
            <p>The biggest problem we have run into when creating this website is getting our favicon to show up in Google Chrome. For some odd reason no matter how
                we set its reference the favicon never shows up. Still not sure what the root cause of this is, Chrome is probably not caching the favicon correctly.
                See the <a href="https://code.google.com/p/chromium/issues/detail?id=440322">Bug Report</a> we found for more details.
                <h4 aligin="center"><b>Relative Pathing Issues</b></h4>
                <p>One issue that we solved with some Javascript was that the base url for relative pathing was different depending on the enviroment the website
                    was being worked on causing the CSS not to be applied. Instead of constantly changing the path we wrote a Javascript to handle everything for
                    us.
                </p>
                <script type='text/javascript' src='//www.gistfy.com/github/gist/dd062af35840d64e5c0b?lang=Javascript&style=monokai_sublime'></script>

        </div>
		<div class="row" style="padding-top:2%;border-top: 1px solid ">
            <h2 align="center"><b>Frequently Asked Questions</b></h2>
       
            <p>Q: <i>What is new about HTML5?</i></p>
            <p>A: The biggest change is that HTML5 documents are explicitly recognized as interactive applications.
            Every document element in HTML5 has a corresponding JavaScript API that describes how that element should behave
            in response to user actions and other events.
        </div>
        <div class="row" style="padding-top:1%">
        	<p>Q: <i>Are there new HTML5 tags?</i></p>
        	<p>A: Yes, there are new HTML5 elements that provide richer semantic descriptions of documents, new media elements, new
        	form input types, and a bunch of new element attributes.
        </div>
        <div class="row" style="padding-top:1%">
        <p>Q: <i>Where can I get an HTML5 browser?</i></p>
        <p>A: <a href="www.opera.com" style="color:blue;">Opera</a>, <a href="www.google.com/chrome/" style="color:blue;">Chrome</a>, and 
        <a href="www.apple.com/safari" style="color:blue;">Safari</a> provide pretty solid support for HTML5 in their current 
        versions including their browsers for all of their mobile devices.
        <br>
        <p>For additional frequently asked questions, please visit this page 
        <a href="larryaronson.com/2011/15-html5-faqs/" style="color:blue;">here</a>.
        </div>

    </div>
    </div>
</body>

</html>
