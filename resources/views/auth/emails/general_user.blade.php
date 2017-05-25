
<div>
<a href="{{url('login')}}">
{{--asset('/bower_components/AdminLTE/dist/img/iyf_logo.jpg')--}}
<img src="<?php echo $message->embed($pathToImage); ?>" alt="IYF KOL">
</a>
</div>

<div>
<p> Hi <b>{{$user->firstname or ''}}, </b></p>
<br><br>
<p>Greetings!, {!!$messagebody!!}</p>
<br><br>
<p>Regards,<br> {{$from->firstname.$from->lastname.$from->surname}},<br> {{$from->email}}&nbsp;, <br> A Youth of <b>IYF KOL</b></p>

</div>
