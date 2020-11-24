<div id="right-sidebar" class="sixteen wide tablet three wide computer column">
  <div class="ui stackable grid">
    <div class="sixteen wide column">
      <div class="section-title">
        {{ __('content.users-ranking') }}
      </div>
      <div class="ui ordered vertical list">
        @foreach($usersRanking as $user)
          <div class="item">
            <img class="ui avatar image" src="{{ $user->avatar }}">
            <div class="content">
              <div class="header">
                <a href="{{ url('/users/'.$user->username) }}">{{ $user->username }}</a> <span>({{ $user->points }} {{ __('content.points') }})</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
