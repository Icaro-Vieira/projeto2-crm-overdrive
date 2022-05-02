@extends('layouts.app')

@section('content')
        <h1>Edit Company</h1>
        <form action="{{route('companies.update', $company->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" aria-describedby="name" value="{{$company->name}}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" aria-describedby="email" value="{{$company->email}}">
            </div>

            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control" aria-describedby="logo" value="{{$company->logo}}">
            </div>

            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" name="website" id="website" class="form-control" value="{{$company->website}}">
            </div>

            <button type="submit" class="btn btn-primary float-end">Edit</button>
        </form>
@endsection
