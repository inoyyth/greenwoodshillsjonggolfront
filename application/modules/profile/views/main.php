
<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="latest_blog text-left">
					<h2><?php echo $profile_article[0]['title']['rendered'];?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="lates-blog text-left">
					<?php echo $profile_article[0]['content']['rendered'];?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="image">
					<img src="<?php echo $profile_article[0]['featured_image']['url'];?>" alt="#">
				</div>
			</div>
		</div>
	</div>
</section>