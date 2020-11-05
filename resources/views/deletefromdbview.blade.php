<h1>wlecome to delte</h1>
<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>operation</td>
</tr>
@foreach($members as $list)
<td>{{$list['id']}}</td>
<td>{{$list['name']}}</td>
<td><a href="{{'delete/'.$list['id']}}">delete</a></td>
</tr>
@endforeach
</table>

