@extends('layout')
@section('body')
    <div class="container my-3">
        <div class="text-center">
            <h1>New Student</h1>
        </div>
        <form class="row g-3 w-50 m-auto" action="PHP/insert.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">Student name</spna>
                <input required type="text" class="form-control" name="sname" placeholder="Student name" id="sname">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Password</span>
                <input required type="password" class="form-control" name="spassword" placeholder="Password" id="spassword">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Email</span>
                <input required type="email" class="form-control" name="semail" placeholder="email" id="sEmail">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Contact</span>
                <input required type="tel" class="form-control" name="scontact" placeholder="contact number"
                    id="scontact">
            </div>

            <div class="input-group">
                <label class="input-group-text">Semester</label>
                <select class="form-select" name="semester" id="sem">
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
                    <input required class="form-check-input" type="radio" id="male" name="gender" value="Male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check m-2">
                    <input required class="form-check-input" type="radio" id="female" name="gender" value="Female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
                <div class="form-check m-2">
                    <input required class="form-check-input" type="radio" id="otherGender" checked name="gender"
                        value="Other">
                    <label class="form-check-label" for="otherGender">
                        Other
                    </label>
                </div>
            </div>
            <div class="input-group w-50">
                <label class="input-group-text">favorite Color </label>
                <input required type="color" name="sfcolor" id="fvcolor" class="form-control form-control-color">
            </div>
            <div class="input-group">
                <label class="input-group-text">interest in coding</label>
                <input required type="range" class="form-control" id="intrest" name="intrestcoding" min="0"
                    max="100" value="0">
            </div>
            <div class="input-group">
                <label class="input-group-text">Dob </label>
                <input required type="date" name="dob" id="dob" class="form-control">
            </div>
            <div class="input-group">
                <label class="input-group-text">WebSite </label>
                <input required type="url" class="form-control" id="website" name="website"
                    placeholder="https://">
            </div>
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Photo</span>
                <input required type="file" class="form-control form-control-lg" name="photo" accept="image/*">
            </div>
            <div class="mt-5 text-center">
                <button class="btn btn-primary w-50" name="upload">Submit</button>
            </div>
        </form>
    </div>
@endsection