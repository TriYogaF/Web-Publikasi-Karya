@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/styleLogin.css" />
@endsection
    
@section('container')

<div class="row justify-content-center my-lg-5">
  <div class="col-lg-4 ">
    <main class="form-signin">
        <form>
          <img class="mb-4" src="../assets/index/1.gif" alt="" width="72" height="72">
          <h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <div class="row my-lg-3">
              <div class="col">
                  <button class="w-100 btn btn-lg btn-outline-success" type="submit">Register</button>
              </div>
              <div class="col text-end">
                  <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
              </div>
          </div>
        </form>
      </main>
  </div>
</div>
@endsection
