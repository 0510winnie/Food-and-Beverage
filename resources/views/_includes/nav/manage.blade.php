
<link rel="stylesheet" href="/bulma-admin-dashboard-template/dist/main.css">


{{-- Side menu  --}}


<div class="wrapper">
  <div class="columns">
    <aside class="column is-2 aside m-l-35 m-t-40">
      <nav class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a class="is-active" href="{{ route('manage.dashboard') }}"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
        </ul>
        <p class="menu-label">
          Administration
        </p>
        <ul class="menu-list">
          <li><a href="/bulma-admin-dashboard-template/forms.html"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Forms</a></li>
          <li><a href="/bulma-admin-dashboard-template/ui-elements.html"><span class="icon is-small"><i class="fa fa-desktop"></i></span> UI Elements</a></li>
          <li><a href="/bulma-admin-dashboard-template/tables.html"><span class="icon is-small"><i class="fa fa-table"></i></span> Tables</a></li>
          <li><a href="/bulma-admin-dashboard-template/presentations.html"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Presentations</a></li>

          <li>
            <a class=""><i class="fa fa-cog"></i> Manage</a>
            <ul>
              <li><a href=" {{ route('users.index') }}" >Users</a></li>
              <li><a>Roles</a></li>
              <li><a>Permission</a></li>
            </ul>
          </li>
        </ul>
        <p class="menu-label">
          Live On
        </p>
        <ul class="menu-list">
          <li><a><span class="icon is-small"><i class="fa fa-bug"></i></span> Additional Pages</a></li>
          <li><a><span class="icon is-small"><i class="fa fa-windows"></i></span> Extras</a></li>
          <li><a><span class="icon is-small"><i class="fa fa-laptop"></i></span> Landing Page</a></li>
        </ul>
      </nav>
    </aside>

    

<script src="/bulma-admin-dashboard-template/dist/build.js"></script>









{{-- <div class="wrapper">
    <div class="side-menu ">
        <div class="columns">
            <aside class="column is-2 aside side-menu-border">
              <nav class="menu">
                <p class="menu-label">
                  General
                </p>
                <ul class="menu-list">
                  <li><a class="is-active" href=" {{ route('manage.dashboard') }} "><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
                </ul>
                <p class="menu-label">
                  Administration
                </p>
                <ul class="menu-list">
                  <li><a href="/bulma-admin-dashboard-template/forms.html"><span class="icon is-small"><i class="fa fa-pencil-square-o"></i></span> Forms</a></li>
                  <li><a href="/bulma-admin-dashboard-template/ui-elements.html"><span class="icon is-small"><i class="fa fa-desktop"></i></span> UI Elements</a></li>
                  <li><a href="/bulma-admin-dashboard-template/tables.html"><span class="icon is-small"><i class="fa fa-table"></i></span> Tables</a></li>
                  <li><a href="/bulma-admin-dashboard-template/presentations.html"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Presentations</a></li>
      
                  <li>
                    <a class=""><i class="fa fa-cog"></i> Manage</a>
                    <ul>
                      <li><a href=" {{ route('users.index') }} ">Users</a></li>
                      <li><a>Roles</a></li>
                      <li><a>Permissions</a></li>
                    </ul>
                  </li>
                </ul>
                <p class="menu-label">
                  Live On
                </p>
                <ul class="menu-list">
                  <li><a><span class="icon is-small"><i class="fa fa-bug"></i></span> Additional Pages</a></li>
                  <li><a><span class="icon is-small"><i class="fa fa-windows"></i></span> Extras</a></li>
                  <li><a><span class="icon is-small"><i class="fa fa-laptop"></i></span> Landing Page</a></li>
                </ul>
              </nav>
            </aside>
      
    </div>
  </div>
</div> --}}