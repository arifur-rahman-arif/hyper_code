 <?php 
    session_start();
    function url(){
        $protocall = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']) == 'on' ? "https" : "http";
        $url = str_replace("\\",'/',"" . $protocall ."://".$_SERVER['HTTP_HOST'].substr(getcwd(),strlen($_SERVER['DOCUMENT_ROOT'])));
        return $url;
    }
?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="color-scheme" content="dark light">
     <title>Hyper Code</title>

     <link rel="icon" type="image/png" href="./build/img/logo.png" />
     <!-- CDN Files -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
     <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,700;1,600&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="./build/styles/main.min.css"> 

 </head>

 <style>
     .display_none {
         display: none;
     }

     .boxes {
         --size: 32px;
         --duration: 800ms;
         height: calc(var(--size) * 2);
         width: calc(var(--size) * 3);
         position: relative;
         transform-style: preserve-3d;
         transform-origin: 50% 50%;
         margin-top: calc(var(--size) * 1.5 * -1);
         transform: rotateX(60deg) rotateZ(45deg) rotateY(0deg) translateZ(0px);
     }

     .boxes .box {
         width: var(--size);
         height: var(--size);
         top: 0;
         left: 0;
         position: absolute;
         transform-style: preserve-3d;
     }

     .boxes .box:nth-child(1) {
         transform: translate(100%, 0);
         animation: box1 var(--duration) linear infinite;
     }

     .boxes .box:nth-child(2) {
         transform: translate(0, 100%);
         animation: box2 var(--duration) linear infinite;
     }

     .boxes .box:nth-child(3) {
         transform: translate(100%, 100%);
         animation: box3 var(--duration) linear infinite;
     }

     .boxes .box:nth-child(4) {
         transform: translate(200%, 0);
         animation: box4 var(--duration) linear infinite;
     }

     .boxes .box>div {
         --background: var(--gradient-color);
         --top: auto;
         --right: auto;
         --bottom: auto;
         --left: auto;
         --translateZ: calc(var(--size) / 2);
         --rotateY: 0deg;
         --rotateX: 0deg;
         position: absolute;
         width: 100%;
         height: 100%;
         background: var(--background);
         top: var(--top);
         right: var(--right);
         bottom: var(--bottom);
         left: var(--left);
         transform: rotateY(var(--rotateY)) rotateX(var(--rotateX)) translateZ(var(--translateZ));
     }

     .boxes .box>div:nth-child(1) {
         --top: 0;
         --left: 0;
     }

     .boxes .box>div:nth-child(2) {
         --background: var(--gradient-color);
         --right: 0;
         --rotateY: 90deg;
     }

     .boxes .box>div:nth-child(3) {
         --background: var(--primary-color2);
         --rotateX: -90deg;
     }

     .boxes .box>div:nth-child(4) {
         --background: #DBE3F4;
         --top: 0;
         --left: 0;
         --translateZ: calc(var(--size) * 3 * -1);
     }

     @keyframes box1 {

         0%,
         50% {
             transform: translate(100%, 0);
         }

         100% {
             transform: translate(200%, 0);
         }
     }

     @keyframes box2 {
         0% {
             transform: translate(0, 100%);
         }

         50% {
             transform: translate(0, 0);
         }

         100% {
             transform: translate(100%, 0);
         }
     }

     @keyframes box3 {

         0%,
         50% {
             transform: translate(100%, 100%);
         }

         100% {
             transform: translate(0, 100%);
         }
     }

     @keyframes box4 {
         0% {
             transform: translate(200%, 0);
         }

         50% {
             transform: translate(200%, 100%);
         }

         100% {
             transform: translate(100%, 100%);
         }
     }


     .loader_container {
         min-height: 100vh;
         font-family: Roboto, Arial;
         display: flex;
         justify-content: center;
         align-items: center;
         background: #F9FBFF;
     }
 </style>

 <body id="body" class="<?php echo $_SESSION['dark_mode'] == 'on' ? 'dark-mode' : '' ?>">

     <?php require_once __DIR__ .'/template/loader.php' ?>

     <!--  ======================= Start Header Area ============================== -->
     <?php require_once __DIR__ .'/template/header.php' ?>
     <!--  ======================= End Header Area ============================== -->

     <!--  ======================= Start Side Menu Area ============================== -->
     <?php require_once __DIR__ .'/template/side_menu.php' ?>
     <!--  ======================= End Side Menu Area ============================== -->

     <!--  ======================= Start Main Area ================================ -->
     <main class="site-main display_none">


         <!--  ======================= Start Banner Area =======================  -->
         <?php require_once __DIR__ .'/template/banner.php' ?>
         <!--  ======================= End Banner Area =======================  -->

         <!--  ========================= About Area ==========================  -->
         <?php require_once __DIR__ .'/template/about.php' ?>
         <!--  ========================= End About Area ==========================  -->

         <!--  ======================== Brand Area ==============================  -->
         <?php require_once __DIR__ .'/template/brand.php' ?>
         <!--  ======================== End Brand Area ==============================  -->

         <!--  ====================== Start Services Area =============================  -->
         <?php require_once __DIR__ .'/template/service.php' ?>
         <!--  ====================== End Services Area =============================  -->

         <!--  ======================= Project Area =============================  -->
         <?php require_once __DIR__ .'/template/project.php' ?>
         <!--  ======================= End Project Area =============================  -->

         <!--  ======================== Clients say about area ==============================  -->
         <?php require_once __DIR__ .'/template/client.php' ?>
         <!--  ======================== End Clients say about area ==============================  -->

     </main>
     <!--  ======================= End Main Area ================================ -->

     <!--  ======================= Footer Area ================================ -->
     <?php require_once __DIR__ .'/template/footer.php' ?>
     <!--  ======================= End Footer Area ================================ -->

     <!-- CDN Files -->

     <!--  Jquery js file  -->
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/EasePack.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>

     <script src="./build/package/Magnific-Popup/jquery.magnific-popup.min.js"></script>
     <script src="./build/package/mixitup/mixitup.min.js"></script>
     <script src="./build/package/typed/typed.min.js"></script>

     <!-- compiled  -->
     <script src="./build/scripts/all.min.js"></script>
 </body>

 </html>