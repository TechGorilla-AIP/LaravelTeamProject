
<h2>Advanced Internet Programming Assignment 3<br/>      
Handbook V1.1
</h2>

<p>This application is designed based on Laravel 5.4 and bootstrap, for Advanced Internet Programming subject - assignment 3 use.
<p>TechGorilla Team: Fulun He, Qiaozhi Lu and Xiaohan Wang.</p></font>

Please read this document carefully before running the application:
<h4>->Local Installing guide:</h4>
Running this project requires MySQL server and Composer installed.
1. Apply <b>composer update</b> at the root of the project folder on terminal after download.
2. Edit and change database connection configs at .env and config/database.php files. Keep all the database config <b>SAME</b> with yours. <b>example.env</b> -> <b>.env</b>. 
3. Generate your communication key on terminal: <b>php artisan key:generate</b>
4. Execute data migration on terminal: <b>php artisan migrate</b>. (Please be aware that this can be done after you successfully make connection with your local database.)
5. Database migration: <b>php artisan db:seed</b>
6. You are all set now. Use <b>php artisan serve</b> to start running the application.
6. Use: <b>admin@admin.com</b> for email address (username) and <b>111111</b> for password for admin login.

 Make sure you are running MySQL and port 8000 available.
 
 <h3>What is TechGorilla?</h3>
 Users can post messages after login. You can post anything as long as there is the option. Remember to logout for your account safety. 
 All personal information are stored encrypted 
 #End of User handbook#
-----------------------------------------------------------------------------------------------------------------------------------
#TechGorilla developer notes
-----------------------------------------------------------------------------------------------------------------------------------
->Coding convention - v1.0 

-Variables are in camelCase such as getName, getEmailAdd etc.

-Comment on every function.

-Developers must comment any of updates and changes.

-Use <https://> instead of <http://> or <//> when omitting the protocols.

-Put different resources into specific category folders. E.g. pictures must go <pic> folder.
-The class namespace declaration must be on the same line as <?php.

-A class' opening { must be on the same line as the class name.

-Functions and control structures must use Allman style braces.

-Indent with tabs, align with spaces.
	
-All folders and file names must use lower case letters.

-Integrate css and other style sheets into one as much as possible to reduce the costs when update.

-Developers must backup the original copy of the project. And keep it for at least 14 days.

-Never start with build-in nouns.

-End with '_' for external connection vairables such as "Uploaeded_pic_homepage_".

-Comment explaination about doube functions.

-Debug functions should not being used when upload to github. Instead, it should be commented.


-Codes with core functions must stored in specific folders. Only global files can be stored on the root (resources/views/).
*last update: 4/9/2017







-----------------------------------------------------------------------------------------------------------------------------------


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

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
"#laravelhomework" 
