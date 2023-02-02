@extends('layout')
@section('body')
    <div class="container mt-5">
        <div class=" p-4 d-flex justify-content-center pb-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">User Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                    @error('name')<div class="text-end text-danger">{{$message}}</div>@enderror
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" />
                    @error('email')<div class="text-end text-danger">{{$message}}</div>@enderror
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                    @error('password')<div class="text-end text-danger">{{$message}}</div>@enderror
                </div>
                <div class="input-group">
                    <label class="input-group-text">Roll</label>
                    <div class="form-check m-2">
                        <input class="form-check-input" type="radio" id="admin" name="roll" value="admin">
                        <label class="form-check-label" for="admin">
                            admin
                        </label>
                    </div>
                    <div class="form-check m-2">
                        <input class="form-check-input" type="radio" checked id="user" name="roll" value="user">
                        <label class="form-check-label" for="user" >
                            user
                        </label>
                    </div>
                </div>
                @error('roll')<div class="text-end text-danger">{{$message}}</div>@enderror
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Add User</button>
                </div>
            </form>
        </div>
    </div>
@endsection
