@extends('layout')
@section('body')
    <div class="container" style="width: 600px">
        <div class="my-5">
            <div class="text-center">
                <h1>User Detail</h1>
            </div>
            <div class="text-start">
                <a class="text-start btn btn-success bi bi-arrow-left-square fs-5" href="{{ route('user.index') }}"></a>
            </div>
        </div>
        <table class="table table-light table-striped">
            <tr>
                <td class="ps-5 fw-bold">Name</td>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <td class="ps-5 fw-bold">Email</td>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <td class="ps-5 fw-bold">password</td>
                <td>{{ Str::mask($user->password, '*', 1, -1) }}</td>
            </tr>
            <tr>
                <td class="ps-5 fw-bold">Roll</td>
                <td>{{ $user->roll }}</td>
            </tr>
            <tr>
                <td class="ps-5 fw-bold">state</td>
                <td>{{ $user->state }}</td>
            </tr>
            <tr>
                <td class="ps-5 fw-bold">create</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            <tr>
                <td class="ps-5 fw-bold">Update</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
            <tr>
                <td colspan="2" class="bg-light text-center">
                    <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                        <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-warning bi bi-pencil me-4"></a>
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger bi bi-trash"></button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
@endsection
