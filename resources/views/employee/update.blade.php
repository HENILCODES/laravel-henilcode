@extends('layout')
<title>Update Student Form</title>
@section('body')
    <div class="container my-3">
        <div class="text-center">
            <h1>Update Employee</h1>
        </div>
        <div class="float-end">
            <img src="{{asset('storage/upload/profile/'.$employee->photo)}}" width="200px" height="200px"> 
        </div>
        <form class="row g-3 w-50 m-auto" action="{{ route('employee.update', ['employee' => $employee->id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">Employee name</spna>
                <input type="text" class="form-control" name="name" value="{{ $employee->name }}"
                    placeholder="Employee name">
            </div>
            @error('name') <div class="text-end text-danger">{{$message}}</div> @enderror
            
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Password</span>
                <input type="password" class="form-control" value="{{ $employee->password }}" name="password"
                placeholder="Password">
            </div>
            @error('password') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Email</span>
                <input type="email" class="form-control" name="email" placeholder="email"
                value="{{ $employee->email }}">
            </div>
            @error('email') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Contact</span>
                <input type="tel" class="form-control" name="contact" placeholder="contact number"
                    value="{{ $employee->contact }}">
            </div>
            @error('contact') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <label class="input-group-text">Job Type</label>
                <select class="form-select" name="type">
                    <option value="Full time">Full Time</option>
                    <option value="part time">Part Time</option>
                    <option value="Remote">Remote</option>
                </select>
            </div>
            @error('type') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <label class="input-group-text">Hobby</label>
                <div class="form-check m-2">
                    <input class="form-check-input" name="hobby[]" id="programming" type="checkbox" value="Programming">
                    <label class="form-check-label" for="programming">
                        Programming
                    </label>
                </div>
                <div class="form-check m-2">
                    <input class="form-check-input" name="hobby[]" id="cricket" type="checkbox" value="Cricket">
                    <label class="form-check-label" for="cricket">
                        Cricket
                    </label>
                </div>
                <div class="form-check m-2">
                    <input class="form-check-input" name="hobby[]" id="football" type="checkbox" value="Football">
                    <label class="form-check-label" for="football">
                        Football
                    </label>
                </div>
                <div class="form-check m-2">
                    <input checked class="form-check-input" name="hobby[]" id="otherHobby" type="checkbox" value="other">
                    <label class="form-check-label" for="otherHobby">
                        Other
                    </label>
                </div>
            </div>
            @error('hobby') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <label class="input-group-text">Gender</label>
                <div class="form-check m-2">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check m-2">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
                <div class="form-check m-2">
                    <input class="form-check-input" type="radio" id="otherGender" checked name="gender" value="other">
                    <label class="form-check-label" for="otherGender">
                        Other
                    </label>
                </div>
            </div>
            @error('gender') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group w-50">
                <label class="input-group-text">favorite Color </label>
                <input type="color" name="color" value="{{$employee->color}}" class="form-control form-control-color">
            </div>
            @error('color') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <label class="input-group-text">Experience</label>
                <input type="range" class="form-control" name="experience" min="0" max="100"
                value="{{$employee->experience}}">
            </div>
            @error('experience') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <label class="input-group-text">Date Of Birth </label>
                <input type="date" name="dob" value="{{$employee->dob}}" class="form-control">
            </div>
            @error('dob') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <label class="input-group-text">Time </label>
                <input type="time" name="time" class="form-control" value="{{$employee->time}}">
            </div>
            @error('time') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <label class="input-group-text">WebSite </label>
                <input type="url" class="form-control" id="website" name="url" value="{{$employee->url}}" placeholder="https://">
            </div>
            @error('url') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Photo</span>
                <input type="file" class="form-control form-control-lg" name="photo" accept="image/*">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Address</span>
                <textarea class="form-control form-control-lg" name="address">{{$employee->address}}</textarea>
            </div>
            @error('address') <div class="text-end text-danger">{{$message}}</div> @enderror
            <div class="mt-5 text-center">
                <button class="btn btn-primary w-50">Update</button>
            </div>
        </form>
    </div>
@endsection
