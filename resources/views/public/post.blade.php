@extends('layouts.general-layout')

@section('title', __('content.categories').' | '.env('APP_NAME'))

@section('content')
  <div id="content" class="twelve wide tablet fourteen wide computer column">
    <div class="ui stackable grid">
      <div class="sixteen wide column">
        <div class="ui breadcrumb">
          <a class="section" href="{{ route('home') }}">{{ __('content.home') }}</a>
          <i class="right angle icon divider"></i>
          <div class="section"><a href="{{ url('/category/'.$category->slug) }}">{{ $category->name }}</a></div>
          <i class="right angle icon divider"></i>
          <div class="section">{{ $post->title }}</div>
        </div>
      </div>
      
      <div class="sixteen wide column">
        <h1 class="section-title">{{ $post->title }}</h1>
        <div id="post-content">
          {{ $post->content }}
        </div>
        <div class="ui divider"></div>
        <div class="post-meta">
          <div class="ui labeled button" tabindex="0">
            <div class="ui green button">
              <i class="thumbs up icon"></i> {{ __('content.likes') }}
            </div>
            <a class="ui basic green left pointing label">
              {{ $post->likes }}
            </a>
          </div>
          <div class="ui labeled button" tabindex="0">
            <div class="ui red button">
              <i class="thumbs down icon"></i>
            </div>
            <a class="ui basic left pointing red label">
              {{ $post->dislikes }}
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
