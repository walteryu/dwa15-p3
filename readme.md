# HES, DWA-15 P3 - Random Text & User Generator

## Live URL
<http://p3.walteryu.pw>

## Description
Random text/user generator (Developer's Best Friend Application) that 
generates random text (lorem ipsum) and random users based on user input.

Random text is generated based on user input for number of paragraphs
between 0-9; user input is validated and error message returned if
conditions are not met.

Random users is generated based on user input for number of paragraphs
between 0-9; user input is validated and error message returned if
conditions are not met. 

## Video Demo
YouTube video is submitting using personal project account (StormSavvy),
which contains my other coding demos:

[Demo on YouTube](https://youtu.be/YBKZV8PsGMU)

## Details for Teaching Team

Lecture videos were referenced for general approach and planning to starting the
homework set and class Foobooks examples used as starting point for problem set.

Specifically, view template inheritance is referenced place from Foobooks example.
Package installation was completed with help during TA sections.

No login is required since there are no user accounts; POST/create forms
are protected against CSRF attacks with the csrf_field() method.

Commits are made on an atomic level using "git add -p" command for clarity during
development, hence they are small in nature.

## Additional Features

Form validation is handled both server-side (controller validation methods) and
client-side (HTML5 validation methods); jQuery was considered for client-side
validation but abandoned due to time constraints.

PHPUnit has been implemented for test cases located in the /tests directory;
test suite can be run using either the "phpunit" or "/vendor/bin/phpunit" command.

## References & Outside Code
* [Bootstrap](http://getbootstrap.com) - Called as CDN Asset
* [Class Notes](https://github.com/walteryu/dwa15-spring2016-notes) - Reference for Controllers/Views
* [Subtle Patterns](http://subtlepatterns.com) - Background Image, Set Inside Stylesheet
* [Bootstrap Documentation](https://v5-alpha.getbootstrap.com/components/forms) - Referenced for Form Elements
* [Laravel Docs on Testing](https://laravel.com/docs/5.1/testing) - Referenced for PHPUnit testing in Laravel
* [Laravel Docs on Validation](https://laravel.com/docs/5.1/validation) - Referenced for HTML Form Validation/Error Handling
