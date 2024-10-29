@extends('layouts.master')

@section('page-css')

<style>
    .paddin {
        margin-top: 120px;
        margin-bottom: 50px;
    }

    body {
        background: rgb(31, 12, 41);
        background: linear-gradient(346deg, rgba(31, 12, 41, 1) 10%, rgba(12, 29, 41, 1) 67%, rgba(2, 0, 65, 0.8232085070356268) 100%);
    }

    .form-submission {
        font-family: "Lexend", sans-serif;
    }

    .caption-color {
        color: #ffae00;
    }

    .white-text {
        color: white;
    }

    .card-color {
        background: rgba(36, 47, 83, 0.7);
        /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: 10px;
    }

    .yadi {
        background: rgba( 223, 225, 154, 0.2 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 8px );
-webkit-backdrop-filter: blur( 8px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );

    }

</style>

@endsection

@section('main-content')

@include('layouts.navbar')

<section class="container paddin form-submission">
    <div class="row">

        <div class="col-lg-6 mt-5">

        </div>
    </div>

    <div class="container-fluid px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0 yadi rounded-3 shadow-lg overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-sm-6 d-none d-sm-block bg-image">
                                <center>
                                    <img src="{{ asset('image/asset-file/unipin_faq.png') }}" alt=""
                                        style="width: 350px;margin-top: 80px; ">

                                </center>
                            </div>
                            <div class="col-sm-6 p-4">
                                <div class="text-center text-white">
                                    <div class="h3 fw-light">Contact Form</div>
                                    <p class="mb-4  ">Beri Kritik & Saran Dong Bang</p>
                                </div>


                                <form action="https://formspree.io/f/mrgnvbkw" method="POST">

                                    <!-- Name Input -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name"
                                            data-sb-validations="required" />
                                        <label for="name">Name</label>
                                    </div>

                                    {{-- Email Input --}}
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="email" id="name" type="text"
                                            placeholder="Name" data-sb-validations="required" />
                                        <label for="name">Email</label>
                                    </div>



                                    <!-- Message Input -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Message"
                                            name="message" style="height: 10rem;"
                                            data-sb-validations="required"></textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Message is
                                            required.</div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="d-grid">

                                        <button type="submit" style="background-color: #ffae00;" class="btn text-white ">Send</button>

                                    </div>
                                </form>
                                <!-- End of contact form -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<section class="container paddin">
    <div class="my-5">
        <p class="caption-color" style="margin-bottom: 0;">DUKUNGAN PELANGGAN </p>
        <h3 class="fw-bold white-text" style="margin-top: 0;">HUBUNGI KAMI</h3>
    </div>

    <div class="row">
        <div class="col-lg-2">
            <div class="card card-color mx-3 mt-4" style="width: 10rem; position: relative; z-index: 1;">
                <center>
                    <img src="{{ asset('image/socialmedia-file/cs-whatsapp.svg') }}" class="card-img-top mt-4"
                        style="width: 60px; height: 60px;" alt="...">
                </center>

                <div class="card-body">
                    <div class="group" style="margin-bottom: 0;">
                        <p class="caption-color text-center" style="margin-bottom: 0;">WhatsApp</p>
                        {{-- <h3 class="fw-bold text-center text-white" style="margin-top: 0;">Undawn</h3> --}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card card-color mx-3 mt-4" style="width: 10rem; position: relative; z-index: 1;">
                <center>
                    <img src="{{ asset('image/socialmedia-file/cs-email.svg') }}" class="card-img-top mt-4"
                        style="width: 60px; height: 60px;" alt="...">
                </center>

                <div class="card-body">
                    <div class="group" style="margin-bottom: 0;">
                        <p class="caption-color text-center" style="margin-bottom: 0;">Email</p>
                        {{-- <h3 class="fw-bold text-center text-white" style="margin-top: 0;">Undawn</h3> --}}
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card card-color mx-3 mt-4" style="width: 10rem; position: relative; z-index: 1;">
                <center>
                    <img src="{{ asset('image/socialmedia-file/icon-facebook.png') }}" class="card-img-top mt-4"
                        style="width: 60px; height: 60px;" alt="...">
                </center>

                <div class="card-body">
                    <div class="group" style="margin-bottom: 0;">
                        <p class="caption-color text-center" style="margin-bottom: 0;">Facebook</p>
                        {{-- <h3 class="fw-bold text-center text-white" style="margin-top: 0;">Undawn</h3> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')

@endsection

@section('page-js')

@endsection
