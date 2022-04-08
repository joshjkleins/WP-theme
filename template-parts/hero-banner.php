<section class="hero-banner relative fadeIn animate flex">
	<img class="block sm-hide" 
		 height="700" 
		 width="1920" 
		 alt="<?php echo get_field('hero_image')['alt']; ?>" 
		 src="<?php echo get_field('hero_image')['url']; ?>">
	<img class="hide sm-block" 
		 height="500" 
		 width="767" 
		 alt="<?php echo get_field('mobile_image')['alt']; ?>" 
		 src="<?php echo get_field('mobile_image')['url']; ?>">
	<div class="text-container absolute">
		<h1 class="animate"><?php echo get_field('title'); ?></h1>
		<div class="text">
			<?php if (is_front_page()): ?>
				<span class="animate">Quick.</span><span class="animate">Clean.</span><span class="animate">Easy.</span>
			<?php else: ?>
				<span class="animate"><?php echo get_field('subtitle'); ?></span>
			<?php endif ?>
		</div>
	</div>
</section>