<p>LARAVEL V5.4 Developer note - Project TechGorilla Alpha v0.2</p>
<p>TechGorilla Team: Fulun He, Qiaozhi Lu and Xiaohan Wang.</p></font>

#TechGorilla developer notes#
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
->Installing guidance for local enviornment 

Running this project requires MySQL server and Composer installed.
1. Apply <b>composer update</b> at the root of the project folder on terminal after download.
2. Edit and change database connection configs at .env and config/database.php files. Keep all the database config same with yours. <b>example.env.example</b> -> <b>.env</b>
3. Generate your communication key on terminal: <b>php artisan key:generate</b>
4. Execute data migration on terminal: <b>php artisan migrate</b>. (Please be aware that this can be done after you successfully make connection with your local database.)
5. Test database migration: <b>php artisan db:seed</b>
6. Use admin@admin.com for email address and <b>111111</b> for password for admin login.

#TechGorilla developer notes#
