<?php get_header(); ?>

<main>
	<section class="relative">
		<?= get_the_post_thumbnail($id, 'full', array('class' => 'absolute inset-x-0 top-[-132px] mx-auto -z-10 max-h-[777px]')); ?>
		<div class="main-container pt-16 pb-12">
			<div class="grid-row mb-16">
				<div class="col-span-8 -mr-4 mb-12">
					<h1 class="mb-8 font-light text-[60px] leading-[115%] text-orange">
						<?php the_title() ?>
					</h1>
					<div class="font-semibold text-[32px] text-cream">
						<?php the_content() ?>
					</div>
				</div>
				<a data-fancybox="gallery" href="
								<?php the_field('video_about'); ?>"
					class="col-start-10 col-span-2 h-[130px] self-center ml-4">
					<img src="<?= get_template_directory_uri() ?>/assets/img/play.svg" alt="галерея" />
				</a>
				<a href="<?= get_category_link(4) ?>" class="button text-cream border-cream h-[70px] col-span-3 row-start-2">Перейти в каталог</a>
			</div>
			<div class="grid-row">
				<?php if (have_rows('advantages')) : ?>
					<?php while (have_rows('advantages')) :	the_row(); ?>
						<div class="col-span-3">
							<p class="font-bold text-cream text-center text-[60px] leading-none">
								<?php the_sub_field('advantages_number'); ?>
							</p>
							<p class="text-5 text-cream text-center leading-[150%] uppercase">
								<?php the_sub_field('advantages_description'); ?>
							</p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section>
		<div class="main-container py-[75px]">
			<h2 class="text-black text-[50px] mb-5">Каталог</h2>
			<p class="text-xl leading-normal mb-12">Мы любим дерево, для нас важны детали, ценим профессиональный подход. Наши изделия изготовлены из отборной древесины и обработаны натуральными материалами. Мы гарантируем долговечность произведений мастерской.</p>
			<div class="grid-row grid-rows-[300px_300px_300px] gap-y-6 mb-12">
				<?php
				$args = array(
					'category_name' => 'catalog',
					'posts_per_page' => 7,
					'order' => 'ASC',
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) : ?>
					<?php while ($query->have_posts()) :
						$query->the_post(); ?>
						<a href="<?php the_permalink($id) ?>" class="relative rounded-twenty
						first:col-span-6 first:row-span-2
						[&:nth-child(n+2):nth-last-child(n+3)]:col-span-3
						[&:nth-last-child(2)]:col-span-4
						last:col-span-8
						">
							<?= the_post_thumbnail() ?>
							<div class="absolute bottom-8 left-8 uppercase text-cream text-2xl leading-[140%]">
								<? the_content() ?>
							</div>
						</a>
					<?php endwhile ?>
				<?php endif;
				wp_reset_postdata(); ?>
			</div>
			<a href="<?= get_category_link(4) ?>" class="button w-[300px] h-[70px] text-black border-black mx-auto">Перейти в каталог</a>
		</div>
	</section>
	<section class="bg-dark">
		<div class="main-container py-[75px]">
			<h2 class="text-cream text-[50px] mb-5">О нашей мастерской</h2>
			<div>
				<?php if (have_rows('about')) : ?>
					<?php while (have_rows('about')) :	the_row(); ?>
						<div class="grid-row 
						[&>div]:even:translate-x-[50px]
						[&>div]:odd:-translate-y-[20px]
						">
							<p class="col-span-8 mb-8 text-white leading-[150%]">
								<?php the_sub_field('about_desc'); ?>
							</p>
							<div class="col-span-4 flex relative h-[160px] ml-4">
								<img src="<?php the_sub_field('about_img'); ?>"
									class="m-auto absolute" alt="О нас">
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="bg-dark">
		<div class="main-container pb-[75px]">
			<h2 class="text-cream text-[50px] mb-5">Наши клиенты</h2>
			<div class="relative">
				<div id="swiper-clients" class="swiper">
					<div class="swiper-wrapper !box-border items-center">
						<?php if (have_rows('slider_clients')) : ?>
							<?php while (have_rows('slider_clients')) :	the_row(); ?>
								<div class="swiper-slide">
									<img src="<?php the_sub_field('slider_clientsI_mg'); ?>"
										class="block m-auto" alt="Клиенты">
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="swiper-button-next client-swiper-button-next w-12 h-12 flex border border-cream rounded-full translate-x-20">
					<svg class="m-auto !w-1.5" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.46436 8L4.99989 4.46447L1.46436 0.928932" stroke="#F5E2C3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div class="swiper-button-prev client-swiper-button-prev w-12 h-12 flex border border-cream rounded-full -translate-x-20">
					<svg class="m-auto !w-1.5" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4.53564 1L1.00011 4.53553L4.53564 8.07107" stroke="#F5E2C3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-dark">
		<div class="main-container pb-[75px]">
			<h2 class="text-cream text-[50px] mb-5">Отзывы</h2>
			<div class="relative">
				<div id="swiper-reviews" class="swiper">
					<div class="swiper-wrapper !box-border items-start">
						<?php
						$args = array(
							'post_type' => 'reviews',
							'posts_per_page' => 10,
						);
						$query = new WP_Query($args);
						if ($query->have_posts()) : ?>
							<?php while ($query->have_posts()) :
								$query->the_post(); ?>
								<div class="swiper-slide py-6 px-6 rounded-twenty border border-cream flex flex-col h-[253px]">
									<div class="mb-4 flex gap-x-2">
										<?php
										$stars = get_field('author_rating');
										$stars = (int)$stars;
										for ($i = 1; $i <= $stars; $i++) {
											echo '<svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" fill="#BE713C" />
										</svg>';
										} ?>
									</div>
									<div class="text-cream mb-6 flex-1 [&>p]:line-clamp-4">
										<?php the_content() ?>
									</div>
									<div class="grid grid-cols-[48px_1fr] gap-x-6">
										<div class="h-12 row-span-2 overflow-hidden rounded-[8px]">
											<img src="<?php the_field('author_photo') ?>" alt="">
										</div>
										<p class="font-bold text-orange leading-normal"><?php the_field('author_name') ?></p>
										<p class="leading-normal text-cream"><?php the_field('author_position') ?></p>
									</div>
								</div>
							<?php endwhile ?>
						<?php endif;
						wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="swiper-button-next review-swiper-button-next w-12 h-12 flex border border-cream rounded-full translate-x-20">
					<svg class="m-auto !w-1.5" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.46436 8L4.99989 4.46447L1.46436 0.928932" stroke="#F5E2C3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
				<div class="swiper-button-prev review-swiper-button-prev w-12 h-12 flex border border-cream rounded-full -translate-x-20">
					<svg class="m-auto !w-1.5" width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4.53564 1L1.00011 4.53553L4.53564 8.07107" stroke="#F5E2C3" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</div>
			</div>
			<a href="#" class="button mt-12 w-[300px] h-[70px] text-cream border-cream mx-auto">Оставить отзыв</a>
		</div>
	</section>
	<section>
		<div class="main-container py-[75px]">
			<h2 class="text-black text-[50px] mb-5">Галерея работ</h2>
			<p class="text-xl leading-normal mb-12">Наши изделия изготовлены из отборной, хорошо высушенной древесины твердых пород, тщательно отшлифованы и пропитаны натуральными маслами. К каждому заказу мы подходим индивидуально, поэтому готовы вопротить в жизнь даже самые смелые идеи!</p>
			<div class="gap-8 columns-3">
				<?php if (have_rows('gallery')) : ?>
					<?php while (have_rows('gallery')) :	the_row();
						if ((get_sub_field('gallery_video')) !== false) : ?>
							<a data-fancybox="gallery" href="
							<?php the_sub_field('gallery_video'); ?>"
								class="block relative w-full mb-8">
								<img src="<?php the_sub_field('gallery_img'); ?>" alt="галерея" />
								<svg class="absolute inset-0 m-auto" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80ZM33.6 58.0133L58.8 43.4641C61.4666 41.9245 61.4666 38.0755 58.8 36.5359L33.6 21.9867C30.9333 20.4471 27.6 22.3716 27.6 25.4508V54.5492C27.6 57.6284 30.9333 59.5529 33.6 58.0133Z" fill="white" fill-opacity="0.5" />
								</svg>
							</a>
						<? else : ?>
							<a data-fancybox="gallery" href="
							<?php the_sub_field('gallery_img'); ?>"
								class="block relative w-full mb-8">
								<img src="<?php the_sub_field('gallery_img'); ?>" alt="галерея" />
							</a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section>
		<div class="main-container pb-[75px]">
			<h2 class="text-black text-[50px] mb-5">Связаться с нами</h2>
			<div class="grid-row">
				<div class="col-span-6">
					<p class="leading-normal mb-10">Мы часто экспериментируем и увлекаемся новыми идеями - проваливаемся в творчество. Увидев что-то где-то - загораемся сотворить нечто подобное - только по своему. К каждому заказу мы подходим индивидуально, поэтому готовы воплотить в жизнь даже самые смелые идеи!</p>
					<div class="flex gap-x-3 mb-6">
						<a href="http:/wa.me/7<?php the_field('soc_phone') ?>" target="_blank" rel="noopener noreferrer">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_2068_6)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M18.9852 16.9453C18.696 17.764 17.5464 18.4412 16.6296 18.6393C16.002 18.7725 15.1836 18.8779 12.426 17.7352C9.3288 16.452 5.028 11.8812 5.028 8.83945C5.028 7.29099 5.9208 5.48789 7.482 5.48789C8.2332 5.48789 8.3988 5.50254 8.646 6.09551C8.9352 6.79412 9.64081 8.51535 9.7248 8.6918C10.0716 9.41561 9.37199 9.83934 8.86439 10.4695C8.70239 10.6592 8.51881 10.8643 8.72401 11.2172C8.92801 11.5629 9.6336 12.7129 10.6704 13.6359C12.0096 14.8291 13.0956 15.21 13.4844 15.3721C13.7736 15.4921 14.1192 15.4641 14.3304 15.2385C14.598 14.9492 14.9304 14.4692 15.2688 13.9963C15.5076 13.6578 15.8112 13.6155 16.1292 13.7355C16.344 13.81 19.074 15.0778 19.1892 15.2807C19.2744 15.4283 19.2744 16.1267 18.9852 16.9453ZM12.0024 0H11.9964C5.38079 0 0 5.38242 0 12C0 14.624 0.846008 17.0584 2.28481 19.033L0.789606 23.492L5.40121 22.0184C7.29841 23.2739 9.5628 24 12.0024 24C18.618 24 24 18.6176 24 12C24 5.38242 18.618 0 12.0024 0Z" fill="#BE713C" />
								</g>
								<defs>
									<clipPath id="clip0_2068_6">
										<rect width="24" height="24" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</a>
						<a href="http://t.me/+7<?php the_field('soc_phone') ?>" target="_blank" rel="noopener noreferrer">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_2068_2)">
									<path d="M16.5915 7.53005C16.596 7.53005 16.602 7.53005 16.608 7.53005C16.7647 7.53005 16.9102 7.5788 17.0295 7.6628L17.0272 7.6613C17.1142 7.73705 17.1727 7.84355 17.187 7.96355V7.9658C17.202 8.0573 17.2102 8.1623 17.2102 8.26955C17.2102 8.3183 17.2087 8.3663 17.205 8.4143V8.40755C17.0362 10.1843 16.3042 14.493 15.9322 16.482C15.7747 17.3243 15.465 17.6063 15.165 17.6333C14.5132 17.694 14.0182 17.2028 13.3867 16.7888C12.3982 16.14 11.8395 15.7365 10.8802 15.1043C9.77096 14.3745 10.4902 13.9718 11.1217 13.3163C11.2875 13.1438 14.1607 10.53 14.217 10.293C14.22 10.2788 14.2215 10.263 14.2215 10.2465C14.2215 10.188 14.1997 10.1348 14.1645 10.0943C14.1255 10.0688 14.0767 10.0545 14.0257 10.0545C13.992 10.0545 13.9597 10.0613 13.9297 10.0725L13.9312 10.0718C13.8322 10.0943 12.2532 11.1378 9.19421 13.2023C8.86046 13.4655 8.43896 13.632 7.97996 13.6515H7.97546C7.32521 13.5728 6.73496 13.428 6.17471 13.2218L6.23021 13.2398C5.52671 13.0103 4.96796 12.8895 5.01596 12.501C5.04146 12.299 5.31996 12.0923 5.85146 11.8808C9.12546 10.4543 11.3087 9.51405 12.4012 9.06005C13.6065 8.4203 15.0037 7.8938 16.473 7.55255L16.5907 7.5293L16.5915 7.53005ZM11.9475 0.768799C5.72096 0.783799 0.678711 5.83505 0.678711 12.0638C0.678711 18.3015 5.73521 23.3588 11.9737 23.3588C18.2122 23.3588 23.2687 18.3023 23.2687 12.0638C23.2687 5.83505 18.2265 0.783799 12.0015 0.768799H12C11.9825 0.768799 11.965 0.768799 11.9475 0.768799Z" fill="#BE713C" />
								</g>
								<defs>
									<clipPath id="clip0_2068_2">
										<rect width="24" height="24" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</a>
						<a class="block mr-6" href="http://www.vk.com" target="_blank" rel="noopener noreferrer">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_2068_4)">
									<path d="M12 0.47998C5.63758 0.47998 0.47998 5.63758 0.47998 12C0.47998 18.3624 5.63758 23.52 12 23.52C18.3624 23.52 23.52 18.3624 23.52 12C23.52 5.63758 18.3624 0.47998 12 0.47998ZM16.4304 13.4772C16.4304 13.4772 17.4492 14.4828 17.7 14.9496C17.7072 14.9592 17.7108 14.9688 17.7132 14.9736C17.8152 15.1452 17.8392 15.2784 17.7888 15.378C17.7048 15.5436 17.4168 15.6252 17.3184 15.6324H15.5184C15.3936 15.6324 15.132 15.6 14.8152 15.3816C14.5716 15.2112 14.3316 14.9316 14.0976 14.6592C13.7484 14.2536 13.446 13.9032 13.1412 13.9032C13.1025 13.9031 13.064 13.9092 13.0272 13.9212C12.7968 13.9956 12.5016 14.3244 12.5016 15.2004C12.5016 15.474 12.2856 15.6312 12.1332 15.6312H11.3088C11.028 15.6312 9.56518 15.5328 8.26918 14.166C6.68278 12.492 5.25478 9.13438 5.24278 9.10318C5.15278 8.88598 5.33878 8.76958 5.54158 8.76958H7.35958C7.60198 8.76958 7.68118 8.91718 7.73638 9.04798C7.80118 9.20038 8.03878 9.80638 8.42878 10.488C9.06118 11.5992 9.44878 12.0504 9.75958 12.0504C9.81786 12.0497 9.8751 12.0349 9.92638 12.0072C10.332 11.7816 10.2564 10.3356 10.2384 10.0356C10.2384 9.97918 10.2372 9.38878 10.0296 9.10558C9.88078 8.90038 9.62758 8.82238 9.47398 8.79358C9.53615 8.70779 9.61806 8.63823 9.71278 8.59078C9.99118 8.45158 10.4928 8.43118 10.9908 8.43118H11.268C11.808 8.43838 11.9472 8.47318 12.1428 8.52238C12.5388 8.61718 12.5472 8.87278 12.5124 9.74758C12.5016 9.99598 12.4908 10.2768 12.4908 10.608C12.4908 10.68 12.4872 10.7568 12.4872 10.8384C12.4752 11.2836 12.4608 11.7888 12.7752 11.9964C12.8162 12.0221 12.8636 12.0358 12.912 12.036C13.0212 12.036 13.35 12.036 14.2404 10.5084C14.515 10.0167 14.7536 9.50575 14.9544 8.97958C14.9724 8.94838 15.0252 8.85238 15.0876 8.81518C15.1336 8.7917 15.1847 8.77976 15.2364 8.78038H17.3736C17.6064 8.78038 17.766 8.81518 17.796 8.90518C17.8488 9.04798 17.7864 9.48358 16.8108 10.8048L16.3752 11.3796C15.4908 12.5388 15.4908 12.5976 16.4304 13.4772Z" fill="#BE713C" />
								</g>
								<defs>
									<clipPath id="clip0_2068_4">
										<rect width="24" height="24" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</a>
						<a href="http://tel+7<?php the_field('soc_phone') ?>" target="_blank" rel="noopener noreferrer" class="text-orange uppercase">
							<?php the_field('phone_1') ?>
						</a>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="7d014df" title="tensor-form"]') ?>
				</div>
				<div class="col-span-6">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2a9479c62fa2ecbe14a18ecdfbc9393db54444d0748743b2114967e5efcb8ea6&amp;width=100%&amp;height=518&amp;lang=ru_RU&amp;scroll=false"></script>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>