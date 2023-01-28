@extends('layout')
@section('body')
    <div class="container my-3">
        <div class="text-center">
            <h1>Update Document</h1>
        </div>
        <div class="container">
            <div class="card rounded float-end w-25">
                <img class="card-img-top" src="{{ url('upload/document/' . $document->photo) }}" width="100px" height="150px"
                    alt="{{ $document->photo }}">
                <div class="card-body">
                    <label for="photo" class="btn btn-primary">Change</label>
                </div>
            </div>
        </div>
        <form class="row g-3 w-50 m-auto" action="{{ route('document.update', ['document' => $document->id]) }}"
            method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">Studdent Id</spna>
                <input type="number" class="form-control" name="student_id" value="{{ $document->student_id }}"
                    placeholder="Student name">
            </div>
            @error('student_id')
                {{ $message }}
            @enderror
            <div class="input-group">
                <spna class="input-group-text w-25 justify-content-center">Document Type</spna>
                <input class="form-control" list="DocumentTypes" placeholder="Enter document type" name="type"
                    value="{{ $document->type }}">
                <datalist id="DocumentTypes">
                    <option value="Adhar Card">
                    <option value="Voter Card">
                    <option value="Pan Card">
                    <option value="Driving Licence">
                    <option value="12th Result">
                </datalist>
            </div>
            @error('type')
                {{ $message }}
            @enderror
            <div class="input-group">
                <span class="input-group-text w-25 justify-content-center">Document Photo</span>
                <input type="file" class="form-control form-control-lg" name="photo" id="photo" accept="image/*">
            </div>
            @error('photo')
                {{ $message }}
            @enderror
            <div class="mt-5 text-center">
                <button class="btn btn-primary w-50">Update</button>
            </div>
        </form>
    </div>
@endsection
