<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-circle-outline menu-icon"></i>
            <span class="menu-title">Categories</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('category.create')}}">Add New</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Manage Category</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
            <i class="mdi mdi-circle-outline menu-icon"></i>
            <span class="menu-title">Subcategories</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic1">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('subcategory.create')}}">Add New</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('subcategory.index')}}">Manage Subcategory</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
            <i class="mdi mdi-circle-outline menu-icon"></i>
            <span class="menu-title">Childcategories</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('childcategory.create')}}">Add New</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('childcategory.index')}}">Manage Childcategory</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.allads')}}">
            <i class="mdi mdi-account-multiple menu-icon"></i>
            <span class="menu-title"> Advertisements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.all.reported.ads')}}">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Reported Ads</span>
          </a>
        </li>
      </ul>
    </nav>