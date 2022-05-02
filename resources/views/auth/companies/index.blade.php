@extends('layouts.app')

@section('content')
    <h1 class="text-center">List of Companies</h1>
    <br>
    <hr>
    <a class="btn btn-outline-success" href="{{route('companies.create')}}" role="button">Create Company</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Logo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Website</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($companies as $company)
                <tr>
                    <td><img src="{{ asset("storage/companies/{$company->logo}") }}" alt="logo da empresa" style="width: 50px"></td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->website}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('companies.edit', ['company' => $company->id])}}" role="button">Edit</a>
                        <a class="btn btn-danger" href="{{route('companies.destroy', ['company' => $company->id])}}" role="button">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">no more data!</td>
                </tr>
            @endforelse

        </tbody>
    </table>
    {{ $companies->links() }}
@endsection
