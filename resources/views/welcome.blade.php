@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default" style="margin-top:180px;">
                <div class="panel-heading" style="padding:50px;">
                  <p style="color:dimgrey; font-size:50px;">Project Bazaar</p>
                  <p class="lead" style="color:#C0C0C0;">This is a final year project implemented to provide resources aiding project decision for future third year students.</p>
                  <button class="btn btn-warning" style="margin-top:15px;"><a href="{{ url('/learnmore') }}" style="color: white; text-decoration: none;">learn more</a></button>
                </div>
            </div>
        </div>
    </div>
@endsection
