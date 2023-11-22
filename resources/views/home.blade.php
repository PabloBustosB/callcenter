@extends('layouts.app')
@section('content')
    <!-- banner bg main start -->
    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Nuestras promociones</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img">
                                            <img src="{{ asset('homes/images/promo1.jpg') }}"
                                                style="width: 80%; height: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/promo2.jpg') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/promo3.jpg') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="container">
                        <h1 class="fashion_taital">Planes de Internet</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img">
                                            <img src="{{ asset('homes/images/pi1.png') }}"
                                                style="width: 80%; height: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/pi2.png') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/pi3.png') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class="container">
                        <h1 class="fashion_taital">Planes de Llamadas</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img">
                                            <img src="{{ asset('homes/images/pc2.png') }}"
                                                style="width: 80%; height: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/pc2.png') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/pc3.png') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="container">
                        <h1 class="fashion_taital">Planes de tv Cable</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img">
                                            <img src="{{ asset('homes/images/ptv1.png') }}"
                                                style="width: 80%; height: 300px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/ptv2.png') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <div class="tshirt_img"><img src="{{ asset('homes/images/ptv3.png') }}"
                                                style="width: 80%; height: 300px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
