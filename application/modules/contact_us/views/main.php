<!--Start of contact-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="colmd-12">
                <div class="contact_area text-center">
                    <h3>Hey, Contact Us Here</h3>
                    <p>Jika anda memmiliki pertanyaan mengenai produk yang kami miliki atau anda ingin bergabung bersama kami jangan ragu untuk menghubungi kami</p>
                </div>
            </div>
        </div>
        <!--End of row-->
        <div class="row">
            <div class="col-md-6">
                <div class="office">
                    <div class="title">
                        <h5>our office info</h5>
                    </div>
                    <div class="office_location">
                        <div class="address">
                            <i class="fa fa-map-marker"><span><?php echo $contact[0]['acf']['address']; ?></span></i>
                        </div>
                        <div class="phone">
                            <i class="fa fa-phone"><span><?php echo $contact[0]['acf']['phone']; ?></span></i>
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"><span><?php echo $contact[0]['acf']['email']; ?></span></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="msg">
                    <div class="msg_title">
                        <h5>Drop A Message</h5>
                    </div>
                    <div class="form_area">
                        <!-- CONTACT FORM -->
                        <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                            <div id="message"></div>
                            <form action="contact_us/submit_inquiry" class="form-horizontal contact-1" role="form" name="contactform" id="form-inquiry">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                    <input type="hidden" name="<?=$csrf['name'];?>" id="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>"/>
                                        <input type="text" class="form-control" name="name-inquiry" id="name-inquiry" required="true" placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" name="email-inquiry" id="email-inquiry" required="true" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="subject-inquiry" id="subject-inquiry" required="true" placeholder="Subject">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="phone-inquiry" id="phone-inquiry" required="true" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="text_area">
                                            <textarea name="message-inquiry" id="message-inquiry" class="form-control" cols="30" rows="8" required="true" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" id="btn-submit-inquiry" required="true" data-loading-text="Loading..." class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="alert-inquiry-success" style="display:none;" class="alert alert-success alert-inquiry" role="alert"></div>
                    <div id="alert-inquiry-failed" style="display:none;" class="alert alert-danger alert-inquiry" role="alert"></div>
                </div>
            </div>
            <!--End of col-md-6-->
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!--End of contact-->