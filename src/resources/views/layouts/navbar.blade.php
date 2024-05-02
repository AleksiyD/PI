<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="Главная">
						</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Главная</a></li>
                <li><a href="#about-us">О нас</a></li>
                <li><a href="#mass-media-about-us">СМИ о нас</a></li>
                <li><a href="#project">Уникальность проекта</a></li>
                <li><a href="#contacts">Контакты</a></li>
                <li class="probootstra-cta-button last" style="padding-top: 20px;">
                    @component('layouts.utils.modal.btn', ['id' => 'modal-feedback-form'])
                        Обратная связь
                    @endcomponent
                </li>
            </ul>
        </div>
    </div>
</nav>
