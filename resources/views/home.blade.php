@extends('layouts.app')

@section('content')
<h1>
    Hola, bienvenido @auth {{Auth::user()->nombre}} @endauth
</h1>
</br>
<a href="{{ route('logout') }}">Cerrar Session</a>
@endsection