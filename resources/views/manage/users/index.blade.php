@extends('layouts.manage')

@section('content')
<main class="column m-t-45 m-r-15">
  <nav class="breadcrumb is-small" aria-label="breadcrumbs">
    <ul>
      <li><a href=" {{ route('home') }} ">Home</a></li>
      <li class="is-active"><a href="#" aria-current="page">Manage Users</a></li>
    </ul>
  </nav>

  <div class="level m-r-20">
    <div class="level-left">
      <div class="level-item">
        <div class="title has-text-primary"><i class="fa fa-tachometer m-b-5 m-r-5"></i>Users</div>
      </div>
    </div>
    <div class="level-right">
      <div class="level-item">
      </div>
    </div>
    <a href="{{ route('users.create') }}" class="button is-primary"><i class="fa fa-user-plus m-r-5"></i>Create New User</a>
  </div>

  <hr>

  <table class="table is-hoverable is-fullwidth is-bordered ">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date Created</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at->toFormattedDateString()}}</td>
          <td><a href="{{ route('users.edit', $user->id) }}" class="button is-outlined is-info m-r-5">Edit</a>
            <a href="{{ route('users.show', $user->id) }}" class="button is-primary is-outlined">View</a></td>
          </td>
        </tr>
      @endforeach
  </table> <!-- end of table -->

  {{ $users->links('vendor.pagination.bulma') }}

    
{{--   chart box
  <div class="columns is-multiline">
    <div class="column is-6">
      <div class="panel">
        <p class="panel-heading">
          Chart - Doughnut Style (Chart.js)
        </p>
        <div class="panel-block">
          <canvas id="chartDoughnut" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
    <div class="column is-6">
      <div class="panel">
        <p class="panel-heading">
          Chart - Bar Style (Chart.js)
        </p>
        <div class="panel-block">
          <canvas id="chartBar" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
    
    --}}
  </div>
</main>


@endsection