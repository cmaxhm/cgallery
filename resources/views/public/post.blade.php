@extends('layouts.general-layout')

@section('title', __('content.categories').' | '.env('APP_NAME'))

@section('content')
  <div id="content" class="twelve wide tablet eleven wide computer column">
    <div class="ui stackable grid">
      <div class="sixteen wide column">
        <div class="ui breadcrumb">
          <a class="section" href="{{ route('home') }}">{{ __('content.home') }}</a>
          <i class="right angle icon divider"></i>
          <div class="section"><a href="{{ url('/category/'.$category->slug) }}">{{ $category->name }}</a></div>
          <i class="right angle icon divider"></i>
          <div class="section">{{ $post->title }}</div>
        </div>
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
          <div class="post-author mt">
            {{ __('content.post-by') }}:
            <img class="ui avatar image" src="{{ $post->user()->first()->avatar }}">
            <a href="{{ url('user/'.$post->user()->first()->username) }}"><span>{{ $post->user()->first()->username }}</span></a>
          </div>
          <h3 class="section-title">{{ __('content.tags') }}</h3>
          <div class="ui tag labels">
            @forelse($post->tags()->orderBy('name')->get() as $tag)
              <a class="ui grey label" href="{{ url('/tag/'.$tag->slug) }}">{{ $tag->name }}</a>
            @empty
              <p>{{ __('content.no-tags') }}</p>
            @endforelse
          </div>
          <h3 class="section-title">{{ __('content.comments') }}</h3>
          <div class="ui comments">
            <div class="comment">
              <a class="avatar">
                <img src="/images/avatar/small/steve.jpg">
              </a>
              <div class="content">
                <a class="author">Steve Jobes</a>
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
            @forelse($post->comments()->orderBy('created_at', 'desc')->get() as $comment)
            <div class="comment">
              <a class="avatar">
                <img src="{{ $comment->user()->first()->avatar }}">
              </a>
              <div class="content">
                <a class="author" href="{{ url('user/'.$post->user()->first()->username) }}">{{ $comment->user()->first()->username }}</a>
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
        </div>
      </div>
    </div>
  </div>
  @include('layouts.right-sidebar')
@endsection
