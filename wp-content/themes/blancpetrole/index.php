<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Blanc Petrole - Agence de Communication</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/public/css/index.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/public/css/dist.css">

	<?php include 'meta.php' ?>
</head>

<body>

	<?php include 'nav.php' ?>

	<section class="home-section">
		<div class="home-introduction">
			<h1 class="h1-black">Hello —<br> We are a digital <br>creative studio</h1>
			<h1 class="h1-black">®</h1>
		</div>

		<div class="home-video-introduction">
				<iframe src="https://player.vimeo.com/video/406496568?autoplay=1&loop=1&autopause=1&autopause=0&muted=1" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		</div>
	</section>

	<section class="work-wrapper-section" style="padding: var(--padding-secondary); margin-bottom: var(--margin-bottom-primary);">

		<div class="work-introduction">
			<h2 class="h2-black">Works<span class="text-16-black">All</span></h2>
			<!-- work content -->
			<h3 class="h3-black"><?php the_field("work_content"); ?></h3>
		</div>

		<div class="work-wrapper">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			?>
			
			<article class="work-box-full">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
			</article>

			<?php
			 endwhile; endif;
			?>
		</div>
	</section>

	<section class="brand-section">
		<div class="brand-introduction">
			<h2 class="h2-black">Our Brand<span>—</span></h2>
			<h3 class="h3-bold-black"><?php the_field("brand_content"); ?></h3>
		</div>

		<div class="brand-slider-content">
			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/backmarket.png"></a>
			</article>

			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/marsco.png"></a>
			</article>

			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/rouge.png"></a>
			</article>

			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/backmarket.png"></a>
			</article>

			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/marsco.png"></a>
			</article>

			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/rouge.png"></a>
			</article>

			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/backmarket.png"></a>
			</article>

			<article class="brand-slider-content-article">
				<a href="#"><img src="public/images/brandContent/marsco.png"></a>
			</article>

			<article>
				<a href="#"><img src="public/images/brandContent/rouge.png"></a>
			</article>
		</div>
	</section>

	<section class="about-section">
		<div class="about-introduction">
			<h2 class="h4-white">about</h2>
			<!-- about content -->
			<h3 class="h3-bold-white"><?php the_field("about_content"); ?></h3>
		</div>

		<div class="lottie-animation">
			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://assets3.lottiefiles.com/packages/lf20_uyea2apr.json" background="transparent" speed="1" style="width: 100%; height: 100%;" loop autoplay></lottie-player>
		</div>

		<div class="about-content">
			<!-- about-introduction -->
			<h3 class="h3-white"><?php the_field("about_introduction"); ?></h3>
			<div>
				<?php the_field("about_information"); ?>
				<!-- about-information -->
 			</div>
		</div>
	</section>

	<section class="mission-contact">
		<h2 class="h4-black">mission</h2>
		<div class="mission-box">
			<!-- mission-content -->
			<h3 class="h3-bold-black"><?php the_field("mission_content"); ?></h3>
			<!-- mission-information -->
			<p class="text-16-black"><?php the_field("mission_information"); ?></p>
			<a href="#" class="button-14-black" >Contact us</a>
		</div>
	</section>

	<section class="skills-section">
		<div>
			<?php the_field("skills_information"); ?>
			<!-- skills-one -->
			<!-- <article>
				<span></span>
				<h2 class="h5-bold-black">UX/UI Design</h2>
				<p class="text-16-black">Une agence avec une transparence totale avec ses employés et ses clients</p>
			</article> -->

			<!-- skills-two -->
			<!-- <article>
				<span></span>
				<h2 class="h5-bold-black">UX/UI Design</h2>
				<p class="text-16-black">Une agence avec une transparence totale avec ses employés et ses clients</p>
			</article> -->
			<!-- skills-three -->
			<!-- <article>
				<span></span>
				<h2 class="h5-bold-black">UX/UI Design</h2>
				<p class="text-16-black">Une agence avec une transparence totale avec ses employés et ses clients</p>
			</article> -->
		</div>
	</section>

	<?php include 'footer.php' ?>
	<script src="//unpkg.com/scrollreveal"></script>
	<script src="//code.jquery.com/jquery-latest.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/public/js/animation.js"></script>

	
	

</body>
</html>