## What's included

- [Attribute-based routing](https://github.com/spatie/laravel-route-attributes) with no `routes` folder.
- [Jetstream](https://jetstream.laravel.com/introduction.html) with [Vue.js](https://vuejs.org) and [teams support](https://jetstream.laravel.com/features/teams.html).
- [Larastan](https://github.com/larastan/larastan) and [Rector](https://github.com/rectorphp/rector) for type coverage and checks.
- [Pint](https://laravel.com/docs/12.x/pint) and [Rector](https://github.com/rectorphp/rector) as formatters.
- [Telescope](https://laravel.com/docs/12.x/telescope) with [toolbar](https://github.com/fruitcake/laravel-telescope-toolbar) for local debug assistance.
- Custom `artisan make:` templates (stubs) based on [Spatie stubs](https://github.com/spatie/laravel-stubs).

## Prerequisites

If you haven't, install [Foreman](https://github.com/ddollar/foreman) - a `Procfile`-based process manager:

```shell
gem install foreman
```

Then start all development services:

```shell
composer dev
```