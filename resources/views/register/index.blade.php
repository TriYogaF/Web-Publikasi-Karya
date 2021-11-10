@extends('layouts/main')
@section('css')
    <link rel="stylesheet" href="../css/styleLogin.css" />
@endsection
    
@section('container')

<div class="row justify-content-center my-lg-5">
  <div class="col-lg-4 ">
    <main class="form-register">
      <div class="row justify-content-center">
        <div class="col-3">
          <img class="mb-4" src="../assets/index/1.gif" alt="" width="72" height="72">
        </div>
      </div>
        <h1 class="textJudul h3 mb-3 fw-normal text-center">Registration Form</h1>
        <form action="/register" method="post">
        @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
            <label class="textForm" for="name">Name</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            <label class="textForm" for="username">Username</label>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label class="textForm" for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label class="textForm" for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
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
