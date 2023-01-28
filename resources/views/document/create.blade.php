@extends('layout')
@section('body')
    <div class="container my-3">
        <div class="text-center">
            <h1>Add Document</h1>
        </div>
        <form class="row g-3 w-50 m-auto" action="{{ route('document.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center @error('student_id') text-danger @enderror">
                    Studdent Id</spna>
                <input type="number" class="form-control" name="student_id" value="{{old('student_id')}}"  placeholder="Student name">
            </div>
            @error('student_id')
                <div class="text-end text-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center @error('type') text-danger @enderror">Document Type</spna>
                <input class="form-control" list="DocumentTypes" name="type" placeholder="Enter document type" value="{{old('type')}}">
                <datalist id="DocumentTypes">
                    <option value="Adhar Card">
                    <option value="Voter Card">
                    <option value="Pan Card">
                    <option value="Driving Licence">
                    <option value="12th Result">
                </datalist>
            </div>
            @error('type')
                <div class="text-end text-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center @error('photo') text-danger @enderror">Document Photo</span>
                <input type="file" class="form-control form-control-lg" name="photo" accept="image/*">
            </div>
            @error('photo')
                <div class="text-end text-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mt-5 text-center">
                <button class="btn btn-primary w-50">Submit</button>
            </div>
        </form>
    </div>
@endsection
