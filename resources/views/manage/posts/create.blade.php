@extends('layouts.manage')
@section('content')

<div class="main">
    <div class="columns m-t-50 m-l-10">
      <div class="column">
          <h2 class="title"><i class="fa fa-edit"> Create New Post</i></h2>
      </div>
    </div>
    <hr>
    <form action="{{ route('posts.store') }} " method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Title</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" placeholder="Post Title" name="title"  id="title" required>
              <span class="icon is-small is-left">
                  <i class="fa fa-edit"></i>
              </span>
            </div>
          </div>
          
          <div class="field">
            <label class="label">Slug</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="text" placeholder="Post Slug" name="slug" id="slug" required>
              <span class="icon is-small is-left">
                <i class="fa  fa-edit"></i>
              </span>
            </div>
          </div>


          <div class="field">
              <label class="label">Image</label>
              <div class="control has-icons-left has-icons-right">
                <input class="file" type="file" name="cover_image" id="cover_image" required>
              </div>
            </div>
          

          <div class="field">
              <label class="label">Content</label>
              <div class="control has-icons-left has-icons-right">
                <textarea class="textarea" name="content" id="content" placeholder="Wtrite Your Post Content Here..." required></textarea>
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