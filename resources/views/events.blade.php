@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Events";
    $page_desc="";
?>
@stop

@section('content')
<!-- {{asset('/gallery/96.png')}} -->
<style id="css">/* Begin: reset styles */

body,div,ul,ol,li,input,textarea,p,abbr {
  margin:0;
  outline: none;
  padding:0;
}
ol,ul {
  list-style:none;
}
h1,h2,h3,h4,h5,h6 {
  font-size: 100%;
  font-weight: normal;
  margin: 0;
  padding: 0;
}
img {
  border: none;
}

/* End: reset */

#chromefix {
  -webkit-transform: perspective(1); /* Chrome 12/13/14 flicker fix. */
}

body {
  background-color: rgba(238, 238, 238, 1);
  
  background-image: url(#EEEEEE none repeat scroll top left);
  background-position: left top;
  background-repeat: no-repeat;
  
  
}

body, input, textarea {
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 14px;
}

a,
a:focus {
  color: rgba(0, 158, 184, 1);
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  outline: none;
  text-decoration: none;
  -moz-transition: color .3s;
-ms-transition: color .3s;
-o-transition: color .3s;
-webkit-transition: color .3s;
transition: color .3s;
}

a:visited {
  color: rgba(0, 158, 184, 1);
}

a:hover {
  color: rgba(0, 158, 184, 1);
  text-decoration: underline;
}

abbr.published {
  outline: none;
  text-decoration: none;
  border: none;
}

.title {
  color: rgba(51, 51, 51, 1);
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 14px;
}

.title a {
  color: rgba(51, 51, 51, 1);
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

/* Way to prevent any css animations during dom manip. */
.instant, .instant * {
  -moz-transition: none !important;
-ms-transition: none !important;
-o-transition: none !important;
-webkit-transition: none !important;
transition: none !important;
  -moz-animation-iteration-count: 0 !important;
-ms-animation-iteration-count: 0 !important;
-o-animation-iteration-count: 0 !important;
-webkit-animation-iteration-count: 0 !important;
animation-iteration-count: 0 !important;
}

.adsense {
  margin: 0 auto;
  text-align: center;
}

/* Admin restricted links - obviously verified on server, but for easy templates. */

.blog-admin,
.item-control {
  display: none;
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
  .blog-admin,
  .item-control {
    margin-left: 14px;
  }
}

#injected-iframe {
  z-index: 9999 !important;
}

#fold {
    clear: both;
    padding: 12px;
    padding-top: 12px;
    padding-right: 12px;
    padding-bottom: 12px;
    padding-left: 12px;
    overflow: hidden;
    overflow-x: hidden;
    overflow-y: hidden;
}

.kd-button {
  background-color: #f5f5f5;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: -o-linear-gradient(top,#f5f5f5,#f1f1f1);
  background-image: linear-gradient(top,#f5f5f5,#f1f1f1);
  border: 1px solid #DCDCDC;
  border: 1px solid rgba(0,0,0,0.1);
  -moz-border-radius: 2px;
-ms-border-radius: 2px;
-o-border-radius: 2px;
-webkit-border-radius: 2px;
border-radius: 2px;
  -moz-box-sizing: content-box;
-ms-box-sizing: content-box;
-o-box-sizing: content-box;
-webkit-box-sizing: content-box;
box-sizing: content-box;
  color: #222;
  cursor:default;
  display: inline-block;
  font-size: 11px;
  font-weight: bold;
  height: 27px;
  line-height: 27px;
  min-width: 54px;
  padding: 0 8px;
  text-align: center;
  -moz-transition: all 0.218s;
-ms-transition: all 0.218s;
-o-transition: all 0.218s;
-webkit-transition: all 0.218s;
transition: all 0.218s;
  -moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
-webkit-user-select: none;
user-select: none;
}
.kd-button:hover {
  background-color: #f8f8f8;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f8f8f8),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: -o-linear-gradient(top,#f8f8f8,#f1f1f1);
  background-image: linear-gradient(top,#f8f8f8,#f1f1f1);
  border: 1px solid #C6C6C6;
  -moz-box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
-ms-box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
-o-box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
-webkit-box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
  color: #222;
  -moz-transition: all 0.0s;
-ms-transition: all 0.0s;
-o-transition: all 0.0s;
-webkit-transition: all 0.0s;
transition: all 0.0s;
}
.kd-button:active {
  background-color: #f6f6f6;
  background-image: -webkit-gradient(linear,left top,left bottom,from(#f6f6f6),to(#f1f1f1));
  background-image: -webkit-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -moz-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -ms-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: -o-linear-gradient(top,#f6f6f6,#f1f1f1);
  background-image: linear-gradient(top,#f6f6f6,#f1f1f1);
  border: 1px solid #C6C6C6;
  -moz-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
-ms-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
-o-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
-webkit-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
  color: #333;
}

.kd-button:focus, .kd-button.right:focus, .kd-button.left:focus{
  border: 1px solid #4d90fe;
  outline: none;
  z-index: 4 !important;
}

.kd-button.left {
  -moz-border-radius: 2px 0 0 2px;
-ms-border-radius: 2px 0 0 2px;
-o-border-radius: 2px 0 0 2px;
-webkit-border-radius: 2px 0 0 2px;
border-radius: 2px 0 0 2px;
  border-right-color: transparent;
  margin-right: 0;
}
.kd-button.left:hover {
  border-right: 1px solid #c6c6c6;
}
.kd-button.right {
  -moz-border-radius: 0 2px 2px 0;
-ms-border-radius: 0 2px 2px 0;
-o-border-radius: 0 2px 2px 0;
-webkit-border-radius: 0 2px 2px 0;
border-radius: 0 2px 2px 0;
  margin-left:-5px;
}

.kd-button.right:hover {
  border-left: 1px solid #c6c6c6;
}
.kd-button img {
  display: inline-block;
  margin: -3px 0 0;
  *margin:4px 0 0; /*IE7*/
  opacity: 0.55;
  vertical-align: middle;
}

.kd-button.selected img {
  opacity: 0.9;
}
.kd-button:hover img {
  opacity: 0.72;
}
.kd-button:active img {
  opacity: 1.0;
}
/*disabled buttons*/
.kd-button.disabled,
.kd-button.disabled:hover,
.kd-button.disabled:active {
  background: #FFF;
  border: 1px solid #f3f3f3;
  border: 1px solid rgba(0,0,0,0.05);
  color: #b8b8b8;
  cursor: default;
  pointer-events: none;
}
.kd-button.disabled:active{
  -moz-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
-ms-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
-o-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
-webkit-box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
box-shadow: inset 0px 1px 2px rgba(0,0,0,0.1);
}
.kd-button.disabled img {
  opacity: 0.5;
}
.kd-button.small {
  min-width: 36px;
  padding: 0;
  width: 36px;
}



.ribbon {
  color: #eee;
  cursor: default;
  display: inline-block;
  text-align: center;
  width: 35px;
}
a.ribbon {
  color: #eee;
  cursor: pointer;
  text-decoration: none;
}

.ribbon .ribbon-piece {
  background-color: rgba(102, 102, 102, 1);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
-ms-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
-o-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  -moz-transition: background-color 0.5s ease-in;
-ms-transition: background-color 0.5s ease-in;
-o-transition: background-color 0.5s ease-in;
-webkit-transition: background-color 0.5s ease-in;
transition: background-color 0.5s ease-in;
}

/* On hover color change. */
a.ribbon:hover .ribbon-piece {
  background-color: rgba(173, 58, 43, 1);
  color: #eee;
}

.ribbon .top {
  border-bottom: solid 1px rgba(255, 255, 255, 0.6);
  -moz-border-radius: 1px 1px 0px 0px;
-ms-border-radius: 1px 1px 0px 0px;
-o-border-radius: 1px 1px 0px 0px;
-webkit-border-radius: 1px 1px 0px 0px;
border-radius: 1px 1px 0px 0px;
  font-size: 11px;
  padding: 4px 0;
  position: relative;
  text-transform: uppercase;
}

.ribbon .bottom {
  font-size: 17px;
  padding: 5px 0;
}

.ribbon .tail {
  height: 10px;
  overflow: hidden;
  position: relative;
}

.ribbon .tail .left,
.ribbon .tail .right {
  height: 10px;
  position: absolute;
  top: -10px;
  width: 50px;
}

.ribbon .tail .left{
  left: -9px;
  -moz-transform: rotate(-25deg);
-ms-transform: rotate(-25deg);
-o-transform: rotate(-25deg);
-webkit-transform: rotate(-25deg);
transform: rotate(-25deg);
}

.ribbon .tail .right{
  right: -9px;
  -moz-transform: rotate(25deg);
-ms-transform: rotate(25deg);
-o-transform: rotate(25deg);
-webkit-transform: rotate(25deg);
transform: rotate(25deg);
}

/* Do this with a transform? */
.ribbon.small {
  width: 25px;
}
.ribbon.small .top {
  font-size: 9px;
  padding: 2px 0;
}
.ribbon.small .bottom {
  font-size: 12px;
  padding: 3px 0;
}
.ribbon.small .tail {
  height: 6px;
}
.ribbon.small .tail .left,
.ribbon.small .tail .right {
  height: 6px;
  top: -7px;
  width: 40px;
}
.ribbon.small .tail .left {
  left: -6px;
}
.ribbon.small .tail .right {
  right: -6px;
}




.bubble {
  background-color: rgba(102, 102, 102, 1);
  background-position: center center;
  border-radius: 3px;
  border: solid 1px rgba(102, 102, 102, 1);
  color: white;
  cursor: default;
  display: inline-block;
  font-size: 12px;
  padding: 2px 0;
  position: relative;
  text-align: center;
  -moz-transition-property: background-color, border-color;
-ms-transition-property: background-color, border-color;
-o-transition-property: background-color, border-color;
-webkit-transition-property: background-color, border-color;
transition-property: background-color, border-color;
  -moz-transition-duration: 0.5s;
-ms-transition-duration: 0.5s;
-o-transition-duration: 0.5s;
-webkit-transition-duration: 0.5s;
transition-duration: 0.5s;
  -moz-transition-timing-function: ease-in;
-ms-transition-timing-function: ease-in;
-o-transition-timing-function: ease-in;
-webkit-transition-timing-function: ease-in;
transition-timing-function: ease-in;
  width: 26px;
}

.bubble.light {
  background-color: rgba(217, 217, 217, 1);
  border-color: rgba(217, 217, 217, 1);
}

.bubble.empty {
  color: rgba(102, 102, 102, 1);
  border: solid 1px rgba(153, 153, 153, 1);
  -moz-box-shadow: none;
-ms-box-shadow: none;
-o-box-shadow: none;
-webkit-box-shadow: none;
box-shadow: none;
  background-color: white;
}

.bubble .bubble-tail,
.bubble.empty .bubble-tail:after {
  border-color: rgba(102, 102, 102, 1) transparent transparent transparent;
  border-style:solid;
  border-width: 5px;
  bottom: -10px;
  content: '';
  height: 0;
  left: 50%;
  margin-left: -5px;
  position: absolute;
  -moz-transition: border-color 0.5s ease-in;
-ms-transition: border-color 0.5s ease-in;
-o-transition: border-color 0.5s ease-in;
-webkit-transition: border-color 0.5s ease-in;
transition: border-color 0.5s ease-in;
  width: 0;
}

.bubble.light .bubble-tail {
  border-color: rgba(217, 217, 217, 1) transparent transparent transparent;
}

.bubble.empty .bubble-tail {
  border-color: rgba(153, 153, 153, 1) transparent transparent transparent;
}

.bubble.empty .bubble-tail:after {
  left: 0;
  top: -6px;
  border-color: white transparent transparent transparent;
}

/* On hover color change.
.bubble:hover {
  background-color: #d14836;
  border-color: #d14836;
}

.bubble.empty:hover {
  /*background-color: white;
  border-color: #d14836;
  color: #d14836;
}

.bubble:hover .bubble-tail {
  border-color: #d14836 transparent transparent transparent !important;
}
*/




body.loading #loading {
  opacity: 0.75;
  margin-bottom: 0;
}

#loading {
  background-color: #000;
  border-radius: 6px 6px 0px 0px;
  border: solid 1px #666;
  border-bottom: none;
  bottom: 0;
  box-shadow: 0 0 4px #333;
  color: white;
  font-size: 18px;
  left: 50%;
  margin-bottom: -50px;
  margin-left: -60px;
  opacity: 0;
  padding: 5px 0px;
  position: fixed;
  text-align: center;
  -moz-transition: opacity 0.5s, margin-bottom 0.5s;
-ms-transition: opacity 0.5s, margin-bottom 0.5s;
-o-transition: opacity 0.5s, margin-bottom 0.5s;
-webkit-transition: opacity 0.5s, margin-bottom 0.5s;
transition: opacity 0.5s, margin-bottom 0.5s;
  -moz-transition-delay: 279ms;
-ms-transition-delay: 279ms;
-o-transition-delay: 279ms;
-webkit-transition-delay: 279ms;
transition-delay: 279ms;
  width: 120px;
  z-index: 999;
}

#loading span {
  background-repeat: no-repeat;
  background-position: right center;
  background-image: url(data:image/gif;base64,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);
  display: inline-block;
  height: 30px;
  line-height: 30px;
  padding-right: 30px;
}

#loading span:after {
  content: '...';
}

.blogger-gear {
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url(data:image/gif;base64,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);
  display: inline-block;
  height: 95px;
  width: 95px;
}



#message {
  position: fixed;
  text-align: center;
  top: 40%;
  width: 100%;
}
#message span {
  background-color: white;
  border-radius: 6px;
  color: #333;
  box-shadow: 0 0 4px #666;
  display: inline-block;
  font-family: arial;
  font-size: 16px;
  padding: 15px;
  white-space: no-wrap;
}



.quick-search {
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
  -moz-box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
-ms-box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
-o-box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
-webkit-box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
  padding: 5px;
  width: 450px;
  z-index: 10001;
}

.quick-search li {
  cursor: pointer;
}

.quick-search .result {
  border: solid 1px transparent;
  clear: both;
  font-size: 13px;
  height: 48px;
  margin: -1px;
  overflow: hidden;
  padding: 7px;
  position: relative;
}

.quick-search .title {
  display: inline-block;
  font-size: 15px;
  left: 60px;
  overflow: hidden;
  position: absolute;
  right: 130px;
  text-overflow: ellipsis;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  top: 5px;
  white-space: nowrap;
}

.quick-search .date {
  color: #dd4b39;
  font-size: 15px;
  margin-left: 5px;
  position: absolute;
  right: 5px;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
  top: 5px;
}

.quick-search .snippet {
  color: #888;
  left: 60px;
  line-height: 1.25;
  max-height: 35px;
  overflow: hidden;
  position: absolute;
  right: 5px;
  text-align: justify;
  top: 24px;
}

.quick-search .thumbnail {
  -moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  left: 5px;
  margin-right: 7px;
  position: absolute;
  top: 5px;
}

.quick-search .result:hover,
.quick-search .result.active {
  background-color: #f9edbe;
  border: solid 1px #f0c36d;
  -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-ms-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-o-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.quick-search .result:hover .snippet,
.quick-search .result.active .snippet {
  color: #333;
}

.quick-search .result .term {
  background-color: #f9edbe;
  color: black;
}

.quick-search .result:hover .term,
.quick-search .result:active .term {
  background-color: transparent;
}

.quick-search .server {
  border: solid 1px transparent;
  margin: -1px;
  padding: 10px;
  text-align: center;
}

.quick-search li + .server {
  border-top: solid 1px #ddd;
}

.quick-search .server:hover,
.quick-search .server.active {
  background-color: #eaeaea;
  border: solid 1px #ccc;
  -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-ms-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-o-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.quick-search .message {
  color: #4d90fe;
  display: block;
  font-size: 16px;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}

.quick-search .search_query {
  color: black;
}

.quick-search .count {
  color: #222;
  display: block;
  font-size: 14px;
}

#search.searching {
  background-image: url(data:image/gif;base64,R0lGODlhGAAYAPQAAP///wAAAM7Ozvr6+uDg4LCwsOjo6I6OjsjIyJycnNjY2KioqMDAwPLy8nZ2doaGhri4uGhoaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJBwAAACwAAAAAGAAYAAAFriAgjiQAQWVaDgr5POSgkoTDjFE0NoQ8iw8HQZQTDQjDn4jhSABhAAOhoTqSDg7qSUQwxEaEwwFhXHhHgzOA1xshxAnfTzotGRaHglJqkJcaVEqCgyoCBQkJBQKDDXQGDYaIioyOgYSXA36XIgYMBWRzXZoKBQUMmil0lgalLSIClgBpO0g+s26nUWddXyoEDIsACq5SsTMMDIECwUdJPw0Mzsu0qHYkw72bBmozIQAh+QQJBwAAACwAAAAAGAAYAAAFsCAgjiTAMGVaDgR5HKQwqKNxIKPjjFCk0KNXC6ATKSI7oAhxWIhezwhENTCQEoeGCdWIPEgzESGxEIgGBWstEW4QCGGAIJEoxGmGt5ZkgCRQQHkGd2CESoeIIwoMBQUMP4cNeQQGDYuNj4iSb5WJnmeGng0CDGaBlIQEJziHk3sABidDAHBgagButSKvAAoyuHuUYHgCkAZqebw0AgLBQyyzNKO3byNuoSS8x8OfwIchACH5BAkHAAAALAAAAAAYABgAAAW4ICCOJIAgZVoOBJkkpDKoo5EI43GMjNPSokXCINKJCI4HcCRIQEQvqIOhGhBHhUTDhGo4diOZyFAoKEQDxra2mAEgjghOpCgz3LTBIxJ5kgwMBShACREHZ1V4Kg1rS44pBAgMDAg/Sw0GBAQGDZGTlY+YmpyPpSQDiqYiDQoCliqZBqkGAgKIS5kEjQ21VwCyp76dBHiNvz+MR74AqSOdVwbQuo+abppo10ssjdkAnc0rf8vgl8YqIQAh+QQJBwAAACwAAAAAGAAYAAAFrCAgjiQgCGVaDgZZFCQxqKNRKGOSjMjR0qLXTyciHA7AkaLACMIAiwOC1iAxCrMToHHYjWQiA4NBEA0Q1RpWxHg4cMXxNDk4OBxNUkPAQAEXDgllKgMzQA1pSYopBgonCj9JEA8REQ8QjY+RQJOVl4ugoYssBJuMpYYjDQSliwasiQOwNakALKqsqbWvIohFm7V6rQAGP6+JQLlFg7KDQLKJrLjBKbvAor3IKiEAIfkECQcAAAAsAAAAABgAGAAABbUgII4koChlmhokw5DEoI4NQ4xFMQoJO4uuhignMiQWvxGBIQC+AJBEUyUcIRiyE6CR0CllW4HABxBURTUw4nC4FcWo5CDBRpQaCoF7VjgsyCUDYDMNZ0mHdwYEBAaGMwwHDg4HDA2KjI4qkJKUiJ6faJkiA4qAKQkRB3E0i6YpAw8RERAjA4tnBoMApCMQDhFTuySKoSKMJAq6rD4GzASiJYtgi6PUcs9Kew0xh7rNJMqIhYchACH5BAkHAAAALAAAAAAYABgAAAW0ICCOJEAQZZo2JIKQxqCOjWCMDDMqxT2LAgELkBMZCoXfyCBQiFwiRsGpku0EshNgUNAtrYPT0GQVNRBWwSKBMp98P24iISgNDAS4ipGA6JUpA2WAhDR4eWM/CAkHBwkIDYcGiTOLjY+FmZkNlCN3eUoLDmwlDW+AAwcODl5bYl8wCVYMDw5UWzBtnAANEQ8kBIM0oAAGPgcREIQnVloAChEOqARjzgAQEbczg8YkWJq8nSUhACH5BAkHAAAALAAAAAAYABgAAAWtICCOJGAYZZoOpKKQqDoORDMKwkgwtiwSBBYAJ2owGL5RgxBziQQMgkwoMkhNqAEDARPSaiMDFdDIiRSFQowMXE8Z6RdpYHWnEAWGPVkajPmARVZMPUkCBQkJBQINgwaFPoeJi4GVlQ2Qc3VJBQcLV0ptfAMJBwdcIl+FYjALQgimoGNWIhAQZA4HXSpLMQ8PIgkOSHxAQhERPw7ASTSFyCMMDqBTJL8tf3y2fCEAIfkECQcAAAAsAAAAABgAGAAABa8gII4k0DRlmg6kYZCoOg5EDBDEaAi2jLO3nEkgkMEIL4BLpBAkVy3hCTAQKGAznM0AFNFGBAbj2cA9jQixcGZAGgECBu/9HnTp+FGjjezJFAwFBQwKe2Z+KoCChHmNjVMqA21nKQwJEJRlbnUFCQlFXlpeCWcGBUACCwlrdw8RKGImBwktdyMQEQciB7oACwcIeA4RVwAODiIGvHQKERAjxyMIB5QlVSTLYLZ0sW8hACH5BAkHAAAALAAAAAAYABgAAAW0ICCOJNA0ZZoOpGGQrDoOBCoSxNgQsQzgMZyIlvOJdi+AS2SoyXrK4umWPM5wNiV0UDUIBNkdoepTfMkA7thIECiyRtUAGq8fm2O4jIBgMBA1eAZ6Knx+gHaJR4QwdCMKBxEJRggFDGgQEREPjjAMBQUKIwIRDhBDC2QNDDEKoEkDoiMHDigICGkJBS2dDA6TAAnAEAkCdQ8ORQcHTAkLcQQODLPMIgIJaCWxJMIkPIoAt3EhACH5BAkHAAAALAAAAAAYABgAAAWtICCOJNA0ZZoOpGGQrDoOBCoSxNgQsQzgMZyIlvOJdi+AS2SoyXrK4umWHM5wNiV0UN3xdLiqr+mENcWpM9TIbrsBkEck8oC0DQqBQGGIz+t3eXtob0ZTPgNrIwQJDgtGAgwCWSIMDg4HiiUIDAxFAAoODwxDBWINCEGdSTQkCQcoegADBaQ6MggHjwAFBZUFCm0HB0kJCUy9bAYHCCPGIwqmRq0jySMGmj6yRiEAIfkECQcAAAAsAAAAABgAGAAABbIgII4k0DRlmg6kYZCsOg4EKhLE2BCxDOAxnIiW84l2L4BLZKipBopW8XRLDkeCiAMyMvQAA+uON4JEIo+vqukkKQ6RhLHplVGN+LyKcXA4Dgx5DWwGDXx+gIKENnqNdzIDaiMECwcFRgQCCowiCAcHCZIlCgICVgSfCEMMnA0CXaU2YSQFoQAKUQMMqjoyAglcAAyBAAIMRUYLCUkFlybDeAYJryLNk6xGNCTQXY0juHghACH5BAkHAAAALAAAAAAYABgAAAWzICCOJNA0ZVoOAmkY5KCSSgSNBDE2hDyLjohClBMNij8RJHIQvZwEVOpIekRQJyJs5AMoHA+GMbE1lnm9EcPhOHRnhpwUl3AsknHDm5RN+v8qCAkHBwkIfw1xBAYNgoSGiIqMgJQifZUjBhAJYj95ewIJCQV7KYpzBAkLLQADCHOtOpY5PgNlAAykAEUsQ1wzCgWdCIdeArczBQVbDJ0NAqyeBb64nQAGArBTt8R8mLuyPyEAOwAAAAAAAAAAAA==);
  background-position: center right;
  background-repeat: no-repeat;
  -moz-transition: none;
-ms-transition: none;
-o-transition: none;
-webkit-transition: none;
transition: none;
}



@media print {
  /* Printing on white is cleaner. */
  .article {
    background-color: white !important;
    margin: 0 !important;
  }
  .article img {
    border: none !important;
    box-shadow: none !important;
  }

  .ribbon.date .ribbon-piece {
    display: none;
  }
  .ribbon.date {
    display: inline-block;
    height: 100%;
    margin: 0 !important;
    padding: 0;
    position: static !important;
    top: 0;
    white-space: nowrap;
    width: auto;
  }
  .ribbon.date:after{
    content: attr(title);
    color: rgba(51, 51, 51, 1);
    font-size: 20px;
  }

  /* Include the links to all anchors */
  .article-content a:after {
    content: " [" attr(href) "] ";
    font-size: 90%;
  }

  /* Fix printing for the viewitem --------------------------------- */

  /* Hide lots of things. */
  .overview-open > *,
  .overview-backdrop,
  .overview-header,
  .share-controls,
  .adsense-aside,
  .adsense-aside {
    display: none !important;
  }

   /* Show the main content. */
  .overview-open > #overview {
    display: block !important;
  }

   /* Reset colors, padding, and positions. */
  body.overview-open,
  .overview-panel,
  .overview-wrap,
  .overview-inner,
  .overview-content {
    background-color: white !important;
    border: none !important;
    box-shadow: none !important;
    margin: 0 !important;
    overflow: visible !important;
    padding: 0 !important;
    position: static !important;
  }
   /* Ensure content positioned - but keep padding. */
  .overview-panel .overview-content {
    position: static !important;
  }

  /* Fix printing for the viewitem --------------------------------- */

  /* Hide lots of things. */
  .viewitem-open > *,
  .viewitem-background,
  .viewitem-header,
  .share-controls {
    display: none !important;
  }

   /* Show the main content. */
  .viewitem-open > .viewitem-panel {
    display: block !important;
  }

   /* Reset colors, padding, and positions. */
  body.viewitem-open,
  .viewitem-panel,
  .viewitem-wrap,
  .viewitem-inner,
  .viewitem-content {
    background-color: white !important;
    border: none !important;
    box-shadow: none !important;
    margin: 0 !important;
    overflow: visible !important;
    padding: 0 !important;
    position: static !important;
  }

   /* Ensure content positioned - but keep padding. */
  .viewitem-panel .viewitem-content {
    position: static !important;
  }

  /* View specific (eg Sidebar and Mosaic) fixes should go elsewhere */
}



#attribution-container {
  padding: 8px;
}




#header-container {
  height: 105px;
}

#header {
  
  left: 0;
  position: fixed;
  top: 0;
  
  width: 100%;
  z-index: 1000;
}

#header .header-bar {
   /* No custom image, put slight gradient. */
  background-image: -moz-linear-gradient(
      center top,
      rgba(255, 255, 255, 0.1),
      rgba(100, 100, 100, 0.05)
  );
  background-image: -webkit-gradient(
      linear,
      left top,
      left bottom,
      from(rgba(255, 255, 255, 0.3)),
      to(rgba(255, 255, 255, 0.05))
  );
  
  
  
  background-attachment: scroll; /* Chrome, really? */
  background-color: rgba(243, 243, 243, 1);
  -moz-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.3);
-ms-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.3);
-o-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.3);
box-shadow: 0 0 5px 0px rgba(0, 0, 0, 0.3);
  height: 65px;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1001;
}

#header .header-bar .title {
  display: block;
  height: 65px;
  line-height: 65px;
  margin-left: 20px;
  margin-right: 235px;
  overflow: hidden;
  text-decoration: none;
  text-overflow: ellipsis;
  white-space: nowrap;
}

#header .header-bar .title h1,
#header .header-bar .title h3 {
  display: inline;
  height: 65px;
  
  text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.3);
  
  white-space: nowrap;
}

#header .header-bar .title h1 {
  color: rgba(85, 85, 85, 1);
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 28px;
}

#header .header-bar .title h3 {
  color: rgba(85, 85, 85, 1);
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 20px;
  margin-left: 5px;
}

#header input#search {
  background-color: #fafafa;
  -moz-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
  border: none;
  -moz-box-shadow: inset 1px 1px 2px #bbb;
-ms-box-shadow: inset 1px 1px 2px #bbb;
-o-box-shadow: inset 1px 1px 2px #bbb;
-webkit-box-shadow: inset 1px 1px 2px #bbb;
box-shadow: inset 1px 1px 2px #bbb;
  font-size: 15px;
  height: 30px;
  margin: 0;
  padding: 0px 7px;
  right: 10px;
  text-align: left;
  text-transform: lowercase;
  top: 18px;
  -moz-transition: background-color 0.3s ease-in-out;
-ms-transition: background-color 0.3s ease-in-out;
-o-transition: background-color 0.3s ease-in-out;
-webkit-transition: background-color 0.3s ease-in-out;
transition: background-color 0.3s ease-in-out;;
  width: 200px;
  position: absolute;
}

#header input#search:focus {
  background-color: white;
}

#header .header-drawer {
  /* the drawer scrolls with the page initially, then gets fixed (.sticky) */
  background-color: rgba(51, 51, 51, 1);
  -moz-box-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
-ms-box-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
-o-box-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.5);
box-shadow: 0 0 8px rgba(0, 0, 0, 0.5);;
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  height: 35px;
  margin-top: 31px; /* use margin to match back to un-scrolled */
  position: absolute;
  top: 34px; /* top here must match top when sticky */
  width: 100%;
  z-index: 1000;
}


#header .header-drawer.sticky {
  margin-top: 0px;
  top: 34px; /* now stuck, just peeking out from the top */
  -moz-transition: top 0.2s linear;
-ms-transition: top 0.2s linear;
-o-transition: top 0.2s linear;
-webkit-transition: top 0.2s linear;
transition: top 0.2s linear;
  -moz-transition-delay: 0.3s;
-ms-transition-delay: 0.3s;
-o-transition-delay: 0.3s;
-webkit-transition-delay: 0.3s;
transition-delay: 0.3s; /* don't surprise on quick hover */
}

#header:hover .header-drawer,
#header .header-drawer.open {
  margin-top: 0px;
  top: 65px; /* animate back down to full unscrolled height */
}


/* Views and Pages */

#header #views {
  float: left;
  position: relative;
  z-index: 999;
}

#header .menu .menu-item,
#header .menu .menu-heading {
  border-radius: 4px;
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  color: rgba(255, 255, 255, 1);
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 15px;
  font-weight: 100;
  line-height: 30px;
  height: 30px;
  padding-left: 15px;
  padding-right: 15px;
  text-shadow: -1px -1px rgba(0, 0, 0, 0.1); /* subtle inset */
  -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
-o-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
  -moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
-webkit-user-select: none;
user-select: none;;
  width: 100%;
}

#header a.menu-item {
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

#views .menu-item {
  text-transform: capitalize;
}

#header .menu .menu-heading {
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  height: 35px;
  line-height: 35px;
  margin-right: 15px;
  position: relative;
  width: auto;
}

#header .indicator {
  /* instead of using a .heading::after actually put this in as elements
     which will allow us to animate it rotating! */
  border-color: rgba(255, 255, 255, 1) transparent transparent transparent;
  border-style: solid;
  border-width: 5px;
  height: 0px;
  margin: 0;
  margin-top: -1px;
  overflow: visible;
  padding: 0;
  position: absolute;
  right: 0;
  top: 50%;
  -moz-transition: all .3s linear;
-ms-transition: all .3s linear;
-o-transition: all .3s linear;
-webkit-transition: all .3s linear;
transition: all .3s linear;
  -moz-transform-origin: center 2px;
-ms-transform-origin: center 2px;
-o-transform-origin: center 2px;
-webkit-transform-origin: center 2px;
transform-origin: center 2px;
}

#header .menu:hover .indicator {
  -moz-transform: rotate(180deg);
-ms-transform: rotate(180deg);
-o-transform: rotate(180deg);
-webkit-transform: rotate(180deg);
transform: rotate(180deg);
}

#header .menu ul {
  -moz-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
-ms-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
-o-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
-webkit-box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  max-height: 0px;
  overflow: hidden;
  padding: 0;
  -moz-transition: all 0.3s linear;
-ms-transition: all 0.3s linear;
-o-transition: all 0.3s linear;
-webkit-transition: all 0.3s linear;
transition: all 0.3s linear;
  visibility: hidden;
  width: 100%;

}

#header .menu:hover ul {
  max-height: 500px;
  opacity: 1;
  -moz-transition: all 0.6s linear;
-ms-transition: all 0.6s linear;
-o-transition: all 0.6s linear;
-webkit-transition: all 0.6s linear;
transition: all 0.6s linear; /* show slower than hide */
  visibility: visible;
}

#header .menu li {
  display: list-item;
  margin: 0;
  overflow: hidden;
  padding: 0;
  position: relative;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 100%;
}

#header .menu li a {
  opacity: 0.99; /* Chrome12+ has different subpixel anti-aliasing rules, this looks worse, but prevents flicker. */
}

#header .menu .menu-background {
  background-color: rgba(51, 51, 51, 1);
  height: 100%;
  left: 0;
  opacity: 0.75;
  position: absolute;
  top: 0;
  -moz-transition: opacity 0.3s ease-in;
-ms-transition: opacity 0.3s ease-in;
-o-transition: opacity 0.3s ease-in;
-webkit-transition: opacity 0.3s ease-in;
transition: opacity 0.3s ease-in;
  width: 100%;
  z-index: -1; /* Negative isn't great... but otherwise the a needs to be positioned. */
}

#header .menu li:hover .menu-background {
  opacity: 0.95;
}

#header .menu li {
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

#header .tabs li {
  display: inline;
  height: 35px;
  line-height: 35px;
  margin-left: 10px;
}

#header .tags li .menu-background {
  display: none;
}

#header .tabs li .menu-item {
  color: rgba(255, 255, 255, 0.6);
  -moz-transition: color 286ms ease-in;
-ms-transition: color 286ms ease-in;
-o-transition: color 286ms ease-in;
-webkit-transition: color 286ms ease-in;
transition: color 286ms ease-in;
}

#header .tabs li .menu-item:hover,
#header .menu li .menu-item:hover,
#header .tabs li .menu-item.current {
  color: rgba(255, 255, 255, 1) !important;
}

#header .tabs .menu-heading {
  display: none;
}

#header #pages {
  float: left;
  margin-left: 0px;
  position: relative;
}

#header #pages:before {
  border-left: solid 1px rgba(255, 255, 255, 1);
  content: '';
  height: 20px;
  left: 0px;
  opacity: 0.5;
  position: absolute;
  top: 8px;
  z-index: 1000;
}

#header #pages.tabs ul {
  margin-left: 0px;
  overflow: hidden;
  white-space: nowrap;
}

#header .admin-controls {
  height: 35px;
  position: absolute;
  right: 10px;
  top: 0px;
}

#header .admin-controls .dashboard {
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAANCAYAAAB2HjRBAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAVdEVYdENyZWF0aW9uIFRpbWUAMTEvNy8xMZe/cygAAADVSURBVCiRpZG9agJBFEbPxB/E1mCTV4iFldW+hZWIRdqAr2EtIX2a9Ja24jPoE1gKWqmIyUnhqqvuqpDTzB34Dtz5BjJQG+pMbak1deeeroqaKUbqNA7P1b66vSurzUQwjaP8dCG2gW+gkPUcYHcYjrL6BnwBxRsiwCuQP0gFtXdjzTQGahX1Q/1RNw+KK/VXHQY1ApZABHzeWRngHRgBlXwIYRyvX0l2ByyADZADnuMTYApMzgoDyol5DXRCCC9AHZin5c6+KkHg1Hopvl+RJT/Ev+Q/DML6Kx8BC7sAAAAASUVORK5CYII=);
  /*background-size: 18px 18px;*/
  display: block;
  height: 35px;
  opacity: 0.8;
  position: absolute;
  right: 0px;
  top: 0;
  width: 18px;
}

#header .admin-controls .new-post {
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAYAAABy6+R8AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAVdEVYdENyZWF0aW9uIFRpbWUAMTEvNy8xMZe/cygAAADaSURBVCiRhdIxS0JRGMbx/z1a0KdwcyxttcXRLxBIEFgOfp0W5yAn56DNxUm3oiXItUmEgmwo/Dd4g+7p3HzW8/w45305sCNqW31QB2pQd4K6euc2C7WjVv8Dh+rcYl7Us0oJaAA3QDM6CsBTCjTVR/9mqXbV/RgclYA39TTvFMBxvqU4a/X8V68w9HMCfKiX0WtA3VOv8tImAheJmUGtqSO1pQ5z8K72SjZLAE6AT2ANtIAV0FevUwggU2fAAXALLIGJeh9CSP4XlSowBqbAAnjNsuyr7IaffAOehB+C7e2WDgAAAABJRU5ErkJggg==);
  /*background-size: 18px 18px;*/
  display: block;
  height: 35px;
  opacity: 0.8;
  position: absolute;
  right: 24px;
  top: 0;
  width: 18px;
}

#header .admin-controls .dashboard:hover,
#header .admin-controls .new-post:hover {
  opacity: 1;
}

#header #follow-author {
  height: 65px;
  right: 0px;
  overflow: hidden;
  position: absolute;
  top: 0;
  width: 300px;
}






body.overview-open,
body.lightbox-open {
  overflow: hidden;
}

/* overview background. */
#overview .overview-backdrop,
#lightbox .lightbox-backdrop {
  background-color: black;
  bottom: 0;
  left: 0;
  opacity: 0;
  pointer-events: none;
  position: fixed;
  right: 0;
  top: 0;
  -moz-transition: all 1004ms ease-in;
-ms-transition: all 1004ms ease-in;
-o-transition: all 1004ms ease-in;
-webkit-transition: all 1004ms ease-in;
transition: all 1004ms ease-in;
  z-index: 3000;
}

#overview.open .overview-backdrop,
#lightbox.open .lightbox-backdrop {
  opacity: 0.7;
}

#overview.closing .overview-backdrop,
#lightbox.closing .lightbox-backdrop {
  opacity: 0;
  -moz-transition: opacity 0.5s;
-ms-transition: opacity 0.5s;
-o-transition: opacity 0.5s;
-webkit-transition: opacity 0.5s;
transition: opacity 0.5s;
}

.overview-panel,
.lightbox-panel {
  bottom: 0;
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  left: 20px;
  pointer-events: none;
  position: fixed;
  right: 20px;
  top: 50px;
  -moz-transition: all 1009ms ease-in-out;
-ms-transition: all 1009ms ease-in-out;
-o-transition: all 1009ms ease-in-out;
-webkit-transition: all 1009ms ease-in-out;
transition: all 1009ms ease-in-out;
  z-index: 3001; /* Way up in the air. */
}

.lightbox-title {
  bottom: 0;
  display: table-cell;
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 20px;
  height: 100%;
  left: 60px;
  line-height: 50px;
  overflow: hidden;
  position: absolute;
  right: 60px;
  text-align: center;
  text-overflow: ellipsis;
  top: 0;
  white-space: nowrap;
}

.lightbox-contentwrap {
  font-size: 14px;
  margin: 0 auto;
  max-width: 750px;
}

#overview.closing .overview-panel,
#lightbox.closing .lightbox-panel {
  opacity: 0;
  -moz-transition: opacity 0.5s;
-ms-transition: opacity 0.5s;
-o-transition: opacity 0.5s;
-webkit-transition: opacity 0.5s;
transition: opacity 0.5s;
}

/* Bounding box of our overview item. */
.overview-panel .overview-wrap,
.lightbox-panel .lightbox-wrap {
  background-color: transparent;
  -moz-border-radius: 6px 6px 0px 0px;
-ms-border-radius: 6px 6px 0px 0px;
-o-border-radius: 6px 6px 0px 0px;
-webkit-border-radius: 6px 6px 0px 0px;
border-radius: 6px 6px 0px 0px;
  
  
  -moz-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAABTUlEQVRIx+2W3WrDMAyF47hJWzrY+z/mYKNtnNhLxlE5PZNhN3NuahB24qDP+nMUOn8EmW1dVony7UJ7NorMvxTXQKa87/42Mh3CBasFJhEQftdVTq17JhlgfvdkUQBkgx2wLhX3eoOtCQDOgGaDsrIeoIFcGARYHPdmiWGh9baXAM4GNDFYJKW9424PWBxQR2416BNwBJBdG5xYDgJMTuyKuHL7ZjIgxy2SmIs1iUYBTk6SzPRs8hNPBg4OLALQk7VnAV7JkowDLA40MXCgzIxk8QAZqS4vAvyiupugOFGGLpSxKZBydekBIAMfsX4T4CeU3Qk0CdAsntXCSO5l4DafVnmvxPBjlRuBbE4CTIHqji01i44AnRC7c6Xor5Ab5C4WPy6AF/BfgM2TZteyaFL4u1xtTS/v5r+n5j/g5i3GLk1U8zZxl0a4Sav/DRDkGFoKi/1vAAAAAElFTkSuQmCC) 12 / 12px repeat;


-ms-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAABTUlEQVRIx+2W3WrDMAyF47hJWzrY+z/mYKNtnNhLxlE5PZNhN3NuahB24qDP+nMUOn8EmW1dVony7UJ7NorMvxTXQKa87/42Mh3CBasFJhEQftdVTq17JhlgfvdkUQBkgx2wLhX3eoOtCQDOgGaDsrIeoIFcGARYHPdmiWGh9baXAM4GNDFYJKW9424PWBxQR2416BNwBJBdG5xYDgJMTuyKuHL7ZjIgxy2SmIs1iUYBTk6SzPRs8hNPBg4OLALQk7VnAV7JkowDLA40MXCgzIxk8QAZqS4vAvyiupugOFGGLpSxKZBydekBIAMfsX4T4CeU3Qk0CdAsntXCSO5l4DafVnmvxPBjlRuBbE4CTIHqji01i44AnRC7c6Xor5Ab5C4WPy6AF/BfgM2TZteyaFL4u1xtTS/v5r+n5j/g5i3GLk1U8zZxl0a4Sav/DRDkGFoKi/1vAAAAAElFTkSuQmCC) 12 / 12px repeat;


-o-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAABTUlEQVRIx+2W3WrDMAyF47hJWzrY+z/mYKNtnNhLxlE5PZNhN3NuahB24qDP+nMUOn8EmW1dVony7UJ7NorMvxTXQKa87/42Mh3CBasFJhEQftdVTq17JhlgfvdkUQBkgx2wLhX3eoOtCQDOgGaDsrIeoIFcGARYHPdmiWGh9baXAM4GNDFYJKW9424PWBxQR2416BNwBJBdG5xYDgJMTuyKuHL7ZjIgxy2SmIs1iUYBTk6SzPRs8hNPBg4OLALQk7VnAV7JkowDLA40MXCgzIxk8QAZqS4vAvyiupugOFGGLpSxKZBydekBIAMfsX4T4CeU3Qk0CdAsntXCSO5l4DafVnmvxPBjlRuBbE4CTIHqji01i44AnRC7c6Xor5Ab5C4WPy6AF/BfgM2TZteyaFL4u1xtTS/v5r+n5j/g5i3GLk1U8zZxl0a4Sav/DRDkGFoKi/1vAAAAAElFTkSuQmCC) 12 / 12px repeat;

/* If border-image is declared below -webkit-border-image */
/* Webkit doesn't render correctly.                       */

border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAABTUlEQVRIx+2W3WrDMAyF47hJWzrY+z/mYKNtnNhLxlE5PZNhN3NuahB24qDP+nMUOn8EmW1dVony7UJ7NorMvxTXQKa87/42Mh3CBasFJhEQftdVTq17JhlgfvdkUQBkgx2wLhX3eoOtCQDOgGaDsrIeoIFcGARYHPdmiWGh9baXAM4GNDFYJKW9424PWBxQR2416BNwBJBdG5xYDgJMTuyKuHL7ZjIgxy2SmIs1iUYBTk6SzPRs8hNPBg4OLALQk7VnAV7JkowDLA40MXCgzIxk8QAZqS4vAvyiupugOFGGLpSxKZBydekBIAMfsX4T4CeU3Qk0CdAsntXCSO5l4DafVnmvxPBjlRuBbE4CTIHqji01i44AnRC7c6Xor5Ab5C4WPy6AF/BfgM2TZteyaFL4u1xtTS/v5r+n5j/g5i3GLk1U8zZxl0a4Sav/DRDkGFoKi/1vAAAAAElFTkSuQmCC) 12 / 12px repeat;


-webkit-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAABTUlEQVRIx+2W3WrDMAyF47hJWzrY+z/mYKNtnNhLxlE5PZNhN3NuahB24qDP+nMUOn8EmW1dVony7UJ7NorMvxTXQKa87/42Mh3CBasFJhEQftdVTq17JhlgfvdkUQBkgx2wLhX3eoOtCQDOgGaDsrIeoIFcGARYHPdmiWGh9baXAM4GNDFYJKW9424PWBxQR2416BNwBJBdG5xYDgJMTuyKuHL7ZjIgxy2SmIs1iUYBTk6SzPRs8hNPBg4OLALQk7VnAV7JkowDLA40MXCgzIxk8QAZqS4vAvyiupugOFGGLpSxKZBydekBIAMfsX4T4CeU3Qk0CdAsntXCSO5l4DafVnmvxPBjlRuBbE4CTIHqji01i44AnRC7c6Xor5Ab5C4WPy6AF/BfgM2TZteyaFL4u1xtTS/v5r+n5j/g5i3GLk1U8zZxl0a4Sav/DRDkGFoKi/1vAAAAAElFTkSuQmCC) 12 / 12px repeat;
  -moz-box-sizing: content-box;
-ms-box-sizing: content-box;
-o-box-sizing: content-box;
-webkit-box-sizing: content-box;
box-sizing: content-box;
  background-clip: padding-box;
  top: -12px;
  
  height: 100%;
  left: 0;
  margin: 0 auto;
  max-width: 1000px;
  overflow: hidden;
  padding: 0px 1px; /* The controls the inset of the overview-inner. */
  pointer-events: auto;
  position: relative;
  -moz-transition: left 0.5s linear;
-ms-transition: left 0.5s linear;
-o-transition: left 0.5s linear;
-webkit-transition: left 0.5s linear;
transition: left 0.5s linear;
  z-index: 3002;
}

.overview-panel.left .overview-wrap {
  left: -110%;
}

.overview-panel.right .overview-wrap {
  left: 110%;
}

/* This is the box that things can be draw in. */
.overview-panel .overview-inner,
.lightbox-panel .lightbox-inner {
  background-color: #fafafa;
  -moz-border-radius: 6px 6px 0px 0px;
-ms-border-radius: 6px 6px 0px 0px;
-o-border-radius: 6px 6px 0px 0px;
-webkit-border-radius: 6px 6px 0px 0px;
border-radius: 6px 6px 0px 0px;
  bottom: 0px;
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  height: 100%;
  position: relative;
  width: 100%;
}

.overview-panel .article {
  /* Defend against Chrome 12+ antialiasing bug. */
  background-color: #fafafa;
}

/* Header section for the overview-inner. */
.overview-panel .overview-header,
.lightbox-panel .lightbox-header {
  -moz-border-radius: 6px 6px 0px 0px;
-ms-border-radius: 6px 6px 0px 0px;
-o-border-radius: 6px 6px 0px 0px;
-webkit-border-radius: 6px 6px 0px 0px;
border-radius: 6px 6px 0px 0px;
  -moz-box-shadow: 0px 3px 3px rgba(200, 200, 200, .4);
-ms-box-shadow: 0px 3px 3px rgba(200, 200, 200, .4);
-o-box-shadow: 0px 3px 3px rgba(200, 200, 200, .4);
-webkit-box-shadow: 0px 3px 3px rgba(200, 200, 200, .4);
box-shadow: 0px 3px 3px rgba(200, 200, 200, .4);
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  height: 50px;
  padding: 10px;
  position: absolute;
  top: 0px;
  -moz-transition: box-shadow 0.2s linear;
-ms-transition: box-shadow 0.2s linear;
-o-transition: box-shadow 0.2s linear;
-webkit-transition: box-shadow 0.2s linear;
transition: box-shadow 0.2s linear;
  z-index: 5;
  width: 100%;
}

.overview-header .share-controls {
  float: left;
  margin-left: 10px;
  margin-top: 4px;
}

.overview-header .overview-controls-left {
  float: left;
}

.overview-header .overview-controls-right,
.lightbox-header .lightbox-controls-right {
  float: right;
}

/* overview container where we put the real stuff. */
.overview-panel .overview-content,
.lightbox-panel .lightbox-content {
  bottom: 0px;
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  overflow-y: scroll; /* Always show: comments may cause it to bounce. */
  padding: 10px;
  position: absolute;
  top: 50px;
  -moz-transition: all 1s linear;
-ms-transition: all 1s linear;
-o-transition: all 1s linear;
-webkit-transition: all 1s linear;
transition: all 1s linear;
  width: 100%;
  z-index: 1;
}

.overview-panel.start .overview-header,
.lightbox-panel.start .lightbox-header {
  -moz-box-shadow: none;
-ms-box-shadow: none;
-o-box-shadow: none;
-webkit-box-shadow: none;
box-shadow: none;
  min-width: 200px; /* Stop any buttons wrapping. */
}

/* Custom webkit scrollbars */

.overview-panel .overview-content::-webkit-scrollbar,
.lightbox-panel .lightbox-content::-webkit-scrollbar {
  background: transparent;
  height: 10px;
  width: 10px;
}

/* the start/end of bar  */
.overview-panel .overview-content::-webkit-scrollbar-button:start:decrement,
.overview-panel .overview-content::-webkit-scrollbar-button:end:increment,
.lightbox-panel .lightbox-content::-webkit-scrollbar-button:start:decrement,
.lightbox-panel .lightbox-content::-webkit-scrollbar-button:end:increment {
  display: block;
  height: 10px;
  width: 10px;
}

/* the track background */
.overview-panel.overview-content::-webkit-scrollbar-track-piece,
.lightbox-panel.lightbox-content::-webkit-scrollbar-track-piece {
  background-color: #eee;
}

/* the scrollbar itself */
.overview-panel .overview-content::-webkit-scrollbar-thumb,
.lightbox-panel .lightbox-content::-webkit-scrollbar-thumb {
  background-color: #666;
  height: 50px;
  width: 50px;
}

.overview-panel.start .overview-content:not(:hover)::-webkit-scrollbar-thumb,
.lightbox-panel.start .lightbox-content:not(:hover)::-webkit-scrollbar-thumb {
  background-color: #eee;
}

.overview-panel .overview-content::-webkit-scrollbar-thumb:hover,
.lightbox-panel .lightbox-content::-webkit-scrollbar-thumb:hover {
  background-color: #333;
  height: 50px;
  width: 50px;
}




body.viewitem-open {
  overflow: hidden;
}

/* Ensure header drawer is visible. */
body.viewitem-open #header .header-drawer {
  margin-top: 0px;
  position: fixed;
  top: 65px; /* animate back down to full unscrolled height */
}

/* While open, don't highlight the view menu. */
body.viewitem-open #header #views .menu-heading {
  color: rgba(255, 255, 255, 0.6) !important;
}

body.viewitem-open #header #views .menu-heading .indicator {
  border-color: rgba(255, 255, 255, 0.6) transparent transparent transparent !important;
}

body.viewitem-open .blogger-clickTrap.singleton-element {
  display: none;
}

.viewitem-panel {
  bottom: 0;
  border-top: solid 1px rgba(51, 51, 51, 1);
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  left: 0;
  margin-top: 0;
  position: fixed;
  right: 0;
  top: 100px;
  -moz-transition: margin-top 1s ease-in-out, bottom 1s ease-in-out;
-ms-transition: margin-top 1s ease-in-out, bottom 1s ease-in-out;
-o-transition: margin-top 1s ease-in-out, bottom 1s ease-in-out;
-webkit-transition: margin-top 1s ease-in-out, bottom 1s ease-in-out;
transition: margin-top 1s ease-in-out, bottom 1s ease-in-out;
  z-index: 999; /* Way up in the air. */
}

.viewitem-panel.new,
.viewitem-panel.closing {
  margin-top: -100%;
  bottom: 100%;
}

/* Bounding box of our overview item. */
.viewitem-panel .viewitem-wrap {
  background-color: white;
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  height: 100%;
  left: 0;
  margin: 0;
  overflow: hidden;
  position: relative;
  z-index: 9999;
}

/* Header section for the overview-inner. */
.viewitem-panel .viewitem-header {
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  height: 50px;
  padding: 10px;
  position: absolute;
  top: 0px;
  z-index: 5;
  width: 100%;
}

/* This is the box that things can be draw in. */
.viewitem-panel .viewitem-inner {
  bottom: 0px;
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  height: 100%;
  overflow-y: scroll;
  padding: 30px 0px;
  position: absolute;
  top: 0;
  width: 100%;
}

/* This allows us to be cute with continuous backgrounds */
.viewitem-panel .viewitem-background {
  background-color: rgba(238, 238, 238, 1);
  
  background-image: url(#EEEEEE none repeat scroll top left);
  background-position: left top;
  background-repeat: no-repeat;
  
  
  background-attachment: scroll; /* Chrome, really? */
  bottom: 0;
  left: 0;
  position: absolute;
  top: -100px; /* This should be the height of the header. */
  width: 100%;
}

/* overview container where we put the real stuff. */
.viewitem-panel .viewitem-content {
  background-color: white;
  background-clip: padding-box;
  /* TODO(kiyono): re-enable box-shadow when the performance of box-shadow */
  /* gets better.                                                          */
  
  
  -moz-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;


-ms-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;


-o-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;

/* If border-image is declared below -webkit-border-image */
/* Webkit doesn't render correctly.                       */

border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;


-webkit-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;
  border-width: 2px;
  
  padding: 20px 70px;
  left: 8px; /* Align it with classic in center - why is ther an offset? */
  max-width: 750px;
  margin: 0px auto;
  position: relative;
}

.viewitem-panel .article {
  background-color: white; /* Chrome12+ anti-aliasing bug. */
}

.viewitem-panel button.close {
  margin-right: 10px;
}

.viewitem-panel .blogger-gear {
  position: absolute;
  left: 50%;
  margin-left: -47px;
  margin-top: -47px;
  top: 50%;
}




/* Styles here should be minimized to limit amount of explicit casing. */

.article {
  font-size: 14px;
  margin: 0 auto;
  max-width: 750px;
  position: relative;
  word-wrap: break-word;
}

/* Post Header */

.article .article-header {
  display: table;
  text-align: center;
  width: 100%;
}

.article .article-header .title {
  font-size: 20px;
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  width: 100%;
  display: table-cell;
  vertical-align: middle;
  text-align: center;
  padding-right: 40px; /* Compensate for ribbon, to stay centered. */
}

.article .title .edit {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAA+UlEQVR42s3U2QmDQBAG4JRgKZbio4qieIAniniiYgkpwRIsISVYQkqwhMlMiHkIhITNhGRgYNeHz/1xncPhn0pV1dkwjNW2bYkNRAzCMIQ4jj+HdzBJEmiaBtq2hSzLxOFHcBgGGMcRuq4Tg5+Be9/gmQ2kxmdrnucSG9j3/TxNEy/IGvl3oKIokqZpC+sJdV1fHceBNE2vl5oDlC3LInBjAakw9tF13TPeNRljbwh8BlKZpnnGAXGkdRRFclEUd1gIpOj0cQijPa6VIAhOdV2LgXt03/cBoy8Ib57n0QvWsixz4XFG0XEuQlVVC8a23/6HX6A80DfrAlIMSJorw8fYAAAAAElFTkSuQmCC);
  background-repeat: no-repeat;
  background-position: center center;
  cursor: pointer;
  display: inline-block;
  height: 21px;
  opacity: 0.8;
  position: relative;
  top: 3px;
  width: 21px;
}

.article .title .edit:hover {
  opacity: 1;
}

.article .article-header .date {
  float: left;
  left: 0px;
  margin: 0px 5px 5px 0px;
  position: relative;
  top: 5px;
}

/* Post Content */

.article .article-content {
  clear: both;
  color: rgba(51, 51, 51, 1);
  line-height: 1.4;
  margin-top: 10px;
  margin: 10px auto 5px auto;
  text-align: justify;
}

/* This shouldn't really be added at all... it is from feeds. */
.article .article-content .blogger-post-footer {
  display: none;
}

/* Restore a lot of the styles we reset globally. */
.article-content ol {
  list-style-type: decimal;
  margin: 0.5em 0;
  padding-left: 2em;
}
.article-content ul {
  list-style-type: disc;
  margin: 0.5em 0;
  padding-left: 2em;
}

.article-content p {
  margin: 1em 0;
}

/* Defaults from: http://www.w3.org/TR/CSS2/sample.html */
.article-content h1,
.article-content h2,
.article-content h3,
.article-content h4,
.article-content h5,
.article-content h6 {
  font-weight: bolder;
}
.article-content h1 {
  font-size: 2em;
  margin: .67em 0;
}
.article-content h2 {
  font-size: 1.5em;
  margin: .75em 0;
}
.article-content h3 {
  font-size: 1.17em;
  margin: .83em 0;
}
.article-content h4 {
  margin: 1.12em 0;
}
.article-content h5 {
  font-size: .83em;
  margin: 1.5em 0;
}
.article-content h6 {
  font-size: .75em;
  margin: 1.67em 0;
}

.article .article-content a {
  display: inline;
}

.article .article-content img {
  -moz-box-sizing: border-box;
-ms-box-sizing: border-box;
-o-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
  display: inline-block;
  height: auto;
  margin: 10px auto; /* Attempt to horizontally center. */
  /* For Sally-Anne. Keep images to the width of the post. */
  /* It's needed to avoid IE because of b/5420328 */
  
  max-width: 100%;
  
}

.article .article-content img:not(.deferred) {
  padding: 8px;
  /* TODO(kiyono): re-enable box-shadow when the performance of box-shadow */
  /* gets better.                                                          */
  
  
  -moz-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAAOVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///+8yHYvAAAAEnRSTlMAAgEDBAUJBwYzCw0UChARDghnBteEAAAAhElEQVR4XnWRSxJDIQgEEx1Axd/L/Q8bKCuuyOzsohHxdZLS25LSOV2ULQdflgEiIDu9KqiIFILXXpeEx2ChXwdnKNxUGxc4dZbNfXjPufkp5H0Nwtymq/dltUIweNy9qmXt08EgydDZ6+dT+9Qh9AeGenhROFI0fPjMaCHx6uIlh9/xBSJuB3l0A/6JAAAAAElFTkSuQmCC) 9 / 9px stretch;


-ms-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAAOVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///+8yHYvAAAAEnRSTlMAAgEDBAUJBwYzCw0UChARDghnBteEAAAAhElEQVR4XnWRSxJDIQgEEx1Axd/L/Q8bKCuuyOzsohHxdZLS25LSOV2ULQdflgEiIDu9KqiIFILXXpeEx2ChXwdnKNxUGxc4dZbNfXjPufkp5H0Nwtymq/dltUIweNy9qmXt08EgydDZ6+dT+9Qh9AeGenhROFI0fPjMaCHx6uIlh9/xBSJuB3l0A/6JAAAAAElFTkSuQmCC) 9 / 9px stretch;


-o-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAAOVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///+8yHYvAAAAEnRSTlMAAgEDBAUJBwYzCw0UChARDghnBteEAAAAhElEQVR4XnWRSxJDIQgEEx1Axd/L/Q8bKCuuyOzsohHxdZLS25LSOV2ULQdflgEiIDu9KqiIFILXXpeEx2ChXwdnKNxUGxc4dZbNfXjPufkp5H0Nwtymq/dltUIweNy9qmXt08EgydDZ6+dT+9Qh9AeGenhROFI0fPjMaCHx6uIlh9/xBSJuB3l0A/6JAAAAAElFTkSuQmCC) 9 / 9px stretch;

/* If border-image is declared below -webkit-border-image */
/* Webkit doesn't render correctly.                       */

border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAAOVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///+8yHYvAAAAEnRSTlMAAgEDBAUJBwYzCw0UChARDghnBteEAAAAhElEQVR4XnWRSxJDIQgEEx1Axd/L/Q8bKCuuyOzsohHxdZLS25LSOV2ULQdflgEiIDu9KqiIFILXXpeEx2ChXwdnKNxUGxc4dZbNfXjPufkp5H0Nwtymq/dltUIweNy9qmXt08EgydDZ6+dT+9Qh9AeGenhROFI0fPjMaCHx6uIlh9/xBSJuB3l0A/6JAAAAAElFTkSuQmCC) 9 / 9px stretch;


-webkit-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAAAOVBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///+8yHYvAAAAEnRSTlMAAgEDBAUJBwYzCw0UChARDghnBteEAAAAhElEQVR4XnWRSxJDIQgEEx1Axd/L/Q8bKCuuyOzsohHxdZLS25LSOV2ULQdflgEiIDu9KqiIFILXXpeEx2ChXwdnKNxUGxc4dZbNfXjPufkp5H0Nwtymq/dltUIweNy9qmXt08EgydDZ6+dT+9Qh9AeGenhROFI0fPjMaCHx6uIlh9/xBSJuB3l0A/6JAAAAAElFTkSuQmCC) 9 / 9px stretch;
  border-width: 9px;
  
}

/* Resize all images/videos in posts. */
.article .article-content iframe,
.article .article-content embed {
  display: inline-block;
  /* It's needed to avoid IE because of b/5420328 */
  
  max-width: 100%;
  
}

/* Post Footer */

.article .article-footer {
  clear: both;
  text-align: center;
}

.article .article-footer .publish-info,
.article .article-footer .geolocation-info,
.article .article-footer .labels {
  color: rgba(128, 128, 128, 1);
  font-family: 'Helvetica Neue Light', HelveticaNeue-Light, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  padding: 5px 0;
}

.article .article-footer .publish-info .author a,
.article .article-footer .publish-info .time {
  color: rgba(51, 51, 51, 1);
}

.article .article-footer .label:not(:last-child):after {
  content: ',';
}

.article .article-footer .share-controls {
  display: inline-block;
  margin: 10px 5px;
  text-align: center;
}

/* AdSense */

.article.has-ads {
  padding-right: 220px;
  min-height: 650px; /* To accomodate skyscraper */
}

.article .adsense-aside {
  padding: 15px 5px 0 5px;
  position: absolute;
  right: 5px;
  text-align: center;
  top: 5px;
  width: 200px;
}

.article .adsense-footer .adsense {
  margin-top: 10px;
  padding: 10px 0;
}




.comments {
  clear: both;
  margin-top: 10px;
}

.comments .comments-header,
.comments .comments-footer {
  text-align: center;
}

.comments .comments-header {
  margin-bottom: 10px;
}

.comments .comments-header .comments-count {
  top: -2px;
}

.comments .comments-header h3 {
  display: inline-block;
  padding: 5px;
}

@media only screen and (max-device-width: 1024px) {
  .comments .comments-header h3 {
    color: #222;
    font-family: arial,sans-serif;
    text-decoration: underline;
  }
}
.comments .toggle-switch:hover h3 {
  cursor: pointer;
  text-decoration: underline;
}

/* Added by blogger for ghosted/removed comments .*/
.comments .deleted-comment {
  font-style: italic;
  opacity: 0.5;
}

/* While loading, hide the comment count, and then show an indicator. */
.comments.loading .comments-header .comments-count .bubble-content {
  visibility: hidden;
}

.comments.loading .comments-header .comments-count {
  background-image: url(data:image/gif;base64,R0lGODlhEAAQAPQAAGZmZv///2lpadzc3K+vr/r6+ufn5319fZmZmfDw8Le3t8DAwHV1daOjo4eHh9LS0srKygAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAAFUCAgjmRpnqUwFGwhKoRgqq2YFMaRGjWA8AbZiIBbjQQ8AmmFUJEQhQGJhaKOrCksgEla+KIkYvC6SJKQOISoNSYdeIk1ayA8ExTyeR3F749CACH5BAAKAAEALAAAAAAQABAAAAVoICCKR9KMaCoaxeCoqEAkRX3AwMHWxQIIjJSAZWgUEgzBwCBAEQpMwIDwY1FHgwJCtOW2UDWYIDyqNVVkUbYr6CK+o2eUMKgWrqKhj0FrEM8jQQALPFA3MAc8CQSAMA5ZBjgqDQmHIyEAIfkEAAoAAgAsAAAAABAAEAAABWAgII4j85Ao2hRIKgrEUBQJLaSHMe8zgQo6Q8sxS7RIhILhBkgumCTZsXkACBC+0cwF2GoLLoFXREDcDlkAojBICRaFLDCOQtQKjmsQSubtDFU/NXcDBHwkaw1cKQ8MiyEAIfkEAAoAAwAsAAAAABAAEAAABVIgII5kaZ6AIJQCMRTFQKiDQx4GrBfGa4uCnAEhQuRgPwCBtwK+kCNFgjh6QlFYgGO7baJ2CxIioSDpwqNggWCGDVVGphly3BkOpXDrKfNm/4AhACH5BAAKAAQALAAAAAAQABAAAAVgICCOZGmeqEAMRTEQwskYbV0Yx7kYSIzQhtgoBxCKBDQCIOcoLBimRiFhSABYU5gIgW01pLUBYkRItAYAqrlhYiwKjiWAcDMWY8QjsCf4DewiBzQ2N1AmKlgvgCiMjSQhACH5BAAKAAUALAAAAAAQABAAAAVfICCOZGmeqEgUxUAIpkA0AMKyxkEiSZEIsJqhYAg+boUFSTAkiBiNHks3sg1ILAfBiS10gyqCg0UaFBCkwy3RYKiIYMAC+RAxiQgYsJdAjw5DN2gILzEEZgVcKYuMJiEAOwAAAAAAAAAAAA==);
  background-position: center center;
  background-repeat: no-repeat;
  -moz-transition: none;
-ms-transition: none;
-o-transition: none;
-webkit-transition: none;
transition: none;
}

.blogger-comments .comments-content {
  background-color: whitesmoke;
  font-size: 13px;
  margin-bottom: 16px;
  -moz-border-radius: 10px;
-ms-border-radius: 10px;
-o-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
  -moz-transition: all 0.5s ease-in;
-ms-transition: all 0.5s ease-in;
-o-transition: all 0.5s ease-in;
-webkit-transition: all 0.5s ease-in;
transition: all 0.5s ease-in;
}

@media only screen and (max-device-width: 1024px) {
  .blogger-comments .comments-content {
    background-color: #f1f1f1;
    border: 1px solid #bbb;
    -moz-border-radius: 0;
-ms-border-radius: 0;
-o-border-radius: 0;
-webkit-border-radius: 0;
border-radius: 0;
  }
}
.blogger-comments .comments-content .comment-actions {
  color: #999;
}
.comments .comment .comment-actions a {
  padding-top: 5px;
  padding-right: 5px;
}
.comments .comment .comment-actions a:hover {
  text-decoration: underline;
}
.blogger-comments .comments-content .secondary-link {
  color: #69c;
}
.blogger-comments .comments-content .comment-thread {
  list-style-type: none;
  padding: 0;
  text-align: left;
}
.blogger-comments .comments-content .inline-thread {
  padding: 0.5em;
}
.blogger-comments .comments-content .comment-thread {
  margin: 8px;
}
.blogger-comments .comments-content .comment-thread:empty {
  display: none;
}
.blogger-comments .comments-content .comment-replies {
  background-color: #ebebeb;
  margin-top: 1em;
  margin-left: 36px;
  -moz-border-radius: 10px;
-ms-border-radius: 10px;
-o-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
}
.blogger-comments .comments-content .comment {
  border-bottom: 1px solid #e3e3e3;
  margin-bottom: 16px;
  padding-bottom: 8px;
}
.blogger-comments .comments-content .comment:first-child {
  padding-top: 16px;
}
.blogger-comments .comments-content .comment:last-child {
  border-bottom: 0;
  padding-bottom: 0;
}
.blogger-comments .comments-content .comment-body {
  position: relative;
}
.blogger-comments .comments-content .user {
  font-style: normal;
  font-weight: bold;
}
.blogger-comments .comments-content .datetime {
  margin-left: 6px;
}
.blogger-comments .comments-content .comment-header,
.blogger-comments .comments-content .comment-content {
  margin: 0 0 8px;
}
.blogger-comments .comments-content .comment-content {
  text-align: justify;
}
.blogger-comments .comments-content .owner-actions {
  position: absolute;
  right: 0;
  top: 0;
}

.blogger-comments .comments-replybox {
  border: none;
  height: 250px;
  width: 100%;
}

.blogger-comments .comment-replybox-single {
  margin-top: 5px;
  margin-left: 48px;
}
.blogger-comments .comment-replybox-thread {
  margin-top: 5px;
}

.blogger-comments .comments-content .user,
.blogger-comments .comments-content .user a {
  color: rgba(51, 51, 51, 1);
}

.blogger-comments .icon.blog-author {
  width: 18px;
  height: 18px;
  display: inline-block;
  background-repeat: no-repeat;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB9sLFwMeCjjhcOMAAAD+SURBVDjLtZSvTgNBEIe/WRRnm3U8RC1neQdsm1zSBIU9VVF1FkUguQQsD9ITmD7ECZIJSE4OZo9stoVjC/zc7ky+zH9hXwVwDpTAWWLrgS3QAe8AZgaAJI5zYAmc8r0G4AHYHQKVwII8PZrZFsBFkeRCABYiMh9BRUhnSkPTNCtVXYXURi1FpBDgArj8QU1eVXUzfnjv7yP7kwu1mYrkWlU33vs1QNu2qU8pwN0UpKoqokjWwCztrMuBhEhmh8bD5UDqur75asbcX0BGUB9/HAMB+r32hznJgXy2v0sGLBcyAJ1EK3LFcbo1s91JeLwAbwGYu7TP/3ZGfnXYPgAVNngtqatUNgAAAABJRU5ErkJggg==);
  margin: 0 0 -4px 6px;
}

.blogger-comments .comments-content .loadmore a {
  background: #fafafa;
  border-top: 1px solid #e3e3e3;
  display: block;
  padding: 10px 16px;
  text-align: center;
}

.blogger-comments .thread-toggle {
  cursor: pointer;
  display: inline-block;
  color: rgba(0, 158, 184, 1);
}

.blogger-comments .continue {
  cursor: pointer;
}

.blogger-comments .continue a {
  color: #888;
  display: block;
  padding: 0.5em;
  background: white;
  border: 1px solid #CCC;
  -moz-box-shadow: inset 1px 1px 3px #888;
-ms-box-shadow: inset 1px 1px 3px #888;
-o-box-shadow: inset 1px 1px 3px #888;
-webkit-box-shadow: inset 1px 1px 3px #888;
box-shadow: inset 1px 1px 3px #888;
}

.blogger-comments .comments-content .loadmore:hover a {
  background: #f1f1f1;
  border-top: 1px solid #fff;
}

.blogger-comments .comments-content .loadmore {
  cursor: pointer;
  max-height: 3em;
}

.blogger-comments .comments-content .loadmore.loaded {
  max-height: 0px;
  opacity: 0;
  overflow: hidden;
  -moz-transition: all 0.5s ease-in;
-ms-transition: all 0.5s ease-in;
-o-transition: all 0.5s ease-in;
-webkit-transition: all 0.5s ease-in;
transition: all 0.5s ease-in;
}

@media only screen and (max-device-width: 1024px) {
  .blogger-comments .comments-content .loadmore a,
  .blogger-comments .comments-content .loadmore:focus a {
    background: none;
    border-top: 1px solid #ccc;
  }
}
.blogger-comments .thread-chrome.thread-collapsed {
  display: none;
}

.blogger-comments .thread-toggle {
  display: inline-block;
}

.blogger-comments .thread-toggle .thread-arrow {
  display: inline-block;
  height: 6px;
  width: 7px;
  overflow: visible;
  margin: 0.3em;
  padding-right: 4px;
}

.blogger-comments .thread-expanded .thread-arrow {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAG0lEQVR42mNgwAfKy8v/48I4FeA0AacVDFQBAP9wJkE/KhUMAAAAAElFTkSuQmCC") no-repeat scroll 0 0 transparent;
}

.blogger-comments .thread-collapsed .thread-arrow {
  background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHCAYAAADEUlfTAAAAJUlEQVR42mNgAILy8vL/DLgASBKnApgkVgXIkhgKiNKJ005s4gDLbCZBiSxfygAAAABJRU5ErkJggg==") no-repeat scroll 0 0 transparent;
}

.blogger-comments .avatar-image-container {
  float: left;
  width: 36px;
  max-height: 36px;
  overflow: hidden;
}

.blogger-comments .avatar-image-container img {
  width: 36px;
}

.blogger-comments .comment-block {
  margin-left: 48px;
  position: relative;
}

/* Responsive styles. */
@media screen and (max-device-width: 480px) {
  .blogger-comments .comments-content .comment-replies {
    margin-left: 0;
  }
}



.share-controls {
  overflow: hidden;
  text-align: center;
  white-space: nowrap;
}

.share-controls span,
.share-controls iframe {
  height: 20px !important;
}

.share-controls .share-plusone,
.share-controls .share-twitter,
.share-controls .share-facebook {
  /* PlusOne tries to reset a lot of settings, don't let it. */
  background-repeat: no-repeat !important;
  background-position: left center !important;
  display: inline-block;
  margin: 0;
}

/* To avoid the 'jitter' of buttons loading, set a background image
   of the button in its place. Once loaded, the button covers. */
.share-controls .share-plusone {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAUCAYAAADskT9PAAACrElEQVRIS8WW30tTYRjH37+roLyovKgor7xY0AySfoHSXRhSiRWUXYSEpAXRRSqsbSxlbI2xsaFt/aJEwTnn3Pm5n25uczi2b+d5ZQdP7JCVrYsP4zzPed7Pc973Pe8ZA8Ci0ahV44MGOgS5rORmkUhkeHl5GcViEfV6vSOQi5zkZouLi3KlUsHOzg6q1WpHIBc5yc0WFhZ4kAKdhJzkZuFwGOVy+b9AbhYKhVBKK5Cnn0MYv4e1/jNY7T2qsz7Qi8LKd2xvbx865GbBYBAx6ynkw++xu7uLZrMJ+ekdLleejaLRaPBuS6XSb5McGeDjmOXJzQKBABLaU9K6bG1tcWqlIuKXT/PizMewHj8oeTGFzbEhfRbN7iM38/v92LhpQaFQ0KGkMvFgbxZsrwy5dqxdPW+4phmNXzmH2MUTfAyzOnIzn8+HmKULOa3rfD6vo05P8uK0640h3o74tR7DtTT1GJVCjsdpDLM6cjOv18tvEmdfIpfL6UgTD7HW142SlDLE9xOznjRsWLqmOK0v/bYaMKsnN/N4PHvFluMQ7a+hajtefDeDeP9ZVFe+8k6z2WxbWu8ziVpnyf58qwGzenIzt9uNWmIV6tQjJO/eQOxCl1Z0BOWlT3wvZDKZXxLX9oBZnMYyqyM3m5+f50/Jj8hCnhfwoqUvSKfTB4Je03bxVgNmdeRmc3NzUBSFo6oqkrf6eFHsUjeEoFfP/Ql02FBzZnlyM5fLhZT7LTamxrAxPoLU6CDWr/fszYTlGM/JsvxPIDdzOp1IPrmNoiTwbmu1GurVinYO3NebEL59hiRJhw65mcPhEOj7TB2JosihJN/Rs5O8ic2ZF3rusEgkEiA3s9vtQ3QiUUAQBANFVeYNKNoy/Jz7G8hFTnIz+ltks9mGNWQNdAhyDZP7B9FT1Mw7jWv8AAAAAElFTkSuQmCC) !important;
  height: 20px;
  /* Don't touch anything other than min-width, causes havoc with +1 */
  min-width: 90px;
  -moz-transition: min-width 0.3s;
-ms-transition: min-width 0.3s;
-o-transition: min-width 0.3s;
-webkit-transition: min-width 0.3s;
transition: min-width 0.3s;
}
.share-controls .share-plusone.defer {
  min-width: 34px;
}
.share-controls .share-plusone.delay {
  min-width: 90px;
}

.share-controls .share-twitter {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAAUCAYAAAAp46XeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFSklEQVRYCd1Ye0yTVxT/9UFbCm15qKU8JhQQURFQfMBUog6VxMSJJo5tZsvcPzPGZJkxzmzLEmOWbZIlji1LZtxkbPMRzHyyKI4hWubkvWEtIC8RmEApKrUP2u6e28JaqMuMcYmc5Pb7zrn3PH73nHO/r5/A5XKhqt3oajNaMFVIGyZDZlyYQKBrG3TJpFKkRwZNFWyo6xmBxWqFkDI2lYBRhggP4RJOmXT5ASImmcXu9DP17Is4uMeBUXLdgC7jMDYsnA3tNOXjqP7vazk4u9Pl4/jkdT1yUhKgkAX4yPMOXYC+bwhJIRK8tjwN3nqkc7yyzmc9MevSEvD6qsWT5E8qaO4bRqBEiJgwxSNN8Z5zOJ3wHjcHHiBjXxF2H7sEXUs3n/v8ajNa7TKIFWEwDIxg99EyH515MZFYlpKItFgNatvuIE49jfMLtDN91nn7eZL7D4+W4svSqkfaJsR+D5S9uYsQGhGNMy0D2Pb9r3jv53qc67oPoSwYwiAlhMEh+KWlB0NmK9oHzXzn4mco8PbaxXhrjTtLr6xI43xtWycKzur4GrPNgY0fF6Gpq5/zV27cwo5Dp/l98eVGrN/3NZ8/VWOA1eGupurmbrz82Q987tOfKri8/M9b0N/uQ1mDHlsPHkePaYTbmPjDwZEh72G2O/DF5qUI08RAHKrGuc4H6LMI2FYIIRAFQEQAA4Px/P5i1Le2j+sOW0dxz+Y+nB5abSBeqVDgxJUavubiH624eacfP15t4PxRXRMkIgEITOH5CryzcRV2rs3EniNnoTN04dbd+9haeAy56bPw0db1KK014OCZy0iKjkCEMhBadTjeWJGOELlsPIYxHATUb+ZoYqZCgsWxaoiU4TxjBIwTAQyQInS6GkuTtRhm2fg3ot4dNttQ39GLi3UGZCTE8B03M/C/GTqQt2QOvi27hqykWKjkgVApg5Aep0GJrgEndbWIn65kpR7F+zsnNR7H2MaEK+QIVamgjZiBlWmJEIn8w+BSh4P1HBvdgw/4le6lYjEOrIxDUricZ2wcAOtPovx5kTj86krkZ6WM65Ce1cEy7CHiiVbPT8SZ32/gUmMLDr65gcsKTlVCzLK2KEnL+ebuPhRX1PBBQeekJ2HUMYqBEQu+Ka/m8hGbC/nZGdyf0xMHlTr5mTjIqM+jQMXSu4sdItroUMxRa9AwaMXdId93TpfDjsCHJuSnzgcZnkhOx2TZpoxkbD98GrOjpvNNeyE1GSVVDdiUmcqDWjY3AeV1TXh/yxqEyqU4WdmARfHRiFIEoaiiHttWL8VCbQTKGpshE0u5SyGroM5+I0xmCy/LiXEQzzNnZb1LQ86O1v2bstFpdODdC0040WLEkGeHaLHLbkWi3IVDL6bzIMf0vK+0QSq5BKpgBbdJc0vmaLmMSpD4LZlzyRzo0CF+R24mZrE+ytpTiOSdBfiOleRD1rsp8VHYm5eNzQeKELf9E+wqOs/1SOel5QtQ3Xobqz/4Cr0m87gvmqNBJCiuvuPKilWyI1UIkdBdRnKpBHr2OCjrMKHZkzmlVIzlEVKsm6WBeZStYyXzKIoLD0bPsAXW0X/WqIMksLkE/ISlkg+RCmGysjL2rNEo5XAymzb7KEJYT7WbWMUwnjIpE4tgZH0bqZKN26UYFZ66+8syOR5dxz03uCXPhUyKUxQghJS1j3ezEijHU35VI7/+fNDGUwL+K13rMvn2nLciOXA/wdzZ9J57mvf+gJG/xwE2Fh9PrOfRNCabMlf+Z9XMTjhNkO975LOMsHfEDrlIBMHYZwZ9S9uzjMcn9uRELf/M8DdRh83rstvalwAAAABJRU5ErkJggg==) !important;
  height: 20px;
  width: 110px;
  -moz-transition: width 0.3s;
-ms-transition: width 0.3s;
-o-transition: width 0.3s;
-webkit-transition: width 0.3s;
transition: width 0.3s;
}
.share-controls .share-twitter.defer {
  width: 57px;
}
.share-controls .share-twitter.delay {
  width: 110px;
}

.share-controls .share-facebook {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAUCAYAAAAk/dWZAAAACXBIWXMAAAsTAAALEwEAmpwYAAADQElEQVRIDd1XXUhTYRh+tjPb5mwNpzV0aSiWZESihMQI7M6bEn8ujKKCQMIuDKurpMQLQxQWNEUIIoT0wkIrC4MMNCOiZUWU1tD5/5fzd87jNtf3HV2d6c5+jKD1wtn3/n/Pe973nJ1P5HK5YB6ZdVnmWThXXQgVYsQiRCql2BOrEon6h2dcizYHolUySBhxqNQAh3MVU7PLiJBLIKYdCLUC6J2mN5zipvjFdIRCqQP8UaG4Ofx8JZ+/XPkM3wd+8FWCfFJ8FKquZgna/7ZB8CEItAAKMBhfj4Kcc2h/+gmjrIc2aEGwCF+ZMlLj8Op+IXdR3iuxwyguqkejyROhtacTJ4o6MUeD2Fncav2ISafXDAErJQF78hyrrmRhdHIB30wTmJkWHjkbibE7PBEq4g6i8pITCpqPYaCBjJd5a+yWOkG3ogVcu/0CvYNLQe3MWvpQ83gAnv2hKZbwUN+A4oY+OIjETvWhrKSedK0ep/TvMO1jl6CK2KmOwNmcNC6dSr2d46kuGHIs2mA20R65iYGcsaO95gHuDcWjtCABEligv9EFWXYWWgy5yJn/ivLnE+6ATWtQ45QQF4nzeelckkP7doFePf1TmJxe3JRYULFhRzmsaKxtwvuh3aitPgI1CXSMD+M1WTVGI/S9DMwEf//YcqApBf04w5vuQehO1nEP9IfeCVwsa/YdwFkZPz4SyLZJgWULTON2xGjC4KTzREinS8Fh0miHLhkydfSa0stvUOPkJd6nSk6sC4tWOFg7rEssrGTlBp4XZSPDk12YjVKdE9XlTegYX4VUq0Um8TGaV5CYrEVKcgyiFMJQNzSXl52wqftjPRU8aUf4tl/27i8jPMtvlhbRdrcVbW6Vai/unCMC74VEfWysGOkF2ShZaSaFPIGy4jgulGbgZnkXcl92cdGazEzU5WndmTxWn0V4ePIE+uXrl6RaVBhOe3VrqV5XEx+9IX9dCMPRM/nkWheVSbhuSCQdJN1jwqCQbqET9FPiUYcRsaoojMyu/Re4+Y36Y2kHvIL9c6UYinDyvPgh0dvPY66EGKUft3/X3Dc6DzE9XNBv81AkipviF9PTET1chFoh7kMRxS/6H46nPwG0xCqstPx1sgAAAABJRU5ErkJggg==) !important;;
  height: 20px;
  width: 90px;
  -moz-transition: width 0.3s;
-ms-transition: width 0.3s;
-o-transition: width 0.3s;
-webkit-transition: width 0.3s;
transition: width 0.3s;
}
.share-controls .share-facebook.defer {
  width: 51px;
}
.share-controls .share-facebook.delay {
  width: 90px;
}





#gadget-dock {
  background-color: #333;
  width: 50px;
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-ms-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-o-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);;
  -moz-border-radius: 2px 0 0 2px;
-ms-border-radius: 2px 0 0 2px;
-o-border-radius: 2px 0 0 2px;
-webkit-border-radius: 2px 0 0 2px;
border-radius: 2px 0 0 2px;;
  
  -moz-transition: right 0.15s ease-in-out;
-ms-transition: right 0.15s ease-in-out;
-o-transition: right 0.15s ease-in-out;
-webkit-transition: right 0.15s ease-in-out;
transition: right 0.15s ease-in-out;;
  
  position: fixed;
  right: -40px;
  top: 124px;
  z-index: 3000;
}


#gadget-dock:hover,

#gadget-dock.gadget-notifying,
#gadget-dock.gadget-opening {
  right: 0;
}

/* expand the hover area */
#gadget-dock:after {
  content: '';
  display: block;
  width: 90px;
  height: 110%;
  position: absolute;
  top: -5%;
  left: -40px;
  z-index: -100;
}

#gadget-dock.gadget-opening:after {
  display: none;
}

.gadget-item {
  position: relative;
  z-index: 1;
}

.gadget-selected {
  z-index: 0;
}

.gadget-item:empty {
  display: none;
}

.gadget-menu {
  cursor: pointer;
  background-color: #333;
  border-top: 1px solid #585858;
  text-align: center;
  z-index: 0;
}

.gadget-icons {
  width: 50px;
  height: 50px;
  line-height: 50px;
}

.gadget-menu .gadget-title {
  display: none;
}

.gadget-selected .gadget-menu {
  background-color: white;
  border-color: #ccc;
}

.gadget-item:first-child .gadget-menu {
  border-top: 1px solid transparent;
  -moz-border-radius: 2px 0 0 0;
-ms-border-radius: 2px 0 0 0;
-o-border-radius: 2px 0 0 0;
-webkit-border-radius: 2px 0 0 0;
border-radius: 2px 0 0 0;
}

.gadget-selected.gadget-item:first-child .gadget-menu {
  border-color: #ccc;
  -moz-border-radius: 0;
-ms-border-radius: 0;
-o-border-radius: 0;
-webkit-border-radius: 0;
border-radius: 0;
}

.gadget-item:last-child .gadget-menu {
  -moz-border-radius: 0 0 0 2px;
-ms-border-radius: 0 0 0 2px;
-o-border-radius: 0 0 0 2px;
-webkit-border-radius: 0 0 0 2px;
border-radius: 0 0 0 2px;
}

.gadget-selected.gadget-item:last-child .gadget-menu {
  -moz-border-radius: 0;
-ms-border-radius: 0;
-o-border-radius: 0;
-webkit-border-radius: 0;
border-radius: 0;
}

.gadget-icon, .gadget-icon-selected {
  display: inline-block;
  max-width: 30px;
  max-height: 30px;
  vertical-align: middle;
}

.gadget-icon-selected {
  display: none;
}

.gadget-selected .gadget-icon {
  display: none;
}

.gadget-selected .gadget-icon-selected {
  display: inline-block;
}




.gadget-container {
  background-color: white;
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-ms-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-o-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);;
  line-height: 1.4em;
  text-align: left;
  visibility: hidden;
  z-index: -1;
  margin-left: 100%;
  word-wrap: break-word;
  max-width: 700px;
}


.gadget-container {
  
  -moz-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
-ms-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
-o-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
-webkit-transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;
transition: right 0.15s ease-in-out, opacity 0.15s ease-in-out;;
  
  opacity: 0;
  position: absolute;
  top: 0;
  right: -100px;
}


.gadget-container:hover,
.gadget-item:hover .gadget-container,

.gadget-selected .gadget-container {
  visibility: visible;
  right: 49px;
  opacity: 1;
}

.gadget-selected .gadget-container {
  border: 1px solid #ccc;
  -moz-border-radius: 2px 0 0 2px;
-ms-border-radius: 2px 0 0 2px;
-o-border-radius: 2px 0 0 2px;
-webkit-border-radius: 2px 0 0 2px;
border-radius: 2px 0 0 2px;;
  cursor: auto;
  z-index: -100;
}

.gadget-selected.gadget-dock-overflow-bottom .gadget-container {
  position: fixed;
  bottom: 27px;
  top: auto;
}

.gadget-selected.gadget-dock-overflow-client-area .gadget-container {
  position: fixed;
  top: 0;
  bottom: 24px;
}




/* HACK: Because IE8 ignores max-width when "overflow-y: scroll" is set */
/* the scroll-bar is shown by the child element of .gadget-container.   */
.gadget {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  /* IE scroll-bar */
  scrollbar-arrow-color: white;
  scrollbar-track-color: white;
  scrollbar-face-color: #999;
  scrollbar-highlight-color: #999;
  scrollbar-shadow-color: #999;
  scrollbar-3dlight-color: white;
  scrollbar-darkshadow-color: white;
}
.gadget-selected.gadget-dock-overflow-client-area .gadget {
  overflow-y: scroll;
}

.gadget::-webkit-scrollbar {
  width: 14px;
}

.gadget::-webkit-scrollbar:hover {
  background-color: #f3f3f3;
}

.gadget::-webkit-scrollbar-thumb {
  border-width: 0 0 0 4px;
  border-color: #999;
  border-style: solid;
}

.gadget::-webkit-scrollbar-thumb:hover {
  border-width: 0 0 0 12px;
}

.gadget::-webkit-scrollbar-button {
  width: 14px;
  height: 16px;
}

.gadget::-webkit-scrollbar-corner {
  background-color: transparent;
}


.gadget-content {
  display: none;
  overflow: hidden;
  position: relative;
}

.gadget-selected .gadget-content {
  display: block;
}

.gadget-container .gadget-title {
  display: block;
  background-color: #333;
  color: white;
  display: block;
  font-size: 14px;
  padding: 1px 16px 0 16px;
  height: 50px;
  line-height: 50px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  position: relative;
}

.gadget-container .gadget-title:hover {
  text-decoration: underline;
}

.gadget-selected .gadget-container .gadget-title {
  background-color: transparent;
  color: black;
  font-size: 16px;
  height: 40px;
}

.gadget-selected .gadget-container .gadget-title:hover {
  text-decoration: none;
}

.gadget-content {
  background-color: white;
}

.gadget-resize-detector {
  background-color: transparent;
  border-style: none;
  margin: 0;
  padding: 0;
  outline: 0;
  width: 0;
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}






body {
  overflow-y: scroll; /* inevitable... skip the jitter */
  overflow-x: hidden;
}

#main {
  margin: 5px 15px;
  padding: 10px;
  position: relative;
}

#main div.ad {
  padding: 0 0 20px 0;
  position: relative;
}

#main div.ad ins.adsbygoogle {
  margin: 0px auto;
}

#content {
  background-color: white;
  background-clip: padding-box;
  /* TODO(kiyono): re-enable box-shadow when the performance of box-shadow */
  /* gets better.                                                          */
  
  
  -moz-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;


-ms-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;


-o-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;

/* If border-image is declared below -webkit-border-image */
/* Webkit doesn't render correctly.                       */

border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;


-webkit-border-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAANUlEQVQIW2NkYGBgQ8JAJsMvEGYEEjxQzA0SBYKvQPwFJCEExIJAfBcqoQyk3+OVwGkUVssBP4wMT0ZBZV0AAAAASUVORK5CYII=) 2 / 2px repeat;
  border-width: 2px;
  
  margin: 0 auto;
  width: 970px;
}

#lead,
#feature,
#fold {
  clear: both;
  padding: 12px;
  overflow: hidden;
}

#feature {
  position: relative;
  border-top: solid 1px #ddd;
  border-bottom: solid 1px #ddd;
  background-color: #fafafa;
}

.overview-panel .overview-content, .lightbox-panel .lightbox-content {
    bottom: 0px;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    overflow-y: scroll;
    padding: 10px;
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    position: absolute;
    top: 50px;
    -moz-transition: all 1s linear;
    -ms-transition: all 1s linear;
    -o-transition: all 1s linear;
    -webkit-transition: all 1s linear;
    transition: all 1s linear;
    width: 100%;
    z-index: 1;
}


.item {
  border: solid 1px transparent;
  cursor: pointer;
  font-size: 13px;
  padding: 11px; /* This + border should match the section padding. */
  position: relative;
  -moz-transition: all ease-in-out 0.5s;
-ms-transition: all ease-in-out 0.5s;
-o-transition: all ease-in-out 0.5s;
-webkit-transition: all ease-in-out 0.5s;
transition: all ease-in-out 0.5s;
}

#feature .item {
  display: inline-block;
  max-height: 330px;
  vertical-align: top;
  width: 212px;
}

#feature .item + .item {
  margin-left: 1px;
  width: 211px; /* compenate for the margin */
}

#feature .reblog-badge,
#fold .reblog-badge {
  position: relative;
  top: 3px;
}

.item:hover {
  background-color: white;
  -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
-ms-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
-o-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}

.item.filtered {
  background-color: #f9edbe;
  border: solid 1px #f0c36d;
  -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-ms-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-o-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.item:hover {
  z-index: 200;
}

.item .thumbnail {
  display: inline-block;
  vertical-align: top;
}

.item a.thumbnail {
  background-repeat: no-repeat;
  background-position: top center;
}

.item .title {
  display: block;
  font-size: 16px;
  overflow: hidden;
  padding: 0px 0px 4px 0px;
  text-overflow: ellipsis;
}

.item .ribbon {
  float: left;
  margin: 0 10px 2px 0;
}

.item .story {
  display: inline-block;
  overflow: hidden;
  text-overflow: ellipsis;
}

#lead .story {
  -moz-column-count: 2;
-ms-column-count: 2;
-o-column-count: 2;
-webkit-column-count: 2;
column-count: 2;
  min-height: 150px; /* With columns this becomes max-height?!? */
  width: 100%;
}

#lead .has-thumbnail .story {
  -moz-columns: auto;
-ms-columns: auto;
-o-columns: auto;
-webkit-columns: auto;
columns: auto;
  margin-left: 21px; /* Keep in sync with item padding. So matches the gaps elsewhere. */
  width: 394px;
}

#lead .title {
  font-size: 24px;
}

#feature .story {
  width: 200px;
  max-height: 310px;
  overflow: hidden;
}

#feature .has-thumbnail .story {
  margin-top: 10px;
  max-height: 120px;
}

#fold .item {
  width: 648px; /* Crazy offsets because we are 12px padding instead of 10... */
}

#fold .story {
  min-height: 60px;
  max-height: 200px;
  width: 648px;
}

#fold .has-thumbnail .story {
  height: 200px;
  margin-left: 21px; /* Line up with #feature above*/
  width: 418px;
}

.item .comments-count {
  opacity: 0;
  position: absolute;
  right: -7px;
  top: 0px;
  -moz-transition-property: opacity, top;
-ms-transition-property: opacity, top;
-o-transition-property: opacity, top;
-webkit-transition-property: opacity, top;
transition-property: opacity, top;
  -moz-transition-duration: 0.5s;
-ms-transition-duration: 0.5s;
-o-transition-duration: 0.5s;
-webkit-transition-duration: 0.5s;
transition-duration: 0.5s;
  -moz-transition-timing-function: ease-out;
-ms-transition-timing-function: ease-out;
-o-transition-timing-function: ease-out;
-webkit-transition-timing-function: ease-out;
transition-timing-function: ease-out;
  /*visibility: hidden;*/
  z-index: 999;
}

.item:hover .comments-count {
  opacity: 1;
  top: -10px;
  visibility: visible;
}



.article.has-ads{
padding-right:0 !important;
}</style>
    
<div id="main" class="hfeed" tabindex="0">
  
  

<div class="ad">
  

<div class="adsense" data-host="pub-1556223355139109" data-client="ca-pub-2686209658496010" data-format="horizontal" data-type=""></div>


</div>


  <div id="content">
    <div id="lead">
      <div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="641265785846598006">
  
    
<a class="thumbnail" style="background-image: url('https://4.bp.blogspot.com/-Jg4NiyoTNT0/WJMYF4vnQoI/AAAAAAAAQnU/OtkiVOoEmNYa4hUlZHAsZoa6ZPqdPoFugCK4B/s200-p/IMG_0892.JPG'); width: 200px; height: 200px;" href="https://4.bp.blogspot.com/-Jg4NiyoTNT0/WJMYF4vnQoI/AAAAAAAAQnU/OtkiVOoEmNYa4hUlZHAsZoa6ZPqdPoFugCK4B/s640/IMG_0892.JPG"></a>

    <div class="story">      

<a class="ribbon date small" title="12th January" href="http://delhiiyf.blogspot.com/2017/02/event-gateway-to-great-way-nit-delhi.html" itemprop="url">

  <div class="top ribbon-piece">May</div>
  <div class="bottom ribbon-piece">2</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/02/event-gateway-to-great-way-nit-delhi.html" rel="bookmark" itemprop="url">Event: Gateway to Great way, NIT Delhi</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Gateway to Great way,&nbsp;NIT Delhi

Date- 11th January 2017

Theme- Gateway to Great way

Venue-&nbsp;Auditorium&nbsp;NIT Delhi

Participants- 35+ students (from 1st &amp; 2nd year B tech)</div>
    </div>
  

  

  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="641265785846598006"><span id="comment-count-holder_6412657858465980060" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I0_1495077303530" name="I0_1495077303530" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F05%2Fevent-bss-camp-ayodhya.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I0_1495077303530&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=11477769" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>2</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div></div>
    <div id="feature"><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="2883148641367636843">
  

  
    

<a class="thumbnail" style="background-image: url('https://1.bp.blogspot.com/-QJWtNsqmG_Q/WP38_CGR84I/AAAAAAAARx0/JUiWErNo0jgDJVYeGTjagIr1vOHhrUc5gCK4B/s200-p/DSC_0032.JPG'); width: 200px; height: 200px;" href="https://1.bp.blogspot.com/-QJWtNsqmG_Q/WP38_CGR84I/AAAAAAAARx0/JUiWErNo0jgDJVYeGTjagIr1vOHhrUc5gCK4B/s640/DSC_0032.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="4 weeks ago" href="http://delhiiyf.blogspot.com/2017/04/event-leadership-and-will-power-bharati.html" itemprop="url">


  <div class="top ribbon-piece">Apr</div>
  <div class="bottom ribbon-piece">20</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/04/event-leadership-and-will-power-bharati.html" rel="bookmark" itemprop="url">Event: Leadership and Will Power, Bharati Vidyapeeth Institute of Management and Research</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Leadership and Will Power, Bharati Vidyapeeth Institute of Management and Research

Date- 20th April 2017

Seminar Topic – Leadership and Will power

Speaker- Mr. Gunjan Choudhary (M.Tech IIT Delhi, Ex-IES, Faculty- IES Made Easy)

Venue- Auditorium, BVIMR, Delhi

Participants- 150 (Students from BBA and BCA 1st and 2nd yr.)

The quality of a leader is reflected in the standards they set for themselves. This statement clearly defines how much important is for a leader to develop qualities within himself which he wants to see in the&nbsp;organization. If your actions inspire others to dream more, learn more, do more and become more, you are a leader.</div>
    </div>
  

  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="8227299731118410835"><span id="comment-count-holder_822729973111841083511" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I1_1495077591673" name="I1_1495077591673" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F03%2Fevent-our-life-on-two-wheels-inverties.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I1_1495077591673&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=13522138" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="8065244020608058623">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-EXuZgLJTv4o/WKxGJWregsI/AAAAAAAAQ3s/CELSugYGxyEY9Sk_sXr0TVMnKQ3jd3CuQCK4B/s200-p/WhatsApp%2BImage%2B2017-02-21%2Bat%2B7.10.04%2BPM%2B%25281%2529.jpeg'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-EXuZgLJTv4o/WKxGJWregsI/AAAAAAAAQ3s/CELSugYGxyEY9Sk_sXr0TVMnKQ3jd3CuQCK4B/s640/WhatsApp%2BImage%2B2017-02-21%2Bat%2B7.10.04%2BPM%2B%25281%2529.jpeg"></a>


    <div class="story">
      

<a class="ribbon date small" title="20th February" href="http://delhiiyf.blogspot.com/2017/02/event-search-for-happiness-iit-ter.html" itemprop="url">


  <div class="top ribbon-piece">Feb</div>
  <div class="bottom ribbon-piece">20</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/02/event-search-for-happiness-iit-ter.html" rel="bookmark" itemprop="url">Event: Search for Happiness, IIT Ter Kadamb BACE</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Search for Happiness, IIT Ter Kadamb BACE

Date- 19th February 2017

Theme-&nbsp;Search for Happiness

Speaker- HG Brajmohan Pr (Master Coach, Senior Consultant, Organisational &amp; Leadership Development Specialist, Training Specialist)

Venue- IIT Ter Kadamb BACE

Participants- 30</div>
    </div>



<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="6510040020461692376"><span id="comment-count-holder_65100400204616923768" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I8_1495077303584" name="I8_1495077303584" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F03%2Fevent-art-of-time-management-ymca.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I8_1495077303584&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=20892890" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="6332784845133969193">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-LrXBz0owXvc/WLfOMc_D5zI/AAAAAAAAQ_A/9THvo_qJRMQ5MdS0x0SNqUQ0NvGq829SACK4B/s200-p/IMG-20170228-WA0040.jpg'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-LrXBz0owXvc/WLfOMc_D5zI/AAAAAAAAQ_A/9THvo_qJRMQ5MdS0x0SNqUQ0NvGq829SACK4B/s640/IMG-20170228-WA0040.jpg"></a>


    <div class="story">
      

<a class="ribbon date small" title="27th February" href="http://delhiiyf.blogspot.com/2017/02/event-delhi-safari-camp-abes-ghaziabad.html" itemprop="url">


  <div class="top ribbon-piece">Feb</div>
  <div class="bottom ribbon-piece">27</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/02/event-delhi-safari-camp-abes-ghaziabad.html" rel="bookmark" itemprop="url">Event: Delhi Safari Camp, ABES Ghaziabad</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Delhi Safari Camp,&nbsp;ABES Ghaziabad

Date - 26 February 2017

Venue - Delhi (Qutub Minar, Jantar Mantar, Vedic expo ISKCON Delhi)

Coordinator - Sarvamangal Gaur Das,&nbsp;Abhinav Yadav

Number of students attended - 6 (ABES Engineering College)</div>
    </div>
  
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="1160499655750285495"><span id="comment-count-holder_11604996557502854953" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I3_1495077303554" name="I3_1495077303554" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F04%2Fevent-sankalpa-camp-braja.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I3_1495077303554&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=32161935" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="841816805022356018">
  

  
    

<a class="thumbnail" style="background-image: url('https://1.bp.blogspot.com/-3gXrpip2J-U/WOXprK8NHeI/AAAAAAAARhs/awTO8Rcca2EIe1g4bmwAqg9WHI6ZwnYTgCK4B/s200-p/DSC_0309.jpg'); width: 200px; height: 200px;" href="https://1.bp.blogspot.com/-3gXrpip2J-U/WOXprK8NHeI/AAAAAAAARhs/awTO8Rcca2EIe1g4bmwAqg9WHI6ZwnYTgCK4B/s640/DSC_0309.jpg"></a>


    <div class="story">
      

<a class="ribbon date small" title="3rd April" href="http://delhiiyf.blogspot.com/2017/04/event-udgaar-expression-of-goodness-and.html" itemprop="url">


  <div class="top ribbon-piece">Apr</div>
  <div class="bottom ribbon-piece">3</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/04/event-udgaar-expression-of-goodness-and.html" rel="bookmark" itemprop="url">Event: UDGAAR-An Expression of Goodness and Joy, Siri Fort Auditorium, Delhi</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: UDGAAR-An Expression of Goodness and Joy, Siri Fort Auditorium, Delhi<br><br>Date - 02nd April 2017<br><br>Theme - Kab Honge Kamyab (Success Formula to make India the world Leader)<br><br>Speakers - HH Gopal Krishna Goswami Maharaj (ISKCON GBC &amp; BBT Trustee), HH Bhakti Anughrah Janardan Swami (ISKCON Sanyasi), Mr. Vijay Goel (Minister of Sports and Youth Affairs) Mr. Samvit Patra (BJP spokesperson), Dr.</div>
    </div>
  

  

  

<!---->
  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="841816805022356018"><span id="comment-count-holder_8418168050223560184" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I4_1495077303562" name="I4_1495077303562" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F04%2Fevent-udgaar-expression-of-goodness-and.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I4_1495077303562&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=35136853" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>0</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div></div>
    <div id="fold"><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="4598642051449337232">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://4.bp.blogspot.com/-sHt75yG3ErI/WOIzmw84rlI/AAAAAAAARU0/pFU6qQsRqzAJYKVx3X7Oe3xtdi28nRuwACK4B/s200-p/IMG_1124.jpg'); width: 200px; height: 200px;" href="https://4.bp.blogspot.com/-sHt75yG3ErI/WOIzmw84rlI/AAAAAAAARU0/pFU6qQsRqzAJYKVx3X7Oe3xtdi28nRuwACK4B/s640/IMG_1124.jpg"></a>


    <div class="story">
      

<a class="ribbon date small" title="27th March" href="http://delhiiyf.blogspot.com/2017/04/event-delhi-safari-camp-delhi.html" itemprop="url">


  <div class="top ribbon-piece">Mar</div>
  <div class="bottom ribbon-piece">27</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/04/event-delhi-safari-camp-delhi.html" rel="bookmark" itemprop="url">Event: Delhi Safari Camp, Delhi</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Delhi Safari Camp, Delhi

Date - 26th March 2017

Venue - Delhi (Qutub Minar, Lotus Temple, Agrasen ki Bawli,&nbsp;ISKCON Temple, National Science Centre, India Gate)

Coordinator - Sarojmukh Madhav Das

Number of Participants - Around 50 (IIT Delhi, NIT Delhi, III Delhi, Gurgaon and Ghaziabad)</div>
    </div>
  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="4598642051449337232"><span id="comment-count-holder_45986420514493372325" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I5_1495077303569" name="I5_1495077303569" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F04%2Fevent-delhi-safari-camp-delhi.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I5_1495077303569&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=30338182" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>0</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="4886273802632928041">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://4.bp.blogspot.com/-IuzXph_WplY/WOYnjy6QPtI/AAAAAAAARjo/byJhKTXn8uAMGhYrPnfuFeXChOk0w6vuQCK4B/s200-p/IMG-20170321-WA0012.jpg'); width: 200px; height: 200px;" href="https://4.bp.blogspot.com/-IuzXph_WplY/WOYnjy6QPtI/AAAAAAAARjo/byJhKTXn8uAMGhYrPnfuFeXChOk0w6vuQCK4B/s640/IMG-20170321-WA0012.jpg"></a>


    <div class="story">
      

<a class="ribbon date small" title="17th March" href="http://delhiiyf.blogspot.com/2017/04/event-our-life-on-two-wheels-lovely.html" itemprop="url">


  <div class="top ribbon-piece">Mar</div>
  <div class="bottom ribbon-piece">17</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/04/event-our-life-on-two-wheels-lovely.html" rel="bookmark" itemprop="url">Event: Our Life on Two Wheels, Lovely Professional University, Jalandhar</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Our Life on Two Wheels, Lovely Professional University, Jalandhar

Date- 16th March 2017

Seminar Topic- Our Life on Two Wheels

Speaker- Rambhadra Das (Chairman of Vedic Club)

Venue- Lovely Professional University

Participants- Around 50</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="4886273802632928041"><span id="comment-count-holder_48862738026329280416" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I6_1495077303574" name="I6_1495077303574" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F04%2Fevent-our-life-on-two-wheels-lovely.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I6_1495077303574&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=25823529" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>0</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="8928866893775795610">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://3.bp.blogspot.com/-eQFkkLxjmmQ/WMeiHEVNZUI/AAAAAAAARIA/UiQD0JkFVKwGVAmALdGlNE3kiXnyzFZiwCK4B/s200-p/IMG_1021.JPG'); width: 200px; height: 200px;" href="https://3.bp.blogspot.com/-eQFkkLxjmmQ/WMeiHEVNZUI/AAAAAAAARIA/UiQD0JkFVKwGVAmALdGlNE3kiXnyzFZiwCK4B/s640/IMG_1021.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="10th March" href="http://delhiiyf.blogspot.com/2017/03/event-how-to-plan-for-four-years-at-iit.html" itemprop="url">


  <div class="top ribbon-piece">Mar</div>
  <div class="bottom ribbon-piece">10</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/03/event-how-to-plan-for-four-years-at-iit.html" rel="bookmark" itemprop="url">Event: How to Plan for the Four Years at IIT, IIT-D Ter Kadamba BACE</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: How to Plan for the Four Years at IIT, IIT-D Ter Kadamba BACE

Date- 9th March 2017

Seminar Topic - How to Plan for the Four Years at IIT

Speaker- Mr Ujjwal Sinha (Pursuing M. Tech from Chemical Engineering at IIT Delhi, Shrestha Club Member)

Venue- IIT-D Ter Kadamba BACE

Participants- 35 ( IIT-D B.Tech 1st year Students)</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="8928866893775795610"><span id="comment-count-holder_89288668937757956107" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I7_1495077303580" name="I7_1495077303580" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F03%2Fevent-how-to-plan-for-four-years-at-iit.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I7_1495077303580&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=25118587" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="6510040020461692376">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://4.bp.blogspot.com/-_UoBDyySm98/WMptShoNDyI/AAAAAAAARMo/oL5iHjMgRvw3nnCYLeESTOtymRSd7rnDQCK4B/s200-p/DSC_0043.JPG'); width: 200px; height: 200px;" href="https://4.bp.blogspot.com/-_UoBDyySm98/WMptShoNDyI/AAAAAAAARMo/oL5iHjMgRvw3nnCYLeESTOtymRSd7rnDQCK4B/s640/DSC_0043.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="8th March" href="http://delhiiyf.blogspot.com/2017/03/event-art-of-time-management-ymca.html" itemprop="url">


  <div class="top ribbon-piece">Mar</div>
  <div class="bottom ribbon-piece">8</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/03/event-art-of-time-management-ymca.html" rel="bookmark" itemprop="url">Event: Art of Time Management, YMCA University of Science and Technology, Faridabad</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Art of Time Management, YMCA University of Science and Technology, Faridabad<br><br>Date- 7th March 2017<br><br>Seminar Topic -&nbsp;Art of Time Management Seminar<br><br>Speaker- Mr&nbsp;Braj Mohan Das (Master Coach, Senior Consultant, Organisational &amp; Leadership<br><br>Development Specialist, Training Specialist and the founder of Academy of Coaches)<br><br>Venue-&nbsp;YMCA University of Science and Technology, Faridabad<br><br>Participants- 120 above<br><br>In order to guide the students on the Techniques of Time Management, Vedic Club with</div>
    </div>
  



  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="6332784845133969193"><span id="comment-count-holder_63327848451339691939" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I9_1495077303588" name="I9_1495077303588" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F02%2Fevent-delhi-safari-camp-abes-ghaziabad.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I9_1495077303588&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=18848868" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="51693229061683086">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-Y2-NTGEJvVA/WMjs6nn9voI/AAAAAAAARKI/pkEdkupSSysLLj6M_g1Pom_3xQ3a4AgiACK4B/s200-p/1444966082_image.jpg'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-Y2-NTGEJvVA/WMjs6nn9voI/AAAAAAAARKI/pkEdkupSSysLLj6M_g1Pom_3xQ3a4AgiACK4B/s640/1444966082_image.jpg"></a>


    <div class="story">
      

<a class="ribbon date small" title="27th February" href="http://delhiiyf.blogspot.com/2017/02/event-umang-festival-of-inspiration-and.html" itemprop="url">


  <div class="top ribbon-piece">Feb</div>
  <div class="bottom ribbon-piece">27</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/02/event-umang-festival-of-inspiration-and.html" rel="bookmark" itemprop="url">Event: UMANG -The festival of Inspiration and Joy, ISKCON Noida</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: UMANG -The festival of Inspiration and Joy, ISKCON Noida<br><br>Date- 26th February 2017<br><br>Seminar Topic -&nbsp;Turning all black into white before it demonetize<br><br>Speaker- Sundar Gopal Das (IYF Director)<br><br>Venue- ISKCON Noida<br><br>Participants- Around 400 students<br><br>UMANG -The festival of inspiration and Joy was conducted on 26th February in which around 400 students participated. The program was overall coordinated by Shyam Gopal Das and Jagadananda Pandit Das managed the decoration of the hall.</div>
    </div>
    `
  


  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="8065244020608058623"><span id="comment-count-holder_806524402060805862312" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I2_1495077591709" name="I2_1495077591709" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F02%2Fevent-search-for-happiness-iit-ter.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I2_1495077591709&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=42834622" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="4847570877870667127">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://4.bp.blogspot.com/-Xz1SoAhxtH0/WKQ_rYlkDoI/AAAAAAAAQzQ/DaOX27DNYlABmLYtxPqMw2cBYCFAajlGQCK4B/s200-p/1.jpeg'); width: 200px; height: 200px;" href="https://4.bp.blogspot.com/-Xz1SoAhxtH0/WKQ_rYlkDoI/AAAAAAAAQzQ/DaOX27DNYlABmLYtxPqMw2cBYCFAajlGQCK4B/s640/1.jpeg"></a>


    <div class="story">
      

<a class="ribbon date small" title="10th February" href="http://delhiiyf.blogspot.com/2017/02/event-time-management-satya-college-of.html" itemprop="url">


  <div class="top ribbon-piece">Feb</div>
  <div class="bottom ribbon-piece">10</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/02/event-time-management-satya-college-of.html" rel="bookmark" itemprop="url">Event: Time Management, Satya College of Engineering and Technology, Palwal</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event:&nbsp;Time Management,&nbsp;Satya College of Engineering&nbsp;and Technology, Palwal

Date- 10th February 2017

Theme-&nbsp;Time Management

Speaker- Deepanshu Bajaj (Food Chain Business and GM at TechnyGrow)

Venue- Satya College of Engineering and Technology,Palwal

Participants- 100+ Students (B.Tech)</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="4847570877870667127"><span id="comment-count-holder_484757087787066712713" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I3_1495077591740" name="I3_1495077591740" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F02%2Fevent-time-management-satya-college-of.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I3_1495077591740&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=35452731" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>2</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="3148771482793402229">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-I4FL8Or8q08/WJMyt0JpwGI/AAAAAAAAQp8/kxv3nMtIxv4IulltZMbrYuBsZ7c6nz9swCK4B/s200-p/DSC08263.JPG'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-I4FL8Or8q08/WJMyt0JpwGI/AAAAAAAAQp8/kxv3nMtIxv4IulltZMbrYuBsZ7c6nz9swCK4B/s640/DSC08263.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="2nd February" href="http://delhiiyf.blogspot.com/2017/02/event-gate-preparation-nit-delhi.html" itemprop="url">


  <div class="top ribbon-piece">Feb</div>
  <div class="bottom ribbon-piece">2</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/02/event-gate-preparation-nit-delhi.html" rel="bookmark" itemprop="url">Event: Gate Preparation, NIT Delhi</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event:&nbsp;Gate Preparation,&nbsp;NIT Delhi

Date- 1st February 2017

Theme- Gate Preparation

Speaker- Mr. Gunjan Choudhary (M.Tech IIT Delhi, Ex-IES, Faculty-IES made easy)

Venue-&nbsp;Auditorium,&nbsp;NIT Delhi

Participants- 35+ students (from 1st &amp; 2nd year B tech)</div>
    </div>
  

  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="2429835721259547667"><span id="comment-count-holder_242983572125954766715" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I5_1495077591774" name="I5_1495077591774" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F01%2Fevent-umang-festival-of-inspiration-and_30.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I5_1495077591774&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=34186641" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="5432476919704972267">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://3.bp.blogspot.com/-1oF6jxCv8hY/WLFdoTdaJhI/AAAAAAAAQ7A/uJMIGDq4Wzcw4ZrdA1ahhOv-9RYQQe8lgCK4B/s200-p/DSC_0489.JPG'); width: 200px; height: 200px;" href="https://3.bp.blogspot.com/-1oF6jxCv8hY/WLFdoTdaJhI/AAAAAAAAQ7A/uJMIGDq4Wzcw4ZrdA1ahhOv-9RYQQe8lgCK4B/s640/DSC_0489.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="26th January" href="http://delhiiyf.blogspot.com/2017/01/event-umang-festival-of-joy-and.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">26</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/event-umang-festival-of-joy-and.html" rel="bookmark" itemprop="url">Event: UMANG -The festival of Joy and Inspiration, Ghaziabad</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: UMANG -The festival of Joy and Inspiration,&nbsp;Ghaziabad

Date-26th January 2017

Theme-Mera Bharat Mahan

Speaker- HG Sundar Gopal Prabhu (IYF Director)

Drama Theme- Smiling Faces and Crying Hearts

Venue- ISKCON Temple Raj Nagar, Ghaziabad

Participants- 150+</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="5432476919704972267"><span id="comment-count-holder_543247691970497226716" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I6_1495077591786" name="I6_1495077591786" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F01%2Fevent-umang-festival-of-joy-and.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I6_1495077591786&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=39887304" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="4164718148376179842">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://3.bp.blogspot.com/-ho1engRDPYc/WKwxjBdM9GI/AAAAAAAAQ2k/N2VtIgvmI4Qb-yE4KyHCmeOa2XNadhbsgCK4B/s200-p/DSC_0531.JPG'); width: 200px; height: 200px;" href="https://3.bp.blogspot.com/-ho1engRDPYc/WKwxjBdM9GI/AAAAAAAAQ2k/N2VtIgvmI4Qb-yE4KyHCmeOa2XNadhbsgCK4B/s640/DSC_0531.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="26th January" href="http://delhiiyf.blogspot.com/2017/01/event-bhagwad-gita-applied-surbhi-kunj.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">26</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/event-bhagwad-gita-applied-surbhi-kunj.html" rel="bookmark" itemprop="url">Event: Bhagwad Gita applied, Surbhi Kunj BACE</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event:&nbsp;Bhagwad Gita applied, Surbhi Kunj BACE

Date- 26th January 2017

Theme- Bhagwad Gita applied

Speaker- Pitambar Krishna Das (B.Tech in Environmental Engineering from DTU)

Venue- Surbhi Kunj BACE, Near DU North Campus

Participants- Around 20</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="4164718148376179842"><span id="comment-count-holder_416471814837617984217" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I7_1495077591806" name="I7_1495077591806" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F01%2Fevent-bhagwad-gita-applied-surbhi-kunj.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I7_1495077591806&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=20949900" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>0</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="1051574894715370763">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://1.bp.blogspot.com/-G00rkhH5Hrk/WIm6Hkd3DeI/AAAAAAAAQW8/e1Spt5luiYsCvQe_pXhXjSV5jStu68lBQCK4B/s200-p/DSC08064.JPG'); width: 200px; height: 200px;" href="https://1.bp.blogspot.com/-G00rkhH5Hrk/WIm6Hkd3DeI/AAAAAAAAQW8/e1Spt5luiYsCvQe_pXhXjSV5jStu68lBQCK4B/s640/DSC08064.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="23rd January" href="http://delhiiyf.blogspot.com/2017/01/event-sri-nathdwara-yatra-nathdwara.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">23</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/event-sri-nathdwara-yatra-nathdwara.html" rel="bookmark" itemprop="url">Event: Sri Nathdwara Yatra, Nathdwara</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Sri Nathdwara Yatra, Nathdwara

Date - 20th-22nd January 2017

Venue - Nathdwara, Near Lake city Udaipur

Participants - Over 300 youths from IYF Delhi &amp; 3500+ congregation devotees</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="1051574894715370763"><span id="comment-count-holder_105157489471537076318" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I8_1495077591824" name="I8_1495077591824" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F01%2Fevent-sri-nathdwara-yatra-nathdwara.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I8_1495077591824&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=11950449" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="2121465978109373666">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://3.bp.blogspot.com/-k9qet2AahE8/WInOPTaywII/AAAAAAAAQX4/d_F8yyWZJXEF4O3lZlNsT9R6xSDCtXXEACK4B/s200-p/DSC_2786.JPG'); width: 200px; height: 200px;" href="https://3.bp.blogspot.com/-k9qet2AahE8/WInOPTaywII/AAAAAAAAQX4/d_F8yyWZJXEF4O3lZlNsT9R6xSDCtXXEACK4B/s640/DSC_2786.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="18th January" href="http://delhiiyf.blogspot.com/2017/01/event-stop-worrying-start-living-akgec.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">18</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/event-stop-worrying-start-living-akgec.html" rel="bookmark" itemprop="url">Event: Stop Worrying &amp; Start Living, AKGEC, Ghaziabad</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event:&nbsp;Stop Worrying &amp; Start Living, AKGEC, Ghaziabad

Date- 17th Jan 2017

Theme-&nbsp;Stop Worrying &amp; Start Living

Speaker- Shubh Vilas Das (National best seller author of the Book Open Eyed Meditation, Ramayana-The game of life)

Venue- AKGEC, Ghaziabad

Participants- 300 (B.Tech 1st year)</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="2121465978109373666"><span id="comment-count-holder_212146597810937366619" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I9_1495077591838" name="I9_1495077591838" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F01%2Fevent-stop-worrying-start-living-akgec.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I9_1495077591838&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=36645960" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="3571018068878611709">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://3.bp.blogspot.com/-Y9Rei3D0Bhk/WInUK0RAnII/AAAAAAAAQaA/MpzKdqhgLd4iWoEwNzcy4q1xagWh1p_MwCK4B/s200-p/IMG-20170117-WA0001.jpg'); width: 200px; height: 200px;" href="https://3.bp.blogspot.com/-Y9Rei3D0Bhk/WInUK0RAnII/AAAAAAAAQaA/MpzKdqhgLd4iWoEwNzcy4q1xagWh1p_MwCK4B/s640/IMG-20170117-WA0001.jpg"></a>


    <div class="story">
      

<a class="ribbon date small" title="17th January" href="http://delhiiyf.blogspot.com/2017/01/event-stop-worrying-start-living-hi.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">17</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/event-stop-worrying-start-living-hi.html" rel="bookmark" itemprop="url">Event: Stop worrying &amp; Start living, Hi-Tech institute of Engineering and technology, Ghaziabad</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Stop worrying&nbsp;&amp; Start living, Hi-Tech institute of Engineering and technology, Ghaziabad

Date- 16th Jan 2017

Theme-&nbsp;Stop Worrying &amp; Start Living

Speaker- Shubh Vilas Das (National best seller author of the Book Open Eyed Meditation, Ramayana-The game of life)

Venue- Hi-Tech College Ghaziabad

Participants- 300+ (B.Tech)</div>
    </div>
  

  


  

<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="4561036789826927545"><span id="comment-count-holder_456103678982692754522" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I12_1495077592266" name="I12_1495077592266" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F02%2Fevent-open-eyed-meditation-iit-campus.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I12_1495077592266&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=11795723" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="2772191411719045420">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-KeiFl5xgZik/WJLLJ1oyLOI/AAAAAAAAQlE/PBje0FaXB8ssQpaQllb-BB8rhjEBjK2KACK4B/s200-p/DSC08507.JPG'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-KeiFl5xgZik/WJLLJ1oyLOI/AAAAAAAAQlE/PBje0FaXB8ssQpaQllb-BB8rhjEBjK2KACK4B/s640/DSC08507.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="17th January" href="http://delhiiyf.blogspot.com/2017/01/event-gateway-to-great-way-kautilya.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">17</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/event-gateway-to-great-way-kautilya.html" rel="bookmark" itemprop="url">Event: Gateway to great way,  Kautilya College of Engineering, Jaipur, Rajasthan</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event:&nbsp;Gateway to great way, &nbsp;Kautilya College of Engineering,&nbsp;Jaipur, Rajasthan

Date- 16th Jan 2017

Theme-&nbsp;Gateway to great way

Venue- Kautilya College of Engineering,&nbsp;RIICO Institutional Area, Sitapura, Jaipur, Rajasthan

Participants- 150+ students</div>
    </div>
  
  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="7269760052989691914"><span id="comment-count-holder_726976005298969191425" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I15_1495077597357" name="I15_1495077597357" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F02%2Fevent-gateway-to-great-way-nit-delhi.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I15_1495077597357&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=30873820" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="3364530560143652810">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-4xQZ_1NFCrI/WHSdhrT1ATI/AAAAAAAAQKk/i0bzwyJOWuMUiGc6go4tkaUHgplvLBHGACK4B/s200-p/DSC09954.JPG'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-4xQZ_1NFCrI/WHSdhrT1ATI/AAAAAAAAQKk/i0bzwyJOWuMUiGc6go4tkaUHgplvLBHGACK4B/s640/DSC09954.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="12th January" href="http://delhiiyf.blogspot.com/2017/01/event-umang-festival-of-inspiration-and.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">12</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/event-umang-festival-of-inspiration-and.html" rel="bookmark" itemprop="url">Event: UMANG -The festival of Inspiration and Joy, Auditorium, ISKCON Delhi</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: UMANG -The festival of Inspiration and Joy, Auditorium, ISKCON Delhi

Date - 7th January 2017

Venue - Auditorium, ISKCON Delhi

Theme - Secret of Success

Participants - Over 700</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="3364530560143652810"><span id="comment-count-holder_336453056014365281026" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I16_1495077597372" name="I16_1495077597372" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F01%2Fevent-umang-festival-of-inspiration-and.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I16_1495077597372&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=37510007" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="8916577102527357006">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://1.bp.blogspot.com/-OeEfq_YE9_4/WHYK82O93XI/AAAAAAAAQNI/TOBdKpLKWE0Sj_DV62sJFR7A3KaLZuI5ACK4B/s200-p/WhatsApp%2BImage%2B2017-01-11%2Bat%2B12.16.31%2BPM.jpg'); width: 200px; height: 200px;" href="https://1.bp.blogspot.com/-OeEfq_YE9_4/WHYK82O93XI/AAAAAAAAQNI/TOBdKpLKWE0Sj_DV62sJFR7A3KaLZuI5ACK4B/s640/WhatsApp%2BImage%2B2017-01-11%2Bat%2B12.16.31%2BPM.jpg"></a>


    <div class="story">
      

<a class="ribbon date small" title="11th January" href="http://delhiiyf.blogspot.com/2017/01/iyfeokgmailcom.html" itemprop="url">


  <div class="top ribbon-piece">Jan</div>
  <div class="bottom ribbon-piece">11</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2017/01/iyfeokgmailcom.html" rel="bookmark" itemprop="url">Event: Anand Utsav, ISKCON Sec-31, Gurgaon</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Anand Utsav,&nbsp;ISKCON Sec-31, Gurgaon

Date - 8th January 2017

Venue - ISKCON Sec-31, Gurgaon

Drama Theme - Under the Influence

Participants - Over 300

Speaker - HG Govind Mohan Pr</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="8916577102527357006"><span id="comment-count-holder_891657710252735700627" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I17_1495077597385" name="I17_1495077597385" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2017%2F01%2Fiyfeokgmailcom.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I17_1495077597385&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=36096022" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="7498649608949601493">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-FSvfUFKGcLk/WEeoUw51C_I/AAAAAAAAP6g/7YVYwqGlW0sqhoBhxgiaVodFahrclVbKACK4B/s200-p/8.jpeg'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-FSvfUFKGcLk/WEeoUw51C_I/AAAAAAAAP6g/7YVYwqGlW0sqhoBhxgiaVodFahrclVbKACK4B/s640/8.jpeg"></a>


    <div class="story">
      

<a class="ribbon date small" title="3rd December 2016" href="http://delhiiyf.blogspot.com/2016/12/event-how-to-develop-positive-attitude.html" itemprop="url">


  <div class="top ribbon-piece">Dec</div>
  <div class="bottom ribbon-piece">3</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2016/12/event-how-to-develop-positive-attitude.html" rel="bookmark" itemprop="url">Event: How to develop Positive Attitude, BCE Bhagalpur, Bihar</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: How to develop Positive Attitude, BCE Bhagalpur, Bihar<br><br>Date-&nbsp;2nd December 2016<br><br>Theme-&nbsp;How to develop&nbsp;positive&nbsp;attitude<br><br>Venue-&nbsp;Bhagalpur College of&nbsp;Engineering, Bihar<br><br>Participants- Around&nbsp;150 (students and staffs)<br><br>A seminar was conducted on How to develop positive attitude at&nbsp;Bhagalpur College of&nbsp;Engineering&nbsp;by HG Ram Bhadra Prabhu on 2nd December. He told that we may have knowledge and skills but if we are an animal from inside then that knowledge skill is useless.&nbsp;<br><br>Principal Dr.</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="7498649608949601493"><span id="comment-count-holder_749864960894960149328" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I18_1495077597399" name="I18_1495077597399" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2016%2F12%2Fevent-how-to-develop-positive-attitude.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I18_1495077597399&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=20975285" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="1541604097201239504">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://1.bp.blogspot.com/-3TBH9B8uFS8/WEE5Kf8cZHI/AAAAAAAAP4s/exk9hyaqjE0X5ZzSPKuTtkyp8C1NUKL8gCK4B/s200-p/IMG_0252.JPG'); width: 200px; height: 200px;" href="https://1.bp.blogspot.com/-3TBH9B8uFS8/WEE5Kf8cZHI/AAAAAAAAP4s/exk9hyaqjE0X5ZzSPKuTtkyp8C1NUKL8gCK4B/s640/IMG_0252.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="23rd November 2016" href="http://delhiiyf.blogspot.com/2016/11/event-hindu-adhyatmic-seva-mela-ramlila.html" itemprop="url">


  <div class="top ribbon-piece">Nov</div>
  <div class="bottom ribbon-piece">23</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2016/11/event-hindu-adhyatmic-seva-mela-ramlila.html" rel="bookmark" itemprop="url">Event: Hindu Adhyatmic Seva Mela, Ramlila Ground</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event:&nbsp;Hindu Adhyatmic&nbsp;Seva&nbsp;Mela,&nbsp;Ramlila&nbsp;Ground

Date - 17-20th November 2016

Venue -&nbsp;Kavi&nbsp;Nagar&nbsp;Ramlila&nbsp;Ground</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="1541604097201239504"><span id="comment-count-holder_154160409720123950429" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I19_1495077597413" name="I19_1495077597413" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2016%2F11%2Fevent-hindu-adhyatmic-seva-mela-ramlila.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I19_1495077597413&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=22076928" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="7036696949973662244">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://1.bp.blogspot.com/-QgNsPumqOlI/WDWSytIgRAI/AAAAAAAAPqY/3Qpxqp98R_AvoB1SOeS6sprvtXvBMAMnwCLcB/s200-p/DSC_0055.JPG'); width: 200px; height: 200px;" href="https://1.bp.blogspot.com/-QgNsPumqOlI/WDWSytIgRAI/AAAAAAAAPqY/3Qpxqp98R_AvoB1SOeS6sprvtXvBMAMnwCLcB/s640/DSC_0055.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="23rd November 2016" href="http://delhiiyf.blogspot.com/2016/11/event-srestha-camp-to-vrindavan-braja.html" itemprop="url">


  <div class="top ribbon-piece">Nov</div>
  <div class="bottom ribbon-piece">23</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2016/11/event-srestha-camp-to-vrindavan-braja.html" rel="bookmark" itemprop="url">Event: Srestha Camp to Vrindavan, Braja</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Srestha&nbsp;Camp to Vrindavan, Braja

Date - 20th-21st November 2016

Venue - Braja

Participants - 15 Students (CA)

Nidhi Van</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="7036696949973662244"><span id="comment-count-holder_703669694997366224430" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I20_1495077597429" name="I20_1495077597429" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2016%2F11%2Fevent-srestha-camp-to-vrindavan-braja.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I20_1495077597429&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=41455137" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="8732639683549061505">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://4.bp.blogspot.com/-nfhBl46RJIY/WDU256lmiQI/AAAAAAAAPns/KDejDDPSTX0zM9CoREZpQgofmZKaF_-wwCLcB/s200-p/DSC_0165.JPG'); width: 200px; height: 200px;" href="https://4.bp.blogspot.com/-nfhBl46RJIY/WDU256lmiQI/AAAAAAAAPns/KDejDDPSTX0zM9CoREZpQgofmZKaF_-wwCLcB/s640/DSC_0165.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="20th November 2016" href="http://delhiiyf.blogspot.com/2016/11/event-umang-festival-of-joy-auditorium.html" itemprop="url">


  <div class="top ribbon-piece">Nov</div>
  <div class="bottom ribbon-piece">20</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2016/11/event-umang-festival-of-joy-auditorium.html" rel="bookmark" itemprop="url">Event: Umang - The festival of Joy, Auditorium, ISKCON Delhi</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Umang - The festival of Joy, Auditorium, ISKCON Delhi

Date - 19th November 2016

Venue - Auditorium, ISKCON Delhi

Theme - Our Life on two Wheels

Participants - Over 450</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="8732639683549061505"><span id="comment-count-holder_873263968354906150531" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I21_1495077597442" name="I21_1495077597442" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2016%2F11%2Fevent-umang-festival-of-joy-auditorium.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I21_1495077597442&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=58911940" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>2</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="9002198011553865422">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://2.bp.blogspot.com/-hcAHsq1HDIw/WCKy1Oa15tI/AAAAAAAAPgE/aQmKrcuxFpcE8ZvP0pmGvufFWcxaLqC5wCK4B/s200-p/WhatsApp%2BImage%2B2016-11-08%2Bat%2B9.07.36%2BPM%2B%25281%2529.jpeg'); width: 200px; height: 200px;" href="https://2.bp.blogspot.com/-hcAHsq1HDIw/WCKy1Oa15tI/AAAAAAAAPgE/aQmKrcuxFpcE8ZvP0pmGvufFWcxaLqC5wCK4B/s640/WhatsApp%2BImage%2B2016-11-08%2Bat%2B9.07.36%2BPM%2B%25281%2529.jpeg"></a>


    <div class="story">
      

<a class="ribbon date small" title="9th November 2016" href="http://delhiiyf.blogspot.com/2016/11/event-of-mind-control-seminar.html" itemprop="url">


  <div class="top ribbon-piece">Nov</div>
  <div class="bottom ribbon-piece">9</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2016/11/event-of-mind-control-seminar.html" rel="bookmark" itemprop="url">Event: CUSB seminar, Central University of South Bihar, Bihar</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event:&nbsp;CUSB seminar,&nbsp;Central University of South Bihar, Bihar

Date- 8th November 2016

Theme- Art of Mind Control

Venue- Central University, Bihar

Participants- More than 100</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="9002198011553865422"><span id="comment-count-holder_900219801155386542232" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I22_1495077597462" name="I22_1495077597462" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2016%2F11%2Fevent-of-mind-control-seminar.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I22_1495077597462&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=36323692" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="1222184519770633864">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://3.bp.blogspot.com/-MknsRxUsS5I/WCRpkbbj7SI/AAAAAAAAPiM/jc_w0UlB95MKdirPKzCwjJ3_zndFvzDkwCK4B/s200-p/DSC_3157.JPG'); width: 200px; height: 200px;" href="https://3.bp.blogspot.com/-MknsRxUsS5I/WCRpkbbj7SI/AAAAAAAAPiM/jc_w0UlB95MKdirPKzCwjJ3_zndFvzDkwCK4B/s640/DSC_3157.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="8th November 2016" href="http://delhiiyf.blogspot.com/2016/11/event-ims-seminar-ims-college-ghaziabad.html" itemprop="url">


  <div class="top ribbon-piece">Nov</div>
  <div class="bottom ribbon-piece">8</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2016/11/event-ims-seminar-ims-college-ghaziabad.html" rel="bookmark" itemprop="url">Event: IMS Seminar, IMS College, Ghaziabad</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: IMS Seminar, IMS College, Ghaziabad

Date-&nbsp;7th Nov 2016

Theme-&nbsp;Faithology

Venue- Institute of Management&nbsp;Studies, Ghaziabad

Participants- Over 150 (PGDM students)</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="1222184519770633864"><span id="comment-count-holder_122218451977063386433" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I23_1495077597478" name="I23_1495077597478" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2016%2F11%2Fevent-ims-seminar-ims-college-ghaziabad.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I23_1495077597478&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=72006703" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div><div class="item hentry  has-thumbnail" itemscope="" itemtype="http://schema.org/BlogPosting" data-id="6747213705275771813">
  

  

  
    

<a class="thumbnail" style="background-image: url('https://3.bp.blogspot.com/-aIIJb2RcE4c/WCwJpuNuXvI/AAAAAAAAPkk/9_RvO1hrk-Y-pZlUKyQCgXYD8tNEwpJcQCK4B/s200-p/IMG_1576.JPG'); width: 200px; height: 200px;" href="https://3.bp.blogspot.com/-aIIJb2RcE4c/WCwJpuNuXvI/AAAAAAAAPkk/9_RvO1hrk-Y-pZlUKyQCgXYD8tNEwpJcQCK4B/s640/IMG_1576.JPG"></a>


    <div class="story">
      

<a class="ribbon date small" title="7th November 2016" href="http://delhiiyf.blogspot.com/2016/11/event-jia-sarai-camp-vrindavan.html" itemprop="url">


  <div class="top ribbon-piece">Nov</div>
  <div class="bottom ribbon-piece">7</div>
  <div class="tail">
    <div class="left ribbon-piece"></div>
    <div class="right ribbon-piece"></div>
  </div>

</a>



      
<h3 class="title entry-title" itemprop="name">
  




  
  
  <a href="http://delhiiyf.blogspot.com/2016/11/event-jia-sarai-camp-vrindavan.html" rel="bookmark" itemprop="url">Event: Jia Sarai Camp, Vrindavan</a>
  
</h3>

      <div class="summary entry-summary" itemprop="description">Event: Jia Sarai Camp, Vrindavan

Date - 5-6th Nov 2016

Venue - Vrindavan

Participants - 13 students</div>
    </div>
  

  


  
<span class="bubble  comments-count " title="0 comments">
  <span class="bubble-content plus-comment-count" data-itemid="6747213705275771813"><span id="comment-count-holder_674721370527577181334" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: text-top; display: inline-block; width: 8px; height: 14px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 8px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 14px;" tabindex="0" vspace="0" width="100%" id="I24_1495077597490" name="I24_1495077597490" src="https://apis.google.com/u/0/_/widget/render/commentcount?usegapi=1&amp;count_only=true&amp;query=http%3A%2F%2Fdelhiiyf.blogspot.com%2F2016%2F11%2Fevent-jia-sarai-camp-vrindavan.html&amp;preexisting_count=0&amp;font-family=%22Helvetica%20Neue%20Light%22%2C%20HelveticaNeue-Light%2C%20%22Helvetica%20Neue%22%2C%20Helvetica%2C%20Arial%2C%20sans-serif&amp;font-size=12px&amp;color=%23ffffff&amp;hl=en&amp;origin=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;gsrc=3p&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.ddpHWyA01nc.O%2Fm%3D__features__%2Fam%3DEQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCOpVvfUQwS0YWWiTNPlQbo2wZQgjA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conclick%2Conready&amp;id=I24_1495077597490&amp;parent=http%3A%2F%2Fdelhiiyf.blogspot.in&amp;pfname=&amp;rpctoken=15754150" data-gapiattached="true" title="<style>body {background-color: transparent;}</style><style>a, span {font-family:'Helvetica Neue Light','HelveticaNeue-Light','\22 Helvetica Neue','Helvetica','Arial','sans-serif';font-size: 12px;color: #ffffff;display: block;}</style>
  <script>
    function reportClick() {
      var iframer = window.iframes.iframer;
      if (iframer.onclick) {
        iframer.onclick();
      }
    }
  </script>
  <div id=&quot;widget_bounds&quot; ><span>1</span></div>"></iframe></span></span>
  <span class="bubble-tail"></span>
</span>



</div></div>
  </div>
  
</div>
    @endsection