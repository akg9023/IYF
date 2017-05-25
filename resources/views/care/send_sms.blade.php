@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="SMSing";
    $page_desc="Send SMS to your loved ones";
?>
@stop

@section('content')
	<link rel="stylesheet" href="{{asset('/bower_components/sweetalert/dist/sweetalert.css')}}">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="{{asset('/bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>
	<script type='text/javascript'>

	//<![CDATA[

	function send_msg(number,msg){

		

		// document.getElementById("resp").innerHTML = "dest="+number+"msg="+msg;

		var xhttp;
		if (window.XMLHttpRequest) {
		    xhttp = new XMLHttpRequest();
		    } else {
		    // code for IE6, IE5
		    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xhttp.onreadystatechange = function() {
		  if (this.readyState == 4 && this.status == 200) {
		    document.getElementById("resp").innerHTML = this.responseText;
		  }
		};

		xhttp.open("GET", "https://api.unicel.in/SendSMS/sendmsg.php?uname=ISKCONKO&pass=86hyg6&ssend=IYFkol&dest=" + number +"&msg=" + msg, true);
		xhttp.send();

		swal("Message sent!",
		  "A message have been sent to "+ number +".",
		  "success"); 
		// xhttp.send("fname=Henry&lname=Ford");  //POST
		
	}

	//]]>
	</script>

	<div class="container">
    <div class="row">
        <div class="col-md-11 col-sm-11  col-xs-10">

        	<form action="javascript:void(0)">
				
				<label for="receiver">Mobile No.</label>
				<input id="receiver" class="form-control" type="number" name="rec" />
				<br>
				<label for="msg">Message</label>
				<textarea id="msg" name="msg" class="form-control" rows="5" maxlength="160"></textarea>
				<br>

				<input type="submit" class="btn btn-warning pull-right" value="Send" onclick="send_msg($('#receiver').val(),$('#msg').val())">
				</form>


			</form>

        </div>
    </div>
    </div>

@stop