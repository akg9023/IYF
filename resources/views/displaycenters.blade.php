@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Centers";
    $page_desc="details";
?>
@stop

@section('content')
		<!-- CORE CSS -->
		<link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('/assets/css/layout.css')}}" rel="stylesheet" type="text/css" />


		<link id="changeable-colors" rel="stylesheet" href="{{asset('/assets/css/vitality-red.css')}}">

	<div class="container">
    	<div class="row">
        	<div class="col-md-11">
            	<div class="panel panel-default">
                <!-- <div class="panel-heading">Welcome</div> -->

                <div class="panel-body">
		        <div class="container text-center wow fadeIn">
		            <div class="row">
		                <div class="col-lg-12">
		                	 <!-- <li><a href="{{asset('/displaycenters')}}"> -->
		                    <div id="portfoliolist">
	                    	  @foreach(App\Center::all() as $center)
								    <div class="portfolio identity" data-cat="identity" data-toggle="modal">
			                            <div class="portfolio-wrapper">
			                                <img src="{{asset('/center/'.$center->id.'/college_logo')}}" alt="">
			                                <div class="caption">
			                                    <div class="caption-text">
			                                        <a  href="{{asset('/aboutclg/'.$center->id)}}" class="text-title">{{$center->name}}</a>
			                                        <span class="text-category">{{$center->city}}</span>
			                                    </div>
			                                    <div class="caption-bg"></div>
			                                </div>
			                            </div>
			                        </div>		
			       			@endforeach
						
     	            <!--mk added 6 div-->
     	                    </div>
						</div>
     				</div>	          
     			</div>
		    	</div>
		    	</div>          
		<!-- Modal -->
		<div id="portfolioModal1" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">IIT Kharagpur</h4>
		      </div>
		      <div class="modal-body">
		        <p>Total No. of Members - 20 </p>
		        <p>Established on - 1990 </p>
		        <p>Events - games ,yoga </p>
		        <p>Address - near kharagpur station </p> 
		      </div>

      			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      	</div>
		    </div>

		  </div>
		</div>

		<!-- Modal -->
		<div id="portfolioModal2" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modal Header2</h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal2.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		<!-- Modal -->
		<div id="portfolioModal3" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Nit jamshedpur</h4>
		      </div>
		      <div class="modal-body">
		        <p>
NIT Jamshedpur has always been among the top NITs in India. The institute has achieved remarkable accomplishments in the field of Academic Excellence.It is mainly due to the following reasons:

Pre-prepared course handout including which includes selected standard books for certain subjects thus proving effective for the students both in terms of quality and standards. We follow the Course curricula which is only followed in American universities like MIT, Harvard etc helps in improving the quality of technical education.
→Why Choose NIT Jamshedpur</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		<!-- Modal -->
		<div id="portfolioModal4" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modal Header4</h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal4.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		<!-- Modal -->
		<div id="portfolioModal5" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modal Header5</h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal5.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>

		<!-- Modal -->
		<div id="portfolioModal6" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modal Header6</h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal6.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>


		<!-- JAVASCRIPT FILES -->
		 <script>var plugin_path = {{asset('/assets/plugins/index.html')}};</script>
		<script type="text/javascript" src="{{asset('/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>

		<!-- // <script type="text/javascript" src="assets/js/scripts.js"></script> -->

		<!-- REVOLUTION SLIDER -->
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- Plugin Scripts -->
	    <script src="{{asset('/assets/js/plugins/jquery.easing.min.js')}}"></script>
	    <script src="{{asset('/assets/js/plugins/owl-carousel/owl.carousel.js')}}"></script>
	    <script src="{{asset('/assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>
	    <script src="{{asset('/assets/js/plugins/background/core.js')}}"></script>
	    <script src="{{asset('/assets/js/plugins/background/background.js')}}"></script>
	    <script src="{{asset('/assets/js/plugins/jquery.mixitup.js')}}"></script>
	    <script src="{{asset('/assets/js/vitality.js')}}"></script>
@endsection