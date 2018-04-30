<nav class="navbar has-shadow">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io" >
      <img src="{{ asset('images/logo.png') }}" alt="WhatToDrink_logo" width="112" class="m-l-150">
    </a>
    <div class="navbar-burger burger m-r-80" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
        <div style="font-size:1em; color:LIGHTSALMON" class="m-l-40 m-t-25">
            <i class="fa fa-map-pin fa-xs"></i>
          </div>
      <a class="navbar-item " href="https://bulma.io/">Home</a>
          <div style="font-size:1em; color:CORAL" class="m-l-40 m-t-25">
              <i class="fa fa-heart"></i>
            </div>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-3">Top 10</a>
         <div style="font-size:1em; color:GOLD" class="m-l-40 m-t-25">
            <i class="fa fa-cube fa-xs"></i>
          </div>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-23">About</a>
          <div style="font-size:1em; color:DARKORANGE" class="m-l-40 m-t-25">
              <i class="fa fa-paper-plane fa-xs"></i>
            </div>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-3">Contact</a>
      
    </div>

    <div class="navbar-end">
      @if (Auth::guest())
        <a href="{{ route('register')}}" class="navbar-item is-tab is-hidden-mobile m-r-55">Register</a>
        <a href="{{ route('login')}}" class="navbar-item is-tab is-hidden-mobile m-r-55">Login</a>
      @else
        <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link m-r-130">Hi, {{ Auth::user()->name }} </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="/documentation/overview/start/">
            <span class="icon m-r-5"><i class=" fa fa-fw fa-bell"></i></span>
            Notifications
          </a>
          <a class="navbar-item" href=" {{ route('manage.dashboard') }} ">
            <span class="icon m-r-5"><i class=" fa fa-fw fa-cog"></i></span>
            Dashboard
          </a>
          <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
            <span class="icon m-r-5"><i class=" fa fa-fw fa-user-circle-o"></i></span>
            Profile
          </a>
          <a class="navbar-item" href=" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="icon m-r-5"><i class=" fa fa-fw fa-sign-out"></i></span>
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
          </form>
        </div>
      </div>
      @endif
  </div>
</nav>
