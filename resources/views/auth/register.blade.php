@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Register";
    $page_desc="Join us in the search of infinity";
?>
@stop


@section('content')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type='text/javascript' src="{{asset('/js/register_page.js')}}"></script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8  col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <!--tabs  -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#Basic" data-toggle="tab">Basic</a></li>
                            <li><a href="#College" data-toggle="tab">College</a></li>
                            <li><a href="#Staying" data-toggle="tab">Address/Staying </a></li>
                            <li><a href="#Final" data-toggle="tab">Final Step</a></li>
                        </ul>

                        <!--  -->
                        <div class="tab-content">
                            <!-- tab Basic -->
                            <div class="tab-pane active" id="Basic" style="position:relative; top:10px">
                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }} form-group{{ $errors->has('firstname') ? ' has-error' : '' }} form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <fieldset>
                                        <div class="col-md-3">
                                            <input id="name" type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Surname">

                                            <!-- @if ($errors->has('surname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                            @endif -->
                                        </div>
                                        <div class="col-md-3">
                                            <input id="name" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">

                                            
                                        </div>
                                        <div class="col-md-3">
                                            <input id="name" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">

                                           
                                        </div>

                                        <div class="col-md-10">
                                            @if ($errors->has('surname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                            @endif

                                            @if ($errors->has('firstname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('firstname') }}</strong>
                                                </span>
                                            @endif

                                            @if ($errors->has('lastname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastname') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </fieldset>
                                </div>

                                <div class="form-group{{ $errors->has('initiated_name') ? ' has-error' : '' }}">
                                    <label for="initiated_name" class="col-md-4 control-label">Initiated Name</label>

                                    <div class="col-md-4">
                                        <input id="initiated_name" type="text" class="form-control" name="initiated_name" value="{{ old('initiated_name') }}">
                                    </div>

                                    <div class="col-md-2">
                                        <input id="das" type="text" class="form-control" name="das" value="Das" disabled>
                                    </div>

                                    <div class="col-md-6 col-md-offset-4">

                                        <span class="text-aqua" style="float:right; font-size:85%;">*Ignore if not applicable</span>

                                        @if ($errors->has('initiated_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('initiated_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- ------Mobile_No-------- -->
                                <div class= "form-group{{ $errors->has('primary_mobile') ? ' has-error' : '' }} form-group{{ $errors->has('secondary_mobile') ? ' has-error' : '' }}">
                                    <label for="Mobile_No" class="col-md-4 control-label">Mobile No.</label>

                                    <fieldset>
                                        <div class="col-md-5 inline-fluid">
                                            <input id="Mobile_No" type="number" class="form-control" name="primary_mobile" value="{{ old('primary_mobile') }}" placeholder="Mobile No.(1)">
                                            
                                        </div>

                                        <div class="col-md-4 inline-fluid ">
                                            <input id="Mobile_No" type="number" class="form-control" name="secondary_mobile" value="{{ old('secondary_mobile') }}"" placeholder="Mobile No.(2)">

                                            
                                        </div>

                                        <div class="col-md-10">
                                            @if ($errors->has('primary_mobile'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('primary_mobile') }}</strong>
                                                </span>
                                            @endif

                                            @if ($errors->has('secondary_mobile'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('secondary_mobile') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </fieldset>


                                    

                                </div>    
                                <!-- --------------------------- -->


                                <!-- -------What’sApp----------- -->
                                <div class="form-group{{ $errors->has('whatsapp') ? ' has-error' : '' }}">
                                    <label for="What'sApp_no" class="col-md-4 control-label">What’sApp No.</label>

                                    <div class="col-md-6">
                                        <input id="What’sApp_no" type="number" class="form-control" name="whatsapp" value="{{ old('whatsapp') }}">

                                        @if ($errors->has('whatsapp'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('whatsapp') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                <!-- --------------------------- -->
                                <!-- -------Facebook Email----------- -->
                                <div class="form-group{{ $errors->has('fb_email') ? ' has-error' : '' }}">
                                    <label for="fb_email" class="col-md-4 control-label">Facebook E-mail</label>

                                    <div class="col-md-6">
                                        <input id="fb_email" type="email" class="form-control" name="fb_email" value="{{ old('fb_email') }}">

                                        @if ($errors->has('fb_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('fb_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                <!-- .......................- -->
                                
                                <!-- ...........-D.O.B...........- -->
                                <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                    <label for="birthday" class="col-md-4 control-label">Birthday</label>

                                    <div class="col-md-6">
                                        <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}">

                                        @if ($errors->has('birthday'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birthday') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>    
                                <!-- .......D.O.B end.... -->
                                <!-- next -->
                                <ul class="pager wizard">
                                <!-- <li class="previous"><a class="btnPrevious">Previous</a></li> -->
                                <li class="next"><a class="btnNext">Next</a></li>
                            </ul>

                                <!-- end basic next -->
                            </div> 
                            <!-- tab Basic end-->
                            
                            <!-- new tab COLLEGE -->
                            <div class="tab-pane" id="College" style="position:relative; top:10px">
                                <!-- College Name -->
                                <div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }}">
                                    <label for="college_name" class="col-md-4 control-label">College Name</label>

                                    <div class="col-md-6">
                                        <input id="college_name" type="text" class="form-control" name="college_name" value="{{ old('college_name') }}">

                                        @if ($errors->has('college_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('college_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- College Name end-->

                                <!-- period  -->
                                <div class="form-group{{ $errors->has('period_from') ? ' has-error' : '' }} form-group{{ $errors->has('period_to') ? ' has-error' : '' }}">
                                    
                                    <label for="period" class="col-md-4 control-label">Period</label>
                                    
                                    <fieldset>
                                        <div class="col-md-3">
                                            {{Form::selectYear('period_from',1970,date("Y"),'From', ['class' => "form-control",'placeholder'=>'From','id'=>'period'])}}
                                        </div>

                                        <div class="col-md-3">
                                            {{Form::selectYear('period_to',1973,date("Y")+6,'To', ['class' => "form-control",'placeholder'=>'To','id'=>'period'])}}
                                        </div>

                                        <div class="col-md-10">
                                            @if ($errors->has('period_from'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('period_from') }}</strong>
                                                </span>
                                            @endif

                                            @if ($errors->has('period_to'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('period_to') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- period END -->

                                <!-- Course and Department -->
                                <div id="course" class="form-group{{ $errors->has('course') ? ' has-error' : '' }} form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                                    
                                    <fieldset>

                                        <label for="course" class="col-md-4 control-label">Course</label>
                                        <div class="col-md-2">
                                            <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}">
                                        </div>

                                        <label for="department" class="col-md-1 control-label">Dept</label>
                                        <div class="col-md-3">
                                            <input id="department" type="text" class="form-control" name="department" value="{{ old('department') }}">
                                        </div>

                                        <div class="col-md-10">
                                            @if ($errors->has('course'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('course') }}</strong>
                                                </span>
                                            @endif

                                            @if ($errors->has('department'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('department') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </fieldset>
                                </div>
                                <!-- dept END -->
                                
                                <!-- next -->
                                 <ul class="pager wizard">
                                    <li class="previous"><a class="btnPrevious">Previous</a></li>
                                    <li class="next"><a class="btnNext">Next</a></li>
                                </ul>       

                                <!-- end  college next -->
                            </div>
                            <!-- new tab college end -->                        

                            <!-- tab Staying -->
                            <div class="tab-pane" id="Staying" style="position:relative; top:10px">
                               <!-- residence -->
                                <!-- <h3>Residence</h3> -->
                                <div>
                                    <fieldset>
                                    <div class="form-group{{ $errors->has('per_addr') ? ' has-error' : '' }}">

                                        <label for="per_addr" class="col-md-4 control-label">Permanent Address</label>

                                        <div class="col-md-6">
                                            <textarea id="per_addr" rows="3" class="form-control" name="per_addr" value="{{ old('per_addr') }}" placeholder="Please Mention:&#13;&#10;Flat No. ,&#9;Build. No/Appart. Name ,&#13;&#10;Street Name/Locality ,&#9; Landmark "></textarea>

                                            @if ($errors->has('per_addr'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('per_addr') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('per_city') ? ' has-error' : '' }}">

                                        <div class="col-md-6 col-md-offset-4">
                                            <input id="per_city" type="text" class="form-control" name="per_city" value="{{ old('per_city') }}" placeholder="City/Village">

                                            @if ($errors->has('per_city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('per_city') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('per_pincode') ? ' has-error' : '' }} form-group{{ $errors->has('per_postoffice') ? ' has-error' : '' }}">
                                        
                                        <div class="col-md-3 col-md-offset-4">
                                            <input id="per_pincode" type="number" class="form-control" name="per_pincode" value="{{ old('per_pincode') }}" placeholder="Pincode">                         
                                        </div>
                                        
                                        <div class="col-md-3">
                                             <select id="per_postoffice" type="text" class="form-control" name="per_postoffice" value="{{ old('per_postoffice') }}" placeholder="Post Office" style="color: #999;">
                                                 <option value="" disabled hidden selected>Select Post Office</option>
                                             </select>
                                        </div>

                                        <div class="col-md-10">
                                            @if ($errors->has('per_pincode'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('per_pincode') }}</strong>
                                                </span>
                                            @endif

                                            @if ($errors->has('per_postoffice'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('per_postoffice') }}</strong>
                                                </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('per_state') ? ' has-error' : '' }} form-group{{ $errors->has('per_district') ? ' has-error' : '' }}">
                                        <div class="col-md-3 col-md-offset-4">
                                            <input id="per_district" type="text" class="form-control" name="per_district" value="{{ old('per_district') }}" placeholder="District" readonly>      
                                        </div>

                                        <div class="col-md-3">
                                           <input id="per_state" type="text" class="form-control" name="per_state" value="{{ old('per_state') }}" placeholder="State" readonly>
                                        </div>

                                        <div class="col-md-10">

                                            @if ($errors->has('per_district'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('per_district') }}</strong>
                                                </span>
                                            @endif

                                            @if ($errors->has('per_state'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('per_state') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    </fieldset>
                                </div>

                                <div class="form-group{{ $errors->has('current_status') ? ' has-error' : '' }}">
                                    <label for="current_status" class="col-md-4 control-label">Your current status</label>

                                    <div class="col-md-6">
                                        {{Form::select('2',array('working'=>'Currently Working','studying'=>'Currently Studying'),'studying',['class'=>'form-control','id' => 'current_status','name'=>'current_status'])}}

                                        @if ($errors->has('current_status'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current_status') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div id="studying">

                                    <div class="container-fluid form-group">
                                
                                        <label class="col-md-4 control-label">Staying at</label>

                                        <div class="col-md-6">
                                            <label class="radio-inline control-label">
                                                <input type="radio" class="hostel" name="staying_at" value="Hostel" checked> Hostel
                                            </label>
                                        
                                            <label class="radio-inline"> 
                                                <input type="radio" class="mess" name="staying_at" value="Mess"> Mess
                                            </label>
                                            
                                            <label class="radio-inline">
                                                <input type="radio" class="voice" name="staying_at" value="Voice"> Voice
                                            </label>
                                        </div>

                                    </div>
                                    <!-- contents of radio -->

                                    <div class="container-fluid" style="position:relative; top:10px">
                                    <!-- HOSTEL FORM -->
                                        <div class="collapse hostel" style="display:block;">
                                            <!-- hostel name -->
                                            <div class="form-group{{ $errors->has('hostel_name') ? ' has-error' : '' }}">
                                                <label for="hostel_name" class="col-md-4 control-label">Hostel Name</label>
                                                <div class="col-md-6">
                                                    <input id="hostel_name" type="text" class="form-control" name="hostel_name" value="{{old('hostel_name')}}">

                                                    @if ($errors->has('hostel_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('hostel_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- hostel name END -->
                                            <!-- Room no. -->
                                            <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                                                <label for="room_no" class="col-md-4 control-label">Room No.</label>
                                                <div class="col-md-6">
                                                    <input id="room_no" type="text" class="form-control" name="room_no" value="{{ old('room_no') }}">

                                                    @if ($errors->has('room_no'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('room_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- room no. END -->
                                        </div>
                                    <!-- MESS FORM -->  
                                        <div class="collapse mess">
                                            <!--mess address -->
                                            <div>
                                                <fieldset>
                                                <div class="form-group{{ $errors->has('mess_addr') ? ' has-error' : '' }}">

                                                    <label for="mess_addr" class="col-md-4 control-label">Mess Address</label>

                                                    <div class="col-md-6">
                                                        <textarea id="mess_addr" rows="3" class="form-control" name="mess_addr" value="{{ old('mess_addr') }}" placeholder="Please Mention:&#13;&#10;Flat No. ,&#9;Build. No/Appart. Name ,&#13;&#10;Street Name/Locality ,&#9; Landmark "></textarea>

                                                        @if ($errors->has('mess_addr'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('mess_addr') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('mess_city') ? ' has-error' : '' }}">

                                                    <div class="col-md-6 col-md-offset-4">
                                                        <input id="mess_city" type="text" class="form-control" name="mess_city" value="{{ old('mess_city') }}" placeholder="City/Village">

                                                        @if ($errors->has('mess_city'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('mess_city') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('mess_pincode') ? ' has-error' : '' }} form-group{{ $errors->has('mess_postoffice') ? ' has-error' : '' }}">
                                                    
                                                    <div class="col-md-3 col-md-offset-4">
                                                        <input id="mess_pincode" type="number" class="form-control" name="mess_pincode" value="{{ old('mess_pincode') }}" placeholder="Pincode">                         
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                         <select id="mess_postoffice" type="text" class="form-control" name="mess_postoffice" value="{{ old('mess_postoffice') }}" placeholder="Post Office" style="color: #999;">      
                                                        <option value="" disabled hidden selected>Select Post Office</option>
                                                         </select>
                                                    </div>

                                                    <div class="col-md-10">
                                                        @if ($errors->has('mess_pincode'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('mess_pincode') }}</strong>
                                                            </span>
                                                        @endif

                                                        @if ($errors->has('mess_postoffice'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('mess_postoffice') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('mess_state') ? ' has-error' : '' }} form-group{{ $errors->has('mess_district') ? ' has-error' : '' }}">
                                                    <div class="col-md-3 col-md-offset-4">
                                                        <input id="mess_district" type="text" class="form-control" name="mess_district" value="{{ old('mess_district') }}" placeholder="District"  readonly>      
                                                    </div>

                                                    <div class="col-md-3">
                                                       <input id="mess_state" type="text" class="form-control" name="mess_state" value="{{ old('mess_state') }}" placeholder="State" readonly>
                                                    </div>

                                                    <div class="col-md-10">

                                                        @if ($errors->has('mess_district'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('mess_district') }}</strong>
                                                            </span>
                                                        @endif

                                                        @if ($errors->has('mess_state'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('mess_state') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                </fieldset>
                                            </div>
                                        <!-- mess address END -->
                                        </div>
                                    <!-- VOICE FORM -->
                                        <div class="collapse voice">
                                            <!-- voice name -->
                                            <div class="form-group{{ $errors->has('voice') ? ' has-error' : '' }}">
                                                <label for="voice" class="col-md-4 control-label">Voice Name</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="voice" name="voice" value="{{old('voice')}}">
                                                        <option>Rameswaram Voice</option>
                                                        <option>Puri Voice</option>
                                                        <option>Haridwar Voice</option>
                                                        <option>Alipore Voice</option>
                                                        <option>Others</option>
                                                    </select>
                                                    @if ($errors->has('voice'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('voice') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- dept END -->
                                        </div>
                                    </div>
                                </div>
                            <!-- .....Passout user form.......... -->
                                <div id="passout" hidden>
                                <!-- Current Address -->
                                    <div>
                                        <fieldset>
                                        <div class="form-group{{ $errors->has('cur_addr') ? ' has-error' : '' }}">

                                            <label for="cur_addr" class="col-md-4 control-label">Current Address</label>

                                            <div class="col-md-6">
                                                <textarea id="cur_addr" rows="3" class="form-control" name="cur_addr" value="{{ old('cur_addr') }}" placeholder="Please Mention:&#13;&#10;Flat No. ,&#9;Build. No/Appart. Name ,&#13;&#10;Street Name/Locality ,&#9; Landmark "></textarea>

                                                @if ($errors->has('cur_addr'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cur_addr') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('cur_city') ? ' has-error' : '' }}">

                                            <div class="col-md-6 col-md-offset-4">
                                                <input id="cur_city" type="text" class="form-control" name="cur_city" value="{{ old('cur_city') }}" placeholder="City/Village">

                                                @if ($errors->has('cur_city'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cur_city') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('cur_pincode') ? ' has-error' : '' }} form-group{{ $errors->has('cur_postoffice') ? ' has-error' : '' }}">
                                            
                                            <div class="col-md-3 col-md-offset-4">
                                                <input id="cur_pincode" type="number" class="form-control" name="cur_pincode" value="{{ old('cur_pincode') }}" placeholder="Pincode">                         
                                            </div>
                                            
                                            <div class="col-md-3">
                                                 <select id="cur_postoffice" type="text" class="form-control" name="cur_postoffice" value="{{ old('cur_postoffice') }}" placeholder="Post Office" style="color: #999;">
                                                    <option value="" disabled hidden selected>Select Post Office</option>
                                                </select>
                                            </div>

                                            <div class="col-md-10">
                                                @if ($errors->has('cur_pincode'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cur_pincode') }}</strong>
                                                    </span>
                                                @endif

                                                @if ($errors->has('cur_postoffice'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cur_postoffice') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('cur_state') ? ' has-error' : '' }} form-group{{ $errors->has('cur_district') ? ' has-error' : '' }}">
                                            <div class="col-md-3 col-md-offset-4">
                                                <input id="cur_district" type="text" class="form-control" name="cur_district" value="{{ old('cur_district') }}" placeholder="District" readonly>      
                                            </div>

                                            <div class="col-md-3">
                                               <input id="cur_state" type="text" class="form-control" name="cur_state" value="{{ old('cur_state') }}" placeholder="State" readonly>
                                            </div>

                                            <div class="col-md-10">

                                                @if ($errors->has('cur_district'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cur_district') }}</strong>
                                                    </span>
                                                @endif

                                                @if ($errors->has('cur_state'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('cur_state') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        </fieldset>
                                    </div>

                                    <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }} form-group{{ $errors->has('company_designation') ? ' has-error' : '' }}">
                                        <label for="office_det" class="col-md-4 control-label">Company Details</label>

                                        <div class="col-md-3">
                                            <input id="office_det" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name">

                                            @if ($errors->has('company_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('company_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-3">
                                            <input id="office_det" type="text" class="form-control" name="company_designation" value="{{ old('company_designation') }}" placeholder="Designation">

                                            @if ($errors->has('company_designation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('company_designation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Office Address -->
                                    <div>
                                        <fieldset>
                                        <div class="form-group{{ $errors->has('office_addr') ? ' has-error' : '' }}">

                                            <label for="office_addr" class="col-md-4 control-label">Office Address</label>

                                            <div class="col-md-6">
                                                <textarea id="office_addr" rows="3" class="form-control" name="office_addr" value="{{ old('office_addr') }}" placeholder="Please Mention:&#13;&#10;Flat No. ,&#9;Build. No/Appart. Name ,&#13;&#10;Street Name/Locality ,&#9; Landmark "></textarea>

                                                @if ($errors->has('office_addr'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('office_addr') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('office_city') ? ' has-error' : '' }}">

                                            <div class="col-md-6 col-md-offset-4">
                                                <input id="office_city" type="text" class="form-control" name="office_city" value="{{ old('office_city') }}" placeholder="City/Village">

                                                @if ($errors->has('office_city'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('office_city') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('office_pincode') ? ' has-error' : '' }} form-group{{ $errors->has('office_postoffice') ? ' has-error' : '' }}">
                                            
                                            <div class="col-md-3 col-md-offset-4">
                                                <input id="office_pincode" type="number" class="form-control" name="office_pincode" value="{{ old('office_pincode') }}" placeholder="Pincode">                         
                                            </div>
                                            
                                            <div class="col-md-3">
                                                 <select id="office_postoffice" type="text" class="form-control" name="office_postoffice" value="{{ old('office_postoffice') }}" placeholder="Post Office" style="color: #999;">
                                                     <option value="" disabled hidden selected>Select Post Office</option>
                                                 </select>
                                            </div>
                                            <div class="col-md-10">
                                                @if ($errors->has('office_pincode'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('office_pincode') }}</strong>
                                                    </span>
                                                @endif

                                                @if ($errors->has('office_postoffice'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('office_postoffice') }}</strong>
                                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('office_state') ? ' has-error' : '' }} form-group{{ $errors->has('office_district') ? ' has-error' : '' }}">
                                            <div class="col-md-3 col-md-offset-4">
                                                <input id="office_district" type="text" class="form-control" name="office_district" value="{{ old('office_district') }}" placeholder="District" readonly>      
                                            </div>

                                            <div class="col-md-3">
                                               <input id="office_state" type="text" class="form-control" name="office_state" value="{{ old('office_state') }}" placeholder="State" readonly>
                                            </div>

                                            <div class="col-md-10">

                                                @if ($errors->has('office_district'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('office_district') }}</strong>
                                                    </span>
                                                @endif

                                                @if ($errors->has('office_state'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('office_state') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        </fieldset>
                                    </div>


<!-- --------------------------------------------- TO BE ADDED IN SERVICES!!! -----------------------------------------

                                    <div class="container-fluid">
                                        <label for="mail_det" class="col-md-4 control-label">Mailing Address</label>

                                        <div class="col-md-6" style="overflow-x:auto;">
                                            <table id="mail_det" class="table table-responsive table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="font-size:130%;"><sub>For</sub>\<sup>To</sup></th>
                                                    <th class="text-center">Current Address</th>
                                                    <th class="text-center">Permanent Address</th>
                                                    <th class="text-center">Office Address</th>
                                                    <th class="text-center">Ask First</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th style="font-size:90%;">Address on 8OG</th>
                                                    <td class="text-center"><input type="radio" name="80G" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="80G" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="80G" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="80G" value="ask"></td>
                                                </tr>

                                                <tr>
                                                    <th>BTG</th>
                                                    <td class="text-center"><input type="radio" name="BTG" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="BTG" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="BTG" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="BTG" value="ask"></td>
                                                </tr>

                                                <tr>
                                                    <th style="font-size:90%;">Birthday gifts</th>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="b_gift" value="ask"></td>
                                                </tr>

                                                <tr>
                                                    <th style="font-size:90%;">Festival gifts</th>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="CA"></td>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="PA"></td>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="OA"></td>
                                                    <td class="text-center"><input type="radio" name="f_gift" value="ask"></td>
                                                </tr>
                                            </tbody>
                                            </table>

                                        </div>
                                    </div>
    ------------------------------------------------------------------------------------------------------------- -->
                                </div>
                                    <ul class="pager wizard">
                                        <li class="previous"><a class="btnPrevious">Previous</a></li>
                                        <li class="next"><a class="btnNext">Next</a></li>
                                    </ul>
                            </div>
                            <!-- tab Staying END---->
                            
                            <!--tab final -->
                            <div class="tab-pane" id="Final" style="position:relative; top:10px">
                                <p class="text-aqua">Thanks for comming till here! Now just the last few formalities are left...</p>

                                <!-- Connected to center -->
                                <div class="form-group{{ $errors->has('center_connected_to') ? ' has-error' : '' }}">
                                    <label for="center_connected_to" class="col-md-4 control-label">Connected to Center</label>

                                    <div class="col-md-6">
                                        <input id="center_connected_to" type="text" class="form-control" name="center_connected_to" value="{{ old('center_connected_to') }}" placeholder="VOICE/BACE you are connected to?">

                                        @if ($errors->has('center_connected_to'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('center_connected_to') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Connected center ends -->
                                <!-- Counsellor Name -->
                                <div id="counsellor_div" class="form-group{{ $errors->has('counsellor') ? ' has-error' : '' }}" style="display:none;">
                                    <label for="counsellor" class="col-md-4 control-label">Counsellor Name</label>

                                    <div class="col-md-6">
                                        <select id="counsellor" type="text" class="form-control" name="counsellor" value="{{ old('counsellor') }}">
                                            <?php   $counsellors = \App\User::get_counsellors(); ?>
                                            @foreach($counsellors as $counsellor)
                                                <option value={{$counsellor->id}}>HG {{$counsellor->name}} Pr. ji</option>
                                            @endforeach

                                        </select>

                                        @if ($errors->has('counsellor'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('counsellor') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Counsellor Name ends -->
                                <!-- Connected to devotee -->
                                <div class="form-group{{ $errors->has('primary_devotee_connected') ? ' has-error' : '' }}">
                                    <label for="primary_devotee_connected" class="col-md-4 control-label">Connected through Devotee</label>

                                    <div class="col-md-6" style="top:2px">
                                        <input id="primary_devotee_connected" type="text" class="form-control" name="primary_devotee_connected" value="{{ old('primary_devotee_connected') }}" placeholder="Devotee you are connected through?">

                                        @if ($errors->has('primary_devotee_connected'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('primary_devotee_connected') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('secondary_devotee_connected') ? ' has-error' : '' }}">
                                    <div class="col-md-6 col-md-offset-4" style="top:-2px">
                                        <input id="secondary_devotee_connected" type="text" class="form-control" name="secondary_devotee_connected" value="{{ old('secondary_devotee_connected') }}" placeholder="Another devotee you are connected to?">
                                    </div>
                                </div>

                                <!-- Connected to devotee ends here -->
                                <!-- Password -->
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Choose your Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Re-Type Password -->
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Password ends here -->
                               <!-- upload profile_pic -->
                               <div class="container-fluid">

                                    <label for="profile_pic" class="col-md-4 control-label">Upload your pic</label>
                                    <div class="col-md-6">
                                        <input id="profile_pic" type="file" name="profile_pic" accept="image/*">
                                    </div>
                                </div>

                                <ul class="pager wizard">
                                    <li class="previous"><a class="btnPrevious">Previous</a></li>
                                    <!-- <li class="next"><a class="btnNext">Next</a></li> -->
                                    <li class="next pull-right"><button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Register
                                    </button></li>
                                </ul>

                            </div>
                            <!-- tab pic END---->
                        </div>                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection