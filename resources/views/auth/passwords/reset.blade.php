@extends('layouts.app')

@section('content')

@if (session('status'))
  <div class="notification is-success">
    {{ session('status') }}
  </div>
@endif

<section class="hero is-warning is-bold is-fullheight" d>
    <div class="hero-body">
      <div class="container">
        <div class="column is-4 is-offset-4">
          <div class="box">
            <figure class="avatar">
              <header class="card-header m-b-15">
                <h2 class="card-header-title is-size-5 is-centered">
                  Reset Your Password
                </h2>
                <div class="card-header-icon">
                  <span class="icon">
                    <i class="fa fa-angle-double-right card-header-icon" aria-hidden="true"></i>
                  </span>
                </div>
              </header>
            </figure>
            <form action=" {{route('password.request')}} " method="POST" role="form">
              @csrf 
              <input type="hidden" name="token" value="{{ $token }}">
              <div class="field">
                <label for="password" class="label">Email Address</label>
                <div class="control">
                  <input class="input is-medium {{ $errors->has('email') ? 'is-danger' : ' '}} " type="email" autofocus="" name="email" id="email" value="{{ old('email') }}" required>
                </div>
                @if ($errors->has('email'))
                   <p class="help is-danger"> {{ $errors->first('email') }}</p>
                @endif
              </div>
  
              <div class="field">
                <label for="password" class="label">Password</label>
                <div class="control">
                  <input class="input is-medium {{ $errors->has('password') ? 'is-danger': ' ' }} " type="password" name="password" id="password" required>
                </div>
                @if ($errors->has('password'))
                  <p class="help is-danger"> {{ $errors->first('password') }}</p>
                @endif
              </div>
  
              <div class="field">
                  <label for="password_confirmation" class="label">Password Confirmation</label>
                  <div class="control">
                    <input class="input is-medium {{ $errors->has('password_confirmation') ? 'is-danger': ' ' }} " type="password_confirmation" name="password_confirmation" id="password" required>
                  </div>
                  @if ($errors->has('password_confirmation'))
                    <p class="help is-danger"> {{ $errors->first('password_confirmation') }}</p>
                  @endif
                </div>
  
              <div class="field m-t-25">
              <button class="button is-block is-fullwidth is-info is-large is-outlined  ">Reset Password</button>
            </form>
          </div>
        </div>
        <p class="has-text-grey has-text-centered ">
            <a href=" {{ route('login') }}">Already Have An Account</a> &nbsp;·&nbsp;
          </p>
      </div>
    </div>
  </section>  <!-- end of card content -->
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
