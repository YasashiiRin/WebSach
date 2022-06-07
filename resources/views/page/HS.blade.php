
@extends('master')
@section('content')
<style type="text/css">
	#imp{
	margin: 5px;
    width: 80px;
    height: 80px;
    border: solid 3px #04FBD5;
    background: #999;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
}
.tt{
	margin-left: 50px;
}
.profile{
	margin-left: 100px;
}
</style>
<div class="profile">
  <figure>
    <img id="imp" src="uploads/{{Auth::user()->avatar}}" alt="" />
  </figure>
   <form  action="{{ route('uploadh') }}" method="POST" enctype="multipart/form-data">
    <label>update profile Image</label>
    <input type="file" name="avatar">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" class="beta-btn primary">
  </form>
  <header>
    <h1>{{Auth::user()->full_name}}</h1>
      <small>_____________________________________________________</small></h1>
  </header>
  <div>
   {{-- <a href="{{ route('upl') }}" style="color: white; background-color: gray; border: 1px solid black;">Change avatar</a>
  </div> --}}
  <div class="toggle">
    <input type="checkbox" class="view_details" id="view_details">
    <label for="view_details" title="tap here to view full profile">☰</label>    
  </div>
  <div class="tt">
    <dl>
      <dt>Full name</dt>
        <dd>{{Auth::user()->full_name}}</dd>
      <dt>Date of birth</dt>
        <dd>{{Auth::user()->Ngaysinh}}</dd>
      <dt>Email</dt>
        <dd>{{Auth::user()->email}}</dd>
      <dt>Phone</dt>
        <dd>{{Auth::user()->phone}}</dd>
      <dt>Địa chỉ</dt>
        <dd>{{Auth::user()->address}}</dd>
        <dd>
          <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> 
          <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        </dd>
    </dl>
  </div>

</div> <!-- end profile -->

<p style="padding: 20px;">Welcome To Your Profile!</p>
@endsection		