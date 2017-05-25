@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="About";
    $page_desc="";
?>
@stop

@section('content')
<!-- /head-->
		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- CORE CSS -->
		<link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="{{asset('/assets/plugins/slider.revolution/css/extralayers.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('/assets/plugins/slider.revolution/css/settings.css')}}" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="{{asset('/assets/css/essentials.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('/assets/css/layout.css')}}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{asset('/assets/css/header-1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('/assets/css/color_scheme/green.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />

		<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/default.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/component.css')}}" />
		<script src="{{asset('/assets/js/modernizr.custom.js')}}"></script>
<!-- /head-->
	
			<!-- -->
			<section>
				<div class="container">
<!-- <h1>{{$center->name}}</h1>					 -->
					<div class="row">
					
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div>
								<img height="100" width="100" class="img-responsive" src="{{asset('/center/'.$center->id.'/college_logo')}}" alt="">
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="heading-title heading-border-bottom">
								<h3>{{$center->name}}</h3>
							</div>

							<p>No. of members:&nbsp;{{$center->no_of_members}}</p>
							<p>{{$center->description}}</p>
							<p>Lorem ipsum dolor sit amet, consecteturipsum dolor sit amet, consecteturipsum dolor sit amet, consectetur adium saepe dolorum ratione officia sint eos minus.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam in minima iusto voluptatem aliquam odit odio. Aliquam voluptatibus beatae officiis?</p>
							<p>Lorem ipsum dolor sit amet, consecteturipsum dolor sit amet, consecteturipsum dolor sit amet, consectetur adium saepe dolorum ratione officia sint eos minus.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam in minima iusto voluptatem aliquam odit odio. Aliquam voluptatibus beatae officiis?</p>							
						</div>

					</div>
					
				</div>
			</section>
			<!-- / -->

			<!-- section 2 -->
			<section style="border:0px; padding-bottom:0px;">
				<div class="container">
					
					<div class="row">
					<div class="heading-title heading-border-bottom">
								<h3>Our Center</h3>
							</div>
						
						<div class="col-lg-6 col-md-6 col-sm-6">
							
							<p>{{$center->addr}},&#13;&#10;{{$center->city}},Dist:{{$center->district}}</p>
							<p>P.O:{{$center->postoffice}},&nbsp;{{$center->state}}&nbsp;-&nbsp;{{$center->pincode}}</p>

						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div>
								<img class="img-responsive" src="{{asset('/center/'.$center->id.'/center_img')}}" alt="">
							</div>
						</div>
					</div>
		        </div>
		    </section>
		    <!--section 2 -->

		    <!-- section 3  -->
		    <div class="heading-title heading-border-bottom">
								<h3>Events</h3>
							</div>
			<section style="border:0px; padding-bottom:0px;">
				<div class="container">
					
					<div class="row">

		                <ul class="grid cs-style-3">
		                  
		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/90.png')}}" alt="protu">
		                      <figcaption>
		                        <h4 style="font-size:15px;">Ajh Aiobno</h4>
		                        <span style="font-size:10px;">Co-Founder</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/91.png')}}" alt="ankur">
		                      <figcaption>
		                        <h4 style="font-size:15px;">Biub IUVIUods</h4>
		                        <span style="font-size:10px;">Designer</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/92.png')}}" alt="mahesh">
		                      <figcaption>
		                        <h4 style="font-size:15px;">ABC bac eib</h4>
		                        <span style="font-size:10px;">Co-Founder</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/93.png')}}" alt="protu">
		                      <figcaption>
		                        <h4 style="font-size:15px;">Ajh Aiobno</h4>
		                        <span style="font-size:10px;">Co-Founder</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/94.png')}}" alt="ankur">
		                      <figcaption>
		                        <h4 style="font-size:15px;">Biub IUVIUods</h4>
		                        <span style="font-size:10px;">Designer</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/94.png')}}" alt="mahesh">
		                      <figcaption>
		                        <h4 style="font-size:15px;">ABC bac eib</h4>
		                        <span style="font-size:10px;">Co-Founder</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                  		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/92.png')}}" alt="mahesh">
		                      <figcaption>
		                        <h4 style="font-size:15px;">ABC bac eib</h4>
		                        <span style="font-size:10px;">Co-Founder</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                  <li style="width:250px;">
		                    <figure>
		                      <img src="{{asset('/gallery/93.png')}}" alt="protu">
		                      <figcaption>
		                        <h4 style="font-size:15px;">Ajh Aiobno</h4>
		                        <span style="font-size:10px;">Co-Founder</span>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-linkedin"></i></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-google-plus"></i></a>
		                        <a class="pull-right" style="margin:2px;" href="#"><i class="fa fa-facebook"></i></a>
		                      </figcaption>
		                    </figure>
		                  </li>
		                </ul>
		            </div>
		        </div>
			</section>
			<!--section 3 -->
		</div>
		<!-- /wrapper -->


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = {{asset('assets/plugins/index.html')}};</script>
		<script type="text/javascript" src="{{asset('/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('/assets/js/scripts.js')}}"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="{{asset('/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('/assets/js/view/demo.revolution_slider.js')}}"></script>
		<script type="text/javascript" src="{{asset('/assets/plugins/owl.carousel.min.js')}}"></script>
		<script type="text/javascript">
			function changeClass() {
			    var d = document.getElementById("team_flip");
			    d.className = d.className + " flip";
			}
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="{{asset('/assets/js/toucheffects.js')}}"></script>
@stop