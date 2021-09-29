<h2>From API request :</h2>

<table border="1"> 
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Name</th>
        <th>Photo</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['first_name']}}</td>
        <td><img src="{{$item['avatar']}}"/></td>
    </tr>
    @endforeach
</table>