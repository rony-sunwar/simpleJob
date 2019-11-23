<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
crossorigin="anonymous">
</head>


<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('welcome') }}">{{ env('APP_NAME') }}</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('applicant.index') }}">Home</a></li>
        <li><a href="{{ route('companies.index') }}">Companies</a></li>
        <li><a href="{{ route('jobs.index') }}">Jobs</a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">

    @if(session()->has('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}
    </div>
   @endif

  <div class="row">
    <div class="col-sm-4">
      <ul class="list-group">
      <li class="list-group-item">
      <a href="{{ route('companies.create') }}">Add New Company</a>
      </li>
      <li class="list-group-item">
      <a href="{{ route('jobs.create') }}">Add New Jobs</a>
      </li>
      </ul>

      <a class="btn btn-primary" href="{{ route('applicant.index') }}" role="button">Applicant Home</a>
    </div>

    <div class="col-sm-8">

    @yield('content')

    </div><!--end of column-8 -->



</div><!--end of row div-->
</div><!--end of container div-->

</body>
</html>
