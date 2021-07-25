@extends('template')

@section('header')
    <link rel="stylesheet" href="/css/contacts.css">
    <script src="https://kit.fontawesome.com/8d73d6a795.js" crossorigin="anonymous"></script>
@endsection

@section('title')
    Contacts - @parent
@endsection

@section('content')
    <x-nav :categories="$categories" />
    <main class="main container" id="main-content">
        <x-side-bar :categories="$categories" />
        <section class="content album">
            <div class="contacts__fixed text-center">
                <h1 class="contacts__title">Напишите нам</h1>
                <p class="contacts__paragraph"><a href="mailto:info@allteregodress.com" class="contacts__link">info@allteregodress.com</a></p>
                <div class="social padding">
                    <a href="tg://resolve?domain=@allterego_dress" target="_blank"><i class="fab fa-telegram"></i></a>
                    <a href="https://www.instagram.com/allterego_dress/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=79257025752&text=Здравствуйте%2C+у+меня+есть+вопрос" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100004221518179" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://vk.com/my_favorit_alla" target="_blank"><i class="fab fa-vk"></i></a>
                </div>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($images as $key => $image)
                        @if ($key === 0)
                            <div class="carousel-item active">
                                <img src="/storage/{{ $image->path }}" class="d-block w-100" alt="image">
                            </div>
                        @else
                            <div class="carousel-item">
                                <img src="/storage/{{ $image->path }}" class="d-block w-100" alt="image">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
