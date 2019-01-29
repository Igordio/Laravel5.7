@extends('layouts.app')

@section('main_container')
    <div class="right_col">
        <div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">
                        <div class="x_content">
                            <div class="table-responsive">
                                <form>
                                    @dd($user)
                                    <input name="name" value="{{ old('name') ?? $user->name }}" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
