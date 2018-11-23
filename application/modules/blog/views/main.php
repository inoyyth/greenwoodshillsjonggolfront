<!--Start of blog-->
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest_blog text-center">
					<h2>latest article</h2>
				</div>
			</div>
		</div>
		<!--End of row-->
		<div class="row">
			<?php 
			if ( count($blog) > 0 ) {
				foreach ( $blog as $k => $v) {
				$strtime = strtotime($v['date_gmt']." UCT");
			?>
			<div class="col-md-4" style="margin-bottom: 10px;">
				<div class="blog_news">
					<div class="single_blog_item">
						<div class="blog_img">
							<img src="<?php echo $v['featured_image']['url'];?>" alt="">
						</div>
						<div class="blog_content">
						<a title="<?php echo $v['title']['rendered'];?>" href="<?php echo site_url('article/' . url_title($v['title']['rendered'], '-', true) . '-' . $v['id']);?>"><h3><?php echo word_limiter($v['title']['rendered'], 5);?></h3></a>
							<div class="expert">
								<div class="left-side text-left">
									<p class="left_side">
										<span class="clock"><i class="fa fa-clock-o"></i></span>
										<span class="time"><?php echo date('M', $strtime);?> <?php echo date('d', $strtime);?>, <?php echo date('Y', $strtime);?></span>
										<span class="admin"><i class="fa fa-user"></i> Admin</span>
									</p>
									<p class="right_side text-right" style="padding-left: 100px;">
										<span class="right_msg text-right"><i class="fa fa-eye"></i></span>
										<span class="count"><?php echo ((int)$v['post_views'] == 0 ? 1 : (int)$v['post_views']);?></span>
									</p>
								</div>
							</div>

							<?php echo character_limiter($v['excerpt']['rendered'], 210);?>
						</div>
					</div>
				</div>
			</div>
			<!--End of col-md-4-->
			<?php } } ?>
		</div>
		<!--End of row-->
	</div>
	<!--End of container-->
</section>
<!-- end of blog-->