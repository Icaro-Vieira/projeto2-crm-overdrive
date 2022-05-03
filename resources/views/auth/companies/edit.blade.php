@extends('layouts.app')

@section('content')
        <h1>Edit Company</h1>
        <form action="{{route('companies.update', $company->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" aria-describedby="name" value="{{$company->name}}">
                @error('name')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="email" value="{{$company->email}}">
                @error('email')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control @error('logo') is-invalid @enderror" aria-describedby="logo" value="{{$company->logo}}">
                @error('logo')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" name="website" id="website" class="form-control @error('website') is-invalid @enderror" value="{{$company->website}}">
                @error('website')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary float-end">Edit</button>
        </form>
@endsection
