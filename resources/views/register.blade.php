
@extends('admin_template')


<!--
<ul class="nav nav-pills">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>



 <div class="container">
  <h3>Inline List</h3>
  <ul class="list-inline">
    <li><a href="#">Basic</a></li>
    <li><a href="#">College</a></li>
    <li><a href="#">Staying </a></li>
    <li><a href="#">Upload Pic</a></li>
  </ul>
</div>
 -->

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <!--tabs  -->
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#Basic" data-toggle="tab">Basic</a></li>
                            <li><a href="#College" data-toggle="tab">College</a></li>
                            <li><a href="#Staying" data-toggle="tab">Staying </a></li>
                            <li><a href="#Pic" data-toggle="tab">Upload Pic</a></li>
                        </ul>

                        <!--  -->
                        <div class="tab-content">
                            <!-- tab Basic -->
                            <div class="tab-pane active" id="Basic">
                                <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }} form-group{{ $errors->has('firstname') ? ' has-error' : '' }} form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-2 inline">
                                        <input id="name" type="text" class="form-control" name="surname" value="{{ old('surname') }}" placeholder="Surname">

                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-2 inline">
                                        <input id="name" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">

                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('firstname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-2 inline">
                                        <input id="name" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">

                                        @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('lastname') }}</strong>
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
                                <div class= "form-group{{ $errors->has('mob1') ? ' has-error' : '' }} form-group{{ $errors->has('mob2') ? ' has-error' : '' }}">
                                    <label for="Mobile_No" class="col-md-4 control-label">Mobile No.</label>

                                    <div class="col-md-3 inline">
                                        <input id="Mobile_No" type="number" class="form-control" name="mob1" value="{{ old('mob1') }}" placeholder="Mobile No.(1)">
                                        @if ($errors->has('mob1'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mob1') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-md-3 inline ">
                                        <input id="Mobile_No" type="number" class="form-control" name="mob2" value="{{ old('mob2') }}"" placeholder="Mobile No.(2)">

                                        @if ($errors->has('mob2'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mob2') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>    
                                <!-- --------------------------- -->


                                <!-- -------What’sApp----------- -->
                                <div class="form-group{{ $errors->has('whatsapp_no') ? ' has-error' : '' }}">
                                    <label for="What'sApp_no" class="col-md-4 control-label">What’sApp No.</label>

                                    <div class="col-md-6">
                                        <input id="What’sApp_no" type="number" class="form-control" name="whatsapp_no" value="{{ old('whatsapp_no') }}">

                                        @if ($errors->has('whatsapp_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('whatsapp_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                <!-- --------------------------- -->
                                
                                <!-- -----------------D.O.B----------------------- -->
                                <div class="form-group{{ $errors->has('bday') ? ' has-error' : '' }}">
                                    <label for="bday" class="col-md-4 control-label">Birthday</label>

                                    <div class="col-md-6">
                                        <input id="bday" type="date" class="form-control" name="bday" value="{{ old('bday') }}">

                                        @if ($errors->has('bday'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bday') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>    
                                <!-- ------------D.O.B end--------------- -->
                            </div> 
                            <!-- tab Basic end-->
                            
                            <!-- new tab college -->
                            <div class="tab-pane" id="College">
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
                            
                                <!-- College Roll No  -->
                                <div class="form-group{{ $errors->has('roll_No') ? ' has-error' : '' }}">
                                    <label for="roll_No" class="col-md-4 control-label">Roll No.</label>

                                    <div class="col-md-6">
                                        <input id="roll_No" type="number" class="form-control" name="roll_No" value="{{ old('roll_No') }}">

                                        @if ($errors->has('roll_No'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('roll_No') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>   
                                <!-- College Roll No END -->
                                
                                <!-- period  -->
                                <div class="form-group{{ $errors->has('period') ? ' has-error' : '' }}">
                                    <label for="period" class="col-md-4 control-label">Period</label>
                                    <div class="col-md-3">
                                       
                                        {{Form::selectYear('from',1970,date("Y"),'From', ['class' => "form-control",'placeholder'=>'From','id'=>'period'])}}

                                        @if ($errors->has('period'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('period') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                       
                                        {{Form::selectYear('to',1973,date("Y")+6,'To', ['class' => "form-control",'placeholder'=>'To','id'=>'period'])}}

                                        @if ($errors->has('period'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('period') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- period END -->

                                <!-- dept -->
                                <div class="form-group{{ $errors->has('dept') ? ' has-error' : '' }}">
                                    <label for="dept" class="col-md-4 control-label">Department</label>
                                    <div class="col-md-6">
                                        <input id="dept" type="text" class="form-control" name="dept" value="{{ old('dept') }}">

                                        @if ($errors->has('dept'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('dept') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- dept END -->
                            </div>
                            <!-- new tab college end -->                        

                            <!-- tab Staying -->
                            <div class="tab-pane" id="Staying">
                               <!-- residence -->
                                <h3>Residence</h3>
                                <!-- Radio Buttons for selection -->

                                <script type='text/javascript'>//<![CDATA[
                                    $(window).on('load', function() {
                                    $('input[type=radio]').on('change', function () {
                                    if (!this.checked) return
                                    $('.collapse').not($('div.' + $(this).attr('class'))).slideUp();
                                    $('.collapse.' + $(this).attr('class')).slideDown();
                                    });
                                    });//]]> 

                                </script>

                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="hostel" name="residence" value="Hostel" checked> Hostel
                                    </label>

                                    <label class="radio-inline"> 
                                        <input type="radio" class="mess" name="residence" value="Mess"> Mess
                                    </label>
                                    
                                    <label class="radio-inline">
                                        <input type="radio" class="voice" name="residence" value="Voice"> Voice
                                    </label>
                                </div>
                                <!-- contents of radio -->
                                <div>
                                <!-- HOSTEL FORM -->
                                    <div class="collapse hostel" style="display:block;">
                                        <!-- hostel name -->
                                        <div class="form-group{{ $errors->has('hostel') ? ' has-error' : '' }}">
                                            <label for="hostel" class="col-md-4 control-label">Hostel Name</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="hostel" value="{{old('hostel')}}">

                                                @if ($errors->has('hostel'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('hostel') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- hostel name END -->
                                        <!-- Room no. -->
                                        <div class="form-group{{ $errors->has('room_no') ? ' has-error' : '' }}">
                                            <label for="dept" class="col-md-4 control-label">Room No.</label>
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
                                        <div class="form-group{{ $errors->has('mess_addr') ? ' has-error' : '' }}">
                                            <label for="mess_addr" class="col-md-4 control-label">Mess Address</label>
                                            <div class="col-md-6">
                                                <textarea id='mess_addr' class="form-control" row="4" name="mess_addr"> {{ old('mess_addr') }}</textarea>

                                                @if ($errors->has('mess_addr'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('mess_addr') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- mess address END -->
                                    </div>
                                <!-- VOICE FORM -->
                                    <div class="collapse voice">
                                        <!-- voice name -->
                                        <div class="form-group{{ $errors->has('voice') ? ' has-error' : '' }}">
                                            <label for="voice" class="col-md-4 control-label">Voice Name</label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="hostel" value="{{old('voice')}}">
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
                            <!-- tab Staying END---->
                            
                            <!--tab pic -->
                            <div action="demo_form.asp" class="tab-pane" id="Pic">
                               <!-- upload -->
                               <div action="demo_form.asp">
                                  <input type="file" name="pic" accept="image/*">
                                  <input type="submit">
                                </div>
                            </div>
                            <!-- tab pic END---->

                            <!-- next  -->
                            <ul class="pager wizard">
                                <li class="previous first" style="display:none;"><a href="#">First</a></li>
                                <li class="previous"><a href="#">Previous</a></li>
                                <li class="next last" style="display:none;"><a href="#">Last</a></li>
                                <li class="next"><a href="#">Next</a></li>
                            </ul>
                            <!-- next end -->
                        </div>                           
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection