<h2>Pagination page</h2>

<table border="1px solid">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>email</td>
    </tr>

    @foreach($members as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
    </tr>
    @endforeach
</table>
<span>
    {{$members->links()}}
</span>

<style>
    .w-5{
        display:none;
    }
</style>