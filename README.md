<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>A laravel package that converts english date to nepali date.</h1>
<p>Instructions:</p>
<p> 1) Run composer require safal/engtonepdateconverter</p>
<p> 2) Or add "safal/engtonepdateconverter": "^1.0" in composer.json and run composer update</p>
<p>For Laravel 5.4 and lower, add the following line to your config/app.php:<br>

safal\engtonepdateconverter\NepaliDateServiceProvider::class,

</p>
<p> 3) For Laravel 5.5 and greater, the package will auto register the provider for you. </p>

<h3>Usage</h3>
To convert english date to nepali date,<br><br>
use the NepaliDate Facade as:<br><br>
NepaliDate::convertToNepaliDate(2019,01,13);<br><br>
Output : २०७५/९/२९


</body>
</html>
