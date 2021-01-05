@extends('layouts.general-layout')

@section('title', $category->name.' | '.env('APP_NAME'))

@section('content')
  <div id="content" class="twelve wide tablet eleven wide computer column">
    <div class="ui stackable grid">
      <div class="sixteen wide column">
        <div class="ui breadcrumb">
          <a class="section" href="{{ route('home') }}">{{ __('content.home') }}</a>
          <i class="right angle icon divider"></i>
          <a class="section" href="{{ route('categories') }}">{{ __('content.categories') }}</a>
          <i class="right angle icon divider"></i>
          <div class="section">{{ $category->name }}</div>
        </div>
      </div>
      <div class="ui grid">
        @forelse($posts as $post)
          <div class="post-thumbnail">
            <a href="{{ url('/post/'.$post->slug) }}"><img src="{{ $post->thumbnail }}" alt="{{ $post->title }}"></a>
          </div>
        @empty
          <div>
            {{ __('content.empty-posts') }}
          </div>
        @endforelse
      </div>
    </div>
    <div class="ui divider"></div>
    {{ $posts->links('vendor.pagination.semantic-ui') }}
  </div>
  @include('layouts.right-sidebar')
@endsection
