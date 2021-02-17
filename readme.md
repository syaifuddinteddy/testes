# Test Aplikasi-PT Kano Teknologi Utama

## E-mail :
- [x] create grid page, use source companies.csv, and use paging regarding the data being too big.
- [ ] Filter by: Company Name, Client Tier, Segment Name.
- [x] Please keep in mind, data are divided into 2 years for 14 and 15.
- [x] When click company and go into company detail, we would like to see a graph to view number comparison between Y14 and Y15 for numerical data points and we can update those number as well. Please create similar with picture from drobox.
- [x] Kindly Create, update function when we update value of graph and when push re-submit button will update data and graph also.

## Notes :
- [x] create grid page, use source companies.csv
- [ ] Filter by: Company Name, Client Tier, Segment Name.
- [x] When click company and go into company detail and graphs.
- [x] when we update data, value of graph will updated.
- [x] when we update data, value will updated.

## Requirements
I'm using :
- PHP 7.3.24
- Composer version 2.0.8
- laravel/framework 5.5.*

## Contributing

Thank you for saving me:
- league/csv:^8.0
- khill/lavacharts:^3.1.*
- Many, many thanks to Grand Master Google :D

## How to Run

- copy .env.example to .env
- run the following command in your terminal:

        composer install
        php artisan key:generate
        php artisan storage:link
        
- you can access the application in your web browser at:

        http://localhost:8000

##
##

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
