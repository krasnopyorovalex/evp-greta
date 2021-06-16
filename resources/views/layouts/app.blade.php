<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', '')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="google" content="notranslate">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#eee">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/datepicker.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"/>
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical', request()->url())"/>
</head>
<body>
{{--    <div class="loader">--}}
{{--        <div class="circle"></div>--}}
{{--        <div class="circle"></div>--}}
{{--        <div class="circle"></div>--}}
{{--    </div>--}}

    <nav id="nav__menu">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo">
                        <a href="{{ route('page.show') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="" title="">
                        </a>
                    </div>
                </div>
                <div class="col-5">
                    <div class="nav__menu-box">
                        <ul>
                            <li><a href="#our__works-section">Наши номера</a></li>
                            <li><a href="#main-text">Цены 2021</a></li>
                            <li><a href="#about__section">О нас</a></li>
                            <li><a href="#faq__section">FAQ</a></li>
                            <li><a href="#contacts__section">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <div class="right flex__box">
                        <div class="phone">
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#phone_mob') }}"></use>
                            </svg>
                            <a href="tel:+79780824244">
                                +7 (978) 082 42 44
                            </a>
                            <a href="https://wa.me/79780824244" class="t-msg">
                                <svg class="icon__whatsapp">
                                    <use xlink:href="{{ asset('img/symbols.svg#whatsapp') }}"></use>
                                </svg>
                            </a>
                            <a href="viber://add?number=79780824244" class="t-msg">
                                <svg class="icon__viber">
                                    <use xlink:href="{{ asset('img/symbols.svg#viber') }}"></use>
                                </svg>
                            </a>
                        </div>
{{--                        <div class="btn btn__booking call__popup" data-target="popup__recall">--}}
{{--                            Обратный звонок--}}
{{--                        </div>--}}
                        <div class="burger-mob">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro__text">
                        <div class="title">
                            <div>Отдых в Евпатории</div>
                        </div>
                        <div class="sub__title">
                            <div></div>
                        </div>
                        <div class="h-btn-box">
                            <div class="btn call__popup" data-target="popup__order">Забронировать</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="title">Наши контакты</div>
                    <div class="footer__contacts">
                        <div class="flex">
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                            </svg>
                            <a href="tel:+79780824244">+7 (978) 082 42 44</a>
                            <a href="https://wa.me/79780824244" class="t-msg">
                                <svg class="icon__whatsapp">
                                    <use xlink:href="{{ asset('img/symbols.svg#whatsapp') }}"></use>
                                </svg>
                            </a>
                            <a href="viber://add?number=+79780824244" class="t-msg">
                                <svg class="icon__viber">
                                    <use xlink:href="{{ asset('img/symbols.svg#viber') }}"></use>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#email') }}"></use>
                            </svg>
                            <a href="mailto:mirgorak@gmail.com">mirgorak@gmail.com</a>
                        </div>
                        <div>
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#email') }}"></use>
                            </svg>
                            <a href="mailto:mirgorak@yandex.ru">mirgorak@yandex.ru</a>
                        </div>
                        <div>
                            <svg class="icon icon__address">
                                <use xlink:href="{{ asset('img/symbols.svg#address') }}"></use>
                            </svg>
                            Республика Крым, г.Евпатория ул. Демышева д. 15-Б
                        </div>
                    </div>
                </div>
                <div class="col-7 right">
                    <div class="title">Полезные материалы</div>
                    <div class="footer__menu">
                        <ul>
                            <li><a href="#our__works-section">Наши номера</a></li>
                            <li><a href="#main-text">Цены 2021</a></li>
                            <li><a href="#about__section">О нас</a></li>
                            <li><a href="#faq__section">FAQ</a></li>
{{--                            <li><a href="#guest__section">Отзывы</a></li>--}}
                            <li><a href="#contacts__section">Контакты</a></li>
                        </ul>
                    </div>
                </div>
{{--                <div class="col-3">--}}
{{--                    <div class="title right"></div>--}}
{{--                    <div class="footer__socials">--}}
{{--                        @include('layouts.partials.socials')--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="separator"></div>
                </div>
            </div>
            <div class="row flex-center">
                <div class="col-6">
                    <div class="copyright">© {{ date('Y') }} Отдых в Евпатории. Все права защищены.</div>
                </div>
                <div class="col-6">
                    <div class="develop">
                        <div class="develop__link">
                            <a href="https://krasber.ru" rel="nofollow" target="_blank">
                                Создание, продвижение и <br>техподдержка сайтов
                            </a>
                        </div>
                        <div class="develop__logo">
                            <a href="https://krasber.ru" target="_blank">
                                <img src="https://villa-sany.ru/img/krasber.svg" alt="Веб-студия Красбер">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile__menu">
        <ul>
            <li><a href="#our__works-section">Наши номера</a></li>
            <li><a href="#main-text">Цены 2021</a></li>
            <li><a href="#about__section">О нас</a></li>
            <li><a href="#faq__section">FAQ</a></li>
{{--            <li><a href="#guest__section">Отзывы</a></li>--}}
            <li><a href="#contacts__section">Контакты</a></li>
        </ul>
        <div class="socials">
            @include('layouts.partials.socials')
        </div>
        <div class="close-menu-btn"></div>
        <div class="menu-overlay-mob"></div>
    </div>

    <div class="popup" id="popup__recall">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.forms.recall', ['unique' => 'recall'])
                </div>
            </div>
        </div>
    </div>
    <div class="popup" id="popup__order">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.forms.order', ['unique' => 'order'])
                </div>
            </div>
        </div>
    </div>
    <div id="view__detail-popup" class="popup"></div>
    <div class="popup__show-bg"></div><div class="loader__bg"></div><div class="notify"></div>
    <script src="{{ asset('js/jquery.3.3.1.min.js') }}"></script>
    <script src="{{ mix('js/app.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @if(app()->environment('production'))
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(80516977, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/80516977" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    @endif
</body>
</html>
