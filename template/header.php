<header class="header_area">
         <div class="main-menu">
             <nav class="navbar navbar-expand-lg navbar-light">
                 <a class="navbar-brand" href="#"><img src="./assets/img/logo.png" alt="logo" width="100" height="90"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                             <a class="nav-link" href="portfolio">projects</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="contact">contact</a>
                         </li>
                         <li class="nav-item dark_mode_toggler d-flex justify-content-center align-items-center px-2 mx-1">
                             <label for="checkbox" class="switch">
                                 <input data-url="<?php echo url() ?>" type="checkbox" <?php echo $_SESSION['dark_mode'] == 'on' ? 'checked' : '' ?> id="checkbox">
                                 <span class="slider round"></span>
                             </label>
                         </li>
                     </ul>
                 </div>
             </nav>
         </div>
     </header>
