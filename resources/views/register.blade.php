@extends('layouts/main')
@section('css')
    <link rel="stylesheet" type="text/css" href="../css/register.css" />
@endsection
    
@section('container')
    <div class="container">
      <form class="form-container">
        <h3 class="textJudul mb-3">Registration Form</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textForm">User Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textForm">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" />
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" />
          <label class="form-check-label" for="exampleCheck1">I accept the <span class="text-hijau">Terms of Use</span> & <span class="text-hijau">Privacy Policy</span></label>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Register Now</button>
        </div>
        <div class="mb-3">
          <label>Have an account? <a href="/login" class="text-link text-hover">Click in here</a></label>
        </div>
      </form>
    </div>
@endsection
