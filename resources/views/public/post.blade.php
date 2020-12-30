@extends('layouts.general-layout')

@section('title', __('content.categories').' | '.env('APP_NAME'))

@section('content')
  <div id="content" class="twelve wide tablet eleven wide computer column">
    <div class="ui stackable grid">
      <div class="sixteen wide column">
        <div class="ui breadcrumb">
          <a class="section" href="{{ route('home') }}">{{ __('content.home') }}</a>
          <i class="right angle icon divider"></i>
          <div class="section"><a href="{{ url('/category/'.$post->category()->first()->slug) }}">{{ $post->category()->first()->name }}</a></div>
          <i class="right angle icon divider"></i>
          <div class="section">{{ $post->title }}</div>
        </div>
        <div id="post-content">
          {{ $post->content }}
        </div>
        <div class="ui divider"></div>
        <div id="post-meta">
          <h1 id="post-title">{{ $post->title }}</h1>
          <div id="post-author">
            {{ __('content.post-by') }} <a href="{{ url('user/'.$post->user()->first()->username) }}"><span>{{ $post->user()->first()->username }}</span></a>
            - <span class="post-date">{{ date_format($post->created_at, 'd/m/Y') }}</span>
          </div>
        </div>
        <div id="post-actions" class="ui pointing secondary menu">
          <a class="item" href="#"><i class="thumbs up icon"></i> {{ $post->likes }}</a>
          <a class="item" href="#"><i class="thumbs down icon"></i> {{ $post->dislikes }}</a>
          <a class="active item" data-tab="comments"><i class="comment icon"></i> {{ __('content.comments') }}</a>
          <a class="item" data-tab="tags"><i class="tag icon"></i> {{ __('content.tags') }}</a>
          <a class="item" data-tab="report"><i class="flag icon"></i> {{ __('content.report') }}</a>
        </div>
        <div class="ui tab active comments" data-tab="comments">
          <h3 class="section-title">{{ __('content.comments') }}</h3>
          @auth
            <div class="comment">
              <a class="avatar">
                <img src="{{ auth()->user()->avatar }}">
              </a>
              <div class="content">
                <a class="author" href="{{ url('user/'.auth()->user()->username) }}">{{ auth()->user()->username }}</a>
                <form class="ui reply form">
                  <div class="field">
                    <textarea></textarea>
                  </div>
                  <div class="ui green submit labeled icon button">
                    <i class="icon edit"></i> Add Reply
                  </div>
                </form>
              </div>
            </div>
            <div class="ui divider"></div>
          @endauth
          @forelse($post->comments()->orderBy('created_at', 'desc')->get() as $comment)
            <div class="comment">
              <a class="avatar">
                <img src="{{ $comment->user()->first()->avatar }}">
              </a>
              <div class="content">
                <a class="author" href="{{ url('user/'.$comment->user()->first()->username) }}">{{ $comment->user()->first()->username }}</a>
                <div class="metadata">
                  <div class="date">{{ date_format($comment->created_at, 'd/m/Y') }}</div>
                </div>
                <div class="text">
                  {{ $comment->content }}
                </div>
              </div>
            </div>
          @empty
            <p>{{ __('content.no-comments') }}</p>
          @endforelse
        </div>
        <div class="ui tab" data-tab="tags">
          <h3 class="section-title">{{ __('content.tags') }}</h3>
          @forelse($post->tags()->orderBy('name')->get() as $tag)
            <a class="ui grey mini label" href="{{ url('/tag/'.$tag->slug) }}">{{ $tag->name }}</a>
          @empty
            <p>{{ __('content.no-tags') }}</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
  @include('layouts.right-sidebar')
@endsection
