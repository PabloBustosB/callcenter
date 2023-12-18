@extends('layouts.app')
@section('content')
<!-- banner bg main start -->
<div class="fashion_section">
    {{-- {{Auth::user()->direccion}} --}}
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                @include('components.rowLlamadas')
                @include('components.rowInternet')
                @include('components.rowPromos')
            </div>
        </div>
    </div>
</div>
@endsection