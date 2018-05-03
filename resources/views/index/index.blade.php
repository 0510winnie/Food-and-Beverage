@extends('layouts.app')

@section('content')

<section class="hero is-fullheight is-default is-bold">
    <div class="hero-head">
      
    </div>
    <!-- nav bar & header image -->
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="columns is-vcentered">
            <div class="column is-8">
              <figure class="image is-4by3 m-t-25">
                <img src="{{asset('/images/1.png')}}" alt="header_img">
              </figure>
            </div>
            <div class="column is-3 is-offset-1">
              <h1 class="title is-1 header_title">
                Your Ultimate
              </h1>
              <h2 class="subtitle is-5 m-t-10 header_subtitle">
                Food & Beverage Guide
              </h2>
              <br>
              <p class="has-text-centered">
                <a class="button is-medium is-primary is-outlined" href="{{route('register')}}">
                  Register
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
  <!-- end of nav and header image -->

  <!-- middle columns for images -->
  <section class="container m-t-100">
      <div class="columns features">
        <div class="column is-4">
          <div class="card is-shady">
            <div class="card-image has-text-centered">
              <figure class="image is-3by2">
                <img src=" {{asset('images/7.jpeg')}}">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>Tristique senectus et netus et. </h4>
                <p>Purus semper eget duis at tellus at urna condimentum mattis. Non blandit massa enim nec. Integer enim neque volutpat ac tincidunt vitae semper quis. Accumsan tortor posuere ac ut consequat semper viverra nam.</p>
                <p><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card is-shady">
            <div class="card-image has-text-centered">
                <figure class="image is-3by2">
                    <img src=" {{asset('images/8.jpeg')}}">
                  </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>Tempor orci dapibus ultrices in.</h4>
                <p>Ut venenatis tellus in metus vulputate. Amet consectetur adipiscing elit pellentesque. Sed arcu non odio euismod lacinia at quis risus. Faucibus turpis in eu mi bibendum neque egestas cmonsu songue. Phasellus vestibulum lorem sed risus.</p>
                <p><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-4">
          <div class="card is-shady">
            <div class="card-image has-text-centered">
                <figure class="image is-3by2">
                    <img src=" {{asset('images/2.jpeg')}}">
                  </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4> Leo integer malesuada nunc vel risus.  </h4>
                <p>Imperdiet dui accumsan sit amet nulla facilisi morbi. Fusce ut placerat orci nulla pellentesque dignissim enim. Libero id faucibus nisl tincidunt eget nullam. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
                <p><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- end of middle columns for images -->

      <div class="hero-foot">
        <div class="container">
          <div class="tabs is-centered">
            <ul>
              <li><a>And this at the bottom</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </body>
  </html>

@endsection

@section('scripts')
<script>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</script>
@endsection