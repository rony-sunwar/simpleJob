@extends('layouts.main')

@section('content')

<h1>Available Jobs</h1>
<table class="table table-hover table-dark">
<thead>
  <tr>
    <th scope="col">Job ID</th>
    <th scope="col">Job title</th>
    <th scope="col">Job Description</th>
    <th scope="col">salary</th>
    <th scope="col">Location</th>
    <th scope="col">Country</th>
  </tr>
</thead>
<tbody>
  @foreach($jobs as $job)
  <tr>
    <th scope="row">{{ $job->id }}</th>
    <td>{{ $job->job_title }}</td>
    <td>{{ $job->job_description }}</td>
    <td>{{ $job->salary }}</td>
    <td>{{ $job->location }}</td>
    <td>{{ $job->country }}</td>
  </tr>
  @endforeach
</tbody>

</table>

@endsection
