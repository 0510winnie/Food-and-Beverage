@extends('layouts.manage')
@section('content')
<div class="flex-container">
    <div class="columns m-t-40">
      <div class="column">
          <h2 class="title"><i class="fa fa-info-circle"> User Details</i></h2>
          <h4 class="subtitle m-t-10"><i class="fa fa-user"> {{ $user->name }}</i></h4>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{ route('users.edit', $user->id) }}" class="button is-primary is-pulled-right m-t-10">Edit User</a>
      </div>
    </div>
    <hr>

    <div class="columns">
      <div class="column">
          <div class="field">
              <label class="label" for="name">Name</label>
              <pre> {{$user->name}} </pre>
              <div class="control ">
              </div>
          </div>

          <div class="field m-t-20">
              <label class="label" for="email">Email</label>
              <pre> {{$user->email}} </pre>
              <div class="control">
              </div>
          </div>

          <div class="field m-t-20">
              <label class="label" for="password">Password</label>
              <pre> {{$user->password}} </pre>
              <div class="control">
              </div>
          </div>
      </div>
    </div>
     
    <div class="field m-t-20">
        <a href="{{route('users.index') }}" class="button is-primary">View All Users</a>
      </div>

        
@endsection