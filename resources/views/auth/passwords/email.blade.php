@extends('layouts.app')

@section('content')

  @if (session('status'))
    <div class="notification is-success">
       {{ session('status') }}
    </div>
  @endif
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<!-- Bulma Version 0.6.0 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="../css/login.css">


<section class="hero is-warning is-bold is-fullheight" d>
  <div class="hero-body">
    <div class="container">
      <div class="column is-4 is-offset-4">
        <div class="box">
          <figure class="avatar">
            <header class="card-header m-b-15">
              <h2 class="card-header-title is-size-5 is-centered">
                Forgot Password ?
              </h2>
              <div class="card-header-icon">
                <span class="icon">
                  <i class="fa fa-angle-double-right card-header-icon" aria-hidden="true"></i>
                </span>
              </div>
            </header>
          </figure>
          <form action=" {{route('password.email')}} " method="POST" role="form">
            @csrf 
            <div class="field">
              <label for="password" class="label">Email Address</label>
              <div class="control">
              <input class="input is-medium {{ $errors->has('email') ? 'is-danger' : ' '}} " type="email" placeholder="name@example.com" autofocus="" name="email" id="email" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                 <p class="help is-danger"> {{ $errors->first('email') }}</p>
              @endif
            </div>

        

            <div class="has-text-centered">
              <button class="button is-rounded is-info is-large is-outlined has-text-centered m-t-15 ">Send Reset Link</button>
             </div> 
          </form>
        </div>
        <p class="has-text-grey has-text-centered">
          <a href=" {{ route('login') }}">Back to Login</a> &nbsp;·&nbsp;
          <a href=" {{ route('register') }} "> Sign Up</a> &nbsp;·&nbsp;
        </p>
      </div>
    </div>
  </div>
</section> 
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
