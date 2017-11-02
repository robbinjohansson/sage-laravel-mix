@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @if(has_post_thumbnail())
            @php($image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0] . '?w=1344&h=580&fit=crop&fm=pjpg&q=80')
            <div class="columns">
                <div class="column">
                    <img src="{{ $image }}" class="image">
                </div>
            </div>
        @endif
        @include('partials.page-header')
        @include('partials.content-page')
    @endwhile
@endsection
