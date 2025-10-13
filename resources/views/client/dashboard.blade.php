@extends('template_frontend.layout')
@section('content_style')
    <link rel="stylesheet" href="{{ asset('template/css/theme-0fe2be841.css') }}" media="all">
@endsection
@section('content')
     mostrar usuarios {{ Auth::user()->name }} <br>
     mostrar email {{ Auth::user()->email }} <br>

     {{-- cerrar session  --}}
     <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
         Cerrar sesion
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>
     
@endsection
@section('content_script')
<script src="{{ asset('template/js/bottom-695441840.js') }}"></script>
@endsection
