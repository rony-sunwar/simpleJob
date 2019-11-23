@extends('layouts.main')
@section('content')

<form action="{{ route('jobs.store') }}" method="POST">
@csrf
  <div class="form-group">
  <label for="job_title">Job Title</label>
  <input type="text" name="job_title" class="form-control" id="job_title" aria-describedby="job_title" placeholder="Enter Job Title">
  </div>

  <div class="form-group">
  <label for="job_description">Job Description</label>
  <input type="text" name="job_description" class="form-control" id="job_description" aria-describedby="job_description" placeholder="Enter Job Description">
  </div>

  <div class="form-group">
  <label for="salary">Salary</label>
  <input type="text" name="salary" class="form-control" id="salary" aria-describedby="salary" placeholder="Enter salary">
  </div>

<div class="form-group">
<label for="location">Location</label>
<input type="location" name="location" class="form-control" id="location" aria-describedby="location" placeholder="Enter Job location">
</div>

<div class="form-group">
<label for="country">Country</label>
<input type="country" name="country" class="form-control" id="country" aria-describedby="country" placeholder="Enter Country">
</div>

<div class="form-group">
<button type="submit" class="btn btn-success">Add New Job</button>
</div>

</form>

@endsection
