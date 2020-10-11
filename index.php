 <?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="dark light">
    <title>Hyper Code</title>

    <link rel="icon" type="image/png" href="./assets/img/logo.png" />
    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./assets/package/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./assets/package/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/package/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/partials/global.css">
    <link rel="stylesheet" href="./assets/css/partials/variable.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,700;1,600&display=swap" rel="stylesheet">

    <!-- responsive tab css file -->
    <link href="./assets/package/responsive-tabs/dist/css/responsive-tabs.css" rel="stylesheet">
</head>

<body id="body" class="<?php echo $_SESSION['dark_mode'] == 'on' ? 'dark-mode' : '' ?>">
    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./assets/img/logo.png" alt="logo" width="100"
                        height="90"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="body">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portfolio">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">contact</a>
                        </li>
                        <li class="nav-item d-flex justify-content-center align-items-center px-2 mx-1">
                            <label for="checkbox" class="switch">
                                <input type="checkbox" <?php echo $_SESSION['dark_mode'] == 'on' ? 'checked' : '' ?> id="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Sidebar menu -->
    <aside>
        <ul class="navbar-nav" id="aside_nav">
            <li>
                <a class="nav-link" href="body">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="about">
                    <i class="fas fa-user"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="service">
                    <i class="fab fa-servicestack"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="portfolio">
                    <i class="fas fa-images"></i>
                </a>
            </li>
            <li>
                <a class="nav-link" href="contact">
                    <i class="fas fa-phone-alt"></i>
                </a>
            </li>
        </ul>
    </aside>
    <!-- End of Sidebar menu -->
    <!--  ======================= End Header Area ============================== -->

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">


        <!--  ======================= Start Banner Area =======================  -->
        <section class="site-banner banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text">Hey</h3>
                        <h1 class="title-text text-uppercase">I'<span style="text-transform: lowercase">m</span> ar. arif</h1>
                        <h4 class="title-text text-uppercase">Developer / Designer / Doer</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <a href="https://www.freelancer.com/u/DevDrArif" target="blank" type="button"
                                    class="btn button primary-button mr-4 text-uppercase">hire
                                    me</a>
                                <a href="./assets/ar-arif-resume.pdf" download type="button"
                                    class="btn button secondary-button text-uppercase">Get cv</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="./assets/img/banner/banner-image.png" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  ======================= End Banner Area =======================  -->

        <!--  ========================= About Area ==========================  -->

        <section class="about-area" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./assets/img/about-us.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>Let me</span>
                            <span>introduce</span>
                            <span>myself</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                Hello, I'm a professional web developer/designer.
                            </p>
                            <p class="para">
                                I have variety of skills that I can implement it on my work with accuracy. Therefore I
                                work hard not only to deliver
                                high performance to my clients but also I starve to learn new tech so that I can ensure
                                a diverse contribution to my
                                work and also in web dev sector.
                                Also my dream is to develop a tech company/organization that will contribute in computer
                                technology in future.
                            </p>
                        </div>
                        <a href="./assets/ar-arif-resume.pdf" download
                            class="btn button primary-button text-uppercase">Download cv</a>
                    </div>
                </div>
            </div>

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
                                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                                id="bounce_tab">
                                                Floating
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-4 mb-4">
                                        <div class="tab-pane fade show active" id="tabs-1" role="tabpanel">
                                            <div class="row">
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/html-5.svg" alt="html" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>HTML :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 100%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">100%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/css-3.svg" alt="CSS" width="90" height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>CSS :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/bootstrap-4.svg" alt="Bootstrap" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>Bootstrap :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 90%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">90%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/sass-1.svg" alt="SASS" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>SASS :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/javascript.svg" alt="JavaScript" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>JavaScript :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/jquery-1.svg" alt="jQuery" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>jQuery :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/ajax-5.svg" alt="AJAX" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>AJAX :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 90%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">90%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/json-5.svg" alt="JSON" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>JSON :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 90%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">90%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/react-2.svg" alt="React" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>React :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 70%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">70%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/gsap-greensock.svg" alt="GSAP" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>GSAP :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 80%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">80%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img style="position: relative; left: 10%;"
                                                        src="./assets/logo/gulp.svg" alt="Gulp" width="90" height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>Gulp :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 87%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">87%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/webpack-icon.svg" alt="WebPack" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>WebPack :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/php-1.svg" alt="PHP" width="90" height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>PHP :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/composer.svg" alt="Composer" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>Composer :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/mysql.svg" alt="MySQL" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>MySQL :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 82%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">82%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/wordpress-blue.svg" alt="WordPress"
                                                        width="80" height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>WordPress :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 90%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">90%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/woocommerce.svg" alt="WooCommerce"
                                                        width="80" height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>WooCommerce :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 83%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">83%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/xampp.svg" alt="Xampp" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>Xampp :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 95%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">95%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/laragon.svg" alt="Xampp" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>Laragon :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 95%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">95%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/vs-code.svg" alt="VS Code" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>VS Code :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 95%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">95%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/figma-1.svg" alt="Figma" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>Figma :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 70%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">70%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-lg-3 col-md-4 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/git.svg" alt="Git" width="80" height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>Git :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/github-1.svg" alt="Github" width="90"
                                                        height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>GitHub :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 85%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">85%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 text-center mt-4 mb-4 pt-3 pb-3 skill-boxes">
                                                    <img src="./assets/logo/filezilla-logo.svg" alt="FileZilla"
                                                        width="80" height="80">
                                                    <div class="skill_info">
                                                        <div class="percentage">
                                                            <h6>FileZilla :</h6>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped"
                                                                    role="progressbar" style="width: 95%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100">95%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tabs-2" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <div id="myCanvasContainer" style="width: 100%;">
                                                        <canvas width="600" height="600" id="myCanvas">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <img width="50" height="50"
                                                                            src="./assets/logo/html-5.svg" alt="html">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/css-3.svg" alt="CSS"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/bootstrap-4.svg"
                                                                            alt="Bootstrap" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/sass-1.svg" alt="SASS"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/javascript.svg"
                                                                            alt="JavaScript" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/jquery-1.svg"
                                                                            alt="jQuery" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/ajax-5.svg" alt="AJAX"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/react-2.svg" alt="React"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/json-5.svg" alt="JSON"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/gsap-greensock.svg"
                                                                            alt="GSAP" width="50" height="50">
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/webpack-icon.svg"
                                                                            alt="WebPack" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/gulp.svg" alt="Gulp"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/php-1.svg" alt="PHP"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/composer.svg"
                                                                            alt="Composer" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/mysql.svg" alt="MySQL"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/wordpress-blue.svg"
                                                                            alt="WordPress" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/woocommerce.svg"
                                                                            alt="WooCommerce" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/xampp.svg" alt="Xampp"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/laragon.svg" alt="Xampp"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/vs-code.svg"
                                                                            alt="VS Code" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/figma-1.svg" alt="Figma"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/git.svg" alt="Git"
                                                                            width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/github-1.svg"
                                                                            alt="Github" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <img src="./assets/logo/filezilla-logo.svg"
                                                                            alt="FileZilla" width="50" height="50">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tabs-3" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12 d-flex flex-wrap justify-content-around">
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/html-5.svg" alt="HTML">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/css-3.svg" alt="CSS">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/bootstrap-4.svg" alt="Bootstrap">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/sass-1.svg" alt="SASS">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/javascript.svg" alt="JavaScript">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/jquery-1.svg" alt="jQuery">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/ajax-5.svg" alt="AJAX">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/react-2.svg" alt="React">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/json-5.svg" alt="JSON">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/gsap-greensock.svg" alt="GSAP">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/webpack-icon.svg" alt="WebPack">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/gulp.svg" alt="Gulp">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/php-1.svg" alt="PHP">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/composer.svg" alt="Composer">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/mysql.svg" alt="MySQL">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/wordpress-blue.svg" alt="WordPress">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/woocommerce.svg" alt="WooCommerce">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/xampp.svg" alt="Xampp">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/laragon.svg" alt="Xampp">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/vs-code.svg" alt="VS Code">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/figma-1.svg" alt="Figma">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/git.svg" alt="Git">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/github-1.svg" alt="Github">
                                                    </div>
                                                    <div class="ball_container">
                                                        <img src="./assets/logo/filezilla-logo.svg" alt="FileZilla">
                                                    </div>
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
        </section>

        <!--  ========================= End About Area ==========================  -->

        <!--  ======================== Brand Area ==============================  -->

        <section class="brand-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="experience-area px-3">
                            <div class="d-flex flex-lg-row flex-md-column years-area">
                                <h2 class="p-3 years">1.5</h2>
                                <h2>
                                    <span>Years</span>
                                    <span>Experience In</span>
                                    <span>Working</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex flex-row flex-wrap call-area pb-2 ml-2">
                                    <span class="mb-2 mr-3"><i class="fas fa-phone-alt fa-3x"></i></span>
                                    <div class="call-now">
                                        <a href="tel:+8801891852840" class="text-uppercase h4 font-roboto">Call Now</a>
                                        <span class="font-roboto py-2">(+88) 018-9185-2840</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-row flex-wrap call-area pb-2 ml-2">
                                    <span class="mb-2 mr-3"><i class="fas fa-envelope fa-3x"></i></span>
                                    <div class="call-now">
                                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="blank"
                                            class="text-uppercase h4 font-roboto">Send Mail</a>
                                        <span class="font-roboto py-2">dev.ar.arif@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-lg-5">
                        <div class="contact_img_box">
                            <img src="./assets/img/call.jpg" alt="call" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================== End Brand Area ==============================  -->

        <!--  ====================== Start Services Area =============================  -->

        <section class="services-area" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="text-uppercase title-text">Services I Offer</h1>
                        <p class="para">
                            These are the services that I offer to my clients locally or internationally.
                            If you are interested in of these <a href="tel:+8801891852840">Contact me via phone</a>
                            or <a href="#contact">Email</a>
                            so that I can reach
                            you.
                        </p>
                    </div>
                </div>
                <div class="container services-list">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./assets/img/services/web-design.jpg" width="135" height="110"
                                        alt="Services-1">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Front-End</h5>
                                    <p class="card-text text-secondary">
                                        I offer pixel perfert web template design as HTML/CSS/JS format
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./assets/img/services/web-dev.png" width="135" height="110"
                                        alt="Services-2">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Back-End</h5>
                                    <p class="card-text text-secondary">
                                        I develop back-end of a website using back-end programming language such
                                        as
                                        OOP PHP/Python/Node etc
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./assets/img/services/wordpress.png" width="135" height="110"
                                        alt="Services-3">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">WordPress Development</h5>
                                    <p class="card-text text-secondary">
                                        I develop WordPress website efficiently with custom theme and custom
                                        plugin
                                        development
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./assets/img/services/s4.png" alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Web optimization</h5>
                                    <p class="card-text text-secondary">
                                        I also do website and server optimization to speed up
                                        websites and web applications
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="services">
                                <div class="sevices-img text-center py-4">
                                    <img src="./assets/img/services/mangement.png" width="135" height="110"
                                        alt="Services-4">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase font-roboto">Web Management</h5>
                                    <p class="card-text text-secondary">
                                        I offer do various website/web application management
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ====================== End Services Area =============================  -->

        <!--  ======================= Project Area =============================  -->

        <section class="project-area" id="portfolio">
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1">Recently Done Project</h1>
                    <h1 class="text-uppercase title-h1">Quality Work</h1>
                </div>

                <div
                    class="d-flex align-items-center flex-wrap mb-3 flex-column justify-content-center flex-md-row button-group">
                    <button type="button" class="active px-md-3" id="btn1" data-filter="*">All</button>
                    <button type="button" class="px-md-3" data-filter=".popular">E-commerce</button>
                    <button type="button" class="px-md-3" data-filter=".latest">Test Project</button>
                    <button type="button" class="px-md-3" data-filter=".following">React</button>
                    <button type="button" class="px-md-3" data-filter=".upcoming">Wordpress</button>
                </div>

                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p1.jpg">
                                    <img src="./assets/img/portfolio/p1.jpg" alt="portfolio-1" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Minimul Desing</h4>
                                <span class="text-secondary">Latest, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p2.jpg">
                                    <img src="./assets/img/portfolio/p2.jpg" alt="portfolio-2" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Paint Wall</h4>
                                <span class="text-secondary">Popular, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix popular">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p3.jpg">
                                    <img src="./assets/img/portfolio/p3.jpg" alt="portfolio-3" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Female light</h4>
                                <span class="text-secondary">Popular, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p4.jpg">
                                    <img src="./assets/img/portfolio/p4.jpg" alt="portfolio-4" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Fourth Air</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p5.jpg">
                                    <img src="./assets/img/portfolio/p5.jpg" alt="portfolio-5" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Muliple fown</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p6.jpg">
                                    <img src="./assets/img/portfolio/p6.jpg" alt="portfolio-6" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Together sign</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p7.jpg">
                                    <img src="./assets/img/portfolio/p7.jpg" alt="portfolio-7" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Green Heaven</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix following">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p8.jpg">
                                    <img src="./assets/img/portfolio/p8.jpg" alt="portfolio-8" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Fly Male</h4>
                                <span class="text-secondary">Following, Portfolio</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center element-item mix upcoming">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="./assets/img/portfolio/p9.jpg">
                                    <img src="./assets/img/portfolio/p9.jpg" alt="portfolio-9" class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase">Camera Lens</h4>
                                <span class="text-secondary">Upcoming, Portfolio</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================= End Project Area =============================  -->

        <!--  ======================== About Me Area ==============================  -->

        <section class="about-area">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="about-title">
                            <h1 class="text-uppercase title-h1">Client Say about me</h1>
                            <p class="para">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti
                                recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container carousel py-lg-5">
                <div class="owl-carousel owl-theme">
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./assets/img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./assets/img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./assets/img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./assets/img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./assets/img/testimonials/t1.jpg" alt="img1" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">John Martin</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                    <div class="client row">
                        <div class="col-lg-4 col-md-12 client-img">
                            <img src="./assets/img/testimonials/t2.jpg" alt="img2" class="img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-12 about-client">
                            <h4 class="text-uppercase">Mac Hill</h4>
                            <p class="para">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem architecto
                                consequuntur ratione, obcaecati corrupti deserunt.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>
    <!--  ======================= End Main Area ================================ -->

    <footer class="footer-area footer-bg" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 pl-5">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="input_name">Name :</label>
                                <input type="text" class="form-control" name="name" id="input_name"
                                    placeholder="Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="input_email">Email :</label>
                                <input type="email" required class="form-control" name="email" id="input_email"
                                    placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input_subject">Subject :</label>
                            <input type="text" class="form-control" name="subject" id="input_subject"
                                value="Want to hire you">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Message :</label>
                            <textarea class="form-control" name="msg" id="exampleFormControlTextarea1"
                                placeholder="Type your messege..." rows="3"></textarea>
                        </div>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <button target="blank" type="submit"
                                    class="btn button primary-button mr-4 text-uppercase">
                                    Send Messege
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-12">
                    <div class="site-logo text-center">
                        <a href="#"><img src="./assets/img/logo.png" alt="logo"></a>
                    </div>
                    <div class="social text-center">
                        <h5 class="text-uppercase">Contact me on</h5>
                        <a title="Contact me on facebook" target="blank"
                            href="https://www.facebook.com/profile.php?id=100023045749987"><i
                                class="fab fa-facebook"></i></a>
                        <a title="Contact me on linkedin" target="blank"
                            href="https://www.linkedin.com/in/arifur-rahman-arif-51222a1b8/"><i
                                class="fab fa-linkedin"></i></a>
                        <a title="Watch my github repository" target="blank" href="https://github.com/Arif32-dev"><i
                                class="fab fa-github"></i></a>
                        <a title="Contact me on skype" target="blank"
                            href="https://join.skype.com/invite/QItgzM2gvboC"><i class="fab fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--  Jquery js file  -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <!--  Bootstrap js file  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="./assets/package/isotope/mixitup.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./assets/package/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./assets/package/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Responsive tabs -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="./assets/package/responsive-tabs/dist/js/responsive-tabs.js"></script>

    <!--  custom js file  -->
    <script src="./assets/js/main.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/EasePack.min.js"></script>

    <!-- Tag canvas file -->
    <script src="./assets/package/tag-canvas/tagcanvas.js" type="text/javascript"></script>

    <!-- aimation js file -->
    <script src="./assets/js/float.js"></script>


    <!-- writing inline javascript -->
    <script>
        (function ($) {
            $('.nav-tabs').responsiveTabs();
        })(jQuery);
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myCanvas').tagcanvas({
                animTiming: "Smooth",
                depth: 0.99,
                outlineColour: 'transparent',
                centreImage: './assets/img/logo.png',
            });
        });
    </script>

</body>

</html>