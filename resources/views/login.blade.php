@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/login.css" />
@endsection
    
@section('container')
      <form class="form-container">
        <h3 class="textJudul mb-5">Log In</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textForm">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" />
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" />
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div class="row mt-3">
              <div class="col">
                <button type="submit" class="btn btn-outline-primary textForm">Log In</button>
              </div>
              <div class="col text-end">
                <a class="btn btn-primary" href="/register" role="button">Register</a>
              </div>
            </div>
          </div>
        </div>
      </form>
@endsection

