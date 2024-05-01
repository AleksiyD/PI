<section class="mass-media-about-us probootstrap-section">
    <div class="container">
        <div class="probootstrap-animate">
					<div class="col-md-12 text-center section-heading probootstrap-animate fadeIn probootstrap-animated" data-animate-effect="fadeIn">
						<h2>СМИ о нас</h2>
					</div>
					<div class="post-wrapper">
						<div class="post">
							<p>
								<iframe src="https://vk.com/video_ext.php?oid=-41441187&id=456239800&hd=3" height="360" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>
							</p>
							<h3>Студенческий стартап, как начало нового проекта</h3>
							<p>Создание инжиниринговой компании, с целью разработки и внедрения новых идей, продуктов и услуг на рынке</p>
							<p>
								<a href="https://vk.com/video-41441187_456239800?list=621541a052b51dca5c" target="_blank" class="btn btn-primary">Подробнее</a>
							</p>
						</div>
							@include('inc.index.mass-media-about-us.card', [
								'img' => 'img/obogoshenie.jpg',
								'alt' => 'img',
								'header' => 'Ученые СКФУ разработали инновационную технологию обогащения мясных продуктов макро- и микроэлементами',
								'text' => 'С использованием цифрового моделирования, разработаны пищевые продукты, способные компенсировать нехватку макро- и микроэлементов в рационе питания.',
								'src' => 'https://www.edimdoma.ru/news/posts/26290-umnyy-burger-studenty-iz-stavropolya-smodelirovali-idealnyy-fastfud'
							])
							@include('inc.index.mass-media-about-us.card', [
								'img' => 'img/evraziya.jpg',
								'alt' => 'img',
								'header' => 'Обладатели «Звезды Евразии» XIII Евразийского экономического форума молодежи',
								'text' => 'Представлен высокий уровень своих научных разработок в секции «Индустрия питания: технологии, качество, инновации»',
								'src' => 'https://ncfu.ru/novosti/nauka/studenty-skfu-privezli-serebryanuyu-zvezdu-evrazii-1612/'
							])
							@include('inc.index.mass-media-about-us.card', [
								'img' => 'img/burger.jpeg',
								'alt' => 'img',
								'header' => 'Ставропольские учёные разработали новый метод компьютерного моделирования пищевых продуктов',
								'text' => 'Специалисты Северо-Кавказского Федерального университета создали новую методологию компьютерного моделирования пищевых продуктов, которая может создавать цифровые модели и прогнозировать свойства инновационных продуктов питания. Эти продукты, созданные с использованием этой методологии, уже прошли успешное тестирование и внедряются в местное производство.',
								'src' => 'https://news.1777.ru/96162-stavropolskie-uchenye-razrabotali-novyy-metod-kompyuternogo-modelirovaniya-pischevyh-produktov'
							])
							@include('inc.index.mass-media-about-us.card', [
								'img' => 'img/burger2.jpg',
								'alt' => 'img',
								'header' => '«Умный» бургер: студенты из Ставрополя смоделировали идеальный фастфуд',
								'text' => 'В Северо-Кавказском Федеральном университете смоделировали идеальный фастфуд и создали рецептуру «Умного» бургера',
								'src' => 'https://www.edimdoma.ru/news/posts/26290-umnyy-burger-studenty-iz-stavropolya-smodelirovali-idealnyy-fastfud'
							])
							<div class="post">
								<p>
									<iframe height="360" src="//www.ntv.ru/embed/2293182?utm_content=video" frameborder="0" loading="lazy" allow="autoplay; fullscreen"></iframe>
								</p>
								<h3>Выпуск программы «Живая Еда» с Сергеем Малозёмовым на НТВ от 23.12.2023</h3>
								<p>Обогащённые продукты — еда будущего.</p>
								<p>
									<a href="https://eda.show/ieda-ot-23-diekabria-2023/" target="_blank" class="btn btn-primary">Подробнее</a>
								</p>
							</div>
					</div>
        </div>
    </div>
</section>
