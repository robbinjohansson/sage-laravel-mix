@extends('layouts.app')

@section('content')
@include('partials.page-header')
    @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
    @endwhile
{!! get_the_posts_navigation() !!}
@endsection
