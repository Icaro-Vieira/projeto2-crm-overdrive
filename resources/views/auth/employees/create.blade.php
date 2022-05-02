@extends('layouts.app')

@section('content')
        <h1>Create Employee</h1>
        <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="first-name" aria-describedby="first-name">
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="last-name" aria-describedby="last-name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="phone" name="phone" class="form-control" id="phone" aria-describedby="phone">
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Company</label>
                <select class="form-select" name="company_id" aria-label="Default select example">
                    <option selected>Select Company</option>
                    @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option> <!-- Pega esses dados do Banco!! -->
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary float-end">Create</button>
        </form>
@endsection
