<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark bg-primary">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-th"></i></a>
    </li>

  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fa fa-bell-o"></i>
        <span class="badge badge-danger navbar-badge">1</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">3 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" style="color:#212529 !important;">
          <i class="fa fa-user mr-2"></i> 3 user review
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" style="color:#212529 !important;">
          <i class="fa fa-university mr-2"></i> 3 university review
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" style="color:#212529 !important;">
          <i class="fa fa-book mr-2"></i> 3 course review
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer" style="color:#212529 !important;">See All</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fa">{{auth()->user()->name!=null ? auth()->user()->name : "Administrator"}}</i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">Account Setting</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" style="color:#212529 !important;">
          <i class="fa fa-cog mr-2"></i> Setting
        </a>
        <a href="#" class="dropdown-item" style="color:#212529 !important;">
          <i class="fa fa-key mr-2"></i> Change Password
        </a>
        <a href="#" class="dropdown-item" style="color:#212529 !important;" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
          <i class="fa fa-sign-out mr-2"></i> Logout
        </a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" style="padding-left:0px !important; padding-right:0px !important;">
        <i class="fa fa-angle-down"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-header">Account Setting</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item" style="color:#212529 !important;">
          <i class="fa fa-cog mr-2"></i> Setting
        </a>
        <a href="#" class="dropdown-item" style="color:#212529 !important;">
          <i class="fa fa-key mr-2"></i> Change Password
        </a>
        <a href="#" class="dropdown-item" style="color:#212529 !important;"  onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
          <i class="fa fa-sign-out mr-2"></i> Logout
        </a>
      </div>
    </li>

    <div class="user-panel mt-0 pb-0 mb-0 d-flex">
      <div class="image">
        <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
      </div>
    </div>
  </ul>

  <!-- Right navbar links -->
  @if(count(config('panel.available_languages', [])) > 1)
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        {{ strtoupper(app()->getLocale()) }}
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        @foreach(config('panel.available_languages') as $langLocale => $langName)
        <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a> @endforeach
      </div>
    </li>
  </ul>
  @endif
</nav>
<!-- /.navbar -->
