@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
