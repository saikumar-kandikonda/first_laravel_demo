<h1>wlecome to delte</h1>
<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>click here to delete</td>
<td>click here to update</td>
</tr>
@foreach($members ?? '' as $list)
<td>{{$list['id']}}</td>
<td>{{$list['name']}}</td>
<td><a href="{{'delete/'.$list['id']}}">delete</a></td>
<td><a href="{{'tobeupdated/'.$list['id']}}">Update</a></td>
</tr>
@endforeach
</table>

