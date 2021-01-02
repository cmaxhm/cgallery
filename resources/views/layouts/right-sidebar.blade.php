<div id="right-sidebar" class="sixteen wide tablet three wide computer column">
  <div class="ui stackable grid">
    <div class="sixteen wide column">
      <div class="section-title">
        {{ __('content.most-voted-posts') }}
      </div>
      <div class="most-voted-posts ui ordered list">
        @foreach($sidebars->rightSidebar->mostVotedPosts as $post)
          <div class="item">
            <a class="item" href="{{ url('/post/'.$post->slug) }}">{{ $post->title }}</a>
          </div>
        @endforeach
      </div>
      <div class="section-title">
        {{ __('content.users-ranking') }}
      </div>
      <div class="ui ordered vertical list">
        @foreach($sidebars->rightSidebar->usersRanking as $user)
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
      <div class="ui divider"></div>
      <div class="ui green message">
        {{ __('content.donation-message') }}
      </div>
    </div>
  </div>
</div>
