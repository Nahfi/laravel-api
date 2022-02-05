@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
   <h1 class="mb-3">all role</h1>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('role.create') }}">add role</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Permission</th>
                        {{-- <th>post_title</th> --}}
                        <th>action</th>

                    </tr>
                </thead>
                <tbody>




    @foreach ($all as $a )



                    <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $a->name }}</td>


                        <td>

                            @if ( count(json_decode($a->permission )) >0)
                            @foreach ( json_decode($a->permission ) as $per )
                            {{ $per }} |
                             @endforeach
                             @else
                    no role
                            @endif



                    </td>

                        <td>
                            <a class="btn btn-danger" href="#">delete</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>

                        </td>
                    </tr>
                    @endforeach 



                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

