<div class="dynmiac_checkout--button">
                                       
                                        <a href="#modalProductAsk" data-toggle="modal" class="btn btn--block btn--long btn--radius-tiny btn--green btn--green-hover-black text-uppercase m-r-35">Get Best Quote</a>
                                    </div>
                                </div>
                                 <!-- Start Modal Product Ask -->
    <div class="modal fade" id="modalProductAsk" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fal fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Start Add Review Form-->
                                <div class="review-form m-t-30">
                                    <div class="section-content">
                                        <h6 class="font--bold text-uppercase">Have a question?</h6>
                                        <p class="section-content__desc">Your email address will not be published. Required fields are marked *</p>
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
                                </div> <!-- End Add Review Form- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Product Ask -->