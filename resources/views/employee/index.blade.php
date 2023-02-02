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
                <th>name</th>
                <th>password</th>
                <th>email</th>
                <th>contact</th>
                <th>type</th>
                <th>color</th>
                <th>hobby</th>
                <th>address</th>
                <th>experience</th>
                <th>dob</th>
                <th>time</th>
                <th>url</th>
                <th>photo</th>
                <th>address</th>
                <th>create</th>
                <th>update</th>
                <th>Action </th>
            </thead>
            <tbody class="text-center">
                @foreach ($documents as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->password }}</td>
                        <td> {{ $item->email }}</td>
                        <td>{{ $item->contact }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->hobby }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->experience }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->time }}</td>
                        <td>{{ $item->url }}</td>
                        <td> <img src="{{url('upload/profile/'.$item->photo)}}" width="50px" ></td>
                        <td>{{ $item->address }}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{route('employee.edit',['employee'=>$item->id])}}" class="btn btn-warning bi bi-pencil"></a>
                            <form action="{{route('employee.destroy',['employee'=>$item->id])}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger bi bi-trash"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
