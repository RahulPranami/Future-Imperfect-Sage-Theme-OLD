<article @php(post_class('h-entry'))>
    <header>
        <div class="title">
            <h2>{!! $title !!}</h2>
            {{-- <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p> --}}
        </div>
        <div class="meta">
            @include('partials.entry-meta')
        </div>
    </header>

    <span class="image featured">
        @if (has_post_thumbnail())
            {!! the_post_thumbnail('full', [
                'alt' => the_title_attribute([
                    'echo' => false,
                ]),
            ]) !!}
        @else
            <img src="@asset('images/pic01.jpg')" alt="" />
        @endif
    </span>

    @php(the_content())

    <footer>
        <ul class="stats">
            {{-- <li><a href="#">General</a></li> --}}
            {{-- <li><a href="#" class="icon solid fa-heart">28</a></li> --}}
            {{-- <li><a href="#" class="icon solid fa-comment">128</a></li> --}}
            @include('partials.stats-meta')
        </ul>
    </footer>

    @if (is_singular())
        {!! the_post_navigation([
            'prev_text' => '<li class="button large previous">' . esc_html__('Previous : ', 'future-imperfect') . '%title</li>',
            'next_text' => '<li class="button large next">' . esc_html__('Next : ', 'future-imperfect') . '%title</li>',
            'class' => 'post-navigation  actions  pagination',
        ]) !!}
    @endif
</article>

@php(comments_template())
