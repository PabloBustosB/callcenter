@extends('layouts.app')
@section('content')
<!-- banner bg main start -->
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                @include('components.rowPromos')
                @include('components.rowLlamadas')
                @include('components.rowInternet')
            </div>
        </div>
    </div>
</div>
@endsection