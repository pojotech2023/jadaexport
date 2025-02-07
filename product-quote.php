
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

                              
                            </div> <!-- End Add Review Form- -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Modal Product Ask -->