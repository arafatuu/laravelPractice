@include('greetings');

<h1>Users Page</h1>

<!--Conditional logic-->
@if($user=='Arafat')
<h3>Hey {{$user}}!!</h3>
@else
<h3>Hey Unknown!!</h3>
@endif


<!--forloop--->

@for( $i=0; $i<=10 ; $i++)
<h3>{{$i}}</h3>
@endfor


<!--foreach-->

@foreach($users as $user)
<h3>{{$user}}</h3>
@endforeach


@csrf
<!--JS-->
<script>
    var data = @Json($users);
    console.warn(data);
</script>


