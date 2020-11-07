
<form action="/update" method="post">
@csrf
<input type="hidden" name="id" value="{{$members['id']}}">
ID is<input type="text" name="userid" value="{{$members['id']}}">
name is<input type="text" name="name" value="{{$members['name']}}">

<input type="submit" value="update">
</form>