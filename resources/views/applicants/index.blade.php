@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-end">
<a href="{{ route('applicant.create') }}" class="btn btn-success float-right mb-5">Register New Applicant</a>
</div>
    <h1>Job Seekers List</h1>
    <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach($applicants as $applicant)
      <tr>
        <th scope="row">{{ $applicant->id }}</th>
        <td>{{ $applicant->fname }}</td>
        <td>{{ $applicant->lname }}</td>
        <td>{{ $applicant->email }}</td>
      </tr>
      @endforeach
    </tbody>

    </table>


@endsection
