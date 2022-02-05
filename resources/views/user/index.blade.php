@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
   <h1 class="mb-3">all role</h1>
            <a class="btn btn-sm btn-primary float-right" href="{{ route('user.create') }}">create  user</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Name</th>
                        <th> role</th>
                        <th>Permission</th>
                        
                        <th>action</th>

                    </tr>
                </thead>
 @foreach ($all as $a )
     <tr>
         <td>
             {{ $loop->index+1 }}
         </td>
         <td>
             {{ $a->name}}
         </td>
         <td>
             {{-- {{ $a->role->system}} --}}
             @if (!$a->role)
            no role
            @else
                       {{ $a->role->name}}
             @endif
         </td>
         <td>
            @if (!$a->role)
            no role
            @else
              @foreach (json_decode( $a->role->permission) as $b )
                  {{ $b }}
              @endforeach
             @endif
        </td>
         <td>
 nothig
        </td>
     </tr>
 @endforeach





                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

