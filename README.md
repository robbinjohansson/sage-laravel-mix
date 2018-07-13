# sage-laravel-mix

> Sage is a WordPress starter theme with a modern development workflow.

This is an extension of the Sage WordPress starter theme, all credit goes to the awesome work made by the guys over at [roots.](https://roots.io/) This repo was originally cloned from [Sage official repo](https://github.com/roots/sage) at **2017-11-01** and will continuously be updated according to changes made at the original theme.

## Different from Sage 9:

* Laravel Mix as a wrapper for webpack
* TailwindCSS
* Vue.js
* Prepared with [WP Glide](https://github.com/wpup/glide) ([Glide](https://github.com/thephpleague/glide))

### Installation

This readme assumes you are familiar with [Sage](https://github.com/roots/sage) and [Bedrock](https://github.com/roots/bedrock) structure for Wordpress. If not, head over to [https://roots.io/](https://roots.io/) to learn more.

```shell
# @ bedrock/web/app/themes
$ git clone https://github.com/robbinfellow/sage-laravel-mix.git
$ cd sage-laravel-mix
$ composer install
$ yarn
$ yarn dev / production / watch
```

### Laravel mix

Laravel Mix is preconfigured when cloning this theme. However it might be a good idea to review the full documentation [on GitHub.](https://github.com/JeffreyWay/laravel-mix/tree/master/docs#readme)

```shell
# Compile assets without minification
$ yarn dev

# Watch working assets
$ yarn watch

# Minify and compile assets for production
$ yarn production
```

### WP Glide

Run the following from your bedrock root:

``` shell
$ composer require frozzare/wp-glide
```

Use Glide to generate images:

``` php
@if(has_post_thumbnail())
    <img src="{{ App::glideImage() }}?w=1200&h=675&fit=crop&fm=pjpg&q=60">
@endif
```

> **Protip:** Don't forget to activate the plugin after you install it.

#### Glide documentation
- [WP Glide documentation](https://github.com/wpup/glide#documentation)
- [Glide documentation](http://glide.thephpleague.com/)

#### Disable WP Glide

Don't want to use WP Glide? No problem, skip the Glide installation step from above and remove the following lines from `/app/filters.php`:

``` php
add_filter('glide/options', function ($options) {
    $options['cache'] = WP_CONTENT_DIR . '/uploads/cache/glide';
    $options['max_image_size'] = 2000*2000;
    return $options;
});
```

## Documentation

* [Sage documentation](https://roots.io/sage/docs/)
* [Controller documentation](https://github.com/soberwp/controller#usage)

## Credits

* [Roots](https://roots.io/)
* [Robbin Johansson](https://github.com/robbinfellow)

## License

sage-laravel-mix is an open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
