<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <link href="{{ asset('backend/css/login.css')}}" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf
      <h2>Login</h2>
      <p>Welocome to SKYdhule</p>
      <label>
        <span>Username</span>
        <input type="text" name="username"/>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password"/>
      </label>
      <button type="submit" class="submit">Sign In</button>
      </form>
    </div>
  </div>
</header><!-- End Header -->


<!-- ======= Footer ======= -->


<!-- Template Main JS File -->
<script src="{{ asset('frontend/assets/js/login.js')}}"></script>

</body>
</html>

