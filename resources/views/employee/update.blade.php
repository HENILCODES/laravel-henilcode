@extends('layout')
<title>Update Student Form</title>
@section('body')
    <div class="container my-3">
        <div class="text-center">
            <h1>Update Employee</h1>
        </div>
        <form class="row g-3 w-50 m-auto" action="{{ route('employee.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">Employee name</spna>
                <input type="text" class="form-control" name="name" placeholder="Employee name">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Password</span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Email</span>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Contact</span>
                <input type="tel" class="form-control" name="contact" placeholder="contact number">
            </div>
            <div class="input-group">
                <label class="input-group-text">Job Type</label>
                <select class="form-select" name="type">
                    <option value="Full time">Full Time</option>
                    <option value="part time">Part Time</option>
                    <option value="Remote">Remote</option>
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
                    <input class="form-check-input" type="radio" id="otherGender" checked name="gender" value="other">
                    <label class="form-check-label" for="otherGender">
                        Other
                    </label>
                </div>
            </div>
            <div class="input-group w-50">
                <label class="input-group-text">favorite Color </label>
                <input type="color" name="color" class="form-control form-control-color">
            </div>
            <div class="input-group">
                <label class="input-group-text">Experience</label>
                <input type="range" class="form-control" name="experience" min="0" max="100"
                    value="0">
            </div>
            <div class="input-group">
                <label class="input-group-text">Date Of Birth </label>
                <input type="date" name="dob" class="form-control">
            </div>
            <div class="input-group">
                <label class="input-group-text">Time </label>
                <input type="time" name="time" class="form-control">
            </div>
            <div class="input-group">
                <label class="input-group-text">WebSite </label>
                <input type="url" class="form-control" id="website" name="url" placeholder="https://">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Photo</span>
                <input type="file" class="form-control form-control-lg" name="photo" accept="image/*">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Address</span>
                <textarea class="form-control form-control-lg"></textarea>
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary w-50">Update</button>
            </div>
        </form>
    </div>
@endsection
