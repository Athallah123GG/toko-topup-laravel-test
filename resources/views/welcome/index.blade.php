@extends('layouts.master')

@section('page-css')

<style>
    body {
        background: rgb(31, 12, 41);
        background: linear-gradient(346deg, rgba(31, 12, 41, 1) 10%, rgba(12, 29, 41, 1) 67%, rgba(2, 0, 65, 0.8232085070356268) 100%);
    }

    /* .swiper-container {
            width: 100%;
            height: 100%;
        } */

    .card-color {
        background: rgba(36, 47, 83, 0.7);
        /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: 10px;
    }

    .poppins-font {
        font-family: "Poppins", sans-serif;

    }

    .caption-color {
        color: #ffae00;
    }

    .white-text {
        color: white;
    }

    /* banner promo */
    .paddin {
        margin-top: 120px;
    }

    /* .warnasale{
        background: rgba( 255, 174, 0, 0.3 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 13px );
-webkit-backdrop-filter: blur( 13px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 ); */
    }

</style>

@endsection

@section('main-content')

@include('layouts.navbar')

<section class="container paddin mb-5">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <img class="swiper-slide rounded-5 mx-2" style="max-width: 1400px; max-height: 500px;"
                src="{{ asset('image/swiper-file/RALEWAYSHOP.COM.jpg') }}" alt="">
            <img class="swiper-slide rounded-5 mx-2" style="max-width: 1400px; max-height: 500px;"
                src="{{ asset('image/swiper-file/RALEWAYSHOPd.jpg') }}" alt="">
            <img class="swiper-slide rounded-5 mx-2" style="max-width: 1400px; max-height: 500px;"
                src="{{ asset('image/swiper-file/HB-LGxShopeepay.webp') }}" alt="">
            <img class="swiper-slide rounded-5 mx-2" style="max-width: 1400px; max-height: 500px;"
                src="{{ asset('image/swiper-file/Sololeveling-Banner.webp') }}" alt="">
            <img class="swiper-slide rounded-5 mx-2" style="max-width: 1400px; max-height: 500px;"
                src="{{ asset('image/swiper-file/1448x520-HB-Lapakgaming-Coins.webp') }}" alt="">
            <!-- Add more slides as needed -->


        </div>
        {{-- <div class="swiper-pagination"></div> --}}
    </div>
</section>

<section class="container poppins-font">

    <div class="group" style="margin-bottom: 0;">
        <p class="caption-color" style="margin-bottom: 0;">PROMO </p>
        <h3 class="fw-bold white-text" style="margin-top: 0;">FLASH SALE ⚡</h3>

        <div class="row" style="overflow-x: auto;">
            <!-- Kolom untuk daftar card -->

            <div class="container">
                <div class="row">

                    <div class="col-md-4 my-auto"
                        style="background-image: url('{{ asset('image/swiper-file/flashsale.png') }}'); background-size: cover; background-position: relative; height: 300px; overflow-x: visible;">
                        <!-- Tidak perlu tag <img> di sini -->
                    </div>

                    <div class="col-md-8">
                        <div class="row">

                            <div class="col-md-12 mt-3">
                                <div class="row">

                                    @foreach ($sales as $sale)

                                    <div class="col-md-3">
                                        <div class="card mx-3 mt-4"
                                            style="width: 13rem; border: 1px solid rgba(255, 255, 255, 0.648);">
                                            <div class="card warnasale">

                                                <center>
                                                    <img src="{{ asset('storage/sale/sale_covers/' .$sale->pictures) }}" class="card-img-top mt-3"
                                                    alt=""  style="width: 150px; height: 150px; border-radius:20px ;  " />
                                                </center>

                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="small"><a href="#!" class="text-muted">{{ $sale->name_item }}</a></p>
                                                        <p class="small text-danger"><s>{{ $sale->price_normal }}</s></p>
                                                    </div>

                                                    <div class="d-flex justify-content-between mb-3">
                                                        <h5 class="mb-0">{{ $sale->total_item }}</h5>
                                                        <h5 class="text-dark mb-0">{{ $sale->price_promo }}</h5>
                                                    </div>

                                                    <div class="d-flex justify-content-between mb-2">
                                                        <p class="text-muted mb-0">Stock : <span class="fw-bold">{{ $sale->stock }}</span></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach





                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>



        </div>
    </div>
</section>





<section class="container poppins-font my-5">
    <div class="group" style="margin-bottom: 0;">
        <p class="caption-color" style="margin-bottom: 0;">GAME POPULER</p>
        <h3 class="fw-bold white-text" style="margin-top: 0;">LAGI TREND 🔥</h3>
    </div>

    <div class="container my-5">
        <div class="row">

            @foreach ($games as $game)

            <div class="col-lg-2 ms-3">
                <div class="card card-color mx-3 mt-4"
                    style="width: 13rem; border: 1px solid rgba(255, 255, 255, 0.648);">
                    <div class="card-body">
                        <center>
                            <img src="{{ asset('storage/games/games_covers/'.$game->image) }}"
                                class="card-img-top rounded-3"
                                style="width: 150px; height: 150px; position: relative ; top: -50px;" alt="...">
                        </center>
                        <div class="group" style="margin-bottom: 0;">
                            <p class="caption-color text-center" style="margin-bottom: 0;">{{ $game->developer }}</p>
                            <h3 class="fw-bold text-center text-white" style="margin-top: 0;">{{ $game->name }}</h3>
                        </div>
                        <center>
                            <a href="#" class="btn btn-outline-warning w-75">Top Up</a>
                        </center>
                    </div>
                </div>
            </div>

            @endforeach


        </div>

    </div>
</section>

<section class="container poppins-font my-5">
    <div class="group" style="margin-bottom: 0;">
        <p class="caption-color" style="margin-bottom: 0;">HIBURAN</p>
        <h3 class="fw-bold white-text" style="margin-top: 0;">ENTERTAINMENT </h3>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-2 ms-3">
                <div class="card card-color mx-3 mt-4"
                    style="width: 13rem; border: 1px solid rgba(255, 255, 255, 0.648);">
                    <div class="card-body">
                        <center>
                            <img src="{{ asset('image/game-file/undawn.jpg') }}" class="card-img-top rounded-3"
                                style="width: 150px; height: 150px; position: relative ; top: -50px;" alt="...">
                        </center>
                        <div class="group" style="margin-bottom: 0;">
                            <p class="caption-color text-center" style="margin-bottom: 0;">Garena</p>
                            <h3 class="fw-bold text-center text-white" style="margin-top: 0;">Undawn</h3>
                        </div>
                        <center>
                            <a href="#" class="btn btn-outline-warning w-75">Top Up</a>
                        </center>
                    </div>
                </div>





            </div>
        </div>

    </div>




</section>



@include('layouts.footer')

@endsection

@section('page-js')

<script>
    var swiper = new Swiper('.swiper-container', {
        cssMode: true,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

</script>


@endsection
