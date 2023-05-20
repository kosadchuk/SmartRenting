@extends('layouts.header')

@section('title')
    Smart Renting UA
@stop

@section('vite_scripts')
    @vite(['resources/sass/faq.scss', 'resources/js/src/main.js'])
@stop

@section('content')

    <section class="hero">
        <div class="container">
            <div class="hero_wrap" style="background-image:url(assets/images/faq.jpg)">
                <div class="hero_content">
                    <h1 class="h2">
                        FAQ
                    </h1>
                    <p>
                        Часто задавані питання: ваші відповіді на ключові запитання
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="faq_wrap">
                <div class="faq_item js-faq-item">
                    <div class="faq_title js-faq">
                        <p>
                            Чи забезпечуєте ви послуги з прибирання квартири до мого заїзду?
                        </p>
                        <img src="{{asset('assets/images/faq-arrow.svg')}}" class="faq_arrow" alt="">
                    </div>
                    <div class="faq_content">
                        <p>
                            Так, ми гарантуємо професійне прибирання квартири до вашого заїзду. Наша команда
                            спеціалістів зробить все необхідне, щоб забезпечити чистоту та охайність приміщення, щоб ви
                            могли комфортно почати своє перебування.
                        </p>
                    </div>
                </div>
                <div class="faq_item js-faq-item">
                    <div class="faq_title js-faq">
                        <p>
                            Якщо мій виїзд з квартири буде терміновим, чи є у вас можливість зберегти мої особисті речі
                            в надійному місці?
                        </p>
                        <img src="{{asset('assets/images/faq-arrow.svg')}}" class="faq_arrow" alt="">
                    </div>
                    <div class="faq_content">
                        <p>
                            Звичайно! Ми пропонуємо послугу зберігання особистих речей на нашому безпечному складі. Якщо
                            вам потрібно залишити свої речі після виїзду, ми забезпечимо їх збереження та безпеку до
                            вашого повернення.
                        </p>
                    </div>
                </div>
                <div class="faq_item js-faq-item">
                    <div class="faq_title js-faq">
                        <p>
                            Чи надаєте ви допомогу з побутовими питаннями під час мого перебування в орендованій
                            квартирі?
                        </p>
                        <img src="{{asset('assets/images/faq-arrow.svg')}}" class="faq_arrow" alt="">
                    </div>
                    <div class="faq_content">
                        <p>
                            Так, ми підтримуємо наших орендарів протягом усього періоду оренди. Наша команда готова
                            відповісти на ваші запитання та допомогти вирішити будь-які побутові питання, які виникають
                            під час вашого перебування. Ми прагнемо забезпечити ваш комфорт та задоволення від життя в
                            орендованому житлі.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts/contact_form')

    @include('layouts.footer')

@stop
