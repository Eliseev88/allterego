@extends('template')

@section('header')
    <link rel="stylesheet" href="/css/interview.css">
    <script src="https://kit.fontawesome.com/8d73d6a795.js" crossorigin="anonymous"></script>
@endsection

@section('title')
    Interview - @parent
@endsection

@section('content')
    <x-nav :categories="$categories"/>
    <main class="main container" id="main-content">
        <x-side-bar :categories="$categories"/>
        <section class="content">
            <h1 class="interview__title">Интервью с основателем бренда ALLTEREGO Аллой Радченко</h1>
            <div class="interview__origin">
                <span class="interview__subtitle">Источник: </span>
                <a href="https://thestatussymbol.com/ru/allterego-dress/" target="_blank" class="interview__subtitle">
                    <img class="interview__origin-link"
                         src="/storage/img/interview/thestatussymbol.com-magazine-370x370.jpg.webp" alt="link">
                </a>
            </div>
            <img src="/storage/img/interview/alltergo-1365x2048.jpg.webp" alt="main-image" class="interview__img-main">
            <blockquote class="blockquote">
                <p>&nbsp;&nbsp;Алла, было очень приятно с&nbsp;тобой познакомиться на&nbsp;съемке лукбука. Это твоя
                    первая коллекция. Расскажи о&nbsp;себе, как ты&nbsp;пришла к&nbsp;моде?</p>
            </blockquote>
            <p class="interview__paragraph">Ятакже была очень рада поработать с&nbsp;тобой. На&nbsp;самом деле, это моя
                третья коллекция. Мой творческий путь, как ты&nbsp;правильно заметила, начался давно. С&nbsp;детства на&nbsp;вопрос
                &laquo;кем ты&nbsp;хочешь стать?&raquo; я&nbsp;отвечала, что хотела&nbsp;бы стать &laquo;художником-модельером&raquo;.
                Я&nbsp;рисовала и&nbsp;придумывала наряды, часто мои братья были вынуждены быть моделями в&nbsp;импровизированных
                домашних показах. Когда пришло время выбирать вуз, я&nbsp;выбрала архитектурный факультет, поскольку
                уходить в&nbsp;дизайн одежды казалось на&nbsp;тот момент рискованно.</p>
            <p>Я&nbsp;любила выбранную профессию, но&nbsp;мечта реализоваться как модельер не&nbsp;покидала меня. Шло
                время, несколько лет я&nbsp;училась шить и&nbsp;моделировать по&nbsp;интернету за&nbsp;счет
                общедоступных данных и&nbsp;мастер классов, так появились первые две коллекции. Все&nbsp;же информации
                катастрофически не&nbsp;хватало, поэтому я&nbsp;решила получить дополнительное образование по&nbsp;специальности
                &laquo;дизайнер одежды&raquo;.</p>
            <img src="/storage/img/interview/allterego-dress-740x416.jpg.webp" alt="sketch-image"
                 class="interview__img">
            <p class="interview__paragraph-sub">Fashion illustration Allterego dress</p>
            <p>Свой бренд я&nbsp;придумала 10&nbsp;лет назад и&nbsp;решила назвать &laquo;ALLTEREGO&raquo;.</p>
            <p>Известно, что в&nbsp;зависимости от&nbsp;той одежды, которая на&nbsp;нас надета, мы&nbsp;можем
                чувствовать и&nbsp;вести себя по-разному. Именно поэтому в&nbsp;офисах присутствует дресс-код, а&nbsp;в&nbsp;школах&nbsp;&mdash;
                форма.</p>
            <p>Слово &laquo;ALTEREGO&raquo; означает &laquo;другое&nbsp;я&raquo;, ведь одежда помогает раскрыться многим
                граням нашей личности. Две буквы &laquo;L&raquo; в&nbsp;названии&nbsp;&mdash; это отсылка к&nbsp;моему
                имени&nbsp;&mdash; &laquo;Алла&raquo;. Хочется, чтобы в&nbsp;моей одежде люди чувствовали себя &laquo;по-иному&raquo;,
                особенно.</p>
            <blockquote class="blockquote">
                <p>&nbsp;&nbsp;Какова концепция твоего бренда? О&nbsp;каких девушках ты&nbsp;думала, когда создавала
                    первую коллекцию?</p>
            </blockquote>
            <p>Концепция моего бренда&nbsp;&mdash; это элегантная простота, но&nbsp;с&nbsp;интересными
                деталями-акцентами, созданными для того, чтобы подчеркнуть вашу индивидуальность и&nbsp;вкус. Основной
                тезис&nbsp;&mdash; это, наверное, свобода, мне хотелось&nbsp;бы подарить клиенту ощущение этой свободы
                через одежду.</p>
            <p>Хочется показать, что быть притягательным&nbsp;&mdash; это не&nbsp;значит показывать много открытого
                тела, достичь этого можно за&nbsp;счет той самой свободы и&nbsp;загадочности и&nbsp;простоты...</p>
            <p>Мне хочется создавать действительно качественную одежду, в&nbsp;которой женщина чувствовала&nbsp;бы себя
                элегантной и&nbsp;загадочной, нежной и&nbsp;в&nbsp;то&nbsp;же время уверенной в&nbsp;себе и&nbsp;своих
                силах. Хочется, чтобы в&nbsp;одежде удобство и&nbsp;красота не&nbsp;спорили друг с&nbsp;другом.</p>
            <img src="/storage/img/interview/alltergo-интервью-740x925.jpg.webp" alt="image"
                 class="interview__img mb-3">
            <p>Девушка ALLTEREGO свободная, сильная, не&nbsp;гонится за&nbsp;быстрыми трендами и&nbsp;не&nbsp;старается
                кому-то подражать, через одежду она показывает свои взгляды на&nbsp;жизнь, ей&nbsp;не&nbsp;нужно ничего
                доказывать окружающим, ведь она влюблена в&nbsp;себя и&nbsp;в&nbsp;свою жизнь.</p>
            <blockquote class="blockquote">
                <p>&nbsp;&nbsp;С&nbsp;какими трудностями пришлось столкнуться, когда ты&nbsp;начала готовить первую
                    коллекцию, запускала Инстаграм-магазин?</p>
            </blockquote>
            <p>При создании этой коллекции мне пришлось немного &laquo;отрешиться от&nbsp;внешнего мира&raquo;, чтобы
                избежать обилия информации и&nbsp;чужих идей и&nbsp;сконцентрироваться на&nbsp;образах, возникающих у&nbsp;меня
                в&nbsp;голове. Думаю, единственная трудность для дизайнеров и&nbsp;творцов в&nbsp;целом&nbsp;&mdash; это
                наличие финансов для старта, остальное&nbsp;&mdash; не&nbsp;трудности, а&nbsp;интересные вопросы,
                которые необходимо решить.</p>
            <blockquote class="blockquote">
                <p>&nbsp;&nbsp;Расскажи о&nbsp;своей настоящей коллекции: чем или кем вдохновлялась? Сколько времени
                    прошло от&nbsp;идеи до&nbsp;реализации? Например, платье &laquo;Во&nbsp;имя розы&raquo; у&nbsp;меня
                    ассоциируется с&nbsp;романом Умберто Эко. Но&nbsp;я&nbsp;не&nbsp;знаю, что ты&nbsp;имела в&nbsp;виду...</p>
            </blockquote>
            <p>Для создания этой коллекции мне пришлось &laquo;усмирить&raquo; поток фантазии и&nbsp;сконцентрироваться
                на&nbsp;чем-то одном. Я&nbsp;взяла за&nbsp;основу&nbsp;&mdash; правду и&nbsp;решила рассказать все, как
                есть. Правду о&nbsp;своих мечтах. Коллекция называется &laquo;DAYDREAMING&raquo;, что означает&nbsp;&mdash;
                мечтать, фантазировать. Для меня этот термин совмещает в&nbsp;себе процесс мечтания и&nbsp;процесс
                действия. Мечты наполняют нашу жизнь смыслом и&nbsp;манят надеждами. Образы наполнены легкостью,
                прозрачностью, сиянием мечты и&nbsp;в&nbsp;то&nbsp;же время строгостью и&nbsp;конкретностью
                реальности.</p>
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>&nbsp;&nbsp;Мне кажется, что только в балансе фантазии и действия мечты начинают работать.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Алла Радченко, <cite title="Source Title">Allterego</cite>
                </figcaption>
            </figure>
            <p>Каждый образ я&nbsp;задумывала для того, чтобы он&nbsp;мог перейти с&nbsp;подиума в&nbsp;реальную жизнь,
                обращала внимание на&nbsp;удобство кроя и&nbsp;пропорции, чтобы подчеркнуть выгодные стороны женской
                фигуры. Я&nbsp;делала&nbsp;то, что надела&nbsp;бы сама. В&nbsp;образах присутствует романтика и&nbsp;драма:
                объемные удлиненные рукава, спущенная пройма, акценты на&nbsp;талию, расслабленный крой. Мне нравится,
                когда человек выглядит красиво, но&nbsp;при этом как&nbsp;бы не&nbsp;старается этого делать. В&nbsp;этой
                небрежности есть особый шарм.</p>
            <p>В&nbsp;названиях вещей мне так&nbsp;же хотелось отразить романтическую направленность коллекции: ночь,
                тайна, магнолия, во&nbsp;имя розы... это все определенная атмосфера. Вот сейчас отвечаю на&nbsp;вопросы
                и&nbsp;представляю окутывающие город сумерки и&nbsp;прекрасный сад.</p>
            <img src="/storage/img/interview/alltergo-одежда-на-заказ-740x925.jpg.webp" alt="image"
                 class="interview__img mb-3">
            <blockquote class="blockquote">
                <p>&nbsp;&nbsp;Ты&nbsp;выступаешь за&nbsp;осознанное потребление, и&nbsp;твои образы универсальны.
                    Создаешь одежду по&nbsp;предзаказу. Это первый этап развития бренда, или ты&nbsp;планируешь отшивать
                    определенное количество изделий? Почему считаешь эту модель развития бренда оптимальной в&nbsp;условиях
                    постоянной конкуренции с&nbsp;fast fashion?</p>
            </blockquote>
            <p>Сейчас я&nbsp;нахожусь в&nbsp;начале пути, и&nbsp;мне кажется это оптимальной моделью развития бренда.
                Мне хочется создавать вещи не&nbsp;на&nbsp;один сезон, поскольку я&nbsp;рассматриваю гардероб как
                инвестицию, позже хотелось&nbsp;бы найти интересные материалы вторичной переработки для создания вещей.
                Мне не&nbsp;безразлична судьба планеты и&nbsp;проблемы загрязнения окружающей среды.</p>
            <p>Вещи будут выпускаться по&nbsp;дроп-системе, то&nbsp;есть ограниченной партией, что позволит подарить
                клиенту возможность быть максимально индивидуальным в&nbsp;своем образе.</p>
            <p>Помимо этого, мне важна энергетика вещи, где и&nbsp;кем она сделана и&nbsp;в&nbsp;каких условиях.</p>
            <p>Конкурировать с&nbsp;fast fashion я&nbsp;не&nbsp;планирую, скорее хотелось&nbsp;бы обрести идентичность,
                и&nbsp;найти своих клиентов, которые разделяют мое понимание красоты.</p>
            <div class="social__footer">
                    <a target="_blank" href="https://www.facebook.com/sharer.php?u=https://allteregodress.com/interview" class="social__button flex-grow-1">
                        <span class="social__button-icon"><i class="fab fa-facebook-f"></i></span>
                        <span class="social__text">Share</span>
                    </a>
                    <a target="_blank" href="https://twitter.com/intent/tweet?text=Интервью%20с%20основателем%20бренда%20ALLTEREGO%20Аллой%20Радченко&via=fuel_themes&url=https://allteregodress.com/interview" class="social__button flex-grow-1">
                        <span class="social__button-icon"><i class="fab fa-twitter"></i></span>
                        <span class="social__text">Tweet</span>
                    </a>
                    <a target="_blank" href="https://vk.com/share.php?url=https://allteregodress.com/interview" class="social__button">
                        <span class="social__button-icon"><i class="fab fa-vk"></i></span>
                    </a>
                    <a target="_blank" href="https://wa.me/?text=Интервью%20с%20основателем%20бренда%20ALLTEREGO%20Аллой%20Радченко%20https://allteregodress.com/interview" class="social__button">
                        <span class="social__button-icon"><i class="fab fa-whatsapp"></i></span>
                    </a>
                    <a target="_blank" href="mailto:?subject=Интервью%20с%20основателем%20бренда%20ALLTEREGO%20Аллой%20Радченко&body=Интервью%20с%20основателем%20бренда%20ALLTEREGO%20Аллой%20Радченко%20https://allteregodress.com/interview" class="social__button">
                        <span class="social__button-icon"><i class="fas fa-envelope"></i></span>
                    </a>
                    <a target="_blank" href="https://t.me/share/url?&text=Интервью%20с%20основателем%20бренда%20ALLTEREGO%20Аллой%20Радченко&url=https://allteregodress.com/interview" class="social__button">
                        <span class="social__button-icon"><i class="fas fa-paper-plane"></i></span>
                    </a>
            </div>
        </section>
    </main>
@endsection
