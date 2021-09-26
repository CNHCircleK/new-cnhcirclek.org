<!-- main home page of the website -->
	<?php
		get_header();
	?>
	<!--Main Wrapper for the website-->
    <div class="main-wrapper">
		<!--Main column for the website aka the left col-->
		<div class="main-col">
			<!--Title and paragraph for front page-->
			<div class="title-padding padding-left-indent">
				<div class="title">Welcome to the</div>
				<div class="title-blue">California-Neveda-Hawaii District</div>
				<div class="title">of Circle K International</div>
			</div>

			<div class="paragraph padding-left-standard">Our organization of more than 2,100 college students across California, Nevada, and Hawaii believes in enriching the world through community service - one member, one child, and one community at a time.</div>
			<!--Links container-->
			<div class="front-page-links padding-left-standard">
					<a href="about" class="page-link page-link-padding page-link-padding-right">
						<div class="page-link-text">
							About Us
							<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="page-link-vector">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/link-line.png" alt="link-line" class="page-link-border">
						</div>
					</a>
					<div class="page-link-spacing"></div>
					<a href="about" class="page-link page-link-padding">
						<div class="page-link-text">
							Our Events
							<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="page-link-vector">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/link-line.png" alt="link-line" class="page-link-border">
						</div>
					</a>
				</div>
				<!--Tenet Cards-->
				<div class="sub-title padding-left-indent">Our Tenets</div>
				<div class="tenet-card-container">
					<div class="tenet-card">
						<div class="tenet-card-header-container">
							Leadership
							<img src="<?php bloginfo('template_url'); ?>/assets/images/smaller-vector.png" alt="vector" class="tenet-card-vector">
							<img src="<?php bloginfo('template_url'); ?>/assets/images/smaller-link-line.png" alt="link-line">
						</div>
						<img src="<?php bloginfo('template_url'); ?>/assets/images/leadership.png" alt="leadership" class="">
					</div>
				</div>

			</div>

		</div>
	
    </div>
    
	<?php
		get_footer();
	?> 