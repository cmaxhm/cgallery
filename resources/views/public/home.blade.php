@extends('layouts.general-layout')

@section('title', 'cGallery images and videos gallery')

@section('content')
  <div id="content" class="fourteen wide column">
    <div class="ui stackable grid">
      @foreach($posts as $post)
      <div class="post-thumbnail column">
        <a href="{{ url($post->slug) }}"><img src="{{ $post->thumbnail }}" alt="{{ $post->title }}"></a>
      </div>
      @endforeach
    </div>
  </div>
@endsection
