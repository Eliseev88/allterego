@extends('template')

@section('title')
   {{ $categoryName }} - @parent
@endsection

@section('content')
    <x-nav :categories="$categories" />
    <main class="main container" id="main-content">
        <section class="side-bar col-3">
            <div class="accordion sticky" id="accordionExample">
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
                                <a href="" class="nav-link">история</a>
                                <a href="" class="nav-link">скетчи</a>
                                <a href="" class="nav-link">интервью</a>
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
                        <a href="#" class="accordion-link">Контакты</a>
                    </h2>
                </div>
            </div>
        </section>
        <section class="content album">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-1 g-2" id="products_box">
                @foreach($products as $product)
                    <div class="col odd">
                        <a class="catalog__item" href="{{ route('product.show', ['category' => $product->category_id, 'product' => $product->id]) }}">
                            <div class="catalog__bucket _anim-items">
                                <span class="catalog__hidden_text">{{ $product->title }}</span>
                                <p class="catalog__hidden_text catalog__hidden_text-price">{{ $product->str_price }} ₽</p>
                            </div>
                            <div class="catalog__photo">
                                @foreach( $product->images as $image)
                                    <img class="catalog__img _anim-items" src="../storage/{{ $image->path }}" alt="#">
                                @endforeach
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection

<script>
    // Считаем количество продуктов в категории
    setTimeout(() => {
        let productsCount = document.getElementById("products_box").childElementCount;
        console.log(productsCount)
        if (productsCount === 2 && window.screen.width > 992) {
            let all = document.getElementsByClassName('odd');
            let first = all[0];
            first.style.width = '50%';
        }
    }, 100)

</script>
