@extends('template')

@section('title')
     @parent
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
                            <div class="catalog__bucket _anim-items _anim-ho-hide">
                                <span class="catalog__hidden_text">{{ $product->title }}</span>
                                <p class="catalog__hidden_text catalog__hidden_text-price">{{ $product->str_price }} ₽</p>
                            </div>
                            <div class="catalog__photo">
                                @foreach( $product->images as $image)
                                    <img class="catalog__img _anim-items _anim-ho-hide" src="storage/{{ $image->path }}" alt="#">
                                @endforeach
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
