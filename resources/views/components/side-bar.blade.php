<section class="side-bar col-3">
    <div class="accordion sticky scroll" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    онлайн магазин
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    о бренде
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <nav class="nav flex-column">
                        <a href="{{ route('about') }}" class="nav-link">история</a>
                        <a href="{{ route('interview') }}" class="nav-link">интервью</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    покупателям
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#">Оплата и доставка</a>
                        <a class="nav-link" href="#">Обмен и возврат</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <a href="{{ route('contacts') }}" class="accordion-link">Контакты</a>
            </h2>
        </div>
    </div>
</section>
