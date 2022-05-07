<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# youbloom_assignment

<h3><ul>YouBloom Artist API</ul></h3>

<strong>Feature:</strong>

1.Create <br>
2.View By ID<br>
3.Delete Artist<br>
4.Like Artist<br>
5.Dislike Artist<br>
6.View All likes Discending order  <br><br>   


<strong>Software Requirement:</strong>
1. PHP 8.1.5 latest one<br>
2. Composer
3. xampp/wampp server


<strong>Steps to Getting Started With Project:</strong>

Step 1 : Download the ZIP file and extract into root folder <br>
Step 2 : Create an database by name 'youbloom'<br>
Step 3 : Change database credentials according to your's in .env file <br>
Step 4 : Open Cmd or Terminal "cd to project path"<br>
Step 5 : Change or create .env file <br>
Step 6 : composer install <br>
Step 7 : php artisan migrate --seed <br>
Step 8 : php artisan serve<br><br>   
Step 9 : Open POSTMAN and user all services

Note : .env file's database part should look like this

DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=youbloom<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

<strong>For Unit Testing:</strong>

<bulet> .\vendor\bin\phpunit.bat<br><br>   
	
	<strong>Methods:</strong>
	
	POST 		: api/artist  //Create Artist
	GET  		: api/artist  //Get All Artist Details
	GET  		: api/artist/{id}  //Get Single Artist Details
	DELETE		: api/artist/{id}  //Delete Artist
	PUT 		: api/likeartist/{id} //Like Artist
	PUT 		: api/dislikeartist/{id} //DisLike Artist
	

<strong>Pages you should see:</strong><br>
	Route Page	: Project/routes/api.php <br>
	Controller	: Project/app/Http/Controllers <br>
	Unit Testing	: Project/tests/feature/ExampleTest<br>
	![image](https://user-images.githubusercontent.com/12134789/167262758-f658bc8f-4675-4b87-8f03-35678fa9b238.png)

    
    For Little More Brief Details Kindly Refer : Request_Response_and_Doc.zip 
	
