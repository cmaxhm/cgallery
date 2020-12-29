<aside class="four wide tablet two wide computer column">
  <div class="ui stackable grid">
    <div class="sixteen wide column">
      <ul id="categories-menu" class="ui link list">
        @foreach($categoriesSidebar as $category)
        <div class="item">
          <a href="{{ url('/category/'.$category->slug) }}">{{ $category->name }}</a>
        </div>
        @endforeach
        <div class="item">
          + <a href="{{ route('categories') }}">{{ __('content.see-more') }}</a>
        </div>
      </ul>
    </div>
  </div>
</aside>
