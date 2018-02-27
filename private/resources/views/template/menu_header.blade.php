  <style type="text/css">
    i.icon-grey-darken-3 {
      color : #424242;
    }

    i.icon-transparent {
      background-color: #ffffff;
      opacity: 0;
    }

  li.inline-block {
    display: inline-block;
    cursor: pointer;
  }

  </style>
    <nav class="navbar-fixed hard-fixed white">
    
      <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down">
          <li><a id="sidebarCollapse"><i id="menu_icon" class="material-icons icon-grey-darken-3">menu</i></a></li>
          <li><a href="#!" class="brand-logo" style="color:#424242; padding-left: 15px; padding-right: 15px;">Logo</a></li>
        </ul>
        <ul class="left hide-on-large-only">
          <li><a href="#!"><i id="menu_icon" class="material-icons icon-grey-darken-3">menu</i></a></li>
          <li><a href="#!" class="brand-logo" style="color:#424242;">Logo</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a><i class="material-icons icon-grey-darken-3">settings</i></a></li>
          <li><a href="{{route('user.signout')}}"><i class="material-icons icon-grey-darken-3">power_settings_new</i></a></li>
          <li><i id="menu_icon" class="material-icons icon-grey-darken-3 icon-transparent">menu</i></li>
        </ul>
      </div>
    @include('template/menu_sidebar')
    </nav>

    




