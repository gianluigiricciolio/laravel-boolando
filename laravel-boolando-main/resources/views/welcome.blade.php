@extends('layouts.app')

@section('main')
<ul class="d-flex flex-wrap">
    @foreach($products as $product)
    <li class="col-4">
        <div class="mx-3 my-4">@include('shared.product')</div>
    </li>
    @endforeach
</ul>
@endsection