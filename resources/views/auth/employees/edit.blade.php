@extends('layouts.app')

@section('content')
        <h1>Edit Employee</h1>
        <form action="{{route('employees.update', $employee->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control  @error('first_name') is-invalid @enderror" id="first-name" aria-describedby="first-name" value="{{$employee->first_name}}">
                @error('first_name')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last-name" aria-describedby="last-name" value="{{$employee->last_name}}">
                @error('last_name')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{$employee->email}}">
                @error('email')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" aria-describedby="phone" value="{{$employee->phone}}">
                @error('phone')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <input type="hidden" value="{{$employee->company_id}}" name="company_id">
            </div>

            <button type="submit" class="btn btn-primary float-end">Edit</button>
        </form>
@endsection
