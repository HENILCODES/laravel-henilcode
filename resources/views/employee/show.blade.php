@extends('layout')
@section('body')
    <style>
        .Fav_color {
            width: 50px;
            height: 50px;
            padding: 10px;
            margin: auto;
        }
    </style>
    <div class="p-1">
        <div class="p-3 d-flex  mx-5">
            <a class="ms-2 btn btn-success bi bi-arrow-left-square fs-4" href="{{ route('student.index') }}"></a>
            <div class="text-center w-100">
                <h2>Employee All Data</h2>
            </div>
        </div>
        <table class="table table-primary table-responsive table-bordered">
            <thead class="table-borderless text-center table-dark">
                <th>Update</th>
                <th>Create</th>
                <th>Action</a>
                </th>
            </thead>
            <tbody>
                <tr>
                   
            </tbody>
        </table>
    </div>
@endsection
