<aside class="four wide tablet two wide computer column">
  <div class="ui stackable grid">
    <div class="sixteen wide column">
      <ul id="categories-menu" class="ui link list">
        @foreach($sidebars->leftSidebar->categories as $category)
          <div class="item">
            <a href="{{ url('/category/'.$category->slug) }}">{{ $category->name }}</a> <span class="opaque-text">({{ count($category->posts) }})</span>
          </div>
        @endforeach
        <div class="item">
          + <a href="{{ route('categories') }}">{{ __('content.see-more') }}</a>
        </div>
        <div class="item">
          <i class="tag small icon"></i> <a href="{{ route('tags') }}">{{ __('content.tags') }}</a>
        </div>
      </ul>
    </div>
  </div>
</aside>
