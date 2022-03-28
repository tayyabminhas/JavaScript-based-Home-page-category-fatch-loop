<section class="inst-category-sec">
	<div class="container container-resp">
		<div class="category-sec-inner">
			<h1>
				By Category
			</h1>

			<div class="row">
				<?php
				$args = array(
					'taxonomy' => 'category',
					'orderby' => 'name',
					'order'   => 'ASC'
				);

				$cats = get_categories($args);
				//$category->image = wp_get_attachment_image($attach->posts[0]->ID);
				foreach($cats as $cat) {
				?>
				<div class="col-lg-3 col-mg-3 col-sm-6">
					<div class="cat-box">
						<a href="<?php echo get_category_link( $cat->term_id ) ?>">
<img src="/wp-content/uploads/2022/03/cloud-technology-with-futuristic-hologram-smartwatch.png" alt="">
						</a>
						<h3>
							<a href="<?php echo get_category_link( $cat->term_id ) ?>">
								<?php echo $cat->name; ?>
							</a>
						</h3>
					</div>
				</div>	
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>