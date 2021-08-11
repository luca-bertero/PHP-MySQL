<div align="center">

  <h3 align="center">App for waste sorting</h3>

  <p align="center">
    Project created for PHP Super Guide for Start2Impact
    <br />
    <br />
  </p>
</div>


  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About the project</a>
    </li>
    <li><a href="#getting-started">Getting Started</a></li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>


## About the project

The project consist in create a PHP app that helps you and your family members keep track of the days of the week when recycling takes place.

Instead of pinning the days on a piece of paper or calendar, your app will make your life easier by encapsulating everything in one place.

The requirements for the project was:

-   You can decide to equip your app with a graphical interface, or just make APIs, this is completely up to you.

-   Multiple time periods with different retreats can be specified for each day.
    E.g. Tuesday 10:00-12:00 Wet - Tuesday 19:00-21:00 Plastic

-   The application will then need to provide an endpoint or section to be able to display a weekly and a daily summary of pickup.

## Getting Started

1. Clone the repo

```sh
git clone https://github.com/luca-bertero/PHP-MySQL
```

2. Setup a DB (eg. using XAMPP or w/e).

3. Import the project table from the migration file `db_raccolta_differenziata.sql`.

4. Make sure you have [Composer](https://getcomposer.org/) installed

5. Install all the missing dependencies running

```sh
npm install
```

6. Run

```sh
composer install
```

7. And then

```sh
php artisan serve
```

8. You should now be promped with a URL looking like this, you can run the project by visiting it

```url
localhost:8000
```

## Usage

By visiting `http://127.0.0.1:8000/schedule/today` you can find out what waste will be collected today.

By visiting `http://127.0.0.1:8000/schedule/` you can find out all the reminder divided by type.

By visiting `http://127.0.0.1:8000/schedule/create` you can add a reminder for a waste sorting.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
