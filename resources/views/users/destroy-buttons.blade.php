<a href="{{ route('users.edit', ['id'=>$item->id]) }}" title="'Edit')">
    <button class="btn btn-primary">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        Edit
    </button>
</a>
<form method="post"
      action="{{ route('users.destroy', ['id'=>$item->id]) }}">
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="delete" />
    <input type="submit" value="Delete" class="btn btn-danger">
</form>
