<header>
  <div class="ui inverted">
    <div class="ui inverted secondary menu">
      <a class="item logo" href="{{ route('home') }}"><i class="heart icon"></i> {{ env('APP_NAME') }}</a>
      <div class="right item">
        @guest
          <a class="item" href="{{ url('sign-up') }}"><i class="pencil alternate icon"></i> {{ __('header.sign-up') }}</a>
          <a class="item" href="{{ url('login') }}"><i class="key icon"></i> {{ __('header.login') }}</a>
        @endguest
        @auth
          <a class="item" href="{{ url('my-profile') }}"><i class="user icon"></i> {{ auth()->user()->username }}</a>
          <a class="item" href="{{ url('logout') }}"><i class="sign in alternate icon"></i> {{ __('header.logout') }}</a>
        @endauth
        <form action="" method="get">
          <div class="ui icon input">
            <input type="text" placeholder="{{ __('header.search') }}">
            <i class="search icon"></i>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
