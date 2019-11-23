@Extends('layouts.main')
@section('content')
<form action="{{ route('companies.store') }}" method="POST">
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
  <label for="bname">Business Name</label>
  <input type="text" name="bname" class="form-control" id="bname" aria-describedby="bname" placeholder="Enter Business Name">
  </div>

<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<button type="submit" class="btn btn-success">Register</button>
</form>
@endsection
