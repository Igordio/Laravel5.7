@extends('layouts.app')

@section('main_container')
    <div class="right_col">
        <div>
            <div class="page-title">
                <div class="title_left">
                    <h3>Create User</h3>
                </div>
                <ul>
                    @foreach ($errors->get('recipient') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="title_right">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="table-responsive">
                                <form method="post" action="{{ route('users.store') }}">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="_method" value="post" />
                                    <input class="form-control" name="name" placeholder="User name" value="{{ old('name') }}">
                                    <input class="form-control" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                                    <input class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                                    <input class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
                                    <input class="form-control btn btn-primary" type="submit" value="Save">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
