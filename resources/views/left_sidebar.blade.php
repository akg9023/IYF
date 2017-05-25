<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    @if(!Auth::guest())
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('/user/'.Auth::user()->id.'/profile_pic')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
      <?php $name= Auth::user()->firstname." ".Auth::user()->lastname or Auth::user()->surname ?>
        <p>{{$name}}</p>
        <!-- Status-->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    @endif
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <?php $is_guest=Auth::guest() ?>

    <ul class="sidebar-menu">
    @if($is_guest)

      <li class="header">Main Navigation</li>

    @else

      <li style="white-space:nowrap;" class="treeview header">
        <span>Site Navigation</span>
      </li>
      <li class="treeview">
        <a href="#"><span>Expand</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i><i class="fa fa-angle-left pull-right"></i>
          </span></a> 
        <ul class="treeview-menu">

    @endif

      <!-- Optionally, you can add icons to the links -->
      <!-- -------Ajax Implementation------- -->
      <!-- <li class="active"><a class="aboutus" href="javascript:void(0)" onclick="load_content('{{asset('/')}}',this.parent)"><i class="glyphicon glyphicon-fire"></i> <span>About Us</span></a></li> -->

      <li class="active"><a class="aboutus" href="{{asset('/')}}"><i class="glyphicon glyphicon-fire"></i> <span>About Us</span></a></li>

      @if($is_guest)
      <li><a href="{{asset('/disqus')}}"><i class="fa fa-commenting-o"></i> <span>Disqus</span><span class="label label-success pull-right-container">2</span></a></li>
      @endif
      <li><a href="{{asset('/displaycenters')}}"><i class="fa fa-institution"></i> <span>Our Centers</span></a></li>
      <li><a href="{{asset('/events')}}"><i class="fa fa-calendar-check-o"></i> <span>Events</span></a></li>
      <li><a href="{{asset('/gall')}}"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>
      <!-- <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Link in level 2</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li> -->
      <li><a href="#zbwid-2bf24716"><i class="fa fa-user-secret"></i> <span>Contact Us</span></a></li>
      @if(!$is_guest)
        </ul>
        </li>
      @endif
    </ul>
    @if(!$is_guest)
    <ul class="sidebar-menu">
      <li class="header">Tool Navigation</li>
      <!-- Optionally, you can add icons to the links -->
      @if(Auth::user()->is_admin)
      <li class="active"><a href="{{asset('/home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      @endif
      
      @if(!$is_guest)
      <li><a href="{{asset('/disqus')}}"><i class="fa fa-commenting-o"></i> <span>Disqus</span><span class="label label-success pull-right-container">2</span></a></li>
      @endif
      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Updating Profiles</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{asset('/user/edit_profile')}}">My Profile</a></li>

          @if(Auth::user()->is_admin)
          <li><a href="{{asset('/admin/edit_database')}}">User Profile</a></li>
          @endif

        </ul>
      </li>

<!-- ------------TO BE ADDED LATER------------- -->
      <!-- <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Connect</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{asset('/user/connect')}}">My Family</a></li>
          <li><a href="{{asset('/user/connect')}}">Spiritual Family</a></li>
        </ul>
      </li> -->

      <!-- <li><a href="#"><i class="glyphicon glyphicon-scale"></i> <span>Permission Level</span></a></li> -->
      
      <!-- <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Task Manager</span></a></li> -->

      @if(!Auth::user()->is_admin)
      <li><a href="{{asset('/send_emails')}}"><i class="fa fa-heartbeat"></i><span>Email Fun</span></a></li>
      @endif



      @if(Auth::user()->is_admin)

      <li class="treeview">
        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Forum Manager</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
      <li><a href="{{asset('/admin/displaycenteraftlogin')}} ">Manage Centers</a></li>
          <li><a href="{{asset('/admin/addevents')}}">Manage Events</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-heartbeat"></i> <span>Care System</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{asset('/send_sms')}}">SMS Fun</a></li>
          <li><a href="{{asset('/send_emails')}}">Email Fun</a></li>
          <li><a href="{{asset('/call_user')}}">Calling Fun</a></li>
        </ul>
      </li>
      @endif

      <li><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i> <span>EASY</span></a></li>
      
    </ul>
    @endif
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>