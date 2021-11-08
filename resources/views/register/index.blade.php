@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/styleLogin.css" />
@endsection
    
@section('container')

<div class="row justify-content-center my-lg-5">
  <div class="col-lg-4 ">
    <main class="form-register">
        <form>
          <img class="mb-4" src="../assets/index/1.gif" alt="" width="72" height="72">
          <h1 class="textJudul h3 mb-3 fw-normal text-center">Registration Form</h1>
      
          <div class="form-floating">
            <input type="text" name="username" class="form-control rounded-top" id="username" placeholder="Username">
            <label class="textForm" for="username">Username</label>
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label class="textForm" for="email">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
            <label class="textForm" for="password">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <div class="row my-lg-3">
              <div class="col">
                  <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
              </div>
          </div>
          <div class="mb-3">
            <label>Have an account? <a href="/login" class="text-decoration-none text-success">Click in here</a></label>
          </div>
        </form>
      </main>
  </div>
</div>
@endsection
