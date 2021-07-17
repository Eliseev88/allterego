@extends('template')

@section('header')
    <link rel="stylesheet" href="/css/single.css">
    <script src="https://kit.fontawesome.com/8d73d6a795.js" crossorigin="anonymous"></script>
@endsection

@section('title')
    {{ $category->name }} - {{ $product->title }} @parent
@endsection

@section('content')
    <x-nav :categories="$categories" />

    <main class="main container justify-content-center flex-wrap" id="main-content">
        <div id="carouselExampleIndicators" class="carousel slide max-width_carousel" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($product->images as $key => $image)
                    @if($key == 0)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="active" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
                    @else
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" aria-label="Slide {{ $key + 1 }}"></button>
                    @endif
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($product->images as $key => $image)
                    @if ($key == 0)
                        <div class="carousel-item active">
                            <img src="/storage/{{ $image->path }}" class="d-block w-100" alt="...">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="/storage/{{ $image->path }}" class="d-block w-100" alt="...">
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- ORDER -->
        <section class="order center">
            <div class="order__wrapper">
                <span class="order__suptitle">Женская коллекция</span>
                <h3 class="order__title">{{ $product->title }}</h3>
                <div class="order__text">
                    {{ $product->description }}
                </div>
                <div class="order__info">
                    <div class="order__descript">МАТЕРИАЛ: <span>{{ $product->fabric }}</span></div>
                    <div class="order__descript">ДИЗАЙНЕР: <span>allterego</span></div>
                </div>
                <div class="order__price">{{ $product->str_price }} ₽</div>
                <form action="POST" class="order__form">
                    <div class="order__box">
                        <div class="order__column">
                            <div class="order__parameter">Выберите размер</div>
                            <div class="order__substitute substitute--size">
                                <select class="order__select select--size" name="size" id="size">
                                    <option class="order__option" selected>S</option>
                                    <option class="order__option" selected>M</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="order__btn"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24">
                            <g>
                                <g>
                                    <path d="M0 .978C0 .44.433-.001.96-.001H4.44c.432 0 .817.294.93.718l3.926 14.445h10.707l3.558-8.315h-11.86a.973.973 0 0 1-.962-.978c0-.538.432-.978.961-.978h13.336a.95.95 0 0 1 .801.44c.177.277.209.62.08.93l-4.391 10.27a.963.963 0 0 1-.882.588H8.574a.964.964 0 0 1-.929-.717L3.718 1.956H.961A.973.973 0 0 1 0 .977zM5.48 21.782c0-1.223.978-2.217 2.18-2.217 1.202 0 2.18.995 2.18 2.217 0 1.223-.978 2.217-2.18 2.217-1.202 0-2.18-.994-2.18-2.217zm13.64.147c-.08-1.207.818-2.283 2.02-2.364 1.202-.082 2.244.847 2.324 2.054.032.603-.144 1.174-.529 1.614a2.162 2.162 0 0 1-1.49.766h-.16c-1.139 0-2.084-.913-2.165-2.07z" />
                                </g>
                            </g>
                        </svg>Add to Cart</button>
                </form>
            </div>
        </section>
    </main>

@endsection

