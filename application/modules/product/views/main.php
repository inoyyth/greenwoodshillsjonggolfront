
 <!--start of event-->
 <section id="event">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="event_header text-center">
					<h2>Our Product</h2>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				</div>
			</div>
		</div>
		<!--End of row-->
		<?php 
			if (count($products) > 0) {
				foreach ($products as $k=>$v) {
		?>
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
		<?php } } ?>
		<!--End of row-->
	</div>
	<!--End of container-->
</section>
<!--end of event-->