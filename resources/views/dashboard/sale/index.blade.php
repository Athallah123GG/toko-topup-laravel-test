@extends('layouts.master')

@section('page-css')

@endsection

@section('main-content')
<h1>Index sale Bos</h1>
<a href="{{ route('sale.create') }}">Add Sale</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Item</th>
            <th scope="col">Amount</th>
            <th scope="col">Harga Normal</th>
            <th scope="col">Harga Promo</th>
            <th scope="col">Stock</th>
            <th scope="col">Pictures</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $sale->name_item }}</td>
            <td>{{ $sale->total_item }}</td>
            <td>{{ $sale->price_normal }}</td>
            <td>{{ $sale->price_promo }}</td>
            <td>{{ $sale->stock }}</td>
            <td>
                <img src="{{ asset('storage/sale/sale_covers/'.$sale->pictures) }}" alt="" style="max-width: 200px;">
            </td>
            <td>

                <a href="">Edit</a>

                <form action="{{ route('sale.destroy', $sale->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="">Delete</button>
                </form>

                {{-- <form action="{{ route('sale.destroy', $sale->id) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="">Delete</button>
                </form> --}}

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $sales->links() }} --}}

@endsection

@section('page-js')

@endsection
