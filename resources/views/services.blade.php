@extends('layouts.header')

@section('title')
    Smart Renting UA
@stop

@section('vite_scripts')
    @vite(['resources/sass/services.scss', 'resources/js/src/main.js'])
@stop

@section('content')

    <section class="hero">
        <div class="container">
            <div class="hero_wrap" style="background-image:url(assets/images/services.jpg)">
                <div class="hero_content">
                    <h1 class="h2">
                        Послуги та ціни
                    </h1>
                    <p>
                        З нами ви знайдете ідеальне житло, що відповідає вашим
                        потребам та бюджету.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="prices">
        <div class="container">
            <div class="prices_wrap">
                <div class="prices_item fw">
                    <p class="prices_description">
                        Пошук та підбір житла
                    </p>
                    <p class="prices_number">
                        від 5% вартості оренди
                    </p>
                </div>
                <div class="prices_item fw">
                    <p class="prices_description">
                        Розміщення об'яви про здачу житла
                    </p>
                    <p class="prices_number">
                        безкоштовно
                    </p>
                </div>
                <div class="prices_item fw">
                    <p class="prices_description">
                        Клінінг квартири
                    </p>
                    <p class="prices_number">
                        від 500 грн.
                    </p>
                </div>
                <div class="prices_item fw">
                    <p class="prices_description">
                        Зберігання особистих речей
                    </p>
                    <p class="prices_number">
                        від 120 грн / місяць
                    </p>
                </div>
                <div class="prices_item fw">
                    <p class="prices_description">
                        Допомога у владнанні термінових побутових питань
                    </p>
                    <p class="prices_number">
                        договірна
                    </p>
                </div>
                <div class="prices_item fw">
                    <p class="prices_description">
                        Облаштування квартири меблями
                    </p>
                    <p class="prices_number">
                        договірна
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts/contact_form')

    @include('layouts.footer')

@stop
