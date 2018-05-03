@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-40">
    <div class="column">
        <h2 class="title"><i class="fa fa-user-plus">Create New User</i></h2>
    </div>
  </div>
  <hr>
  <form action="{{ route('users.store') }} " method="POST">
      {{ csrf_field() }}
      <div class="field">
          <label class="label">Name</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" placeholder="User Name" name="name"  id="name" required>
            <span class="icon is-small is-left">
                <i class="fa fa-user-circle"></i>
            </span>
          </div>
        </div>
        
        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="hello@example.com" name="email" id="email" required>
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
        </div>
        
        <div class="field">
            <label class="label">Password</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" name="password" id="password" v-bind:disabled="auto_password" placeholder="User Password" >
              <!-- if autopassword is true, it will be disabled, the default is true -->
              <span class="icon is-small is-left">
                  <i class="fa fa-asterisk"></i>
                </span>
              <b-checkbox name="auto_generate" v-model="auto_password" class="m-t-10" >Auto Generate Password </b-checkbox>
            </div>
        </div>

        <div class="field is-grouped">
          <div class="control  m-t-15">
            <button class="button is-link">Submit</button>
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
  el: '#app',
  data:{
    message: 'Hello World',
    auto_password: true
  },
  

});
</script>

@endsection
