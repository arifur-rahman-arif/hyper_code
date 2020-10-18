<footer class="footer-area footer-bg display_none" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 pl-5">
                <form>
                    <input type="hidden" name="url" value="<?php echo url() ?>" id="url">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="input_name">Name :</label>
                            <input type="text" class="form-control" required name="name" id="input_name" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input_email">Email :</label>
                            <input type="email" required class="form-control" name="email" id="input_email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input_subject">Subject :</label>
                        <input type="text" class="form-control" name="subject" id="input_subject" value="Want to hire you">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Your Message :</label>
                        <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" placeholder="Type your messege..." rows="3"></textarea>
                    </div>
                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <button target="blank" type="submit" class="btn button primary-button mr-4 text-uppercase">
                                Send Messege
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-12">
                <div class="site-logo text-center">
                    <a href="#"><img src="./build/img/logo.png" alt="logo"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Contact me on</h5>
                    <a title="Contact me on facebook" target="blank" href="https://www.facebook.com/profile.php?id=100023045749987"><i class="fab fa-facebook"></i></a>
                    <a title="Contact me on linkedin" target="blank" href="https://www.linkedin.com/in/arifur-rahman-arif-51222a1b8/"><i class="fab fa-linkedin"></i></a>
                    <a title="Watch my github repository" target="blank" href="https://github.com/Arif32-dev"><i class="fab fa-github"></i></a>
                    <a title="Contact me on skype" target="blank" href="https://join.skype.com/invite/QItgzM2gvboC"><i class="fab fa-skype"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>