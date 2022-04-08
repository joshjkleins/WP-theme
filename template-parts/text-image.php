<section class="text-image">
	<div class="top">
		<div class="title"><?php echo get_field('text_img_section_title'); ?></div>
		<div class="content"><?php echo get_field('text_img_section_text'); ?></div>
	</div>
	<div class="bottom">
		<div class="text-image-container flex hundred img-left">
			<div class="img-half fifty flex align-items-center justify-center text-align-center relative" style="background-image: url('<?php echo get_field('text_img_image')['url']; ?>');">
				<div class="overlay"></div>
				<div class="text-box relative">
					<div class="title"><?php echo get_field('text_img_image_title'); ?></div>
					<div class="content"><?php echo get_field('text_img_image_text'); ?></div>
				</div>
			</div>
			<div class="text-half fifty flex align-items-center justify-center flex-column text-align-center">
				<div class="title"><?php echo get_field('text_img_title'); ?></div>
				<div class="content"><?php echo get_field('text_img_text'); ?></div>
			</div>
		</div>

		<div class="text-image-container flex hundred img-right">
			<div class="img-half fifty flex align-items-center justify-center text-align-center relative" style="background-image: url('<?php echo get_field('text_img_image')['url']; ?>');">
				<div class="overlay"></div>
				<div class="text-box relative">
					<div class="title"><?php echo get_field('text_img_image_title'); ?></div>
					<div class="content"><?php echo get_field('text_img_image_text'); ?></div>
				</div>
			</div>
			<div class="text-half fifty flex align-items-center justify-center flex-column text-align-center">
				<div class="title"><?php echo get_field('text_img_title'); ?></div>
				<div class="content"><?php echo get_field('text_img_text'); ?></div>
			</div>
		</div>
	</div>
</section>