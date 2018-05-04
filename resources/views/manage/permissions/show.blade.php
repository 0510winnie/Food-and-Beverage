@extends('layouts.manage')
@section('content')
<div class="main">
    <div class="columns m-t-40">
      <div class="column">
          <h2 class="title"><i class="fa fa-info-circle"> Permission Details</i></h2>
          <h4 class="subtitle m-t-10"><i class="fa fa-check-circle m-l-10"> {{ $permission->display_name }}</i></h4>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{ route('permissions.edit', $permission->id) }}" class="button is-primary is-pulled-right m-t-10">Edit Permission</a>
      </div>
    </div>
    <hr>

    <div class="columns">
      <div class="column">
          <div class="field">
              <label class="label" for="display_name">Name</label>
              <pre> {{$permission->display_name}} </pre>
              <div class="control ">
              </div>
          </div>

          <div class="field m-t-20">
              <label class="label" for="name">Slug</label>
              <pre> {{$permission->name}} </pre>
              <div class="control">
              </div>
          </div>

          <div class="field m-t-20">
              <label class="label" for="created_at">Date Created</label>
              <pre> {{$permission->created_at}} </pre>
              <div class="control">
              </div>
          </div>

          <div class="field m-t-20">
              <label class="label" for="description">Description</label>
              <pre> {{$permission->description}} </pre>
              <div class="control">
              </div>
          </div>

      </div>
    </div>
     
    <div class="field m-t-20">
        <a href="{{route('permissions.index') }}" class="button is-primary">View All Permissions</a>
      </div>

        
@endsection