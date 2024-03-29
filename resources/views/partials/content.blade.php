<article @php(post_class())>
    <header>
        <div class="title">
            <h2 class="entry-title">
                <a href="{{ get_permalink() }}">
                    {!! $title !!}
                </a>
            </h2>
            {{-- <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p> --}}
        </div>
        <div class="meta">
            @include('partials.entry-meta')
        </div>
    </header>
    <a href="single.html" class="image featured"><img src="@asset('images/pic01.jpg')" alt="" /></a>

    @php(the_excerpt())

    <footer>
        <ul class="actions">
            <li>
                <a href="{{ get_permalink() }}" class="button large">Continue Reading</a>
            </li>
        </ul>
        <ul class="stats">
            <li><a href="#">General</a></li>
            <li><a href="#" class="icon solid fa-heart">28</a></li>
            <li><a href="#" class="icon solid fa-comment">128</a></li>
        </ul>
    </footer>
</article>
