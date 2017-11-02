<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ home_url('/') }}">
                {{ get_bloginfo('name', 'display') }}
            </a>

            <button class="button navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navbar-menu">
            @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-end']) !!}
            @endif
        </div>
    </div>
</nav>
