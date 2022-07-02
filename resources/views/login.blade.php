@extends('master')
@section("content")



<div class="container mt-3">
  <h2>Login</h2>
  <form action="/login" method="POST">
    <div class="mb-3 mt-3">
      @csrf
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <br>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <!-- <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> --> 
    <br>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
@endsection