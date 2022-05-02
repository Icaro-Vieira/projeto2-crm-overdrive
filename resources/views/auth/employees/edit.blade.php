@extends('layouts.app')

@section('content')
        <h1>Edit Employee</h1>
        <form action="{{route('employees.update', $employee->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first-name" aria-describedby="first-name" value="{{$employee->first_name}}">
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last-name" aria-describedby="last-name" value="{{$employee->last_name}}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" value="{{$employee->email}}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" aria-describedby="phone" value="{{$employee->phone}}">
            </div>

            <button type="submit" class="btn btn-primary float-end">Edit</button>
        </form>
@endsection
