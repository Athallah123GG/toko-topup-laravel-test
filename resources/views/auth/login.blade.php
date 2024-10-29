<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Page</title>
</head>
<body>

    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Login</h3>
                        </div>
                        <div class="card-body">
                            <!-- Formulir Login -->
                            <form action="{{ route ('authenticate') }}" method="post" class="">
                                @csrf

                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Masukkan email pengguna" required name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi" required name="password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Ingat saya</label>
                                </div>
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block">Masuk</button>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <small>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
