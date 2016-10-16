<?php
require 'lib/site.inc.php';
$view = new \Pers\HomeView();
?>

<!DOCTYPE html>
<html>

<head>
    <?php echo $view->head();?>
</head>

<body>
<?php echo $view->presentNav();
?>


<!-- Main Page-->
<div class="main-page">
    <div class="jumbotron">
        <div class="container">
            <div class="heading">
                <div>Hi</div>
                <div>I'm a</div>
                <div>Hackapreneur</div>
            </div>
            <div class="row">
                <a  href="#contact" class="ghostsbtn"><button class="col-md-2 col-md-offset-3 ghost">Contact Me!</button></a>
                <a  class="ghostsbtn" href="JoshBennerResumeCoop (1).pdf"><button class="col-md-2 col-md-offset-2 ghost">Resume</button></a>
            </div>
        </div>
    </div>
</div>

<!-- Work Section -->
<div class="work">
    <div class="container">
        <h2 id="work" class="text-center anchor">Work Experience</h2>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2"></div>
            <h3>Web Developer Intern at <span>Michigan State University</span></h3>
            <ul>
                <li>Implementing a new responsively designed new look to Legume Innovation Labs website.</li>
                <li>Used extensive CSS and HTML to build legumelabs.msu.edu(still in development)</li>
                <li>Learned how to build the developmental template to match the mockup and how to use a content management system(ExpressionEngine).</li>
                <li>Updated the website to be fully responsively designed and meet accessibility standards</li>
            </ul>
            <h3>Software Engineer Intern at <span>Techsmith Corporation</span></h3>
            <ul>
                <li>Helped stabilize scrolling captures and increased scrolling related speeds by 100x</li>
                <li>Developed UI changes and worked with UX designer to create a better experience</li>
                <li>Built alternative scrolling and fallback methods and fixed broken methods</li>
                <li>Gained experience in developer tools and using teleop to communicate between C# and C++
                </li>
            </ul>
        </div>
    </div>
</div>

<!--  About Me Section -->
<div class="about" id="about">
    <div class="container-fluid">
        <h2 class="text-center anchor">About Me</h2>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
                <p>When people ask what my goal is in life, I tell them it's to make things more efficient. Whether that's through hacking a scraper to automate something reptitive or changing how a system works through design choices or entrepreneurship, I'm always looking to make the world better. <br> </p>
                <p>Some of my favorite things to do are swing dance, snowboard, and travel</p>
            </div>


        </div>
    </div>
</div>

<?php echo $view->footer();?>

</body>
</html>