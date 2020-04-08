@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h1>Regular</h1>
            @if($status == "success") 
            <a href="/">test</a> 
            @endif
            {{ Auth::user()->name }}
            <table class="table">
                <th>Username</th>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
