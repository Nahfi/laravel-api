@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>Create role</h2>
                    <form action="{{ route("user.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" type="text" name="name" value='{{ old("name") }}'>

                            @error("name")
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Use Name</label>
                            <input class="form-control" type="text" name="uname" value='{{ old("uname") }}'>
                        </div>

                     
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="text" name="email" value='{{ old("email") }}'>
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Role</label>
                    <select  class="form-control"  name="role" id="role">
                        {{-- <option value="">

                        </option> --}}
                        @foreach ($role as $a )
                <option value="{{ $a->id }}">
                            {{ $a->name }}
                        </option>
                        @endforeach
                    </select>
                        </div>

<br>


                        <div class="form-group">
                            <input class="btn btn-primary mt-3" type="submit" value="create user">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

