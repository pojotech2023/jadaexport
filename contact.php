<?php
// Start the session at the very top of the file
session_start();
?>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="contact-info-wrap gray-bg m-t-40">

                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="tel://+919944900621">+919944900621</a>
                        </div>
                    </div>

                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="tel://+917401997786">+917401997786</a>

                        </div>
                    </div>

                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-dec">

                            <a href="tel://+914442662817">+914442662817,</a>

                        </div>
                    </div>

                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="tel://+917401997786">+917401997786</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="contact-info-dec">
                            <a href="mailto://info@jadaexports.com">info@jadaexports.com,</a>
                            <a href="mailto://support@jadaexports.com">support@jadaexports.com</a>
                            <a href="mailto://jadaexports@gmail.com">jadaexports@gmail.com</a>
                        </div>
                    </div>
                    <div class="single-contact-info">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-dec">

                            <span>NO.155, 2nd Main Road, Krishna Nagar, Madhuravayal, Chennai -600095</span>
                        </div>
                    </div>
                    <div class="contact-social m-t-40">
                        <h5>Follow Us</h5>
                        <div class="social-link">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/Jada159" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li> -->
                                <li>
                                    <a href="https://www.youtube.com/channel/UCPOEDIeiIPs3MrjfBtUcYDg" target="_blank"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/jada-exports-095495246/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/jadaexports/" target="_blank"><i class="fab fa-instagram"></i></a>
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

                    <form class="contact-form-style" action="https://formsubmit.co/jadaexports@gmail.com" method="POST">
                        <input type="hidden" name="_subject" value="New Form Submission in Jada Export">
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
                            <!-- Dropdown field added here -->
                            <div class="col-lg-6">
                                <div class="form-box__single-group">
                                    <select name="product type" required>
                                        <option value="" disabled selected>Select Product Type</option>
                                        <option value="Rice">Rice</option>
                                        <option value="Basmati">Basmati</option>
                                        <option value="Millets">Millets</option>
                                        <option value="Spices">Spices</option>
                                        <option value="Yellow Maize">Yellow Maize</option>
                                        <option value="Wheat">Wheat</option>
                                        <option value="Oil">Oil</option>
                                        <option value="Fresh Vegetables & Fruits">Fresh Vegetables & Fruits</option>
                                        <option value="Dhall">Dhall</option>
                                        <option value="Powder">Powder</option>
                                        <option value="Cashew Nut">Cashew Nut</option>
                                        <option value="Dehydrated Lemon">Dehydrated Lemon</option>
                                        <option value="Peanut">Peanut</option>
                                        <option value="Coconuts">Coconuts</option>
                                        <option value="Sugar">Sugar</option>
                                    </select>
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
                                <button class="btn btn--box btn--medium btn--radius-tiny btn--black btn--black-hover-green btn--uppercase font--bold m-t-30" id="submit" type="submit">Send</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main> <!-- :::::: End MainContainer Wrapper :::::: -->
<div style="margin-top: 30px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3886.7590976372185!2d80.16725527507779!3d13.051000287271712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDAzJzAzLjYiTiA4MMKwMTAnMTEuNCJF!5e0!3m2!1sen!2sin!4v1737638615124!5m2!1sen!2sin" width="1500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php include 'footer.php'; ?>