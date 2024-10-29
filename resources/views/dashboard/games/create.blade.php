

@extends('layouts.master')

@section('page-css')

@endsection

@section('main-content')

<form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container w-50">
         <div class="form-group" >
      <label for="exampleInputEmail1">Nama Game</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Game" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Developer</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Developer" name="developer">
    </div>
    <div class="form-group py-2">
        <label for="message">Foto</label>
        <div class="custom-file">

            <input type="file" class="custom-file-input" id="inputGroupFile01" value=""
                aria-describedby="inputGroupFileAddon01" name="image">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection

@section('page-js')

@endsection
