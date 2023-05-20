@extends('layouts.header')

@section('title')
    Smart Renting UA
@stop

@section('vite_scripts')
    @vite(['resources/sass/404.scss', 'resources/js/src/main.js'])
@stop

@section('content')

      <section class="not-found">
        <div class="container">
          <div class="not-found_wrap">
            <h1>
              404
            </h1>
            <h2>
              Сторінка не знайдена
            </h2>
            <a href="{{ route('index') }}" class="site-btn">На головну</a>
          </div>
        </div>
      </section>

@stop

