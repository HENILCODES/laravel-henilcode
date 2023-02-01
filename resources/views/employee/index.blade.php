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
        <table class="table table-primary table-responsive table-bordered">
            <div class="p-3 d-flex  mx-5">
                <div class="text-center w-100">
                    <h1>Student</h1>
                </div>
                <a class="ms-2 btn btn-success bi bi-plus-square fs-3" href="{{ route('employee.create') }}"></a>
            </div>
            <thead class="table-borderless text-center table-dark">
                <th>ID</th>
                <th>Action </th>
            </thead>
            <tbody class="text-center">
                <tr>
                    
                </tr>
            </tbody>
        </table>
    </div>
@endsection
