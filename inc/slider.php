<div class="web-slider-section">
<div class="carousel slide" data-ride="carousel" id="web-slider-section">
<div class="carousel-inner">
<?php
$my_query = new WP_Query('showposts=3&post_status=publish&offset=0');
while ($my_query->have_posts()):
$my_query->the_post();
$do_not_duplicate = $post->ID;?>
the_title();
// همونجوری که تصویر شاخص رو توی تک نوشته فراخوانی میکنید اینجا هم همونه
if ( has_post_thumbnail() ) { ?>
	
			
				<div class="carousel-item active">
					<img alt="First slide" class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/header-slider-1.jpeg">
					<div class="row text-center">
						<div class="col-lg-6 col-md-8 col-sm-12">
							<div class="web-heading">
								<div class="carousel-caption d-none d-md-block text-right">
									<h2>مجموعه یونیک لیفت <span>(Unique Lift)</span></h2>
									<p>یکی از با سابقه ترین تهیه و توضیع کنندگان جک گازی در ایران میباشد. این مجموعه با بیش از پانزده سال تجربه کاری در صنعت جک ، امروزه به یکی از قطب های فروش جک گازی تبدیل شده است.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="Second slide" class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/images/header-slider-2.jpeg">
					<div class="row text-center">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="web-heading">
								<div class="carousel-caption d-none d-md-block text-right">
									<h2>جک های گازی</h2>
									<p>امروزه صنعت جک های گازی،با توجه به مصرف این اقلام در تخت های باکسی و کم جا و همچنین انواع اتومبیل و دستگاه های صنعتی پیشرفت قابل توجهی داشته است،این مجموعه آمادگی خود را جهت سفارشات اعلام می دارد</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
endif
<?php endwhile; ?>
</div>
</div>
</div>
<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#web-slider-section"></li>
				<li data-slide-to="1" data-target="#web-slider-section"></li>
			</ol>
			<a class="carousel-control-prev" href="#web-slider-section" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#web-slider-section" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
		<div class="width-back">
			<img src="<?php echo get_template_directory_uri() ?>/images/back.jpg" alt="">
		</div>

