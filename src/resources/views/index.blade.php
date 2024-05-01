@extends('layouts.layout')

@section('title', 'Главная')

@section('content')

@include('inc.index.main.section')
@include('inc.index.about-us.section')
@include('inc.index.general-info.section')
@include('inc.index.project.section')
@include('inc.index.development.section')

<!-- latest donations -->
<section class="probootstrap-section probootstrap-bg probootstrap-section-dark" style="background-image: url(img/hero_bg_bw_1.jpg)" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
				<h2>Latest Donations</h2>
				<p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro nesciunt</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="probootstrap-donors text-center probootstrap-animate">
					<figure class="media">
						<img src="img/person_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
					</figure>
					<div class="text">
						<h3>Linda Reyez</h3>
						<p class="donated">Donated <span class="money">$500.00</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="probootstrap-donors text-center probootstrap-animate">
					<figure class="media">
						<img src="img/person_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
					</figure>
					<div class="text">
						<h3>Chris Worth</h3>
						<p class="donated">Donated <span class="money">$1,500.00</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="probootstrap-donors text-center probootstrap-animate">
					<figure class="media">
						<img src="img/person_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
					</figure>
					<div class="text">
						<h3>Janet Morris</h3>
						<p class="donated">Donated <span class="money">$250.00</span></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">

				<div class="probootstrap-donors text-center probootstrap-animate">
					<figure class="media">
						<img src="img/person_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
					</figure>
					<div class="text">
						<h3>Jessa Sy</h3>
						<p class="donated">Donated <span class="money">$400.00</span></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="probootstrap-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3 probootstrap-animate">
				<h3>News</h3>
				<ul class="probootstrap-news">
					<li>
						<span class="probootstrap-date">July 16, 2017</span>
						<h3><a href="#">Porro provident suscipit</a></h3>
						<p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
						<p><span class="probootstrap-meta"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span></p>
					</li>
					<li>
						<span class="probootstrap-date">July 16, 2017</span>
						<h3><a href="#">Voluptatem dolor pariatur</a></h3>
						<p>Provident sequi assumenda quaerat minima mollitia at ducimus atque aliquam a ad dolore.</p>
						<p><span class="probootstrap-meta"><a href="#"><i class="icon-redo2"></i> 14</a> <a href="#"><i class="icon-bubbles2"></i> 7</a></span></p>
					</li>
				</ul>
				<p><a href="#" class="btn btn-primary">View all news</a></p>
			</div>
			<div class="col-md-6 probootstrap-animate">
				<h3>About Us</h3>
				<p><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem porro impedit, perferendis similique voluptatum reiciendis laudantium iusto ad, eligendi non minus nemo tempora? Non velit ab quasi at dignissimos fugiat.</p>
				<p><a href="#" class="btn btn-primary">Learn More</a></p>
			</div>
			<div class="col-md-3 probootstrap-animate">
				<h3>Gallery</h3>

				<div class="owl-carousel owl-carousel-fullwidth">
					<div class="item">
						<a href="img/img_sq_1.jpg" class="image-popup">
							<img src="img/img_sq_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
						</a>
					</div>
					<div class="item">
						<a href="img/img_sq_2.jpg" class="image-popup">
							<img src="img/img_sq_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
						</a>
					</div>
					<div class="item">
						<a href="img/img_sq_3.jpg" class="image-popup">
							<img src="img/img_sq_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
						</a>
					</div>
					<div class="item">
						<a href="img/img_sq_4.jpg" class="image-popup">
							<img src="img/img_sq_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
						</a>
					</div>
					<div class="item">
						<a href="img/img_sq_5.jpg" class="image-popup">
							<img src="img/img_sq_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
						</a>
					</div>
					<div class="item">
						<a href="img/img_sq_6.jpg" class="image-popup">
							<img src="img/img_sq_6.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
						</a>
					</div>
					<div class="item">
						<a href="img/img_sq_7.jpg" class="image-popup">
							<img src="img/img_sq_7.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
						</a>
					</div>
				</div>

				<p class="text-center"><a href="#" class="btn btn-primary">View all gallery</a></p>

			</div>
		</div>
	</div>
</section>
@endsection