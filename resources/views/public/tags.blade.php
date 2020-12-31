@extends('layouts.general-layout')

@section('title', __('content.tags').' | '.env('APP_NAME'))

@section('content')
  <div id="content" class="twelve wide tablet fourteen wide computer column">
    <div class="ui stackable grid">
      <div class="sixteen wide column">
        <div class="ui breadcrumb">
          <a class="section" href="{{ route('home') }}">{{ __('content.home') }}</a>
          <i class="right angle icon divider"></i>
          <div class="section">{{ __('content.tags') }}</div>
        </div>
      </div>
      @foreach($tags as $tag)
        <div class="five wide tablet three wide computer column no-padding">
          <a href="{{ url('tag/'.$tag->slug) }}">{{ $tag->name }}</a> <span class="opaque-text">({{ count($tag->posts) }})</span>
        </div>
      @endforeach
    </div>
  </div>
@endsection
