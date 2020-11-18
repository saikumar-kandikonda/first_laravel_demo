<table border="1">


@foreach($members as $list)
<tr>
<td>
{{$list['id']}}
</td>
<td>
{{$list['name']}}
</td>
</tr>
@endforeach


</table>