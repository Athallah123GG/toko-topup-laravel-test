@extends('layouts.master')

@section('page-css')
    <style>
        body{
            background: rgb(31,12,41);
background: linear-gradient(346deg, rgba(31,12,41,1) 10%, rgba(12,29,41,1) 67%, rgba(2,0,65,0.8232085070356268) 100%);
        }

        .paddin{
            margin-top: 120px;
        }

        .ya{
            font-family: "Poppins",sans-serif;
        }
    </style>
@endsection

@section('main-content')

    @include('layouts.navbar')

    <div class="container paddin ya text-white">
        <div class="">
            <h1 class="text-white">INFORMASI AKUN</h1>
        </div>
        <p >name : {{ auth()->user()->name }}  </p>
        <p >email : {{ auth()->user()->email }} </p>
        <p >dibuat : {{ auth()->user()->created_at }} </p>
        <button type="button" class="btn mb-4 btn-outline-warning rounded-5 mx-2"><a href="{{ route('unauthenticate') }}" class="nav-link">Logout</a></button>

    </div>

    @include('layouts.footer')


@endsection

@section('page-js')

@endsection
