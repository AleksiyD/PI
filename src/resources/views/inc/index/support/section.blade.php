<section class="probootstrap-section probootstrap-bg probootstrap-section-dark" style="background-image: url(&quot;img/hero_bg_bw_1.jpg&quot;); background-position: 0px -29.3984px;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center section-heading probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
				<h2>Осуществляем свою деятельность при поддержке</h2>
				<p class="lead">Проект выполнен при поддержке «Фонда содействия инновациям» в рамках федерального проекта
					«Платформа университетского технологического предпринимательства»</p>
			</div>
		</div>
		<div class="row">
			@include('inc.index.support.card', [
				'img' => 'img/ncfu.jpg',
				'alt' => 'img',
				'title' => 'Северо-Кавказский федеральный университет',
				'src' => 'https://ncfu.ru'
			])
			@include('inc.index.support.card', [
				'img' => 'img/fsi.png',
				'alt' => 'img',
				'title' => 'Фонд содействия инновациям',
				'src' => 'https://fasie.ru'
			])
			@include('inc.index.support.card', [
				'img' => 'img/pitp.jpg',
				'alt' => 'img',
				'title' => 'Платформа университетского технологического предпринимательства',
				'src' => 'https://univertechpred.ru'
			])
		</div>
	</div>
</section>
