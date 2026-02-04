# Copilot Instructions for this repository

## Purpose
Provide succinct, actionable guidance so an AI coding agent is immediately productive in this Laravel app.

## Big picture (what this app is)
- Laravel 12 web application (mix of French and English domain terms).
- Typical monolith: controllers in `app/Http/Controllers`, Eloquent models in `app/Models`, views in `resources/views` and frontend assets via Vite in `resources/js` and `resources/css`.
- Admin UI under the `/admin` prefix (protected by `auth` middleware) with custom auth handled in `App\Http\Controllers\AdminController`.
- Uses MySQL in Docker (see `docker-compose.yml`) but default `.env.example` is `sqlite`. Be explicit about DB env when running locally.

## Essential files to inspect (quick pointers)
- Routing: `routes/web.php` (public + `admin` group)
- Admin logic: `app/Http/Controllers/AdminController.php`
- Public pages: `app/Http/Controllers/PageController.php`
- Uploads: `app/Http/Controllers/UploadController.php`
- Models: many use slugs with `Cviebrock\EloquentSluggable` in `app/Models/*` (e.g., `Blog.php`, `Formation.php`, `Projet.php`).
- Notifications: `app/Notifications/NewContactMessage.php`
- SQL seed/dump: `masadigitale.sql` (contains initial content and paths like `uploads/...`).

## Project-specific conventions & patterns
- Slugs are canonical for lookups: e.g. `Formation::where('slug', $slug)->firstOrFail()` (search-and-show pattern used across controllers). Prefer using slug-based lookups for public routes.
- Two overlapping concepts: `Project.php` (English) and `Projet.php` (French). They are not interchangeable—check column names (e.g., `titre` vs `title`) and update both carefully if you change domain models.
- Admin forms frequently use `request->only([...])` and inline validation rules in controller methods, rather than dedicated `FormRequest` classes.
- File uploads referenced in DB (and seeded SQL) generally live under `public/uploads` and the repository expects `php artisan storage:link` if `storage` is used.
- Logging tailing / dev helper: `laravel/pail` is used in the `composer` `dev` script; dev convenience script runs four processes concurrently (server, queue listener, pail, vite).

## Common developer workflows & commands
- Quick start (local, without Docker):
  - cp `.env.example` `.env`
  - `composer install` && `npm install`
  - `php artisan key:generate`
  - `php artisan storage:link`
  - Configure DB credentials in `.env` (`DB_CONNECTION=mysql` + host/port) or use the provided Docker stack
  - `php artisan migrate` (or import `masadigitale.sql` into MySQL for a seeded state)
- Using Docker: `docker-compose up -d` then ensure `DB_HOST=db` per `docker-compose.yml` and run `composer install` inside container or on host as preferred.
- Dev runner (local convenience): `composer dev` will run: `php artisan serve`, `php artisan queue:listen --tries=1`, `php artisan pail --timeout=0`, `npm run dev` concurrently.
- Tests: run PHPUnit with `vendor/bin/phpunit` (or `./vendor/bin/phpunit`). The project has example tests in `tests/` and `phpunit.xml` config.
- Style / linting: run `vendor/bin/pint` (Laravel Pint is available in `require-dev`).

## Database & seeds
- The repo includes `masadigitale.sql` (full dump). If you need the seeded content, import it into MySQL (`mysql -u root -p masadigitale < masadigitale.sql`).
- `config/database.php` default is `sqlite` in `.env.example`. When running with Docker, switch to `mysql` in `.env`.
- Migrations in `database/migrations` reflect schema — prefer migrations for schema changes; the dump may include locale-specific seeded content.

## Assets & front-end
- Vite is used (`vite.config.js`). Run `npm run dev` for HMR or `npm run build` for production build.
- Blade views live under `resources/views`. The layout `resources/views/layouts/master.blade.php` is the base template.

## Authentication & Admin
- Admin flow is implemented in `AdminController` (register/login/logout handled here). There is not a standard `Auth::routes()` scaffolding; follow `AdminController` patterns when adding auth-related features.
- Admin routes are grouped under `Route::group(['prefix' => 'admin', 'middleware' => ['auth'] ], function () { ... });` in `routes/web.php`.

## Notifications & jobs
- Notifications are in `app/Notifications` (e.g., `NewContactMessage`); email config defaults to `log` in `.env.example` (so mails are written to logs in dev).
- Queue connection defaults to `database` for some environments; tests use `sync` per `phpunit.xml`.

## Testing tips & gotchas for agents
- Tests are minimal; when adding tests that require DB, either use SQLite in memory or create `.env.testing` with a test DB and run `php artisan migrate --env=testing` or set DB env in the test config.
- Be careful with locale-specific fields when asserting: French columns (`titre`, etc.) appear in some tables.

## Good first tasks for AI agents
- Add small feature tests for critical routes in `tests/Feature` that assert slug-based lookups (example: `GET /formations/{slug}` returns 200 and loads expected view).
- Add a `FormRequest` for a complex Admin form validation that currently lives inline in `AdminController`.
- Normalize duplicated domain logic between `Projet` and `Project` models (document behavior and add comments/tests before changing both).

## Examples (search & modify patterns)
- Slug lookup: `Formation::where('slug', $slug)->firstOrFail()` — used in `app/Http/Controllers/FormationController.php` and `InscriptionController.php`.
- Admin create/update example: see `app/Http/Controllers/AdminController.php` where `request->only(['title','content','slug',...])` is used and slug uniqueness is validated inline.

---

If anything above is unclear or you want a short rewrite focused on a specific area (DB setup, testing, or admin patterns), tell me which area to expand and I will iterate. 💡
