
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest_blog text-left">
					<h2><?php echo $product['title']['rendered'];?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="lates-blog text-left">
					<?php echo $product['content']['rendered'];?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="image">
					<img src="<?php echo $product['featured_image']['url'];?>" alt="#">
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if($product['acf']['brochure']) { ?>
					<a href="<?php echo $product['acf']['brochure'];?>" download="<?php echo $product['acf']['brochure'];?>">
					<img src="<?php echo base_url('assets/themes/img/pdf-download.png');?>"/>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
                <div class="msg">
                    <div>
						<h3>Tertarik dengan penwaran produk dari kami ? </h3>
						<h5>Silahkan isi form dibawah ini.</h5>
						<br />
                    </div>
                    <div class="form_area">
                        <!-- CONTACT FORM -->
                        <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                            <div id="message"></div>
                            <form action="product/submit_inquiry" class="form-horizontal contact-1" role="form" name="contactform" id="form-product">
                                <div class="form-group">
                                    <div class="col-sm-12">
										<input type="hidden" name="<?=$csrf['name'];?>" id="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>"/>
										<input type="hidden" name="product-inquiry" value="<?php echo $product['title']['rendered'];?>">
										<input type="text" class="form-control" name="name-inquiry" id="name-inquiry" required="true" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" name="phone-inquiry" id="phone-inquiry" required="true" placeholder="Phone">
                                    </div>
								</div>
								<div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" name="email-inquiry" id="email-inquiry" required="true" placeholder="Email">
                                    </div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<div class="text_area">
											<textarea name="address-inquiry" id="address-inquiry" class="form-control" cols="30" rows="4" required="true" placeholder="Address"></textarea>
										</div>
									</div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="text_area">
                                            <textarea name="message-inquiry" id="message-inquiry" class="form-control" cols="30" rows="5" required="true" placeholder="Message">Saya ingin mendapatkan informasi lebih tentang <?php echo $product['title']['rendered'];?> ... </textarea>
                                        </div>
                                        <button type="submit" id="btn-submit-inquiry-product" required="true" data-loading-text="Loading..." class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="alert-inquiry-success" style="display:none;" class="alert alert-success alert-inquiry" role="alert"></div>
                    <div id="alert-inquiry-failed" style="display:none;" class="alert alert-danger alert-inquiry" role="alert"></div>
                </div>
            </div>
		</div>
	</div>
</section>