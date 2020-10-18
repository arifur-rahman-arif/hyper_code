<?php 
 function skill_logo(){
     $logos = array(
        array(
            'title' => 'HTML',
            'img_url' => './build/img/logo/html-5.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 100
        ),
        array(
            'title' => 'CSS',
            'img_url' => './build/img/logo/css-3.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'Bootstrap',
            'img_url' => './build/img/logo/bootstrap-4.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 90
        ),
        array(
            'title' => 'SASS',
            'img_url' => './build/img/logo/sass-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'JavaScript',
            'img_url' => './build/img/logo/javascript.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'jQuery',
            'img_url' => './build/img/logo/jquery-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'AJAX',
            'img_url' => './build/img/logo/ajax-5.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 90
        ),
        array(
            'title' => 'JSON',
            'img_url' => './build/img/logo/json-5.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 90
        ),
        array(
            'title' => 'React',
            'img_url' => './build/img/logo/react-2.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 70
        ),
        array(
            'title' => 'GSAP',
            'img_url' => './build/img/logo/gsap-greensock.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 80
        ),
        array(
            'title' => 'GULP',
            'img_url' => './build/img/logo/gulp.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 87
        ),
        array(
            'title' => 'WebPack',
            'img_url' => './build/img/logo/webpack-icon.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 70
        ),
        array(
            'title' => 'PHP',
            'img_url' => './build/img/logo/php-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'Composer',
            'img_url' => './build/img/logo/composer.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'MySQL',
            'img_url' => './build/img/logo/mysql.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 80
        ),
        array(
            'title' => 'WorpPress',
            'img_url' => './build/img/logo/wordpress-blue.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'WooCommerce',
            'img_url' => './build/img/logo/woocommerce.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 80
        ),
        array(
            'title' => 'Xampp',
            'img_url' => './build/img/logo/xampp.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 95
        ),
        array(
            'title' => 'Laragon',
            'img_url' => './build/img/logo/laragon.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 95
        ),
        array(
            'title' => 'VS Code',
            'img_url' => './build/img/logo/vs-code.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 95
        ),
        array(
            'title' => 'Figma',
            'img_url' => './build/img/logo/figma-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 70
        ),
        array(
            'title' => 'Git',
            'img_url' => './build/img/logo/git.svg',
            'img_x' => 80,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'GitHub',
            'img_url' => './build/img/logo/github-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'FileZilla',
            'img_url' => './build/img/logo/filezilla-logo.svg',
            'img_x' => 80,
            'img_y' => 80,
            'percentage' => 95
        ),
     );
     return $logos;
 }
?> <section class="about-area" id="about"> <?php require_once __DIR__ . '/sub-template/introduce.php' ?> <div class="container my-5 skill-sec"><div class="row"><div class="col-12"><div class="row"><div class="col-md-6 d-flex align-items-center justify-content-center"><h2 class="text-uppercase text-center skill-header"><span>My</span> <span>Top</span> <span>Skills</span> <span class="arrow_icon"><i class="fas fa-arrow-circle-down"></i></span></h2></div><div class="col-md-6 d-flex justify-content-center align-items-center"><img src="./build/img/skill.jpg" alt="skill" class="img-fluid"></div></div></div><div class="col-12 mt-5"><div class="row"><div class="container"><section class="tabs-area"><ul class="nav nav-tabs" role="tablist"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Default</a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Globe</a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" id="bounce_tab">Floating</a></li></ul><div class="tab-content mt-4 mb-4"><div class="tab-pane fade show active" id="tabs-1" role="tabpanel"><div class="row"> <?php require_once __DIR__ . '/sub-template/tab-content/tab-1.php' ?> </div></div><div class="tab-pane fade" id="tabs-2" role="tabpanel"><div class="row"><div class="col-12 text-center"><div id="myCanvasContainer" style="width: 100%;"><canvas width="550" height="550" id="myCanvas"><ul> <?php require_once __DIR__ . '/sub-template/tab-content/tab-2.php' ?> </ul></canvas></div></div></div></div><div class="tab-pane fade" id="tabs-3" role="tabpanel"><div class="row"><div class="col-12 d-flex flex-wrap justify-content-around"> <?php require_once __DIR__ . '/sub-template/tab-content/tab-3.php' ?> </div></div></div></div></section></div></div></div></div></div> <?php require_once __DIR__ . '/sub-template/location.php' ?> </section>