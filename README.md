<div align="center">
  <a href="https://assegaiphp.com/" target="blank"><img src="https://assegaiphp.com/images/logos/logo-cropped.png" width="200" alt="Assegai Logo"></a>
</div>

# AssegaiPHP Starter

The official starter application for AssegaiPHP. It tracks the same project shape and defaults produced by the current `assegai new` command.

The starter declares Core `^0.10.0` and intentionally does not ship a `composer.lock`. Creating or installing a project therefore resolves the newest stable compatible 0.10.x framework release and writes a lock file owned by that application.

It gives you a working Assegai app with:
- a root module in `src/AppModule.php`
- a controller and service in `src/`
- project settings in `assegai.json`
- shared app config in `config/default.php`
- authentication and session policy in `config/auth.php`
- sensitive overrides in `config/secure.php`

## Requirements

- PHP 8.4+
- Composer 2.x

## Getting Started

Create a new project from this starter:

```bash
composer create-project assegaiphp/starter my-app
cd my-app
```

If you cloned the repository instead, install its dependencies:

```bash
composer install
```

Installation creates local `.env` and `config/secure.php` files from their tracked examples without overwriting existing local configuration.

Then start the app:

```bash
assegai serve
```

You can also use the project Composer script if you prefer:

```bash
composer run start
```

## Useful Commands

Run the test suite:

```bash
assegai test
```

Generate a new feature:

```bash
assegai generate resource movies
```

Configure a database:

```bash
assegai database:configure cinema_db
```

Add ORM support when you need the data layer:

```bash
assegai add orm
```

## Runtime Options

The default local runtime uses PHP's built-in server.

If you want to try the long-lived runtime path, you can use OpenSwoole:

```bash
assegai serve --runtime=openswoole
```

The OpenSwoole path is currently experimental. Treat it as an opt-in runtime for careful testing, not a required switch for every app.

## Project Layout

- `src/AppModule.php`: the root module for your app
- `src/AppController.php`: a starter controller
- `src/AppService.php`: a starter service
- `config/default.php`: shared app configuration
- `config/auth.php`: authentication redirect policy and framework-owned session settings
- `config/secure.php.example`: tracked template for local secrets and database credentials
- `config/secure.php`: ignored local overrides created during setup; it takes precedence over the lower-priority config files when present
- `assegai.json`: Assegai project settings, scripts, runtime config, and CLI behavior
- `index.php`: front controller and safe public-asset router for the PHP runtime
- `bootstrap.php`: runtime-neutral application bootstrap

## Learn More

- Guide: [https://assegaiphp.com/guide](https://assegaiphp.com/guide)
- Support: [https://assegaiphp.com/support](https://assegaiphp.com/support)
- Website: [https://assegaiphp.com](https://assegaiphp.com)

## License

This project is released under the MIT License.
