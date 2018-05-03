@extends('layouts.manage')
@section('content')
<main class="column m-t-40 m-r-15">
  <nav class="breadcrumb is-small" aria-label="breadcrumbs">
    <ul>
      <li><a href=" {{ route('home') }} ">Home</a></li>
      <li class="is-active"><a href="#" aria-current="page">Manage Posts</a></li>
    </ul>
  </nav>

  <div class="level m-r-20">
    <div class="level-left">
      <div class="level-item">
        <div class="title has-text-primary"><i class="fa fa-tachometer m-b-5 m-r-5"></i>Blog Posts</div>
      </div>
    </div>
    <div class="level-right">
      <div class="level-item">
      </div>
    </div>
    <a href="{{ route('posts.create') }}" class="button is-primary"><i class="fa fa-user-plus m-r-5"></i>Create New Post</a>
  </div>

  <hr>

  
  <table class="table is-hoverable is-fullwidth is-bordered ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Content</th>
        <th>Date Created</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->slug}}</td>
        <td>{!! substr($post->content,0,30) !!}{{ strlen($post->content) >=30 ? "...": "" }}</td>
          <td>{{$post->created_at->toFormattedDateString()}}</td>
          <td><a href="{{ route('posts.edit', $post->id) }}" class="button is-outlined">Edit</a><a href="{{ route('posts.show', $post->id) }}" class="m-l-10 button is-outlined">View</a></td>
        </tr>
      @endforeach
  </table> <!-- end of table -->

  {{ $posts->links('vendor.pagination.bulma') }}

  </div>
</main>
@endsection