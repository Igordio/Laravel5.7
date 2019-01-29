@extends('layouts.app')

@section('main_container')
    <div class="right_col">
        <div>
            <div class="page-title">
                <div class="title_left">
                    <h3>{{ $title }}</h3>
                </div>

                <div class="title_right">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">
                        <div class="x_content">
                            <div class="table-responsive">
                                <a class="btn btn-primary" href="{{ route('users.create') }}">+ Add user</a>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <!--<td>
                                                'Created': {{ $item->created_at }}<br>
                                                'Visited': {{ $item->visited_at }}<br>
                                            </td>-->
                                            <td>
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
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
