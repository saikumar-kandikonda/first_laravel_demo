<h1>welcome to memebers list</h1>
<table class="table-responsive" border="1">
<tr>
<td>id</td>
<td>name</td>
</tr>
@foreach($member as $member)
<tr>
<td>{{$member['id']}}</td>
<td>{{$member['name']}}</td>
</tr>
@endforeach

</table>