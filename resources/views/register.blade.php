@extends('master');
@section("content")
<div class="container custom-login">
   <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
         <form action="register" method="POST">
         @csrf
         <div class="form-group">
            <label>User Name</label>
            <input type="text" name="name"  required="required" placeholder="User Name" class="form-control">
            </div>
         <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email"  required="required" placeholder="Email" class="form-control">
            </div>
         <div class="form-group">   
            <label>Password</label>
 	        <input type="password" name="password"  required="required" placeholder="Password" class="form-control">
            </div> 
            <button class="btn btn-primary">Register</button>
         </form>
      </div>
   </div> 
</div>
@endsection