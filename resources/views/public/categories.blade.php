@extends('layouts.general-layout')

@section('title', __('content.categories').' | '.env('APP_NAME'))

@section('content')
  <div id="content" class="twelve wide tablet fourteen wide computer column">
    <div class="ui stackable grid">
      <div class="sixteen wide column">
        <div class="ui breadcrumb">
          <a class="section" href="{{ route('home') }}">{{ __('content.home') }}</a>
          <i class="right angle icon divider"></i>
          <div class="section">{{ __('content.categories') }}</div>
        </div>
      </div>
      @foreach($categories as $category)
        <div class="five wide tablet three wide computer column no-padding">
          <a href="{{ url('category/'.$category->slug) }}">{{ $category->name }}</a>
        </div>
      @endforeach
    </div>
  </div>
@endsection
