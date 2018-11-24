 <!--Start of slider section-->
 <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img src="<?php echo $banner[0]['featured_image']['url'];?>" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <?php echo $banner[0]['content']['rendered'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->

        <!--Start of welcome section-->
        <!-- <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to green woods hills jonggol</h2>
                             <p>Our Green Fire Organization is one of the non profit organization near you. Get our services like</p>
                        </div>
                    </div>
                </div> -->
                <!--End of row-->
                <!-- <div class="row">
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-leaf"></i>
                                    </div>
                                    <h4>eco system</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--End of col-md-3-->
                    <!-- <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-refresh"></i>
                                    </div>
                                    <h4>recycling</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--End of col-md-3-->
                    <!-- <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-tint"></i>
                                    </div>
                                    <h4>water refine</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--End of col-md-3-->
                    <!-- <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                        <i class="fa fa-cog"></i>
                                    </div>
                                    <h4>solar system</h4>
                                    <p>Lorem ipsum dolor sit amet, eu qui modo expetendis reformidans ex sit set appetere sententiae seo eum in simul homero.</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--End of col-md-3-->
                <!-- </div> -->
                <!--End of row-->
            <!-- </div> -->
            <!--End of container-->
        <!-- </section> -->
        <!--end of welcome section-->

        <?php 
        if (count($special_offers) > 0) {
        ?>
        <!--start of event-->
        <section id="event">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="event_header text-center">
                            <h2>Special Offers</h2>
                            <p>Berikut ini adalah beberapa penawaran properti terbaik yang kami miliki</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <?php foreach($special_offers as $k => $v) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_img">
                                        <a href="<?php echo base_url('product/' . url_title($v['title']['rendered'], '-', true) . '-' . $v['id']);?>">
                                            <img src="<?php echo $v['featured_image']['url'];?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_text text-center">
                                        <a href="<?php echo base_url('product/' . url_title($v['title']['rendered'], '-', true) . '-' . $v['id']);?>"><h4><?php echo $v['title']['rendered'];?></h4></a>
                                        <div class="text-justify">
                                            <?php echo character_limiter($v['excerpt']['rendered'], 350);?>
                                        </div>
                                        <div>
                                            <a href="<?php echo base_url('product/' . url_title($v['title']['rendered'], '-', true) . '-' . $v['id']);?>" class="event_btn">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <?php  } ?>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of event-->
        <?php } ?>


        <?php 
            if(count($testimonials) > 0) {
        ?>
        <!--Start of testimonial-->
        <section id="testimonial">
            <div class="testimonial_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>testimonials</h2>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <?php 
                                                foreach($testimonials as $kIndicator=>$vIndicator) { 
                                            ?>
                                            <li data-target="#fade-quote-carousel" data-slide-to="<?php echo $kIndicator;?>" <?php echo $kIndicator == 0 ? 'class="active"' : ''; ?>></li>
                                            <?php } ?>
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <?php 
                                                foreach($testimonials as $kItem=>$vItem) { 
                                            ?>
                                            <div class="<?php echo $kItem == 0 ? 'active' : ''; ?> item">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <?php echo $vItem['content']['rendered'];?>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5><?php echo $vItem['acf']['name'];?></h5>
                                                            <p><?php echo $vItem['acf']['title'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of container-->
                    </section>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        <!--end of testimonial-->
        <?php } ?>

        <!--Start of Market-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="market_area text-center">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="img/audiojungle.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="img/codecanyon.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="img/graphicriver.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="market_logo">
                                        <a href=""><img src="img/audiojungle.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of market Area-->
                    </div>
                    <!--End of col-md-12-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of market-->



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