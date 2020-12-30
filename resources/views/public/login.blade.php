@extends('layouts.general-layout')

@section('title', env('APP_NAME').' | '.__('content.description'))

@section('content')
  <div id="content" class="twelve wide tablet eleven wide computer column">
    <div class="ui grid">
      <div class="sixteen wide column">
        <div class="ui grid">
          <div class="sixteen wide column">
            <h2>{{ __('header.login') }}</h2>
            <form id="thin-wide-form" class="ui form" action="{{ url('login/authenticate') }}" method="post">
              <div class="field">
                <p>
                  <label for="username">{{ __('content.username') }}</label>
                </p>
                <div class="ui left icon input">
                  <input type="text" placeholder="Username" name="username">
                  <i class="user icon"></i>
                </div>
              </div>
              <div class="field">
                <p>
                  <label for="password">{{ __('content.password') }}</label>
                </p>
                <div class="ui left icon input">
                  <input type="password" placeholder="Password" name="password">
                  <i class="key icon"></i>
                </div>
              </div>
              <div class="field">
                <div class="ui checkbox">
                  <input type="checkbox" tabindex="0" name="remember">
                  <label>{{ __('content.remember-me') }}</label>
                </div>
              </div>
              @csrf
              <button class="ui button" type="submit">{{ __('header.login') }}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.right-sidebar')
@endsection
