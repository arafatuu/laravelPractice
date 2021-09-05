<h2>User Login</h2>
<!--@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
-->
<form action="userform" method="POST">
@csrf
    <input type="text" name="username" placeholder="Enter your username"/><br>
    <span style="color:red">@error('username'){{$message}} @enderror </span><br>
    <input type="password" name="password" placeholder="Enter your password"/><br>
    <span style="color:red">@error('password'){{$message}} @enderror </span><br>

    <button type="submit">Login</button>
</form>