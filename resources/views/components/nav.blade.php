<nav class="navbar navbar-expand-lg navbar-light sticky-top header">
    <div class="container">
        <div class="navbar-brand">
            <a href="/"><img src="/storage/img/logo.jpg" alt="logo"></a>
            <div class="header__slogan" id='slogan'>дизайнерская женская одежда</div>
        </div>
        <button class="navbar-toggler nav-border" id="navBarBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="scroll-div">
                <li class="nav-item margin-right hidden-nav">
                    <div class="accordion addition" id="accordionHeader">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOneH">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneH" aria-expanded="false" aria-controls="collapseOneH">
                                    онлайн магазин
                                </button>
                            </h2>
                            <div id="collapseOneH" class="accordion-collapse collapse" aria-labelledby="headingOneH" data-bs-parent="#accordionHeader">
                                <div class="accordion-body">
                                    <nav class="nav flex-column">
                                        @foreach($categories as $category)
                                            <a class="nav-link" href="{{ route('category.show', ['category' => $category->id]) }}">{{ $category->name }}</a>
                                        @endforeach
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwoH">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoH" aria-expanded="false" aria-controls="collapseTwoH">
                                    О бренде
                                </button>
                            </h2>
                            <div id="collapseTwoH" class="accordion-collapse collapse" aria-labelledby="headingTwoH" data-bs-parent="#accordionHeader">
                                <div class="accordion-body">
                                    <nav class="nav flex-column">
                                        <a href="{{ route('about') }}" class="nav-link">история</a>
                                        <a href="{{ route('interview') }}" class="nav-link">интервью</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThreeH">
                                <button class="accordion-button color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeH" aria-expanded="false" aria-controls="collapseThreeH">
                                    Покупателям
                                </button>
                            </h2>
                            <div id="collapseThreeH" class="accordion-collapse collapse" aria-labelledby="headingThreeH" data-bs-parent="#accordionHeader">
                                <div class="accordion-body">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="#">Оплата и доставка</a>
                                        <a class="nav-link" href="#">Обмен и возврат</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFourH">
                                <a href="{{ route('contacts') }}" class="accordion-link">Контакты</a>
                            </h2>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="d-flex justify-content-start">
                        <div class="header-lang">
                            <a href="/?lang=ru" class="nav-eng"><img src="/storage/img/rus.svg" alt="rus" class="nav-link-img rus">Рус</a>
                            <p class="header-split">/</p>
                            <a href="/?lang=en" class="nav-eng"><img src="/storage/img/eng.svg" alt="eng" class="nav-link-img">Eng</a>
                        </div>
                        <a href="#" class="nav-icon" title="Поиск">
                            <svg class="header__iframe" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="nav-icon" title="Корзина">
                            <svg class="header__iframe"  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg>
                        </a>
                        <a href="#" class="nav-icon" title="Аккаунт">
                            <svg class="header__iframe" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
