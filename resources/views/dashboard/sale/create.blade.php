

@extends('layouts.master')

@section('page-css')

@endsection

@section('main-content')

<form action="{{ route('sale.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container w-50">
         <div class="form-group" >
      <label for="">Name Item</label>
      <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" name="name_item">
    </div>
    <div class="form-group">
      <label for="">Amount Item</label>
      <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" name="total_item">
    </div>
    <div class="form-group">
      <label for="">Price Normal</label>
      <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" name="price_normal">
    </div>
    <div class="form-group">
      <label for="">Price Promo</label>
      <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" name="price_promo">
    </div>
    <div class="form-group">
      <label for="">Stock</label>
      <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="" name="stock">
    </div>
    <div class="form-group py-2">
        <label for="message">Pictures</label>
        <div class="custom-file">

            <input type="file" class="custom-file-input" id="inputGroupFile01" value=""
                aria-describedby="inputGroupFileAddon01" name="pictures">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

@endsection

@section('page-js')

@endsection
