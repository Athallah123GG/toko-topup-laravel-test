@extends('layouts.master')

@section('page-css')

    <style>
        body{
            background: rgb(31,12,41);
background: linear-gradient(346deg, rgba(31,12,41,1) 10%, rgba(12,29,41,1) 67%, rgba(2,0,65,0.8232085070356268) 100%);
        }

        .paddin{
            margin-top:120px;
        }
    </style>

@endsection

@section('main-content')

    @include('layouts.navbar')

    <section class="container">
        <div class="paddin text-white" >
  <h1>i found emas</h1>
    <h1>i found emas</h1>
    <h1>i found emas</h1>
    <h1>i found emas</h1>
    <h1>i found emas</h1>
    <h1>i found emas</h1>
    <h1>i found emas</h1>
    <h1>i found emas</h1>
        </div>
    </section>



    @include('layouts.footer')

@endsection

@section('page-js')

@endsection
