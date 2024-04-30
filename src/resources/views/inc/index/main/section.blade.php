<section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                    <h1 class="probootstrap-heading probootstrap-animate">ООО Пищевой инжиниринг
											<span>Компания, реализующая рецептуры пищевых продуктов в области здорового питания</span>
                    </h1>
                    <div class="row">
                        <a href="#" class="btn btn-primary btn-lg">Обратная связь</a>
                        <a href="#" class="btn btn-primary btn-lg">Контакты</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="probootstrap-service-intro">
        <div class="container">
            <div class="probootstrap-service-intro-flex">
                @include('inc.index.main.card', [
                    'header' => 'Здоровое питание',
                    'text' => 'Воплощение будущего прямо сейчас',
                ])
                @include('inc.index.main.card', [
                    'header' => 'Инновации',
                    'text' => 'Инжиниринговая  компания, создающая инновационные рецептуры для здорового питания',
                ])
                @include('inc.index.main.card', [
                    'header' => 'Качество',
                    'text' => 'Мы уделяем особое внимание качеству и безопасности продуктов',
                ])
            </div>
        </div>
    </div>
</section>
