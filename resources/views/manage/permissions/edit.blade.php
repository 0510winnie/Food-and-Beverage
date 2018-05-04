@extends('layouts.manage')

@section('content')
<div class="main flex-container">
  <div class="columns m-t-40">
    <div class="column">
        <h2 class="title"><i class="fa fa-user-plus"> Edit Permission</i></h2>
    </div>
  </div>
  <hr>
  <form action="{{ route('permissions.update', $permission->id) }} " method="POST">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
      <div class="field">
          <label class="label">Display Name</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" name="display_name"  id="display_name" value="{{$permission->display_name }}">
            <span class="icon is-small is-left">
                <i class="fa fa-user-circle"></i>
            </span>
          </div>
        </div>
        
        <div class="field">
          <label class="label">Description</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" name="description" id="description" value="{{$permission->description }}">
            <span class="icon is-small is-left">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control  m-t-15">
            <button class="button is-info is-outlined">Edit</button>
          </div>
          <div class="control m-t-15">
            <button class="button is-outlined">Cancel</button>
          </div>
        </div>
  </form>
</div> <!-- end of flex container -->
@endsection