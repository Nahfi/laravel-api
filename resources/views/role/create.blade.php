@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>Create role</h2>
                    <form action="{{ route("role.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" type="text" name="name" value='{{ old("name") }}'>
                        </div>

<br>
                        <div class="form-group">
                            <label for="">permission</label>
                            <br>
                          <input type="checkbox" name="role[]" value="user"  id="user"> <label for="user">user</label>
                          <input type="checkbox" name="role[]" value="role" id="role"> <label for="role">role</label>
                          <input type="checkbox" name="role[]" value="seo" id="seo"> <label for="seo">seo</label>

                          <input type="checkbox" name="role[]" value="setting" id="setting"> <label for="setting">setting</label>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary mt-3" type="submit" value="create_role">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

