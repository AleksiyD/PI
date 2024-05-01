<section id="about-us" class="probootstrap-section  probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
                <h2>О нас</h2>
                <p class="lead">
                    Мы команда профессионалов, занимающихся разработкой и созданием инновационных рецептур для здорового
                    и сбалансированного питания
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 probootstrap-animate">
                @component('inc.index.about-us.carousel')
                    @include('inc.index.about-us.carousel-item', [
                        'img' => 'img/person_1.jpg',
                        'alt' => 'img',
                        'post' => 'Генеральный директор',
                        'text' => 'Финалист проектно-образовательного интенсива АНО «Университет 20.35» по направлению FoodNet (Москва, 2020)
                    Финалист Международного конкурса «Продовольственная безопасность» (Екатеринбург, 2023).
                    Серебряный призер и обладатель «Звезды Евразии» XIII Евразийского экономического форума молодежи (XIII ЕЭФМ).
                    Победитель конкурса «Студенческий стартап» (Фонд содействия инновациям, 2023)',
                        'name' => 'Гресева Екатерина Геннадьевна',
                    ])
                    @include('inc.index.about-us.carousel-item', [
                        'img' => 'img/person_1.jpg',
                        'alt' => 'img',
                        'post' => 'Главный технолог',
                        'text' => 'Доктор технических наук, профессор кафедры пищевых технологий и инжиниринга Северо-Кавказского Федерального университета',
                        'name' => 'Борисенко Александр Алексеевич',
                    ])
                @endcomponent
            </div>
        </div>
    </div>
</section>
