<time class="published" datetime="{{ get_post_time('c', true) }}">
  {{ get_the_date() }}
</time>

<a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="author">
  <span class="name">{{ get_the_author() }}</span>
  <img src="@asset('images/avatar.jpg')" alt="" />
</a>
