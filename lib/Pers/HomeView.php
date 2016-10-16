<?php
/**
 * Created by PhpStorm.
 * User: joshbenner
 * Date: 5/12/16
 * Time: 6:25 PM
 */

namespace Pers;


class HomeView extends View
{
    public function __construct()
    {
        parent::__construct();
        $this->setTitle("Josh Benner");
    }



    public function presentProjects(){
        $html = <<<HTML
<!-- Projects Section -->
<div class="project">
    <div class="container">
        <h2 class="text-center anchor" id="projects">Projects</h2>
        <section>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail module">
                    <h3><a href="https://github.com/joshbenner851/TriangleJobScrape">LinkedIn Connect</a></h3>
                    <h4>Python and JS</h4>
                    <p><b>Goal:</b> To make LinkedIn more useful if you're finding a job by allowing to see where your connections exist geographically</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail module">
                    <h3><a href="../">Personal Website</a></h3>
                    <h4>HTML and LESS</h4>
                    <p>First website built from scratch </p>
                </div>
            </div>


            <div class="col-md-4">
                <div class="thumbnail module">
                    <img src="../images/tai o.jpeg">
                    <h3>Autonomous Lawnmow Modeling</h3>
                    <h4>Java and Java GUI</h4>
                    <p>Models the path a lawnmower would take in the Java GUI if given the outline and spits out the directions</p>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="col-md-4">
                <div class="thumbnail module">
                    <img src="../images/TrianglePic.jpg">
                    <h3>LinkedIn Connect</h3>
                    <h4>Python and JS</h4>
                    <p>Web application to make LinkedIn useful if you're finding a job</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail module">
                    <img src="http://madailylife.com/wp-content/uploads/2014/04/how-to-meet-new-people.jpg">
                    <h3>Personal Website</h3>
                    <h4>HTML and SASS</h4>
                    <p>First website built from scratch </p>
                </div>
            </div>


            <div class="col-md-4">
                <div class="thumbnail module">
                    <img src="../images/tai o.jpeg">
                    <h3>Autonomous Lawnmow Modeling</h3>
                    <h4>Java and Java GUI</h4>
                    <p>Models the path a lawnmower would take in the Java GUI if given the outline and spits out the directions</p>
                </div>
            </div>
        </div>
        </section>

    </div>
</div>
HTML;
        return $html;
    }
    public function head(){
        $html = parent::head();
//        $html .= '<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>';
//        $html .= '<script src="https://raw.github.com/teamdf/jquery-visible/master/jquery.visible.min.js"></script>';
//        $html .= '<script src="index.js"></script>';
        return $html;
    }

}