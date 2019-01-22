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
                                <form method="put" action="{{ route('users.update', ['id'=>$user->id]) }}" id="user_update">
                                    <div class="form-group">
                                        <label class="col-md-3" for="name">User Name</label>
                                        <input class=" form-control" id="name" name="name"
                                               value="{{ old('name') ?? $user->name }}"/>
                                        <label class="col-md-3" for="email">User Email</label>
                                        <input class=" form-control" id="email" name="email"
                                               value="{{ old('email') ?? $user->email }}"/>
                                        <input class="form-control btn btn-primary" type="submit" value="Save"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document)
            .on('submit', '#user_update', sendForm);

        function sendForm(e) {
            e.preventDefault();
            let data = $('#user_update').find('input').serializeArray();

            $.ajax({
                url: $('#user_update').attr('action'),
                type: "put",
                data: data,
                success: function (response) {
                    window.location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }

            });
            return false;
        }
    </script>
@endsection
