<h2>List of all members</h2>

<table border="1px solid">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Actions</td>
    </tr>

    @foreach($members as $item)

    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['password']}}</td>
        <td>
            <a href={{"delete/".$item['id']}}>Delete</a>
            <a href={{"edit/".$item['id']}}>Edit</a>
        </td>
    </tr>


    @endforeach
</table>