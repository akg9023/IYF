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
    @if(Auth::guest())
    <ul class="sidebar-menu">
      <li class="header">Main Navigation</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="{{asset('/')}}"><i class="glyphicon glyphicon-fire"></i> <span>About Us</span></a></li>
      <li><a href="#"><i class="fa fa-institution"></i> <span>Our Centers</span></a></li>
      <li><a href="#"><i class="fa fa-calendar-check-o"></i> <span>Events</span></a></li>
      <li><a href="#"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>
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
    </ul>
    @else
    <ul class="sidebar-menu">
      <li class="header">Main Navigation</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="{{asset('/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-newspaper-o"></i> <span>Updating Profiles</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{asset('/user/edit_profile')}}">My Profile</a></li>
          <li><a href="{{asset('/admin/edit_database')}}">User Profile</a></li>
        </ul>
      </li>
      
      <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Task Manager</span></a></li>
      <li><a href="#"><i class="glyphicon glyphicon-scale"></i> <span>Permission Level</span></a></li>

      <li><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i> <span>EASY</span></a></li>

      <li class="treeview">
        <a href="#"><i class="fa fa-heartbeat"></i> <span>Care System</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">SMS Fun</a></li>
          <li><a href="#">Email Fun</a></li>
          <li><a href="#">Calling Fun</a></li>
        </ul>
      </li>
    </ul>
    @endif
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>