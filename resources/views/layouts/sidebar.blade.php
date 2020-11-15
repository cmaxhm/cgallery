<aside class="four wide tablet two wide computer column">
  <ul id="categories-menu" class="ui link list">
    @foreach($categories as $category)
    <div class="item">
      <a href="{{ url('/category/'.$category->slug) }}">{{ $category->name }}</a>
    </div>
    @endforeach
    <div class="ui divider"></div>
    <div class="item">
      <a href="{{ route('categories') }}">{{ __('sidebar.see-more') }}</a>
    </div>
  </ul>
</aside>
