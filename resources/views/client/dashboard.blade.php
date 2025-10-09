@extends('template_frontend.layout')
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
