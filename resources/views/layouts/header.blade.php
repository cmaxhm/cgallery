<header>
  <div class="ui inverted">
    <div class="ui inverted secondary menu">
      <a class="item logo" href="{{ route('home') }}"><i class="heart icon"></i> {{ env('APP_NAME') }}</a>
      <div class="right item">
        <a class="item" href="{{! app('url') }}sign-up"><i class="pencil alternate icon"></i> {{ __('header.sign-up') }}</a>
        <a class="item" href="{{! app('url') }}login"><i class="key icon"></i> {{ __('header.login') }}</a>
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
