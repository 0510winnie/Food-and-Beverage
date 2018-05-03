@extends('layouts.manage')

@section('content')
<div class="flex-container">
  <div class="columns m-t-40">
    <div class="column">
        <h2 class="title"><i class="fa fa-edit"> Edit Post</i></h2>
    </div>
  </div>
  <hr>
  {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH', 'files' => true]) !!} 
    {{ method_field('PUT') }}
    {{ csrf_field() }}
      <div class="main">
          <label class="label">Title</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="text" name="title"  id="title" value="{{$post->title }}">
          </div>
        </div>

        <div class="field">
            <label class="label m-t-10">Image</label>
            <div class="control has-icons-left has-icons-right">
              <input class="file" type="file" name="cover_image" id="cover_image" required>
            </div>
        </div>
        
        <div class="field">
          <label class="label m-t-10">Content</label>
          <div class="control has-icons-left has-icons-right">
            {{-- <textarea class="textarea" name="content" id="content">{{ old('content') }}</textarea> --}}
            {{ Form::textarea('content', null, ['class' => 'textarea']) }}
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
        {!!Form::close()!!}

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
