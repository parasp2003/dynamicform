<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>SignUp</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="{{ route('register') }}">
       @csrf
      <h2>Dynamic Form</h2>
      <h1 class="h3 mb-6 font-weight-normal">SignUp</h1>
        <label for="email" class="sr-only">Full Name</label>
      <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" class="form-control  mb-2" placeholder="Full Name" required autofocus>
      @error('fullname')
            <span   role="alert">
                <strong>{{ $message }}</strong>
            </span>
       @enderror
      <label for="email" class="sr-only">Email address</label>
      <input type="email" id="email" class="form-control  mb-2"  value="{{ old('email') }}" placeholder="Email address" required  >
      @error('email')
            <span   role="alert">
                <strong>{{ $message }}</strong>
            </span>
       @enderror
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password"  name="conpassword" class="form-control" placeholder="Password" required>
      <input type="password" id="conpassword" name="conpassword" class="form-control" placeholder="Confirm Password" required>
       @error('password')
            <span   role="alert">
                <strong>{{ $message }}</strong>
            </span>
       @enderror
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    </form>
  </body>
</html>
