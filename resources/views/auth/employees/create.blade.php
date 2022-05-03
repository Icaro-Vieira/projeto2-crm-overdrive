@extends('layouts.app')

@section('content')
        <h1>Create Employee</h1>
        <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first-name" aria-describedby="first-name" value="{{old('first_name')}}">

                @error('first_name')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last-name" aria-describedby="last-name" value="{{old('last_name')}}">

                @error('last_name')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email" value="{{old('email')}}">

                @error('email')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" aria-describedby="phone" value="{{old('phone')}}">

                @error('phone')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Company</label>
                <select class="form-select @error('company_id') is-invalid @enderror" name="company_id" aria-label="Default select example">
                    <option selected value="">Select Company</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option> <!-- Pega esses dados do Banco!! -->
                        @endforeach
                </select>
                @error('company_id')
                    <div class="invalid-feedback">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary float-end">Create</button>
        </form>
@endsection
