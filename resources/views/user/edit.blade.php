@extends('layout')
@section('body')
    <div class="container w-25 mt-5">
        <div class="text-center">
            <h1>Update User</h1>
            <div class="text-start">
                <a class="text-start btn btn-success bi bi-arrow-left-square fs-5" href="{{ route('user.index') }}"></a>
            </div>
        </div>
        <div class="p-4 pb-4">
            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
                @method('put')
                @include('user.form')
            </form>
        </div>
    </div>
@endsection
