<section class="probootstrap-section probootstrap-section-colored">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
				<h2>Уникальные разработки</h2>
			</div>
		</div>
		<div class="row card-container">
			@include('inc.index.development.card', [
				'img' => 'img/pashtet.jpg',
				'alt' => 'img',
				'head' => 'Рецептура печеночного паштета с пребиотическим действием для целевой группы потребителей',
				'src' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2787030&TypeFile=html'
			])
			@include('inc.index.development.card', [
				'img' => 'img/kolbasa.png',
				'alt' => 'img',
				'head' => 'Рецептура колбасы вареной функциональной обогащенной создана комбинированием мясного, растительного сырья и функциональных ингредиентов',
				'src' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2797405&TypeFile=html'
			])
			@include('inc.index.development.card', [
				'img' => 'img/myasoros.png',
				'alt' => 'img',
				'head' => 'Рецептура мясорастительного полуфабриката, имеющего высокий уровень сбалансированности по незаменимым аминокислотам',
				'src' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2757319&TypeFile=html'
			])
			@include('inc.index.development.card', [
				'img' => 'img/myasoros-rub.png',
				'alt' => 'img',
				'head' => 'Рецептура мясорастительного рубленного полуфабриката с высокой биологической ценностью, обладающего пребиотическим действием',
				'src' => 'https://new.fips.ru/registers-doc-view/fips_servlet?DB=RUPAT&DocNumber=2774419&TypeFile=html'
			])

		</div>
	</div>
</section>
