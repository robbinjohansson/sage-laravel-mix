@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        @if(has_post_thumbnail())
            <div>
                <img src="{{ App::glideImage() }}?w=1200&h=675&fit=crop&fm=pjpg&q=60">
            </div>
        @endif
        @include('partials.page-header')
        @include('partials.content-page')
    @endwhile
@endsection
