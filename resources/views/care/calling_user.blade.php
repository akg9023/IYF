@extends('layouts.admin_template')

@section('initialize')
<?php
  $page_title="Call Users";
  $page_desc="a new way of personal caring";
?>
@stop

@section('content')
<link href="{{ asset('css/bicycle-polo.css', true) }}" rel="stylesheet">

  <div class="container">

    <!-- <h2>Call Any User</h2>

    <p class="lead">
      This is the list of users. Click the "Call" button to start a phone call from your browser.
    </p> -->

    <div class="row">

      <div class="col-md-3 col-md-push-8">
        <div class="panel panel-primary client-controls">
          <div class="panel-heading">
            <h3 class="panel-title">Make a call</h3>
          </div>
          <div class="panel-body">
            <p><strong>Status</strong></p>
            <div class="well well-sm" id="call-status">
              Connecting to Twilio...
            </div>

            <button class="btn btn-lg btn-success answer-button" disabled>Answer call</button>
            <button class="btn btn-lg btn-danger hangup-button" disabled onclick="hangUp()">Hang up</button>
          </div>
        </div>
      </div>

      <div class="col-xs-8 col-md-8 col-sm-8 col-md-pull-3">
        
          @foreach (App\User::all() as $user)
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="pull-right">
              <!-- callUser('+91{{ $user->primary_mobile }}') -->
                <button onclick="callUser('+91{{ $user->primary_mobile }}')" type="button" class="btn btn-primary btn-lg call-user-button">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    Call {{$user->firstname}}
                </button>
              </div>
              <table>
                <tr>
                  <td rowspan="2"><img src="{{url('/user/'.$user->id.'/profile_pic')}}" class="img-circle" alt="User Image"></td>
                  <td><p><strong>Name:</strong>{{$user->firstname}} {{$user->lastname or $user->surname}}</p></td>
                </tr>
                <tr>
                  <td><p><strong>Phone number:</strong> {{ $user->primary_mobile }}</p></td>
                </tr>
              </table>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </div>
@stop

@push('scripts')
<script src="//static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>
<script src="{{ asset('js/calls.js', true) }}"></script>
@endpush