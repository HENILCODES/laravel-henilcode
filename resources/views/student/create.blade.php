@extends('layout')
@section('body')
    <div class="container my-3">
        <div class="text-center">
            <h1>New Student</h1>
        </div>
        <div class="float-end w-25">
            @if ($errors->any())
                <div class="alert mt-5 alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form class="row g-3 w-50 m-auto" action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">Student name</spna>
                <input type="text" class="form-control" name="name" placeholder="Student name" id="sname">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Password</span>
                <input type="password" class="form-control" name="password" placeholder="Password" id="spassword">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Email</span>
                <input type="email" class="form-control" name="email" placeholder="email" id="sEmail">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Contact</span>
                <input type="tel" class="form-control" name="contact" placeholder="contact number" id="scontact">
            </div>

            <div class="input-group">
                <label class="input-group-text">Semester</label>
                <select class="form-select" name="semester[]" id="sem">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
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
                    <input class="form-check-input" type="radio" id="otherGender" checked name="gender"
                        value="other">
                    <label class="form-check-label" for="otherGender">
                        Other
                    </label>
                </div>
            </div>
            <div class="input-group w-50">
                <label class="input-group-text">favorite Color </label>
                <input type="color" name="color" id="fvcolor" class="form-control form-control-color">
            </div>
            <div class="input-group">
                <label class="input-group-text">interest in coding</label>
                <input type="range" class="form-control" id="intrest" name="intrest" min="0" max="100"
                    value="0">
            </div>
            <div class="input-group">
                <label class="input-group-text">Dob </label>
                <input type="date" name="dob" id="dob" class="form-control">
            </div>
            <div class="input-group">
                <label class="input-group-text">WebSite </label>
                <input type="url" class="form-control" id="website" name="url" placeholder="https://">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Photo</span>
                <input type="file" class="form-control form-control-lg" name="photo" accept="image/*">
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary w-50">Submit</button>
            </div>
        </form>
    </div>
@endsection