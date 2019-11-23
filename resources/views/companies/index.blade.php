@extends('layouts.main')

@section('content')

    <h1>List of Companies</h1>
    <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">Company Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Business Name</th>
        <th scope="col">Company Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($companies as $company)
      <tr>
        <th scope="row">{{ $company->id }}</th>
        <td>{{ $company->fname }}</td>
        <td>{{ $company->lname }}</td>
        <td>{{ $company->bname }}</td>
        <td>{{ $company->email }}</td>
      </tr>
      @endforeach
    </tbody>

    </table>


@endsection
