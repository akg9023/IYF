
<div>
<a href="{{url('login')}}">
{{--asset('/bower_components/AdminLTE/dist/img/iyf_logo.jpg')--}}
<img src="<?php echo $message->embed($pathToImage); ?>" alt="IYF KOL">
</a>
</div>

<div>
<p> Hi <b>{{$user->firstname}}, </b></p>
<br><br>
<p>Greetings!, {!!$messagebody!!}</p>
<br><br>
<p>Regards,<br> {{$from->firstname.$from->lastname.$from->surname}},<br> {{$from->email}}&nbsp;, <br> Admin at IYF KOL</p>

</div>
