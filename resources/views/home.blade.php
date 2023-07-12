@extends('layouts.app')
@section('content')
{{-- <h1>
    Hola, bienvenido @auth {{Auth::user()->nombre}} @endauth
</h1>
</br>
<a href="{{ route('logout') }}">Cerrar Session</a> --}}
    <!-- banner bg main start -->
    <div class="fashion_section">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
              <div class="carousel-item active">
                 <div class="container">
                    <h1 class="fashion_taital">Nuestros planes y promociones</h1>
                    <div class="fashion_section_2">
                       <div class="row">
                          <div class="col-lg-4 col-sm-4">
                             <div class="box_main">
                                <h4 class="shirt_text">Plan de Internet</h4>
                                <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                <div class="tshirt_img">
                                    <img src="{{ asset('homes/images/tshirt-img.png')}}"></div>
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="">Buy Now</a></div>
                                   <div class="seemore_bt"><a href="">See More</a></div>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-sm-4">
                             <div class="box_main">
                                <h4 class="shirt_text">Man -shirt</h4>
                                <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                <div class="tshirt_img"><img src="{{ asset('homes/images/dress-shirt-img.png')}}"></div>
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">Buy Now</a></div>
                                   <div class="seemore_bt"><a href="#">See More</a></div>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-sm-4">
                             <div class="box_main">
                                <h4 class="shirt_text">Woman Scart</h4>
                                <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                <div class="tshirt_img"><img src="{{ asset('homes/images/women-clothes-img.png')}}"></div>
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">Buy Now</a></div>
                                   <div class="seemore_bt"><a href="#">See More</a></div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>

                 <div class="container">
                    <h1 class="fashion_taital">Nuestros planes y promociones</h1>
                    <div class="fashion_section_2">
                       <div class="row">
                          <div class="col-lg-4 col-sm-4">
                             <div class="box_main">
                                <h4 class="shirt_text">Plan de Internet</h4>
                                <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                <div class="tshirt_img">
                                    <img src="{{ asset('homes/images/tshirt-img.png')}}"></div>
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="">Buy Now</a></div>
                                   <div class="seemore_bt"><a href="">See More</a></div>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-sm-4">
                             <div class="box_main">
                                <h4 class="shirt_text">Man -shirt</h4>
                                <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                <div class="tshirt_img"><img src="{{ asset('homes/images/dress-shirt-img.png')}}"></div>
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">Buy Now</a></div>
                                   <div class="seemore_bt"><a href="#">See More</a></div>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-4 col-sm-4">
                             <div class="box_main">
                                <h4 class="shirt_text">Woman Scart</h4>
                                <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                <div class="tshirt_img"><img src="{{ asset('homes/images/women-clothes-img.png')}}"></div>
                                <div class="btn_main">
                                   <div class="buy_bt"><a href="#">Buy Now</a></div>
                                   <div class="seemore_bt"><a href="#">See More</a></div>
                                </div>
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