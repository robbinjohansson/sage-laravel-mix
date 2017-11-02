<!doctype html>
<html @php(language_attributes())>
@include('partials.head')
<body @php(body_class())>
@php(do_action('get_header'))
    <div id="app">
        @include('partials.navbar')
        <div class="container" role="document">
            <section class="section content">
                @yield('content')
                @if (App\display_sidebar())
                    <aside class="sidebar">
                        @include('partials.sidebar')
                    </aside>
                @endif
            </section>
        </div>
    </div>
@php(do_action('get_footer'))
@include('partials.footer')
@php(wp_footer())
</body>
</html>
