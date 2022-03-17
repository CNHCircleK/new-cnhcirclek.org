<!-- main home page of the website -->
<?php
	get_header();
?>
<!--Main Wrapper for the website-->
<div class="main-wrapper">
	<div class="main-col">
		<h1>Welcome to the </h1><h1 class="blue-text">California-Nevada-Hawaii District </h1> <h1>of Circle K International</h1>
		<p style="margin-top:55px;margin-bottom:100px;">Our organization of more than 2,100 college students across California, Nevada, and Hawaii believes in enriching the world through community service - one member, one child and one community at a time.</p>
		<!--Container for links-->
		<div class="link-row">
			<!-- About Us Link -->
			<a href="#">
				<div class="link-card" style="margin-right: 140px;" onmouseover="vector_hover(this);" onmouseout="vector_unhover(this);">
					<div class="link-indent">
						About Us
					</div>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="link-vector">
				</div>
			</a>
			<!-- Our Events Link -->
			<a href="#">
				<div class="link-card" onmouseover="vector_hover(this);" onmouseout="vector_unhover(this);">
					<div class="link-indent">
						Our Events
					</div>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="link-vector">
				</div>
			</a>
		</div>
		<!--end of link container-->
		<h2 style="padding-bottom: 20px;">Our Tenets</h2>
		<!--Tenet Cards Row-->
		<div class="card-row">
			<!--Actual Tenet Card-->
			<!--Leadership Card-->
			<a href="#">
				<div class="card-box" style="margin-right: 10px;" onmouseover="vector_hover(this);" onmouseout="vector_unhover(this);">
					<div class="card-header">
						Leadership
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="link-vector">
					</div>
					<div class="card-image-container">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/leadership.png" alt="leadership" class="card-image">
						<div class="card-image-text">
							Circle K members assume <strong>leadership responsibilities</strong> at all levels of the organization and actively contributing to the operation of their respective clubs, divisions, and communities.
						</div>
					</div>
				</div>
			</a>
			<!--Service Card-->
			<a href="#">
				<div class="card-box" style="margin-right: 10px;" onmouseover="vector_hover(this);" onmouseout="vector_unhover(this);">
					<div class="card-header">
						Service
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="link-vector">
					</div>
					<div class="card-image-container">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/service.png" alt="service" class="card-image">
						<div class="card-image-text">
							Collectively, Circle K members perform more than <strong>one million hours of service</strong> on their campuses and in their communities annually.
						</div>
					</div>
				</div>
			</a>
			<!-- Fellowship Card -->
			<a href="#">
				<div class="card-box" style="margin-bottom: 50px;" onmouseover="vector_hover(this);" onmouseout="vector_unhover(this);">
					<div class="card-header">
						Fellowship
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="link-vector">
					</div>
					<div class="card-image-container">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/fellowship.png" alt="fellowship" class="card-image">
						<div class="card-image-text">
							With each element and aspect of Circle K International, members experience genuine fellowship and <strong>develop life-long relationships</strong> with fellow collegians, advisors, Kiwanians and citizens in their communities.
						</div>
					</div>
				</div>
			</a>
		</div>
		<!-- Our org supports -->
		<h2 style="margin-bottom: 50px;">Our Organization Supports...</h2>
		<!-- Org Row -->
		<div class="org-row">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/kfh.png" alt="kfh">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/pediactric-trauma-program.png" alt="ptp">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/enviormental-defense-fund.png" alt="edf">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/LDF.png" alt="ldf">
		</div>
	</div>
	<!-- End of Main Col of Website -->
	<!-- Side Col of Website -->
	<div class="side-col">
		<!-- Sunny Logo -->
		<img src="<?php bloginfo('template_url'); ?>/assets/images/Sunny_Glasses.png" alt="Sunny" class="sunny-image" style="margin-top:50px;">
		<!-- Latest Updates Header -->
		<h2 style="margin-top: 90px; margin-bottom: 40px; text-align: center;">Latest Updates</h2>
		<div class="updates-box">
			<!-- put container here -->
			<!-- News Update 1 -->
			<div class="news-update" style="margin-top: 12%;">
				<div class="news-date">
					8/29
				</div>
				<a href="#">
					<div class="news-info">
						District Committee Applications due on 8/30 at 11:59 PM!
					</div>
				</a>	
			</div>
			<!-- News Update 2 -->
			<div class="news-update">
					<div class="news-date">
						8/29
					</div>
					<a href="#">
						<div class="news-info">
							District Committee Applications due on 8/30 at 11:59 PM!
						</div>
					</a>	
			</div>
			<!-- News Update 3 -->
			<div class="news-update">
					<div class="news-date">
						8/29
					</div>
					<a href="#">
						<div class="news-info">
							District Committee Applications due on 8/30 at 11:59 PM!
						</div>
					</a>	
			</div>
			<!-- News Update 4 -->
			<div class="news-update">
					<div class="news-date">
						8/29
					</div>
					<a href="#">
						<div class="news-info">
							District Committee Applications due on 8/30 at 11:59 PM!
						</div>
					</a>	
			</div>
			<!-- News Update 5 -->
			<div class="news-update">
					<div class="news-date">
						8/29
					</div>
					<a href="#">
						<div class="news-info">
							Check out the new redesign for the CNH Committee page!
						</div>
					</a>	
			</div>
		</div>
	<!-- End of side col -->
	</div>
<!-- End of Main Wrapper -->
</div>
<!-- Secondary Wrapper -->
<div class="secondary-wrapper">
	<!-- Bottom Half of Website -->
	<div class="bottom-half">
		<h2 style="margin-bottom: 60px;">News</h2>
		<div class="news-cards">
			<!-- News Box 1 -->
			<div class="news-box" style="margin-bottom: 60px;">
				<div class="news-content">
					<div class="news-header">
						CNH Stands in Solidarity with Black Lives Matter
					</div>
					<div class="news-author">
						June 4, 2020 | Posted by Matthew Kim
					</div>
					<p class="news-paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim, ornare tellus praesent sit nisi. Consequat dis nec aliquam nullam vel. Vulputate ipsum duis magna arcu ac at pellentesque nunc, sed. Enim amet cursus nisl eu. Purus risus felis, sapien mauris, et mauris pellentesque. 
					</p>
					<button class="news-button">Read More</button>
				</div>
			</div>	
			<!-- News Box 2 -->
			<div class="news-box">
				<div class="news-content">
					<div class="news-header">
						2020-2021 District Committee Appointments
					</div>
					<div class="news-author">
						June 4, 2020 | Posted by Matthew Kim
					</div>
					<p class="news-paragraph">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim, ornare tellus praesent sit nisi. Consequat dis nec aliquam nullam vel. Vulputate ipsum duis magna arcu ac at pellentesque nunc, sed. Enim amet cursus nisl eu. Purus risus felis, sapien mauris, et mauris pellentesque. 
					</p>
					<button class="news-button">Read More</button>
				</div>
			</div>	
		</div>
		<!-- Featured Cards -->
		<div class="featured-cards-container">
			<!-- Featured Card 1 -->
			<a href="#">
				<div class="featured-card" style="margin-right: 120px;" onmouseover="vector_hover(this);" onmouseout="vector_unhover(this);">
					<div class="featured-card-header">
						Featured District Event
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="link-vector">
					</div>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/dcon-event-banner.png" alt="featured-event" class="card-image">
				</div>
			</a>	
			<!-- Featured Card 2 -->
			<a href="#">
				<div class="featured-card" onmouseover="vector_hover(this);" onmouseout="vector_unhover(this);">
					<div class="featured-card-header">
						The Sunspot - District Blog
						<img src="<?php bloginfo('template_url'); ?>/assets/images/Vector.png" alt="vector" class="link-vector">
					</div>
					<img src="<?php bloginfo('template_url'); ?>/assets/images/the-sunspot.png" alt="featured-event" class="card-image">
				</div>
			</a>
		</div>
	</div>
</div>

<?php
	get_footer();
?> 