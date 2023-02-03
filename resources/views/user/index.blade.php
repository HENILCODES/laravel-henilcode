@extends('layout')
@section('body')
    <div class="px-5">
        <table class="table table-primary table-responsive table-bordered">
            <div class="p-3 d-flex  mx-5">
                <div class="text-center w-100">
                    <h1>User Details</h1>
                </div>
                <a class="ms-2 btn btn-success bi bi-plus-square fs-3" href="{{ route('user.create') }}"></a>
            </div>
            <thead class="table-borderless text-center table-dark">
                <th>name</th>
                <th>email</th>
                <th>roll</th>
                <th>state</th>
                <th>Action </th>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $item)
                    <tr class="text-center">
                        <td><a class="text-dark text-decoration-none" href="{{route('user.show', ['user' => $item->id]) }}"> {{ $item->name }}</a></td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->roll }}</td>
                        <td>{{ $item->state }}</td>
                        <td>
                            <form action="{{ route('user.destroy', ['user' => $item->id]) }}" method="post">
                                <a href="{{ route('user.show', ['user' => $item->id]) }}"
                                    class="btn btn-primary bi bi-eye"></a>
                                <a href="{{ route('user.edit', ['user' => $item->id]) }}"
                                    class="btn btn-warning bi bi-pencil"></a>
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
