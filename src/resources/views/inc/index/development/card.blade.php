<div class="card-wrapper col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate card-columns" data-animate-effect="fadeIn">
	<div class="card probootstrap-image-text-block probootstrap-cause">
		<figure>
			<img src="{{ $img }}" alt="{{ $alt ?? 'img' }}" class="img-responsive">
		</figure>
		<div class="probootstrap-cause-inner">

			<h2>{{ $head }}</h2>
		</div>
		<p><a href="{{ $src }}" class="btn btn-primary btn-black btn-card">Подробнее</a></p>
	</div>
</div>