@extends('layout')
@section('body')
    <div class="container mt-5 w-25">
        <div class="text-center">
            <h1>Create User</h1>
            <div class="text-start">
                <a class="text-start btn btn-success bi bi-arrow-left-square fs-5" href="{{ route('user.index') }}"></a>
            </div>
        </div>
        <div class="p-4 pb-4">
            <form action="{{ route('user.store') }}" method="POST">
                @include('user.form')
            </form>
        </div>
    </div>
@endsection
