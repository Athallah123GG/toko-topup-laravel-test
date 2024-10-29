<style>
    .position-absolute {
        position: absolute;
    }

    .top-0 {
        top: 0;
    }

    .start-50 {
        left: 50%;
    }

    .translate-middle-x {
        transform: translateX(-50%);
    }

    .mt-5 {
        margin-top: 3rem;
    }

    .text-white {
        color: #fff;
    }

    .fw-bold {
        font-weight: bold;
    }

    .nav-link {
        text-decoration: none;
    }

    footer {
        background: rgba(49, 69, 148, 0.3);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: 10px;
        color: white;
        padding: 0.1px 0;
        font-family: "Raleway", monospace;
    }

    .text-white {
        color: white;
    }

    .footer-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-column {
        flex: 1;
        padding: 10px;
        min-width: 200px;
    }

    .footer-column h3 {
        margin-top: 0;
    }

    .footer-column ul {
        list-style: none;
        padding: 0;
    }

    .footer-column ul li {
        margin-bottom: 10px;
    }

    .footer-column ul li a {
        color: white;
        text-decoration: none;
    }

    .footer-column ul li a:hover {
        text-decoration: underline;
    }

    .payment-methods img {
        max-width: 50px;
        margin-right: 10px;
    }

    .social-media img {
        max-width: 30px;
        margin-right: 10px;
    }

    .copy-right {
        font-family: "Raleway", monospace;
        text-align: center;
        padding: 15px;
        background-color: #ffae00;
    }

    .text-center {
        text-align: center;
    }

</style>

<footer>
    <div class="container my-5">

        <div class='row'>

            <div class="col-md-4">
                <div class="col mb-3 position-relative">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <img src="{{ asset('image/brand-file/INDEH.png') }}" alt="">
                    </a>
                    <p class="fw-bold text-white fs-6">PT.Global Raleway Id</p>
                    <p class="text-white">Website top up game termurah dan terpercaya</p>
                    <p class="fw-bold text-white fs-6">Wilayah & Bahasa</p>
                    <img src="{{ asset('image/country-file/id.webp') }}" alt="">
                </div>
            </div>

            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-12">
                        <div class="text-start">
                            <h4 class="fw-bold text-white">Pembayaran Menggunakan</h4>
                            <div class="row py-1">
                                <div class="col-md-2">
                                    <img src="{{ asset('image/payment-file/dana.webp') }}" alt="" class="" style="max-height: 100px; max-width: 100px;">
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('image/payment-file/gopay.webp') }}" alt="" class="" style="max-height: 100px; max-width: 100px;">
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('image/payment-file/shopeepay.webp') }}" alt="" class="" style="max-height: 100px; max-width: 100px;">
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('image/payment-file/ovo.webp') }}" alt="" class="" style="max-height: 100px; max-width: 100px;">
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('image/payment-file/bca.webp') }}" alt="" class="" style="max-height: 100px; max-width: 100px;">
                                </div>
                                <div class="col-md-2">
                                    <img src="{{ asset('image/payment-file/bni.webp') }}" alt="" class="" style="max-height: 100px; max-width: 100px;">
                                </div>
                                <p>+ 20 Lainnya</p>

                            </div>
                        </div>
                    </div>


                    <div class="">
                        <div class="row">
                            <div class="col-md-3 mb-3 mt-5">
                                <h4 class="fw-bold text-white">Hubungi Kami</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0 text-white"><i
                                                class="fa-regular fa-envelope mx-1"></i>Raleway12@gmail.com</a></li>
                                    <li class="nav-item mb-2"><a href="https://wa.me/6285749468373?text=I'm%20interested%20in%20your%20car%20for%20sale" class="nav-link p-0 text-white"><i
                                                class="fa-brands fa-whatsapp mx-1"></i>Chat WhatsApp</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mb-3 mt-5">
                                <h4 class="fw-bold text-white">Informasi</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Syarat & Ketentuan</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Kebijakan Privasi</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Blog</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Affiliate</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mb-3 mt-5">
                                <h4 class="fw-bold text-white">Dukungan</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Harga</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Tentang</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mb-3 mt-5">
                                <h4 class="fw-bold text-white">Ikuti Kami</h4>
                                <div class="social-media">
                                    <a href="#"><img src="{{ asset('image/socialmedia-file/icon-facebook.png') }}" alt="Facebook"></a>
                                    <a href="#"><img src="{{ asset('image/socialmedia-file/icon-instagram.png') }}" alt="Twitter"></a>
                                    <a href="#"><img src="{{ asset('image/socialmedia-file/icon-tiktok.png') }}" alt="Instagram"></a>
                                    <a href="#"><img src="{{ asset('image/socialmedia-file/icon-x-20231018.png') }}" alt="LinkedIn"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</footer>

<div class="copy-right text-left text-white">
    <div class="group" style="margin-bottom: 0;">
        <p class="text-center py-3 fw-bold text-dark caption-color" style="margin-bottom: 0;">&copy; 2024 Ralewayshop.
            Hak cipta di lindungi</p>
    </div>
</div>
