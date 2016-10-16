<?php
/**
 * Created by PhpStorm.
 * User: joshbenner
 * Date: 5/12/16
 * Time: 6:25 PM
 */

namespace Pers;


class View
{

    public function __construct()
    {
        $this->title = "Josh Benner";
    }

    /** Creates the head which contains all references of CSS and JS
     * @return string
     */
    public function head()
    {
        return <<<HTML
<title>$this->title</title>
<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="josh benner, developer, javascript, api, web app, designer, linkedin scraper">
<meta name="author" content="Josh Benner">
<meta name="description" content="Web Apps, personal projects, and lots of data; The professional website of Josh Benner">

<!-- DOWNLOAD AND HOST BOOTSTRAP LOCALLY-->
<!-- Stylesheets -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../lib/css/normalize.css">
<link rel="stylesheet" href="../lib/css/main.css">
HTML;
    }

    /**
     * Create the HTML for the page header
     * @return string HTML for the standard page header
     */
//    public function header() {
//        $html = <<<HTML
//<nav>
//    <ul class="left">
//        <li><a href="./">Steampunked</a></li>
//    </ul>
//HTML;
//
//        $additional = $this->headerAdditional();
//        if(count($this->links) > 0){
//            $html .= '<ul class="right">';
//            foreach($this->links as $link){
//                $html .= '<li><a href="' .
//                    $link['href'] . '">' .
//                    $link['text'] . '</a></li>';
//            }
//            $html .= '</ul>';
//        }
//
//        $html .= <<<HTML
//</nav>
//<header class="main">
//    $additional
//</header>
//HTML;
//        return $html;
//    }

    public function presentNav(){
        $html = <<<HTML
<!-- Navigation-->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_content" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand title" href="../">Josh Benner</a>
            </div>

            <div class="col-md-8 col-md-offset-3 collapse navbar-collapse" id="nav_content">
                <ul class="nav navbar-nav">
                    <li><a href="../projects">Projects</a></li>
                    <li><a href="#work">Work</a></li>
                    <!-- <li><a href="#resume">Resume</a></li>
                    <li><a href="#blog">Blog</a></li> -->
                    <li><a href="#about">About me</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Me<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="mailto:bennerster@gmail.com">Email&nbsp;<i class="fa fa-envelope-square"></i></a></li>
                            <li><a href="http://linkedin.com/in/joshbenner851">LinkedIn&nbsp;<i class="fa fa-linkedin-square"></i></i></a></li>
                            <li><a href="http://github.com/joshbenner851">GitHub&nbsp;<i class="fa fa-github"></i></a></li>
                        </ul>
                    </li>
                    <li><a href="http://github.com/joshbenner851"><i class="fa fa-github-square fa-2x"></i></a></li>
                    <!-- <li class="pull-right"><img class="pull-right" src="GitHub-Mark-64px.png"></li> -->
                    <!-- <li><img src="githubImg.svg"></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
HTML;

        return $html;
    }

    public function footer(){
        $html = <<<HTML
<!-- Contact Me Section -->
<div class="contact">
    <div class="container">
        <h2 id="contact" class="text-center anchor">Contact Me!</h2>
        <address class="text-center">
            <h4>Josh Benner <br>
                Email: bennerster@gmail.com<br>
                Phone: 616-238-3511(Will be out of country until May 30th)<br></h4>
        </address>
    </div>
</div>
<footer>
    <div class="footer">
        <div class="container">
            <h1 class="text-center">
                <a href="http://www.freecodecamp.com/joshbenner851"><i class="fa fa-fire fa-lg profile-social-icons"></i></a>
                <a href="http://linkedin.com/in/joshbenner851"><i class="fa fa-linkedin-square fa-lg profile-social-icons"></i></a>
                <a href="http://github.com/joshbenner851"><i class="fa fa-github fa-lg profile-social-icons"></i></a>
            </h1>
        </div>

    </div>
</footer>
HTML;
        return $html;
    }

    /**
     * Set the page title
     * @param $title New page title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Add a link that will appear on the nav bar
     * @param $href What to link to
     * @param $text
     */
    public function addLink($href, $text){
        $this->links[] = array("href" => $href, "text" => $text);
    }

    /**
     * Override in derived class to add content to the header.
     * @return string Any additional comment to put in the header
     */
    protected function headerAdditional() {
        return '';
    }

    private $title = ""; //< The page Title
    private $links = array(); ///< Links to add to the nav bar
}