@extends('layouts.main')
@section('content')

<form action="{{ route('applicant.store') }}" method="POST">
@csrf
  <div class="form-group">
  <label for="fname">First Name</label>
  <input type="text" name="fname" class="form-control" id="fname" aria-describedby="fname" placeholder="Enter First Name">
  </div>

  <div class="form-group">
  <label for="lname">Last Name</label>
  <input type="text" name="lname" class="form-control" id="lname" aria-describedby="lname" placeholder="Enter Last Name">
  </div>

  <div class="form-group">
  <label for="email">Email</label>
  <input type="text" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter Email Address">
  </div>



<div class="form-group">
<button type="submit" class="btn btn-success">Register New </button>
</div>

</form>

@endsection
