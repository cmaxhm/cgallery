<aside class="two wide column">
  <ul id="categories-menu" class="ui link list">
    @foreach($categories as $category)
    <div class="item">
      <a href="{{ url('/category/'.$category->slug) }}">{{ $category->name }}</a>
    </div>
    @endforeach
  </ul>
</aside>
