@extends('template_frontend.layout')
@section('content')
    <div data-elementor-type="page" data-elementor-id="152010000"
        class="elementor elementor-152010000 elementor-bc-flex-widget" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">

                @include('home.slider')

                @include('home.productos_destacados')

                @include('home.banners')
                
                @include('home.informacion')

                @include('home.testimonios')

                @include('home.blog')

                @include('home.otros_productos')
                
                @include('home.ver_todo')
            </div>
        </div>
    </div>
@endsection
