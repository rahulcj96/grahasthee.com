# Copilot Instructions for grahasthee.com

## Project Overview
This is a Laravel-based web application. The codebase follows standard Laravel conventions, but has customizations and structure worth noting for AI agents.

## Architecture & Key Components
- **MVC Structure**: Core logic is split into `app/Http/Controllers`, `app/Models`, and Blade views in `resources/views`.
- **Routing**: Main routes are defined in `routes/web.php` (web) and `routes/api.php` (API). Console and channel routes are in their respective files.
- **Configuration**: All config files are in `config/`. Environment-specific settings are managed via `.env` (not in repo).
- **Assets**: Frontend assets (CSS, JS, images) are in `public/assets/` and `resources/{css,js}`. Asset compilation uses `webpack.mix.js`.
- **Database**: Migrations and seeders are in `database/migrations` and `database/seeders`. Factories are in `database/factories`.
- **Testing**: Feature and unit tests are in `tests/Feature` and `tests/Unit`. Test bootstrap files are in `tests/`.

## Developer Workflows
- **Build Assets**: Use `npm run dev` for development and `npm run prod` for production builds. Webpack config is in `webpack.mix.js`.
- **Run Server**: Use `php artisan serve` to start the local development server.
- **Run Tests**: Use `php artisan test` or `vendor/bin/phpunit` for running tests. PHPUnit config is in `phpunit.xml`.
- **Database Migrations**: Use `php artisan migrate` to apply migrations. Seed with `php artisan db:seed`.

## Project-Specific Patterns
- **Controllers**: All HTTP controllers are in `app/Http/Controllers`. Console commands are in `app/Console`.
- **Middleware**: Custom middleware lives in `app/Http/Middleware`.
- **Service Providers**: Custom providers are in `app/Providers`.
- **Blade Layouts**: Shared layouts and partials are in `resources/views/layouts` and `resources/views/partials`.
- **User Model**: The main user model is `app/Models/User.php`.

## Integration Points
- **External Packages**: Managed via Composer (`composer.json`). JS dependencies via npm (`package.json`).
- **Broadcasting, Queues, Mail**: Configured in `config/` and may use Laravel's built-in or external services.
- **API**: API endpoints are defined in `routes/api.php` and typically use controllers in `app/Http/Controllers`.

## Conventions & Tips
- Follow PSR-4 autoloading for PHP classes.
- Use environment variables for secrets and config.
- Blade templates use `.blade.php` extension.
- Prefer Eloquent ORM for database access.
- Use Laravel's artisan commands for most operations.

## Key Files & Directories
- `app/` - Application logic
- `routes/` - Route definitions
- `resources/views/` - Blade templates
- `config/` - Configuration
- `database/` - Migrations, seeders, factories
- `public/` - Public assets and entry point
- `tests/` - Automated tests

---
For more details, see the [Laravel documentation](https://laravel.com/docs). If any section is unclear or missing, please provide feedback to improve these instructions.
