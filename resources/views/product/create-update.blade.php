<title>Product | Edit</title>
@extends('layout')
@section('body')
    <div class="container my-3 w-25 mt-5 ">
        @if (isset($product))
            @include('product.edit')
        @else
            @include('product.create')
        @endif
        @if ($errors->any())
        <div class="mt-3 alert alert-danger">
            {{-- {{ print_r($errors) }} --}}
            <ul>
                @foreach ($errors->all() as $item)
                    <li class="text-dark"> {{ $item }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
@endsection
