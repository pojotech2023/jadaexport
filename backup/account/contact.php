
<?php include 'header.php'; ?>


    
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- :::::: Start Main Container Wrapper :::::: -->
    <main id="main-container" class="main-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3495.4758634910863!2d78.72472891508697!3d28.82468938234227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afebfffffffff%3A0x50454c8126f5fc49!2sJade%20Exports!5e0!3m2!1sen!2sin!4v1638856411837!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info-wrap gray-bg m-t-40">
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-dec">
                                <a href="tel://+9142662817">+9142662817</a>
                                <a href="tel://+917401997786">+917401997786 </a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-globe-asia"></i>
                            </div>
                            <div class="contact-info-dec">
                                <a href="mailto://urname@email.com">info@jadaexports.com</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-dec">
                                <span>No.12, Ground Floor,
Mallikeswarar Koil Street,
Mannady, Chennai - 600001
Tamilnadu, INDIA</span>
                            </div>
                        </div>
                        <div class="contact-social m-t-40">
                            <h5>Follow Us</h5>
                            <div class="social-link">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form gray-bg m-t-40">
                        <div class="section-content">
                            <h5 class="section-content__title">Get In Touch</h5>
                        </div>
                        <form class="contact-form-style" id="contact-form" action="contact-mail.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-box__single-group">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="form-box__single-group">
                                        <input type="number" name="telephone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                   <div class="form-box__single-group">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="form-box__single-group">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box__single-group">
                                        <textarea rows="10" name="message" placeholder="Your Messege" required></textarea>
                                    </div>
                                    
                                    <div class="row">
        <div class="form-group col-6">
            <label>Enter Captcha</label>
            <input type="text" class="form-control" name="captcha" id="captcha" required>
        </div>
        <div class="form-group col-6">
            <label class="col-md-12">Captcha Code</label>
            <img src="captcha.php" alt="PHP Captcha">
        </div>
    </div>
    
    
                                    <button class="btn btn--box btn--medium btn--radius-tiny btn--black btn--black-hover-green btn--uppercase font--bold m-t-30"  id="submit"  type="submit">Send</button>
                                </div>
                            </div>
                             <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                        
                        <?php
    session_start();
    
    if(!empty($_POST["send"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $captcha = $_POST["captcha"];

      $captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_STRING);

      if(empty($captcha)) {
        $captchaError = array(
          "status" => "alert-danger",
          "message" => "Please enter the captcha."
        );
      }
      else if($_SESSION['CAPTCHA_CODE'] == $captchaUser){
        $captchaError = array(
          "status" => "alert-success",
          "message" => "Your form has been submitted successfuly."
        );
      } else {
        $captchaError = array(
          "status" => "alert-danger",
          "message" => "Captcha is invalid."
        );
      }
    }  
?>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- :::::: End MainContainer Wrapper :::::: -->

 <?php include 'footer.php'; ?>