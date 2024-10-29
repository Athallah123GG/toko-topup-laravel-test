<style>
        nav {
            /* font-family: "JetBrains Mono", monospace; */
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            background: rgba( 217, 217, 217, 0.3 );
            /* box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); */
            backdrop-filter: blur( 20px );
            -webkit-backdrop-filter: blur( 20px );
            border-radius: 10px;
        }

        .nav-item.active .nav-link {
        color: #ffae00; /* Warna teks aktif */
        font-weight: bold; Efek tebal pada teks aktif
        }


        .box {
            width: 350px;
            height: 50px;
            background-color: white;
            border-radius: 30px;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .box>i {

            font-size: 20px;

            color: #777;

        }

        .box>input {

            flex: 1;

            height: 40px;

            border: none;

            outline: none;

            font-size: 18px;

            padding-left: 10px;


        }


</style>
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid container">
        <a href=""><img src="{{ asset('image/brand-file/INDEH.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-3">
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">
                    <a class="nav-link" href="{{ route('welcome') }}"><i class="fa-solid fa-house mx-1"></i>Beranda</a>
                </li>
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/promo') ? 'active' : ''; ?>">
                    <a class="nav-link" href="{{ route('promo') }}"><i class="fa-solid fa-tag mx-1"></i>Promo</a>
                </li>
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/game') ? 'active' : ''; ?>">
                    <a class="nav-link" href="{{ route('game') }}"><i class="fa-solid fa-gamepad mx-1"></i>Game</a>
                </li>
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/transaksi') ? 'active' : ''; ?>">
                    <a class="nav-link" href="{{ route('transaksi') }}"><i class="fa-regular fa-clipboard mx-1"></i>Transaksi</a>
                </li>

            </ul>
            <form action="" class="d-flex" role="search">
                <div class="box">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" class="" placeholder="Cari Game ..." name="">
                </div>

                @auth

                <button type="button" class="btn btn-outline-warning rounded-5 mx-2"><a href="{{ route('account') }}" class="nav-link"><i class="fa-solid fa-user-tie fs-4 mx-2 text-black"></i></a></button>


                @else

                <button type="button" class="btn btn-outline-warning rounded-5 mx-2"><a href="{{ route('login') }}" class="nav-link">Masuk</a></button>

                @endauth

                {{-- @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                </li>


                @endauth --}}

            </form>

        </div>
    </div>
</nav>
