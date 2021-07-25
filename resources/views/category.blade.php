@extends('template')

@section('title')
   {{ $categoryName }} - @parent
@endsection

@section('content')
    <x-nav :categories="$categories" />
    <main class="main container" id="main-content">
        <x-side-bar :categories="$categories" />
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
        let all = document.getElementsByClassName('odd');
        let first = all[0];
        if (productsCount === 2 && window.screen.width >= 992) {
            first.style.width = '50%';
        } else if (productsCount === 1 && window.screen.width <= 991 && window.screen.width >= 768) {
            first.style.width = '100%';
        }
        window.addEventListener('resize', () => {
            if (productsCount === 2 && window.screen.width >= 992)  {
                first.style.width = '50%';
            }
            else if (productsCount === 1 && window.screen.width <= 991 && window.screen.width >= 768) {
                first.style.width = '100%';
            }
        })
    }, 100)

</script>
