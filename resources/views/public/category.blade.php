@extends('layouts.general-layout')

@section('title', $category.' | '.env('APP_NAME'))

@section('content')
  <div id="content" class="twelve wide tablet eleven wide computer column">
    <div class="ui stackable grid">
      <div class="sixteen wide column">
        <div class="ui breadcrumb">
          <a class="section" href="{{ route('home') }}">{{ __('content.home') }}</a>
          <i class="right angle icon divider"></i>
          <div class="section">{{ $category }}</div>
        </div>
      </div>
      @forelse($posts as $post)
      <div class="post-thumbnail">
        <a href="{{ url($post->slug) }}"><img src="{{ $post->thumbnail }}" alt="{{ $post->title }}"></a>
      </div>
      @empty
      <div>
        {{ __('content.empty-posts') }}
      </div>
      @endforelse
    </div>
    <div class="ui divider"></div>
    {{ $posts->links('vendor.pagination.semantic-ui') }}
  </div>
  @include('layouts.right-sidebar')
@endsection
