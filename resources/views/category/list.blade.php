<table border="1">
    <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Status</th>
    </tr>
    @foreach($categories as $key => $item)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->status}}</td>
        </tr>
    @endforeach
</table>