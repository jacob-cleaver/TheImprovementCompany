@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>{{ $user->first.' '.$user->last}}'s Profile</h2></div>
                <!-- <div class="panel-body">
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection