@extends('layouts.app')

@section('content')
<div id="content" class="ui-content ui-content-aside-overlay">
    <div class="ui-content-body">
        <div class="ui-container">
          <div class="admin_body">

              {{$data}}

          </div>
        </div>
    </div>
</div>
@endsection
