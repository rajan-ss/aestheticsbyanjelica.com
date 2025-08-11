<?php

/**
 * Template name: Home Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ss_theme
 */

get_header();
?>
<main class="site-content">

	<!-- Section hero banner starts here...} -->
	<section class="bg-cover bg-center bg-no-repeat w-full pt-44 md:pt-52 lg:pt-64 pb-16 sm:pb-20 md:pb-24 lg:pb-28 xl:pb-32" style="background-image: url('<?php echo get_home_url(); ?>/wp-content/uploads/hero-banner-bg-img.webp');">
		<div class="container">
			<div class="lg:max-w-[980px] lg:mx-auto text-center [&_h1]:mb-3.5 [&_h1]:text-secondary">
				<h1>
					Enhance Your <span class="text-primary">Natural Beauty</span>-Book <span class="text-primary">Expert Aesthetic</span> Care Today
				</h1>
				<div class="lg:max-w-[870px] lg:mx-auto mb-6 sm:mb-8 lg:mb-9 text-base text-black/70">
					<p>Feel confident in your skin with treatments designed to highlight your natural features. At Medical Aesthetics by Anjelica, we combine precision, professionalism, and a personalized approach to help you look and feel your best, starting today.</p>
				</div>
				<div class="btn-wrap">
					<a href="https://booking.mangomint.com/204646" class="btn btn-primary text-base md:text-lg lg:text-xl">Book Appointment</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Section hero banner ends here...} -->

	<!-- Why Choose section starts -->
	<section class="py-12 sm:py-16 lg:py-20 xl:py-[100px] xl:pt-[120px] bg-ss-light-green-100">
		<div class="container">
			<div class="flex flex-wrap items-center justify-between -mx-4 gap-y-6">
				<div class="w-full lg:w-[45%] px-4">
					<header class="[&_h2]:mb-4 lg:[&_h2]:mb-5 [&_p]:text-[#222]">
						<div class="inline-block mb-2 lg:mb-4 relative z-[1] px-1.5 py-1">
							<span class="border-top-left-shape"></span>
							<span class="border-top-right-shape"></span>
							<span class="border-bottom-left-shape"></span>
							<span class="border-bottom-right-shape"></span>
							<span class="block text-lg lg:text-xl font-base font-semibold text-secondary-100 border-secondary border-[2px] px-4 lg:px-6 py-2 lg:py-2.5">Why Us</span>
						</div>
						<h2 class="lg:leading-[62px]">Why Choose Us?</h2>
						<div class="xl:max-w-[90%]">
							<p>At Medical Aesthetics by Anjelica, we’re committed to helping you feel confident and radiant in your skin. Our licensed professionals specialize in advanced aesthetic care — from skin rejuvenation and anti-aging solutions to weight loss and injectables — all tailored to your unique goals.</p>
						</div>
					</header>
				</div>

				<div class="w-full lg:w-[55%] flex flex-col px-4">
					<div class="flex flex-wrap gap-y-5 lg:gap-y-6 md:gap-x-6">
						<div class="w-full md:w-[calc(50%-12px)] border rounded-[20px] border-[#E8E6E6]">
							<article class="p-4 sm:p-6 lg:p-7 xl:p-[30px]">
								<div class="text-[52px] lg:text-[64px] mb-4 lg:mb-5">
									<i class="icon-natural-lasting"></i>
								</div>

								<div class="mb-2 md:mb-3">
									<h3 class="text-black font-medium text-xl lg:text-2xl leading-loose">Natural, Lasting Results</h3>
								</div>

								<div class="text-sm leading-relaxed text-ss-light-gray last:[&_p]:mb-0">
									<p>We focus on subtle enhancements that bring out your best features and age beautifully over time.</p>
								</div>
							</article>
						</div>

						<div class="w-full md:w-[calc(50%-12px)] border rounded-[20px] border-[#E8E6E6]">
							<article class="p-4 sm:p-6 lg:p-7 xl:p-[30px]">
								<div class="text-[52px] lg:text-[64px] mb-4 lg:mb-5">
									<i class="icon-professional-team"></i>
								</div>
								<div class="mb-2 md:mb-3">
									<h3 class="text-black font-medium text-xl lg:text-2xl leading-loose">Professional Team</h3>
								</div>
								<div class="text-sm leading-relaxed text-ss-light-gray last:[&_p]:mb-0">
									<p>Our licensed experts are medically trained and committed to providing safe, ethical, and results-driven care.</p>
								</div>
							</article>
						</div>

						<div class="w-full md:w-[calc(50%-12px)] border rounded-[20px] border-[#E8E6E6]">
							<article class="p-4 sm:p-6 lg:p-7 xl:p-[30px]">
								<div class="text-[52px] lg:text-[64px] mb-4 lg:mb-5">
									<i class="icon-advanced-techniques"></i>
								</div>
								<div class="mb-2 md:mb-3">
									<h3 class="text-black font-medium text-xl lg:text-2xl leading-loose">Advanced Techniques</h3>
								</div>
								<div class="text-sm leading-relaxed text-ss-light-gray last:[&_p]:mb-0">
									<p>We use the latest tools and clinically proven methods for precision, comfort, and exceptional outcomes.</p>
								</div>
							</article>
						</div>

						<div class="w-full md:w-[calc(50%-12px)] border rounded-[20px] border-[#E8E6E6]">
							<article class="p-4 sm:p-6 lg:p-7 xl:p-[30px]">
								<div class="text-[52px] lg:text-[64px] mb-4 lg:mb-5">
									<i class="icon-star"></i>
								</div>
								<div class="mb-2 md:mb-3">
									<h3 class="text-black font-medium text-xl lg:text-2xl leading-loose">5-Star Rated</h3>
								</div>
								<div class="text-sm leading-relaxed text-ss-light-gray last:[&_p]:mb-0">
									<p>Our clients consistently rate us five stars for our care, results, and personalized experience.</p>
								</div>
							</article>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Choose section ends -->

	<!-- Services section starts -->
	<section class="container">
		<div class="bg-ss-light-gray-200 border border-secondary-100/20 py-8 sm:py-10 lg:py-12 xl:py-[60px] px-4 lg:px-5 rounded-[20px]">
			<div class="flex flex-wrap justify-between mb-8 lg:mb-10 gap-y-6">
				<!-- left section -->
				<div class="w-full lg:w-[60%] xl:w-[60%]">
					<header class="mb-0">
						<div class="inline-block mb-2 lg:mb-4 relative z-[1] px-1.5 py-1">
							<span class="border-top-left-shape"></span>
							<span class="border-top-right-shape"></span>
							<span class="border-bottom-left-shape"></span>
							<span class="border-bottom-right-shape"></span>
							<span class="block text-lg lg:text-xl font-base font-semibold text-secondary-100 border-secondary border-[2px] px-4 lg:px-6 py-2 lg:py-2.5">Services</span>
						</div>
						<h2 class="text-secondary mb-0">Discover <span class="text-primary">Medical Aesthetics</span> by Anjelica</h2>
					</header>
				</div>
				<div class="w-full lg:w-[40%] xl:w-[36%]">
					<div class="lg:text-end last:[&_p]:mb-0">
						<p>At Medical Aesthetics by Anjelica, our aesthetic services are carefully curated to support both beauty and wellness. Whether you're looking to refresh your appearance, restore youthful vibrance, or feel more energized, our expert team provides advanced, medically guided treatments tailored to your unique goals. Discover how our holistic, client-focused approach blends science and artistry to achieve results that are natural, effective, and uniquely you.</p>
					</div>
				</div>
			</div>

			<!-- Swiper -->
			<div class="swiper services-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide h-auto">
						<div class="bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/iv-therapies.jpg" alt="Service images" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">IV Therapies</h3>
							<p>Rapidly replenish fluids, vitamins, and nutrients with IV therapy. Ideal for hydration, energy, immune support, and recovery, this treatment delivers essential ingredients directly into your bloodstream for fast, effective results when you're feeling depleted or need a wellness boost.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 01 -->
					<div class="swiper-slide h-auto">
						<div class="bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/injections.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Injections</h3>
							<p>Quick, powerful vitamin and amino acid injections support immunity, fat burning, workout recovery, and more. These intramuscular shots deliver targeted nutrients in minutes to help you feel energized, balanced, and refreshed.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 02  -->
					<div class="swiper-slide h-auto">
						<div class="bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/peptides.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Peptides</h3>
							<p>Peptide therapy uses specialized amino acids to support healing, metabolism, hormone balance, sleep, and muscle growth. Tailored to your goals, it enhances overall wellness, recovery, and performance from the inside out.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 03  -->
					<div class="swiper-slide h-auto">
						<div class=" bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/anabolic-steroids.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Anabolic Steroids</h3>
							<p>Boost muscle growth, endurance, and recovery with medically supervised anabolic steroid treatments. Ideal for low testosterone, bulking, or cutting phases, these therapies are dosed for safety, performance, and long-term results.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 04 -->
					<div class="swiper-slide h-auto">
						<div class="bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/sexual-wellness.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Sexual Wellness</h3>
							<p>Restore confidence, intimacy, and function with personalized sexual wellness treatments. Options include hormone therapy, PRP procedures, and performance boosters designed to enhance pleasure and vitality at any stage of life.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 05 -->
					<div class="swiper-slide h-auto">
						<div class=" bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/medical-weight-loss.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Medical Weight Loss</h3>
							<p>Achieve lasting fat loss with customized, medically guided weight loss programs. We combine proven treatments and expert support to help control cravings, improve metabolism, and reach your goals safely and sustainably.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 06 -->
					<div class="swiper-slide h-auto">
						<div class=" bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/skin-treatments.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Skin Treatments</h3>
							<p>Rejuvenate and refresh your skin with targeted treatments like facials and microneedling. Improve tone, texture, and clarity while addressing acne, fine lines, and dullness for a radiant, healthy glow.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 07 -->
					<div class="swiper-slide h-auto">
						<div class="bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/botox-and-fillers.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Botox and Fillers</h3>
							<p>Smooth wrinkles, restore volume, and enhance facial features with Botox and dermal fillers. Our precise techniques deliver natural-looking results—whether you want subtle refreshment or a more sculpted, youthful appearance.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 08 -->
					<div class="swiper-slide h-auto">
						<div class="bg-white border rounded-[20px] p-3 hover:shadow-[0_10px_34px_0_rgba(0,201,169,0.2)] transition-shadow duration-300 h-full">
						<div class="mb-6">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/bio-fillers-prf.jpg" alt="Service image" width="367" height="221" loading="lazy">
						</div>
						<div class="[&_h3]:mb-3 lg:px-3 [&_p]:text-[14px]">
							<h3 class="text-xl font-medium">Bio-Fillers (PRF)</h3>
							<p>Bio-fillers use your body’s own PRF to restore volume, smooth lines, and stimulate collagen. Ideal for under-eyes and smile lines, these natural treatments improve skin tone and texture over time.</p>
						</div>
						</div>
					</div>
					<!-- /.swiper-slide 09 -->
				</div>
				<div class="flex justify-center pt-8 lg:pt-10 gap-3">
					<button class="swiper-button-prev group">
						<i class="icon-arrow-left"></i>
					</button>
					<button class="swiper-button-next group">
						<i class="icon-arrow-right"></i>
					</button>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section ends -->

	<!-- About Us section starts -->
	<section class="py-12 sm:py-16 lg:py-20 xl:py-[100px]">
		<div class="container">
			<!-- Section's content goes here -->
			<div class="flex flex-wrap items-center justify-between gap-y-6 -mx-4">
				<div class="w-full lg:w-1/2 xl:w-[45%] px-4">
					<figure class="mb-0 [&_img]:w-full [&_img]:rounded-[14px]">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/about-us-featued-img.webp" alt="Our Story & Mission featured image" loading="lazy" height="1012" width="1044">
					</figure>
				</div>

				<div class="w-full lg:max-w-[50%] px-4">
					<header class="mb-6 lg:mb-8 xl:mb-10 [&_p]:text-base [&_p]:text-black/70">
						<div class="inline-block mb-2.5 relative z-[1] px-1.5 py-1">
							<span class="border-top-left-shape"></span>
							<span class="border-top-right-shape"></span>
							<span class="border-bottom-left-shape"></span>
							<span class="border-bottom-right-shape"></span>
							<span class="block text-lg lg:text-xl font-base font-semibold text-secondary-100 border-secondary border-[2px] px-4 lg:px-6 py-2 lg:py-2.5">About Us</span>
						</div>
						<h2 class="text-secondary-100 mb-4 lg:mb-5 text-3xl lg:text-4xl xl:text-[40px]">Our Story <span class="text-primary">& Mission</span></h2>
						<p><strong>Medical Aesthetics by Anjelica</strong> was born from personal transformation. After experiencing firsthand the life-changing impact of medical aesthetics, our founder set out to share that same joy with others. Named after his daughter, our clinic is rooted in a passion for health, wellness, and the belief that everyone deserves to feel their best.
</p>
						<p>Our mission is to help you feel empowered in your skin by delivering medical-grade aesthetic care with integrity, empathy, and expertise. In partnership with trusted, top-tier medical professionals with decades of experience, we provide personalized treatments designed to enhance your natural beauty while fostering lasting confidence. From your first consultation to your final results, we guide and support you with professionalism, personalization, and a genuine commitment to your well-being.</p>
					</header>

					<div class="btn-wrap">
						<a href="https://booking.mangomint.com/204646" class="btn btn-primary">Book Appointment</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Us section ends -->

	<!-- Gallery section starts -->
	<?php /*
	<section class="our-photo-gallery bg-ss-light-green py-8 sm:py-10 lg:py-12 xl:py-[60px] border-t border-b border-secondary-100/20">
		<div class="container">
			<header class="mb-6 sm:mb-8 lg:mb-12 xl:mb-[50px] text-center">
				<div class="inline-block mb-2 lg:mb-4 relative z-[1] px-1.5 py-1">
					<span class="border-top-left-shape"></span>
					<span class="border-top-right-shape"></span>
					<span class="border-bottom-left-shape"></span>
					<span class="border-bottom-right-shape"></span>
					<span class="block text-lg lg:text-xl font-base font-semibold text-secondary-100 border-secondary border-[2px] px-4 lg:px-6 py-2 lg:py-2.5">Gallery</span>
				</div>
				<h2 class="text-secondary mb-0 text-3xl lg:text-4xl xl:text-[40px]">Our Photo <span class="text-secondary-100">Gallery</span></h2>
			</header>
		</div>

		<!-- Swiper -->
		<div class="swiper gallery-slider">
			<div class="swiper-wrapper">
				<figure class="swiper-slide sm:w-auto [&_img]:w-full">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/gallery-img-1.png" width="330" height="315" alt="Gallery image" loading="lazy">
				</figure>

				<figure class="swiper-slide sm:w-auto [&_img]:w-full">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/gallery-img-2.png" width="330" height="315" alt="Gallery image" loading="lazy">
				</figure>

				<figure class="swiper-slide sm:w-auto [&_img]:w-full">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/gallery-img-3.png" width="330" height="315" alt="Gallery image" loading="lazy">
				</figure>

				<figure class="swiper-slide sm:w-auto [&_img]:w-full">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/gallery-img-4.png" width="330" height="315" alt="Gallery image" loading="lazy">
				</figure>

				<figure class="swiper-slide sm:w-auto [&_img]:w-full">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/gallery-img-5.png" width="330" height="315" alt="Gallery image" loading="lazy">
				</figure>

				<figure class="swiper-slide sm:w-auto [&_img]:w-full">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/gallery-img-1.png" width="330" height="315" alt="Gallery image" loading="lazy">
				</figure>

				<figure class="swiper-slide sm:w-auto [&_img]:w-full">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/gallery-img-2.png" width="330" height="315" alt="Gallery image" loading="lazy">
				</figure>
			</div> <!-- /.swiper-wrapper -->

			<div class="swiper-button flex justify-center gap-3">
				<button class="gallery-slider-button-prev swiper-button-prev group">
					<i class="icon-arrow-left"></i>
				</button>
				<button class="gallery-slider-button-next swiper-button-next group">
					<i class="icon-arrow-right"></i>
				</button>
			</div>
		</div>

	</section>
	*/ ?>
	<!-- Gallery section ends -->

	<!-- Get A Quote section starts -->
	<section class="py-12 sm:py-16 lg:py-20 xl:py-[100px]">
		<div class="container">
			<div class="flex flex-wrap items-center justify-between -mx-4 gap-y-6">
				<div class="w-full lg:w-1/2 xl:w-[40%] px-4">
					<header class="mb-4 lg:mb-5 [&_p]:text-base [&_p]:text-black/70">
						<div class="inline-block mb-3 lg:mb-4 relative z-[1] px-1.5 py-1">
							<span class="border-top-left-shape"></span>
							<span class="border-top-right-shape"></span>
							<span class="border-bottom-left-shape"></span>
							<span class="border-bottom-right-shape"></span>
							<span class="block text-lg lg:text-xl font-base font-semibold text-secondary-100 border-secondary border-[2px] px-4 lg:px-6 py-2 lg:py-2.5">Message Us</span>
						</div>
						<h2 class="text-secondary-100 mb-4 text-3xl lg:text-4xl xl:text-[40px]">Get A <span class="text-primary">Quote</span></h2>
						<p>Ready to begin your aesthetic journey? Contact Medical Aesthetics by Anjelica today for a personalized quote tailored to your goals, and take the first step toward looking and feeling your best.</p>
					</header>

					<div class="mb-5 lg:mb-6">
						<ul class="[&_li]:block [&_li]:mb-4 last:[&_li]:mb-0">
							<li>
								<div class="inline-flex items-center group relative">
									<a href="tel:8329399330" class="text-2xl text-secondary-100 stretch-link duration-300 group-hover:text-primary">
										<i class="icon-phone"></i>
									</a>
									<div class="flex-1 [&_span]:transition-all [&_span]:duration-300 pl-3 lg:pl-4 xl:pl-5">
										<span class="text-black/70 text-base leading-loose block">Requesting a Call:</span>
										<span class="text-secondary-100 lg:text-lg lg:leading-7 font-semibold group-hover:text-primary">(832) 9399-330</span>
									</div>
								</div>
							</li>

							<li>
								<div class="inline-flex items-center group relative">
									<span class="text-2xl text-secondary-100 stretch-link duration-300 group-hover:text-primary">
										<i class="icon-timing"></i>
									</span>
									<div class="flex-1 [&_span]:transition-all [&_span]:duration-300 pl-3 lg:pl-4 xl:pl-5">
										<span class="text-black/70 text-base leading-loose block">Hours of Operation:</span>
										<span class="text-secondary-100 lg:text-lg lg:leading-7 font-semibold group-hover:text-primary">8 am to 6 pm</span>
									</div>
								</div>
							</li>

							<li>
								<div class="inline-flex items-center group relative">
									<a href="https://maps.app.goo.gl/QnNxkBjBsnvukR9K6" target="_blank" class="text-2xl text-secondary-100 stretch-link duration-300 group-hover:text-primary">
										<i class="icon-location"></i>
									</a>
									<div class="flex-1 [&_span]:transition-all [&_span]:duration-300 pl-3 lg:pl-4 xl:pl-5">
										<span class="text-black/70 text-base leading-loose block">Geographic Target Area</span>
										<span class="text-secondary-100 lg:text-lg lg:leading-7 font-semibold group-hover:text-primary">3425 Highway 6, Suite #109, Sugar Land, TX 77478</span>
									</div>
								</div>
							</li>
						</ul>
					</div>

					<figure class="mb-0 [&_img]:w-full [&_img]:rounded-[30px] [&_img]:border [&_img]:border-secondary-200/20">
						<img src="<?php echo get_home_url(); ?>/wp-content/uploads/get-a-quote-map-img.webp" width="986" height="438" alt="Map image" loading="lazy">
					</figure>
				</div>

				<div class="w-full lg:w-1/2 xl:w-[55%] px-4">
					<div class="bg-ss-light-green rounded-2xl border border-secondary-100/15 p-4 sm:p-6 lg:p-7 xl:p-[30px]">
						<!-- <form method="POST" action="mailer/index.php" id="form-id-0" class="validate form">
							<div class="form-section-0 flex flex-wrap sm:-mx-3 xl:-mx-[17px]">
								<div class="form-group w-full sm:w-1/2 sm:px-3 xl:px-[17px]">
									<label for="firstName">First Name</label>
									<input class="form-control" placeholder="First Name" name="first-name" id="firstName" type="text" value="">
									<i class="icon-user"></i>
									<div class="messages"></div>
								</div>
								<div class="form-group w-full sm:w-1/2 sm:px-3 xl:px-[17px]">
									<label for="lastName">Last Name</label>
									<input class="form-control" placeholder="Last Name" name="last-name" id="lastName" type="text" value="">
									<i class="icon-user"></i>
									<div class="messages"></div>
								</div>
								<div class="form-group w-full sm:w-1/2 sm:px-3 xl:px-[17px]">
									<label for="email">Your Email</label>
									<input class="form-control" placeholder="Your Email" name="email" id="email" type="email" value="">
									<i class="icon-mail"></i>
									<div class="messages"></div>
								</div>
								<div class="form-group w-full sm:w-1/2 sm:px-3 xl:px-[17px]">
									<label for="phoneNumber">Your Phone</label>
									<input class="form-control" placeholder="Your Phone" name="phone" id="phoneNumber" type="text" value="">
									<i class="icon-phone"></i>
									<div class="messages"></div>
								</div>
								<div class="form-group w-full sm:px-3 xl:px-[17px]">
									<label for="address">Your Address</label>
									<input class="form-control" placeholder="Your Address" name="address" id="address" type="text" value="">
									<i class="icon-address"></i>
									<div class="messages"></div>
								</div>
								<div class="form-group w-full sm:px-3 xl:px-[17px]">
									<label for="message">Message</label>
									<textarea class="form-control" id="message" placeholder="Write Message.." name="message" cols="50" rows="10"></textarea>
									<i class="icon-write-message"></i>
									<div class="messages"></div>
								</div>
							</div>

							<div class="form-footer">
								<button type="submit" class="submitButton btn btn-secondary w-full">
									<svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white loader" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" style="display: none">
										<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
										<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
									</svg>
									Send Message
								</button>
							</div>
						</form> -->

						<?php echo gravity_form(1, true, true, false, null, true); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Get A Quote section ends -->

	<?php
	get_footer();
