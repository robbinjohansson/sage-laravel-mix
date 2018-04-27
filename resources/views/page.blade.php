@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @if(has_post_thumbnail())
            @php
                $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] . '?w=1200&h=675&fit=crop&fm=pjpg&q=60';
            @endphp
            <div>
                <img src="{{ $image }}">
            </div>
        @endif
        @include('partials.page-header')
        @include('partials.content-page')
    @endwhile
@endsection
