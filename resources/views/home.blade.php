<h1>user list </h1>
<table border="1">
    <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>Operation</th>

    </thead>
    <tbody>
        @foreach($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['email']}}</td>
            <td>
                <a href="{{'delete/'.$item['id']}}">Delete</a>
                <a href="{{'update/'.$item['id']}}">update</a>

            </td>

        </tr>
        @endforeach
    </tbody>


</table>