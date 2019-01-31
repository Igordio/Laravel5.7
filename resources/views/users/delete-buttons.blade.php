<form method="post"
      action="{{ route('users.restore', ['id'=>$item->id]) }}">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="put" />
    <input type="submit" value="Restore" class="btn btn-success">
</form>
<form method="post"
      action="{{ route('users.delete', ['id'=>$item->id]) }}">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="post" />
    <input type="submit" value="Force Delete" class="btn btn-danger">
</form>
