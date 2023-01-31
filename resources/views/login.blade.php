@extends('layout.master')
@section('content')
<div class="container">
   <h2>Login</h2>
   <hr>
   <form class="px-4 py-3" action="{{ route('actionLogin') }}" method="POST">
      @csrf
      <div class="mb-3">
         <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
         <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" name="email">
      </div>
      <div class="mb-3">
         <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
         <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
   </form>
</div>
@endsection