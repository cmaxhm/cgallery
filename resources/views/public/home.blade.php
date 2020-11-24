@extends('layouts.general-layout')

@section('title', env('APP_NAME').' | '.__('content.description'))

@section('content')
  <div id="content" class="twelve wide tablet eleven wide computer column">
    <div class="ui grid">
      <div class="sixteen wide column">
        <div class="ui grid">
          @foreach($posts as $post)
            <div class="post-thumbnail">
              <a href="{{ url('/post/'.$post->slug) }}"><img src="{{ $post->thumbnail }}" alt="{{ $post->title }}"></a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="ui divider"></div>
    {{ $posts->links('vendor.pagination.semantic-ui') }}
  </div>
  @include('layouts.right-sidebar')
@endsection
