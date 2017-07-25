@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Gallery";
    $page_desc="";
?>
@stop

@section('content')
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 5px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color:white;
  font-size: 50px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<!-- </head> -->
<!-- <body> -->

<div class="col-md-11">
          <div class="box box-solid">
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
              
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{asset('/gallery/93.png')}}" alt="First slide">
                    <div class="carousel-caption">
                      YOGA
                    </div>
                  </div>

                  <div class="item">
                    <img src="{{asset('/gallery/games1.jpg')}}" alt="Second slide">
                    <div class="carousel-caption">
                      GAMES
                    </div>
                  </div>
                  
                  <div class="item">
                    <img src="{{asset('/gallery/90.png')}}" alt="Third slide">
                    <div class="carousel-caption">
                      SEMINARS
                    </div>
                  </div>
                
                </div>
                <!-- caro -->
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>

<table border="5" border-collapse="collapse" cellpadding="30" cellspace="5" height: auto; >
  <center>
<tr >
    <td><img src="{{asset('/gallery/96.png')}}" style="width:100%"><h2>Presentation</h2></td>
    <td><img src="{{asset('/gallery/99.png')}}" style="width:100%"><h2>Awards</h2></td>
    <td><img src="{{asset('/gallery/house2.jpg')}}" style="width:100%"><h2>Durgapur Center</h2></td>
</tr>
<tr>
  <td><img src="{{asset('/gallery/97.png')}}" style="width:100%"><h2>Drama</h2></td>
  <td><img src="{{asset('/gallery/93.png')}}" style="width:100%"><h2>Yoga</h2></td>
  <td><img src="{{asset('/gallery/95.png')}}" style="width:100%"><h2>Haldia Center</h2></td>
</tr>
<tr>
    <td><img src="{{asset('/gallery/games1.jpg')}}" style="width:100%"><h2>Game</h2></td>
    <td><img src="{{asset('/gallery/98.png')}}" style="width:100%"><h2>Logo</h2>
    <td><img src="{{asset('/gallery/92.png')}}" style="width:100%"><h2>Games</h2></td>
  </tr>
<tr>
    <td><img src="{{asset('/gallery/sports1.jpg')}}" style="width:100%"><h2>Sport</h2></td>
    <td><img src="{{asset('/gallery/90.png')}}" style="width:100%"><h2>Seminar</h2></td>
    <td><img src="{{asset('/gallery/house1.jpg')}}" style="width:100%"><h2>Kharagpur Center</h2></td>
</tr>
</table>

@endsection
