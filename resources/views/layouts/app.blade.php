<!doctype html>
<html class="bg-white antialiased" @php language_attributes() @endphp>
@include('partials.head')
<body @php body_class() @endphp>
@php do_action('get_header') @endphp
    <div id="app" class="container" role="document">
        @include('partials.navbar')
        @yield('content')
        @if (App\display_sidebar())
            <aside class="sidebar">
                @include('partials.sidebar')
            </aside>
        @endif
    </div>
@php do_action('get_footer') @endphp
@include('partials.footer')
@php wp_footer() @endphp
</body>
</html>
