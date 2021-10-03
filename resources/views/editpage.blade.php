<h2>Edit info here</h2>

<form action="/edit" method="POST">

    @csrf


<input type="hidden" value="{{$item['id']}}"  name="id"  name="id"/>

<label>Name</label>
<input type="text" value="{{$item['name']}}" name="name"/>

<label>Email</label>
<input type="email" value="{{$item['email']}}" name="email"/>

<label>Password</label>
<input type="password" value="{{$item['password']}}" name="password"/>

<button type="submit" >Update</button>


</form>