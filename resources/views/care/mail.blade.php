@extends('layouts.admin_template')

@section('initialize')
<?php
    $page_title="Mailing";
    $page_desc="Connect through mail";
?>
@stop

@section('content')



<div class="box box-info">
    <div class="box-header">
      <i class="fa fa-envelope"></i>

      <h3 class="box-title">Quick Email</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
      <!-- /. tools -->
    </div>
    <div class="box-body">
      <form id="email_form" action="{{url('/user/mail')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
        <div class="form-group">
          <input type="email" class="form-control" name="emailto" placeholder="Email to:">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" placeholder="Subject">
        </div>
        <div>
          <textarea name="message" class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
      </form>
    </div>
    <div class="box-footer clearfix">
    
      <span class="text-orange" style="float:left; font-size:85%;">*Ignore including greetings and signatures</span>

      <button type="submit" class="pull-right btn btn-default" id="sendEmail" form="email_form">Send
        <i class="fa fa-arrow-circle-right"></i></button>
    </div>
</div>

@push('scripts')
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endpush




<!-- --------------------------------------To Be Made later----------------------------------------------- -->
{{--<div class="row">
    <div class="col-md-3">
      <a href="mailbox.html" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Folders</h3>

          <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
              <span class="label label-primary pull-right">12</span></a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
            <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
            <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
            </li>
            <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /. box -->
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Labels</h3>

          <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Compose New Message</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="form-group">
            <input name="" id="" class="form-control" placeholder="To:">
          </div>
          <div class="form-group">
            <input name="" id="" class="form-control" placeholder="Subject:">
          </div>
          <div class="form-group">
                <textarea id="compose-textarea" class="form-control" style="height: 300px">
                </textarea>
          </div>
          <div class="form-group">
            <div class="btn btn-default btn-file">
              <i class="fa fa-paperclip"></i> Attachment
              <input name="" id="" type="file" name="attachment">
            </div>
            <p class="help-block">Max. 32MB</p>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-right">
            <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
          </div>
          <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
        </div>
        <!-- /.box-footer -->
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
</div>
    <!-- /.row -->--}}
@endsection
