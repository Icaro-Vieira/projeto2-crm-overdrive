@extends('layouts.app')

@section('content')
    <h1 class="text-center">List of Employees</h1>
    <br>
    <hr>
    <a class="btn btn-outline-success" href="{{route('employees.create')}}" role="button">Create Employees</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Company</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->first_name}}</td>
                <td>{{$employee->last_name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->company->name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('employees.edit', ['employee' => $employee->id])}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="{{route('employees.destroy', ['employee' => $employee->id])}}" role="button">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7">no more data!</td>
            </tr>
        @endforelse
        </tbody>
        {{ $employees->links() }}
    </table>
@endsection
