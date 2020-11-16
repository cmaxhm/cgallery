@extends('layouts.general-layout')

@section('title', env('APP_NAME').' | '.__('content.description'))

@section('content')
  <div id="content" class="twelve wide tablet fourteen wide computer column">
    <div class="ui stackable grid">
      @foreach($posts as $post)
        <div class="post-thumbnail">
          <a href="{{ url($post->slug) }}"><img src="{{ $post->thumbnail }}" alt="{{ $post->title }}"></a>
        </div>
      @endforeach
    </div>
    <div class="ui divider"></div>
    {{ $posts->links('vendor.pagination.semantic-ui') }}
  </div>
@endsection
