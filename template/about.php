<?php 
 function skill_logo(){
     $logos = array(
        array(
            'title' => 'HTML',
            'img_url' => './assets/logo/html-5.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 100
        ),
        array(
            'title' => 'CSS',
            'img_url' => './assets/logo/css-3.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'Bootstrap',
            'img_url' => './assets/logo/bootstrap-4.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 90
        ),
        array(
            'title' => 'SASS',
            'img_url' => './assets/logo/sass-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'JavaScript',
            'img_url' => './assets/logo/javascript.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'jQuery',
            'img_url' => './assets/logo/jquery-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'AJAX',
            'img_url' => './assets/logo/ajax-5.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 90
        ),
        array(
            'title' => 'JSON',
            'img_url' => './assets/logo/json-5.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 90
        ),
        array(
            'title' => 'React',
            'img_url' => './assets/logo/react-2.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 70
        ),
        array(
            'title' => 'GSAP',
            'img_url' => './assets/logo/gsap-greensock.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 80
        ),
        array(
            'title' => 'GULP',
            'img_url' => './assets/logo/gulp.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 87
        ),
        array(
            'title' => 'WebPack',
            'img_url' => './assets/logo/webpack-icon.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 80
        ),
        array(
            'title' => 'PHP',
            'img_url' => './assets/logo/php-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'Composer',
            'img_url' => './assets/logo/composer.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'MySQL',
            'img_url' => './assets/logo/mysql.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 80
        ),
        array(
            'title' => 'WorpPress',
            'img_url' => './assets/logo/wordpress-blue.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'WooCommerce',
            'img_url' => './assets/logo/woocommerce.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 80
        ),
        array(
            'title' => 'Xampp',
            'img_url' => './assets/logo/xampp.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 95
        ),
        array(
            'title' => 'Laragon',
            'img_url' => './assets/logo/laragon.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 95
        ),
        array(
            'title' => 'VS Code',
            'img_url' => './assets/logo/vs-code.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 95
        ),
        array(
            'title' => 'Figma',
            'img_url' => './assets/logo/figma-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 70
        ),
        array(
            'title' => 'Git',
            'img_url' => './assets/logo/git.svg',
            'img_x' => 80,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'GitHub',
            'img_url' => './assets/logo/github-1.svg',
            'img_x' => 90,
            'img_y' => 80,
            'percentage' => 85
        ),
        array(
            'title' => 'FileZilla',
            'img_url' => './assets/logo/filezilla-logo.svg',
            'img_x' => 80,
            'img_y' => 80,
            'percentage' => 95
        ),
     );
     return $logos;
 }
?>
<section class="about-area" id="about">
    <?php require_once __DIR__ . '/sub-template/introduce.php' ?>
    <div class="container my-5 skill-sec">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <h2 class="text-uppercase text-center skill-header">
                            <span>My</span>
                            <span>Top</span>
                            <span>Skills</span>
                            <span class="arrow_icon"><i class="fas fa-arrow-circle-down"></i></a></span>
                        </h2>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <img src="./assets/img/skill.jpg" alt="skill" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="row">
                    <div class="container ">

                        <section class="tabs-area">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                        Default
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                        Globe
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" id="bounce_tab">
                                        Floating
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content mt-4 mb-4">
                                <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                                    <div class="row">
                                        <?php require_once __DIR__ . '/sub-template/tab-content/tab-1.php' ?>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <div id="myCanvasContainer" style="width: 100%;">
                                                <canvas width="550" height="550" id="myCanvas">
                                                    <ul>
                                                        <?php require_once __DIR__ . '/sub-template/tab-content/tab-2.php' ?>
                                                    </ul>
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tabs-3" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12 d-flex flex-wrap justify-content-around">
                                            <?php require_once __DIR__ . '/sub-template/tab-content/tab-3.php' ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once __DIR__ . '/sub-template/location.php' ?>
</section>