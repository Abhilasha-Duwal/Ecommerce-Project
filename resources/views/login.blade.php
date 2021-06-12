@extends('master');
@section("content")
<div class="container custom-login">
   <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
         <form action="login" method="POST">
         @csrf
            <input type="email" name="email"  required="required" placeholder="Email"><br><br>
 	         <input type="password" name="password"  required="required" placeholder="Password"><br><br>
            <button class="btn btn-primary">login</button>
         </form>
      </div>
   </div> 
</div>
@endsection