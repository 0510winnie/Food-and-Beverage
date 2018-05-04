@extends('layouts.manage')

@section('content')
<main class="column m-t-40 m-r-15">
  <nav class="breadcrumb is-small" aria-label="breadcrumbs">
    <ul>
      <li><a href=" {{ route('home') }} ">Home</a></li>
      <li class="is-active"><a href="#" aria-current="page">Manage Permissions</a></li>
    </ul>
  </nav>

  <div class="level m-r-20">
    <div class="level-left">
      <div class="level-item">
        <div class="title has-text-primary"><i class="fa fa-tachometer m-b-5 m-r-5"></i>Permissions</div>
      </div>
    </div>
    <div class="level-right">
      <div class="level-item">
      </div>
    </div>
    <a href="{{ route('permissions.create') }}" class="button is-primary"><i class="fa fa-user-plus m-r-5"></i>Create New Permission</a>
  </div>

  <hr>

  <table class="table is-hoverable is-fullwidth is-bordered ">
    <thead>
      <tr>
        <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Date Created</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($permissions as $permission)
        <tr>
          <td>{{$permission->display_name}}</td>
          <td>{{$permission->name}}</td>
          <td>{{$permission->description}}</td>
          <td>{{$permission->created_at->toFormattedDateString()}}</td>
          <td><a href="{{ route('permissions.edit', $permission->id) }}" class="button is-info is-outlined m-r-10 m-l-5">Edit</a>
          <a href="{{ route('permissions.show', $permission->id) }}" class="button is-primary is-outlined">View</a></td>
          
        </tr>
      @endforeach 
  </table> <!-- end of table -->

    {{ $permissions->links('vendor.pagination.bulma') }}

    

  </div>
</main>


@endsection