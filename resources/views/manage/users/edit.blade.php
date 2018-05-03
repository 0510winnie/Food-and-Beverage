@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-40">
    <div class="column">
        <h2 class="title"><i class="fa fa-user-plus"> Edit User</i></h2>
    </div>
  </div>
  <hr>
  <form action="{{ route('users.update', $user->id) }} " method="POST">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
      <div class="field">
          <label class="label">Name</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" name="name"  id="name" value="{{$user->name }}">
            <span class="icon is-small is-left">
                <i class="fa fa-user-circle"></i>
            </span>
          </div>
        </div>
        
        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" name="email" id="email" value="{{$user->email }}">
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control  m-t-15">
            <button class="button is-link">Edit</button>
          </div>
          <div class="control m-t-15">
            <button class="button is-outlined">Cancel</button>
          </div>
        </div>
  </form>
</div> <!-- end of flex container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el:'#app', 
      data: {
        auto_password: true
      }
    });
  </script>
@endsection
