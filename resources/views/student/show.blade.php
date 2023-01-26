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
                <h2>Student All Data</h2>
            </div>
        </div>
        <table class="table table-primary table-responsive table-bordered">
            <thead class="table-borderless text-center table-dark">
                <th>ID</th>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Password </th>
                <th>Contact</th>
                <th>Semester</th>
                <th>Hobby</th>
                <th>Gender</th>
                <th>Favorite Color</th>
                <th>Intrest in coding</th>
                <th>Date of Birth</th>
                <th>Website</th>
                <th>Photo</th>
                <th>Action</a>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>
                        <div class="Fav_color shadow-lg border border-dark rounded"
                            style="background-color: aqua !important;"></div>
                    </td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td class="text-center">
                        <form action="{{ route('student.destroy', ['student' => '1']) }}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{ route('student.edit', ['student' => '1']) }}"
                                class="bi bi-pencil btn btn-warning"></a>
                            <button type="submit" class="bi bi-trash btn btn-danger"></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
