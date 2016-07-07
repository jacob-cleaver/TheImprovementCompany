@extends('sidebar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <div class="col-md-10 col-md-offset-1">
                      <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                      <form enctype="multipart/form-data" action="/settings" method="POST" style="width:150px; float:left; margin-top:30px;">
                          <label>Update Profile Picture</label>
                          <input type="file" name="avatar"></input>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                          <input type="submit" class="btn btn-sm btn-warning" style="margin-top:10px;"></input>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
