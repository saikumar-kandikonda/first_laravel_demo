<h1>welcome to pagination</h1>
<table border="1">
<tr>
<td>id</td>
<td>Name</td>
</tr>
@foreach($list as $member)
<tr>
<td>{{$member['id']}}</td>
<td>{{$member['name']}}</td>
</tr>
@endforeach
</table>
<span>
{{$list->links()}}
</span>